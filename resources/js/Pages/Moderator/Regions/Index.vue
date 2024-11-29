<template>
    <ModeratorDashboardLayout>
        <Link :href="route('regions.create')">+ Добавить</Link>
        <ItemList link="regions" :items="regions"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/ItemList.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    regions: Array,
});

</script>


