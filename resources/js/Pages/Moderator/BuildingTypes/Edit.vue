<template>
    <ModeratorDashboardLayout>
        <EditResourceForm :link="`/dashboard/moderator/building-types/${buildingType.id}`"
                          :name="buildingType.name" label="Изменить тип здания"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import EditResourceForm from "@/Components/Custom/EditResourceForm.vue";

defineProps({
    buildingType: Object
});

</script>

