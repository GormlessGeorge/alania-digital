<template>
    <ModeratorDashboardLayout>
        <div class="wrapper">
            <div class="post">
                <p class="post__item">Номер публикации: <span>{{ post.id }}</span></p>
                <p class="post__item">Регион: <span>{{ post.region.name }}</span></p>
                <p class="post__item">Нас. пункт: <span>{{ post.town.name }}</span></p>
                <p class="post__item">Улица: <span>{{ post.street.name }}</span></p>
                <p class="post__item">Тип здания: <span>{{ post.building_type.name }}</span></p>
                <p class="post__item">Номер дома: <span>{{ post.house_number }}</span></p>
                <p class="post__item">Корпус: <span>{{ post.building == null? 'Не указан' : post.building }}</span></p>
                <p class="post__item">Долгота: <span>{{ post.longitude }}</span></p>
                <p class="post__item">Широта: <span>{{ post.latitude }}</span></p>
                <p class="post__item">Статус: <span>{{ post.status }}</span></p>
                <div class="post__buttons">
                    <TheButton v-on:click="publish(post.id)">Опубликовать</TheButton>
                    <div class="post__item-links">
                        <Link :href="route('posts.edit', post.id)"><img src="/icons/edit.svg"></Link>
                        <Link :href="route('posts.destroy', post)" method="DELETE" as="button"><img src="/icons/bin.svg"></Link>
                    </div>
<!--                    <Link :href="route('posts.show', post.id)">Изменить</Link>-->
                </div>
            </div>

            <div id="post-map"></div>
        </div>


    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import {Link, router} from "@inertiajs/vue3";
import {onMounted} from "vue";
import TheButton from "@/Components/Custom/TheButton.vue";

const props = defineProps({
    post: Object
});

// 2gis
onMounted(() => {
    const map = new mapgl.Map('post-map', {
        key: '3ad80c1b-cd17-4b37-a39c-02623534a763',
        center: [44.674004534474555, 43.02463979351204],
        zoom: 17,
    });


    let marker = new mapgl.Marker(map, {
        coordinates: [props.post.longitude, props.post.latitude]
    });

});

function publish(postId) {
    router.visit(`/posts/${postId}/publish`,
        {
            method: "patch",
            preserveScroll: true
        });
}
</script>

<style scoped lang="scss">
.wrapper {
    display: flex;
    justify-content: space-around;
    flex-direction: row;
}
.post {
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 400px;
    height: fit-content;
    border-radius: 10px;
    &__item {
        font-weight: 600;
        color: #A0AEC0;
        span {
            color: #4E5AA4;
            font-weight: 600;
        }
        &-links {
            margin-left: 20px;
            display: flex;
            flex-direction: row;
            align-items: center;
            gap:15px;
        }
    }
    &__buttons {
        display: flex;
        flex-direction: row;

    }
}

#post-map {
    width: 500px;
    height: 500px;
}


</style>
