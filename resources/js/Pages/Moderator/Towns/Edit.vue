<template>
    <ModeratorDashboardLayout>
        <EditResourceForm :link="`/dashboard/moderator/towns/${town.id}`"
                          :name="town.name" label="Изменить название населённого пункта"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import EditResourceForm from "@/Components/Custom/EditResourceForm.vue";

defineProps({
    town: Object
});

</script>


