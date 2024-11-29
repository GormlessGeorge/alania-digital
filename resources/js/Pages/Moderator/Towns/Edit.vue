<template>
    <ModeratorDashboardLayout>
        нас пункт
        {{ town }}
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";

defineProps({
    town: Object
});

</script>


