<script setup>
import {computed} from 'vue';
import {Link} from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});


</script>

<template>
    <Link :href="href" class="link" :class="{link_active: active}">
        <slot/>
    </Link>
</template>

<style scoped lang="scss">
.link {
    display: inline-flex;
    align-items: center;
    padding: 5px 5px 0 5px;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.25;
    border-bottom-color: transparent;
    color: #A0AEC0;
    outline: none;
    transition: border-bottom-color 0.5s ease-in-out, color 0.5s;
    border-bottom-width: 2px;
    &:hover {
        color: #4E5AA4;
        border-bottom-color: #4C51BF;
    }

    &_active {
        color: #4E5AA4;
        border-bottom-color: #4E5AA4;
    }
}

</style>
