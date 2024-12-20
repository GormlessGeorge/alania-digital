<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\BuildingType;
use App\Models\Post;
use App\Models\Region;
use App\Models\Street;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Services\PostService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Moderator/Posts/Index',
            ['posts' => Post::with(['region', 'town', 'street', 'building_type'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'regions' => Region::all(),
            'towns' => Town::all(),
            'streets' => Street::all(),
            'buildingTypes' => BuildingType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $postService = new PostService();
        $postService->store($request->validated());

        return redirect()->back()->with('success', 'Спасибо, пост отправлен на модерацию!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load(['region', 'town', 'street', 'building_type']);
        return Inertia::render(
            'Moderator/Posts/Show',
            ['post' => $post]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return Inertia::render('Moderator/Posts/Edit',
            ['post' => new PostResource($post),
                'regions' => Region::all(),
                'towns' => Town::all(),
                'streets' => Street::all(),
                'buildingTypes' => BuildingType::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $postService = new PostService();
        $validated = $request->validated();
        $postService->update($post, $validated);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }


    public function publish($id)
    {
        $post = Post::findOrFail($id);
        $post->status = 'Опубликовано';
        $post->save();
    }

    public function setToModeration($id)
    {
        $post = Post::findOrFail($id);
        $post->status = 'На модерации';
        $post->save();
    }
}
