<template>
    <div class="bg-white h-12 px-4 flex items-center justify-between border-b border-gray-300 shadow-sm">
        <router-link to="/">
            <h1 class="text-xl tracking-tighter">
                {{ appBranding }}
                <span class="font-bold">{{ appName }}</span>
            </h1>
        </router-link>
        <button @click.prevent="logout()" class="tracking-tight hover:text-gray-600 focus:outline-none">Logout</button>
    </div>
</template>

<script>
    export default {
        name: "Nav",

        components: {},

        data() {
            return {
                appBranding: process.env.MIX_APP_BRANDING || "",
                appName: process.env.MIX_APP_NAME || "",
            }
        },

        methods: {
            logout() {
                document.getElementById('logout-form').submit();
            }
        }
    }
</script>

<style scoped>

</style>
