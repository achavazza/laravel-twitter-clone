<template>
        <div>
            <app-retweet-user :user="tweet.user" />
        </div>
        <div class=" mt-2">
            <component
            :is="`app-tweet-variant-${tweet.original_tweet.type}`"
            :tweet="tweet.original_tweet"></component>
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
