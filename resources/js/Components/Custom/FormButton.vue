<template>
    <button type="submit" class="button" >
        <slot>

        </slot>
    </button>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

</script>
<style scoped lang="scss">
.button {
    display: block;
    text-align: center;
    align-content: center;
    width: 140px;
    height: 50px;
    background-color: #4E5AA4;
    color: white;
    font-weight: bold;
    font-size: 16px;
}
</style>
