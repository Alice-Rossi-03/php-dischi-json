const {createApp} = Vue; 

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            albumList: [],
            current: false,
            currentSong:{}
        }
    },
    methods: {
        getSongs(){
            axios.get(this.apiUrl)
            .then((response) => {
                this.albumList = response.data; 
                console.log(this.albumList); 

            })
        },
        showSong(index){

            const params = {songIndex: index}
            
            axios.post(this.apiUrl, params, {
                headers:{'Content-Type': 'multipart/form-data'}
            }).then((response) => {
                console.log(response.data);
                this.currentSong = response.data;
                console.log(this.currentSong);
            })
            
            this.current = true; 
        },
        hideSong(){
            this.current = false; 
        }
    },
    mounted() {
        this.getSongs(); 
    },
}).mount('#app')