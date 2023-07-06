<template>
    <div>
        <h1>{{ message }}</h1>
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
</script>
