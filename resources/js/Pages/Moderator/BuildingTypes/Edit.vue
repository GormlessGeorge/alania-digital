<template>
    <ModeratorDashboardLayout>
        тип здания
        {{ buildingType.name }}
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/ItemList.vue";

defineProps({
    buildingType: Object
});

</script>

