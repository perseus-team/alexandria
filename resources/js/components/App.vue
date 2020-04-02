<template>
    <div>

        <Nav class="fixed w-full"></Nav>

        <div class="pt-12">
            <router-view :key="$route.fullPath"></router-view>
        </div>

    </div>
</template>

<script>
    import Nav from './Nav';

    export default {
        name: "App",

        components: {
            Nav
        },

        created() {
            document.title = this.$route.meta.title + ' | ' + (process.env.MIX_APP_BRANDING || '') + ' ' + (process.env.MIX_APP_NAME || 'Laravel');
        },

        watch: {
            $route(to, from) {
                document.title = to.meta.title + ' | ' + (process.env.MIX_APP_BRANDING || '') + ' ' + (process.env.MIX_APP_NAME || 'Laravel');
            }
        }
    }
</script>

<style scoped>

</style>
