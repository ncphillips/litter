<template>
    <div class="stack vertical gap-4">
        <Link href="/" class="underline hover:no-underline">Back</Link>
        <div class="text-xl border-l-4 border-emerald-700 min-h-[100px] p-4 stack vertical valign-center">
            <p>{{ trash.content }}</p>
        </div>
        <div>
            – Author Unknown
        </div>
    </div>
</template>

<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

defineProps({
    trash: {
        type: Object,
        required: true,
    },
})
</script>

<style scoped>

</style>
