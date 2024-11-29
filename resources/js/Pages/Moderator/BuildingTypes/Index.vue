<template>
    <ModeratorDashboardLayout>
        <Link :href="route('building-types.create')">+ Добавить</Link>
        <ItemList link="building-types" :items="buildingTypes"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/ItemList.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    buildingTypes: Array,
});

</script>

