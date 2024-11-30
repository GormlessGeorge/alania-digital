<template>
    <ModeratorDashboardLayout>
        <CreateResourceForm link="/dashboard/moderator/streets" label="Новая улица" />
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import CreateResourceForm from "@/Components/Custom/CreateResourceForm.vue";
</script>
