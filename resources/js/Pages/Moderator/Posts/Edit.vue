<template>
    <ModeratorDashboardLayout>
        <EditPostForm :post="post" :regions="regions" :towns="towns" :streets="streets"
                      :buildingTypes="buildingTypes"></EditPostForm>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import EditPostForm from "@/Components/Custom/EditPostForm.vue";

defineProps({
    post: Object,
    regions: Array,
    towns: Array,
    streets: Array,
    buildingTypes: Array
});

</script>

