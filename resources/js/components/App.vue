<template>
    <div>
        <Nav class="fixed w-full" />

        <div class="pt-12">
            <router-view :key="$route.fullPath" />
        </div>
    </div>
</template>

<script>
    import Nav from "./Nav.vue";

    export default {
        name: "App",

        components: {
            Nav,
        },

        watch: {
            $route(to) {
                document.title = `${to.meta.title} | ${process.env.MIX_APP_BRANDING || ""} ${process.env.MIX_APP_NAME || "Laravel"}`;
            },
        },

        created() {
            document.title = `${this.$route.meta.title} | ${process.env.MIX_APP_BRANDING || ""} ${process.env.MIX_APP_NAME || "Laravel"}`;
        },
    };
</script>

<style scoped>

</style>
