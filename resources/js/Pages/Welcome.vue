<template>
    <div class="stack vertical gap-4">
        <h1 class="heading xxl">{{ message }}</h1>
        <form @submit.prevent="form.post('/trash')" class="card p-4 stack vertical gap-4">
            <label for="content">Got some garbage?</label>
            <textarea id="content" v-model="form.content" class="input p-4" />
            <div v-if="form.errors.content">{{ form.errors.content }}</div>
            <button type="submit" :disabled="form.processing">Litter</button>
        </form>
        <div
            v-for="trashItem in trash" :key="trashItem.id"
            class="bg-white border border-emerald-700 rounded p-4 shadow-sm"
        >
            <p>{{ trashItem.content }}</p>
            <Link :href="`/trash/${trashItem.id}`" class="link">View</Link>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link, useForm } from '@inertiajs/vue3'

defineProps({
    message: {
        type: String,
        required: true,
    },
    // An array of trash objects
    trash: {
        type: Array,
        required: true,
    },
})

const form = useForm({
    content: "",
})
</script>
