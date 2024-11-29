<template>

    <Head title="Welcome"/>

    <section class="main-content">
        <header class="header">
            <div class="header__logo">
                <img src="/icons/alania-digital_mobile-1.svg" alt="app_logo">
            </div>
            <nav class="header__nav" v-if="canLogin">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="header__nav-link">
                    Личный кабинет
                </Link>

                <template v-else>
                    <Link :href="route('login')" class="header__nav-link">
                        Войти
                    </Link>

                    <Link v-if="canRegister" :href="route('register')" class="header__nav-link">
                        Регистрация
                    </Link>
                </template>
            </nav>
        </header>


        <div class="container">
            <main class="main">
                <h1 class="main__title">Создание публикации</h1>
                <Form :regions="regions" :towns="towns" :streets="streets" :buildingTypes="buildingTypes"/>
            </main>
        </div>
    </section>
</template>

<script setup>
import {Head, Link} from '@inertiajs/vue3';
import Form from "@/Components/Form.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    regions: Array,
    towns: Array,
    streets: Array,
    buildingTypes: Array
});


</script>

<style scoped lang="scss">
.main-content {
    // height: 100vh;
    background-color: #f8f9fc;
}

.header {
    padding: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: solid 1px rgb(241, 241, 241);
    background-color: #f3f3f3;

    &__nav-link {
        font-size: 16px;
    }
}

.container {
    width: 1280px;
    margin: 0 auto;
}

.main {
    padding: 70px 0;

    &__title {
        font-size: 28px;
    }

}

</style>
