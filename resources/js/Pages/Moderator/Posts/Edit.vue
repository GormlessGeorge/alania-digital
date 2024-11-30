<template>
    <ModeratorDashboardLayout>
      <Form></Form>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import EditResourceForm from "@/Components/Custom/EditResourceForm.vue";
import Form from "@/Components/Custom/Form.vue";

defineProps({
    post: Object
});

</script>

