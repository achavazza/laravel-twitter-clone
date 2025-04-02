<template>
    <div class="flex w-full items-center">
        <div class="mr-3 mb-2">
            <img :src="user.avatar" class="rounded-full w-12 h-12" />
        </div>
        <div class="mr-3 flex flex-col">
            <span class="text-gray-300 font-bold mr-2">{{ user.name }}</span>
            <span class="text-gray-400">@{{ user.username }}</span>
        </div>
    </div>
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