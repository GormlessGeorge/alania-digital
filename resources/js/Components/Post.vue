<template>
    <div class="post">
        <p>Номер публикации: {{ post.id }}</p>
        <p>Регион: {{ post.region.name }}</p>
        <p>Населённый пункт: {{ post.town.name }}</p>
        <p>Улица: {{ post.street.name }}</p>
        <p>Тип здания: {{ post.building_type.name }}</p>
        <p>Номер дома: {{ post.house_number }}</p>
        <p>Корпус: {{ post.building }}</p>
        <p>Долгота: {{ post.longitude }}</p>
        <p>Широта: {{ post.latitude }}</p>
        <p>Статус: {{ post.status }}</p>
        <button v-on:click="publish(post.id)">Опубликовать</button>
    </div>
</template>

<script setup>
import {router} from '@inertiajs/vue3'

defineProps({
    post: Object
});

function publish(postId) {
    console.log(postId)
    router.visit(`/posts/${postId}/publish`,
        {
        method: "patch"
    });
}
</script>

<style scoped lang="scss">
.post {
    width: fit-content;
    height: fit-content;
    border: 1px solid black;
    padding: 20px;
}
</style>
