<template>
    <select class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
        <option v-for="option in data" :value="option">{{option}}</option>
    </select>
</template>

<script>
    export default {
        props : {
            name: String,
            data: Array,
        }
    }
</script>
