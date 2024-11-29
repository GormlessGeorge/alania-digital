<template>
    <ModeratorDashboardLayout>
        <ItemList link="streets" :items="streets"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/ItemList.vue";

defineProps({
    streets: Array,
});

</script>
