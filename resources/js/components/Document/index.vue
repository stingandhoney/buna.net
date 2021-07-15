<template>
    <div class="p-5 bg-red-600 text-white font-bold text-2xl tracking-widest test-scss">
        <h1>{{ message }}</h1>
    </div>
</template>

<script>
export default {
    setup() {
        return {
            message: 'Laravel8, Vue.js3 & tailwindcss2'
        }
    }
}
</script>

<style lang="scss">
.test-scss{
    @apply rounded-full;
}
</style>

