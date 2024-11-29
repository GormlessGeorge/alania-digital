<template>
    <ModeratorDashboardLayout>
        регион
        {{ region }}
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/ItemList.vue";

defineProps({
    region: Object
});

</script>

