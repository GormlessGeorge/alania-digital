<template>
    <ul class="list">
        <li class="list__item" v-for="item in items">
            <p class="list__item-name">
                {{ item.name }}
            </p>
            <div class="list__item-links">
                <Link :href="`${link}/${item.id}/edit`"><img src="/icons/edit.svg"></Link>
                <Link :href="`${link}/${item.id}`" method="DELETE" as="button"><img src="/icons/bin.svg"></Link>
            </div>
        </li>
    </ul>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
const props = defineProps({
    items: Array,
    link: String
});

</script>


<style scoped lang="scss">
.list {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 30px;

    &__item {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        font-size: 16px;
        height: 50px;
        width: 600px;
        padding: 10px;
        border-radius: 8px;
        background-color: white;
        box-shadow:  10px 10px 20px #d5d5d5,
        -10px -10px 20px #ffffff;

        &-name {

        }
        &-links {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }
    }


}

</style>
