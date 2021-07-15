<template>
    <div class="relative">
        <input type="text"
               autocomplete="off"
               id="email"
               name="email"
               class="peer h-10 w-full border-b-2 border-gray-300 placeholder-transparent text-gray-900 focus:outline-none focus:border-rose-600"
               placeholder="Adresse Email"
        />
        <label for="email"
               class="absolute left-0 -top-3.5 transition-all text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
        >
            Adresse Email
        </label>
    </div>
</template>

<script>
export default {
    name: 'input-text',

    setup() {
    }
}
</script>

<style scoped>

</style>
