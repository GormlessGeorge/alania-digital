<template>
    <ModeratorDashboardLayout>
        улица
        {{ street.name }}
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import ItemList from "@/Components/ItemList.vue";

defineProps({
    street: Object
});

</script>


