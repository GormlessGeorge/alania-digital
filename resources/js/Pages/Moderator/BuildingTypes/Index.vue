<template>
    <ModeratorDashboardLayout>
        <Link class="link-add" :href="route('building-types.create')">+ Добавить</Link>
        <ItemList link="building-types" :items="buildingTypes"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/Custom/ItemList.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    buildingTypes: Array,
});

</script>

<style scoped lang="scss">
.link-add {
    color: #4E5AA4;
    font-weight: 600;
}
</style>
