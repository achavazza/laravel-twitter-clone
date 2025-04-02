<template>
    <app-tweet-user :user="tweet.user" />
    <div class="p-2 pl-15">
        <p class="text-gray-300 white-space-pre-wrap">
            {{ tweet.body }}
        </p>
    </div>
    <app-tweet :tweet="tweet.original_tweet" class="border border-gray-700 rounded-lg mt-4" />
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