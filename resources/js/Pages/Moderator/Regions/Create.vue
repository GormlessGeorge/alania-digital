<template>
    <ModeratorDashboardLayout>
        <form @submit.prevent="form.post('/dashboard/moderator/regions')">
            <input v-model="form.name"/> Добавить новый регион
            <button type="submit">awdawd</button>
        </form>

    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";
import { Link, router, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: '',
})

function create() {
    router.post('/dashboard/moderator/regions', form);
}
</script>
