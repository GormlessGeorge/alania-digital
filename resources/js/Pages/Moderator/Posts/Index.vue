<template>
    <ModeratorDashboardLayout>
        <div class="wrapper">
            <Post v-for="post in posts" :post="post" />
        </div>
    </ModeratorDashboardLayout>
</template>

<script setup>
import ModeratorDashboardLayout from "@/Layouts/ModeratorDashboardLayout.vue";

import Post from "@/Components/Custom/Post.vue";

defineProps({
    posts: Array
});

</script>


<style scoped lang="scss">
.wrapper {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 20px;
}
</style>
