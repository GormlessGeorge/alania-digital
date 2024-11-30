<template>

    <Head title="Welcome"/>

    <section class="home-section">
        <header class="header">
            <div class="header__logo">
                <img src="/icons/alania-digital_mobile-1.svg" alt="app_logo">
            </div>
            <nav class="header__nav" v-if="canLogin">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="header__nav-link">
                    Личный кабинет
                </Link>

                <div class="links" v-else>
                    <Link :href="route('login')" class="header__nav-link">
                        Войти
                    </Link>
                    <Link v-if="canRegister" :href="route('register')" class="header__nav-link">
                        Регистрация
                    </Link>
                </div>
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
import Form from "@/Components/Custom/CreatePostForm.vue";

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
.home-section {
    padding-bottom: 50px;
    background-color: #f3f4f6;
}

.header {
    height: 65px;
    padding: 0 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: solid 1px rgb(241, 241, 241);
    background-color: white;
    box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);

    &__nav-link {
        font-size: 16px;
    }
}

.container {
    width: 1280px;
    margin: 0 auto;
    padding: 32px;
}

.main {
    margin-top: 48px;
    padding: 30px 30px;
    border-radius: 8px;
    background-color: white;

    &__title {
        font-size: 28px;
    }

}


</style>
