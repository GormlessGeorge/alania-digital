<template>
    <ModeratorDashboardLayout>
        <CreateResourceForm link="/dashboard/moderator/towns" label="Новый насёленный пункт" />
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import CreateResourceForm from "@/Components/Custom/CreateResourceForm.vue";
</script>
