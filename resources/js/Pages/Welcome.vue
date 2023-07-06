<template>
    <div>
        <h1>{{ message }}</h1>
        <form @submit.prevent="form.post('/trash')" style="width: fit-content; display: flex; gap: 12px; flex-direction: column; padding: 12px; border: 1px solid black;">
            <label for="content">Got some garbage?</label>
            <textarea id="content" v-model="form.content" />
            <div v-if="form.errors.content">{{ form.errors.content }}</div>
            <button type="submit" :disabled="form.processing">Litter</button>
        </form>
        <div
            v-for="trashItem in trash" :key="trashItem.id"
            class="bg-white border rounded p-4 shadow-sm"
        >
            <p>{{ trashItem.content }}</p>
            <Link :href="`/trash/${trashItem.id}`">View</Link>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link, useForm} from '@inertiajs/vue3'

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
