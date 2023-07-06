<template>
    <div>
        <Link href="/">Back</Link>
        <h1>Trash</h1>
        <p>{{ trash.content }}</p>
    </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    trash: {
        type: Object,
        required: true,
    },
})

</script>

<style scoped>

</style>
