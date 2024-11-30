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
                <div class="wrapper">
                    <Controls/>
                    <div class="content">
                        <slot>

                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import Controls from "@/Components/Custom/Controls.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";


</script>


<style scoped lang="scss">
.wrapper {
    padding: 16px;
    width: 100%;
    min-height: 700px;
    background-color: white;
    border-radius: 8px;
}
.content {
    margin-top: 50px;
}
</style>
