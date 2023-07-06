<template>
    <nav class="border-b border-b-emerald-500 py-3">
        <div class="container mx-auto">
        <Link href="/" class="text-4xl font-bold">Litter</Link>
        </div>
    </nav>
    <main class="container mx-auto py-4">
        <slot />
    </main>
</template>

<script setup lang="ts">
import {defineOptions} from "vue";
import {Link} from "@inertiajs/vue3";

defineOptions({name: "BaseLayout"})
</script>

