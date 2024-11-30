<template>
    <div class="post">
        <p class="post-item">Номер публикации: <span>{{ post.id }}</span></p>
        <p class="post-item">Регион: <span>{{ post.region.name }}</span></p>
        <p class="post-item">Нас. пункт: <span>{{ post.town.name }}</span></p>
        <p class="post-item">Улица: <span>{{ post.street.name }}</span></p>
        <p class="post-item">Тип здания: <span>{{ post.building_type.name }}</span></p>
        <p class="post-item">Номер дома: <span>{{ post.house_number }}</span></p>
        <p class="post-item">Статус: <span>{{ post.status }}</span></p>
        <div class="post__buttons">
            <Link :href="route('posts.show', post.id)">Подробнее</Link>
        </div>

    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({
    post: Object
});


</script>

<style scoped lang="scss">
.post {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 400px;
    height: fit-content;
    padding: 30px;
    border-radius: 10px;
    background: #fafafa;


    &-item {
        font-weight: 600;
        color: #A0AEC0;
        span {
            color: #4E5AA4;
            font-weight: 600;
        }
    }
}

</style>
