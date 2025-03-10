<template>
    <form class="flex" @submit.prevent="submit">
        <div class="mr-3">
            <img :src="$user.avatar" class="rounded-full w-12 h-12" />
        </div>
        <div class="flex-grow">
            {{ form }}
            <textarea v-model="form.body" class="bg-gray-600 w-full outline-none text-gray-300 text-lg resize-none mb-2 p-2" placeholder="What's happening?" autofocus></textarea>
            <div class="flex justify-between">
                <!-- Actions rweteets replies -->
            </div>
            <button type="submit" class="bg-blue-500 rounded-full text-gray-300 px-4 py-3 font-bold leading-none">Tweet</button>
        </div>
    </form>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            form: { body: '' },
        }
    },
    methods: {
        async submit(){
            await axios.post('/api/tweets', this.form );
        }
    }
}
</script>