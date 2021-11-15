<template>
    <Head title="Create Workout" />

    <breeze-authenticated-layout>
        <div class="bg-white mt-10 p-10 md:3/4 lg:w-1/2 mx-auto">
                <basic-select
                    :data="[1,2,3]"
                    label="Workout Type"
                    placeholder="Select a workout type" />
        </div>
    </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import basicSelect from '@/Components/select'

    export default {
        components : {
            BreezeAuthenticatedLayout,
            Head,
            basicSelect
        },
        data() {
            return {

            }
        }
    }
</script>
