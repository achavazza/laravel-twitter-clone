<template>
    <span class="text-gray-300 font-bold mr-2">{{ user.name }}</span>
    <span class="text-gray-400">@{{ user.username }}</span>
</template>
<script>
export default {
    props:{
        user:{
            type: Object,
            required: true,
        }
    }
}
</script>