<template>
    <div class="w-full inline-block border-b border-gray-800 cursor pointer hover:bg-gray-800 p-5">
        <div class="flex w-full">
            <div class="mr-3">
                <img :src="tweet.user.avatar" class="rounded-full w-12 h-12" />
            </div>
        </div>
        <app-tweet-user :user="tweet.user" />
        <p class="text-gray-300 white-space-pre-wrap">
            {{ tweet.body }}
        </p>
    </div>
</template>
<script>
export default{
    props: {
        tweet: {
            type: Object,
            required: true,
        }
    },
}
</script>