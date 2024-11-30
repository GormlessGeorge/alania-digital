<template>
    <ModeratorDashboardLayout>
        <Link class="link-add" :href="route('towns.create')">+ Добавить</Link>
        <ItemList link="towns" :items="towns"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/Custom/ItemList.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    towns: Array,
});

</script>

<style scoped lang="scss">
.link-add {
    color: #4E5AA4;
    font-weight: 600;
}
</style>
