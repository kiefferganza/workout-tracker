<template>
    <Head title="Workouts"/>

    <breeze-authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Workouts
            </h2>
        </template>
        {{ workouts }}
    </breeze-authenticated-layout>

</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },
    props: {
        workouts: Number
    }
}
</script>
