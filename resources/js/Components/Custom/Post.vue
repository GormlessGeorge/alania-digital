<template>
    <div class="post">
        <p class="post__item">Номер публикации: <span>{{ post.id }}</span></p>
        <p class="post__item">Регион: <span>{{ getFieldName(post.region) }}</span></p>
        <p class="post__item">Нас. пункт: <span>{{ getFieldName(post.town) }}</span></p>
        <p class="post__item">Улица: <span>{{ getFieldName(post.street) }}</span></p>
        <p class="post__item">Тип здания: <span>{{ getFieldName(post.building_type) }}</span></p>
        <p class="post__item">Номер дома: <span>{{ post.house_number }}</span></p>
        <p class="post__item">Статус: <span>{{ post.status }}</span></p>
        <div class="post__buttons">
            <LinkButton :href="route('posts.show', post.id)">Подробнее</LinkButton>
        </div>

    </div>
</template>

<script setup>
import LinkButton from "@/Components/Custom/LinkButton.vue";

defineProps({
    post: Object
});

const getFieldName = (field) => {
    return field ? field.name : 'Нет значений';
}

</script>

<style scoped lang="scss">
.post {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 300px;
    height: fit-content;
    padding: 30px;
    border-radius: 10px;
    background: #fafafa;


    &__item {
        font-weight: 600;
        color: #A0AEC0;

        span {
            color: #4E5AA4;
            font-weight: 600;
        }
    }
}

</style>
