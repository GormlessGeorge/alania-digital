<script setup>
import {Link} from "@inertiajs/vue3";
import NavLink from "@/Components/NavLink.vue";
</script>

<style scoped lang="scss">

</style>


<template>
    <nav>
        <div>
            <NavLink :href="route('moderator.dashboard')"
                     :active="route().current('moderator.dashboard')">Публикации</NavLink>

            <NavLink :href="route('regions.index')"
                     :active="route().current('regions.index')">Регионы</NavLink>

            <NavLink :href="route('towns.index')"
                     :active="route().current('towns.index')">Населённые пункты</NavLink>

            <NavLink :href="route('streets.index')"
                     :active="route().current('streets.index')">Улицы</NavLink>

            <NavLink :href="route('building-types.index')"
                     :active="route().current('building-types.index')">Типы зданий</NavLink>
        </div>

    </nav>

</template>

