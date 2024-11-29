<template>
    <div class="post">
        <p>Номер публикации: {{ post.id }}</p>
        <p>Регион: {{ post.region.name }}</p>
        <p>Нас. пункт: {{ post.town.name }}</p>
        <p>Улица: {{ post.street.name }}</p>
        <p>Тип здания: {{ post.building_type.name }}</p>
        <p>Номер дома: {{ post.house_number }}</p>
        <p>Корпус: {{ post.building }}</p>
        <p>Долгота: {{ post.longitude }}</p>
        <p>Широта: {{ post.latitude }}</p>
        <p>Статус: {{ post.status }}</p>
        <button v-on:click="publish(post.id)">Подробнее</button>
    </div>
</template>

<script setup>
import {router} from '@inertiajs/vue3'

defineProps({
    post: Object
});

function publish(postId) {
    router.visit(`/posts/${postId}/publish`,
        {
            method: "patch"
        });
}
</script>

<style scoped lang="scss">
.post {
    width: 400px;
    height: fit-content;
    padding: 30px;
    border-radius: 10px;
    background: #fafafa;
    box-shadow:  20px 20px 39px #d5d5d5,
    -20px -20px 39px #ffffff;
}
</style>
