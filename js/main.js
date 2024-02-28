const {createApp} = Vue; 

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            albumList: []
        }
    },
    methods: {
        getSongs(){
            axios.get(this.apiUrl)
            .then((response) => {
                this.albumList = response.data
            })
        }
    },
    mounted() {
        
    },
}).mount('#app')