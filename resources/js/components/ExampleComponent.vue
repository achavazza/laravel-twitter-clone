<template>
    
      {{ user }}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card  bg-blue-500">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.getUser();
        },
        methods:{
            async getUser(){
                let response = await axios.get('/api/user');
                this.user = response.data;
            }
        },
        data(){
            return {
                user : null
            }
        }
    }
</script>
