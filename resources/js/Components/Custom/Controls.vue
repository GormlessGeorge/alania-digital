<template>
    <nav class="nav">

        <NavLink :href="route('posts.index')"
                 :active="route().current('posts.*') || route().current('moderator.*')">Публикации
        </NavLink>

        <p>|</p>
        <NavLink :href="route('regions.index')"
                 :active="route().current('regions.*')">Регионы
        </NavLink>

        <NavLink :href="route('towns.index')"
                 :active="route().current('towns.*')">Населённые пункты
        </NavLink>

        <NavLink :href="route('streets.index')"
                 :active="route().current('streets.*')">Улицы
        </NavLink>

        <NavLink :href="route('building-types.index')"
                 :active="route().current('building-types.*')">Типы зданий
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
        cursor: default;
        font-size: 14px;
        align-self: center;
        color: #A0AEC0;
    }
}
</style>
