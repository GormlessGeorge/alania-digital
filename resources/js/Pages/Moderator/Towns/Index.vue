<template>
    <ModeratorDashboardLayout>
        <ItemList link="towns" :items="towns"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/ItemList.vue";

defineProps({
    towns: Array,
});

</script>
