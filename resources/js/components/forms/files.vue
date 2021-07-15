<template>
    <div>
       <input type="file" accept="image/*" ref="file" class="hidden" @change="change">
        <button class="border p-3 bg-green-600 rounded text-white" @click="browse">Load Avatar</button>
    </div>
</template>

<script>
import { ref } from 'vue'
export default {
    props:{
        value: File
    },
    setup(props, context) {

        const file = ref(null)

        const change = function (e) {
            context.emit('change', e.target.files[0])
        }
        const browse = function () {
            file.value.click()
        }
        return {
            change,
            browse,
            file
        }


    }

}
</script>

<style scoped>

</style>
