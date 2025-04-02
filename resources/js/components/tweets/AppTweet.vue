<template>
    <div class="w-full inline-block border-b border-gray-800 cursor pointer hover:bg-gray-600 p-5">
        <component
            :is="`app-tweet-variant-${tweet.type}`"
            :tweet="tweet"></component>
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