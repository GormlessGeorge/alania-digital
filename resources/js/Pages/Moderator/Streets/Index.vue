<template>
    <Head title="Панель управления" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Модерация
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <Controls/>

                <ul>
                    <li v-for="street in streets">{{street.name}}</li>
                </ul>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import Controls from "@/Pages/Moderator/Controls.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    streets: Array
});
</script>
