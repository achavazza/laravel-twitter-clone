<template>
    <app-tweet v-for="tweet in tweets" :key="tweet.id" :tweet="tweet" />
    <div 
    v-if="tweets.length"
    v-observe-visibility="{ callback : timelineBottomHandler }"></div>
    <div v-if="tweets.length === 0" class="text-center">
        <p class="text-gray-500">No tweets available.</p>
    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import { ObserveVisibility } from 'vue-observe-visibility';
export default{
    data(){
        return {
            page:1,
            lastPage:1,
        }
    },
    computed: {
        ...mapGetters({
            tweets: 'timeline/tweets'
        }),
        url(){
            return '/api/timeline?page=${this.page}';
        }
    },
    methods: {
        ...mapActions({
            getTweets: 'timeline/getTweets'
        }),
        loadTweets(){
            this.getTweets(this.url).then((response) => {
               this.lastPage = response.data.meta.last_page;
            });
        },
        timelineBottomHandler(isVisible){
            if(!isVisible) return;
            if(this.lastPage === this.page) return;
            this.page ++;
            this.getTweets(this.url);
        }
    },
    mounted(){
        this.loadTweets();
    }
   
}

</script>