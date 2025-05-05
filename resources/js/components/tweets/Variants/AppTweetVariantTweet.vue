<template>
    <app-tweet-user :user="tweet.user" />
    <div class="p-2 pl-15">
        <p class="text-gray-300 white-space-pre-wrap">
            {{ tweet.body }}
        </p>
        <app-tweet-action-group />
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