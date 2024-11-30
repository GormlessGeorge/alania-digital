<template>
    <form @submit.prevent="form.patch(link)">
        <label :class="{ error: $page.props.errors.name }">{{ label }}</label>
        <input v-model="form.name" />
        <p class="error" v-if="$page.props.errors.name">{{$page.props.errors.name}}</p>
        <FormButton type="submit">Добавить</FormButton>
    </form>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";
import TheButton from "@/Components/Custom/LinkButton.vue";
import FormButton from "@/Components/Custom/FormButton.vue";

const props = defineProps({
    link: String,
    label: String,
    name: String
});

const form = useForm({
    name: props.name,
})

</script>


<style scoped lang="scss">
form {
    display: flex;
    flex-direction: column;
    gap: 30px;
    input {
        width: 300px;
        border: none;
        background-color: transparent;
        border-bottom: solid 1px gray;
    }
    label {
        font-weight: 600;
    }
    button {
        width: 200px;
        height: 50px;
        background-color: #4E5AA4;
        color: white;
        font-weight: bold;
        font-size: 18px;
    }
}
.error {
    color: red;
}
</style>

