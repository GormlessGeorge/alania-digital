<template>
    <nav class="nav">

        <NavLink :href="route('posts.index')"
                 :active="route().current('posts.index') || route().current('moderator.*')">Публикации
        </NavLink>

        <p>|</p>
        <NavLink :href="route('regions.index')"
                 :active="route().current('regions.index')">Регионы
        </NavLink>

        <NavLink :href="route('towns.index')"
                 :active="route().current('towns.index')">Населённые пункты
        </NavLink>

        <NavLink :href="route('streets.index')"
                 :active="route().current('streets.index')">Улицы
        </NavLink>

        <NavLink :href="route('building-types.index')"
                 :active="route().current('building-types.index')">Типы зданий
        </NavLink>

    </nav>

</template>

<script setup>
import NavLink from "@/Components/NavLink.vue";
</script>


<style scoped lang="scss">
.nav {
    display: flex;
    flex-direction: row;
    gap: 30px;

    p {
        font-size: 14px;
        align-self: center;
        color: #A0AEC0;
    }
}
</style>
