<template>
    <ModeratorDashboardLayout>
        <EditResourceForm :link="`/dashboard/moderator/streets/${street.id}`"
                          :name="street.name" label="Изменить название улицы"/>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import EditResourceForm from "@/Components/Custom/EditResourceForm.vue";

defineProps({
    street: Object
});

</script>
