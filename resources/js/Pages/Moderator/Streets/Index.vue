<template>
    <ModeratorDashboardLayout>
        <Link class="link-add" :href="route('streets.create')">+ Добавить</Link>
        <ItemList link="streets" :items="streets"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/Custom/ItemList.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    streets: Array,
});

</script>

<style scoped lang="scss">
.link-add {
    color: #4E5AA4;
    font-weight: 600;
}
</style>
