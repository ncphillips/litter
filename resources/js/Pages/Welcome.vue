<template>
    <div>
        <h1>{{ message }}</h1>
        <form @submit.prevent="submit" style="width: fit-content; display: flex; gap: 12px; flex-direction: column; padding: 12px; border: 1px solid black;">
            <label for="content">Got some garbage?</label>
            <textarea id="content" v-model="form.content" />
            <button type="submit">Litter</button>
        </form>
        <p v-for="trashItem in trash" :key="trashItem.id">
            {{ trashItem.content }}
        </p>
    </div>
</template>

<script setup lang="ts">
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


import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
    content: "",
})

function submit() {
    router.post('/trash', form)
    form.content = ""
}

</script>
