<template>
    <ModeratorDashboardLayout>
        <EditResourceForm :link="`/dashboard/moderator/regions/${region.id}`"
                          :name="region.name" label="Изменить название региона"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import EditResourceForm from "@/Components/Custom/EditResourceForm.vue";

defineProps({
    region: Object
});

</script>

