<template>
    <ModeratorDashboardLayout>
        <CreateResourceForm link="/dashboard/moderator/regions" label="Новый регион" />
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import CreateResourceForm from "@/Components/Custom/CreateResourceForm.vue";
</script>
