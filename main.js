const { createApp } = Vue  

createApp({
    data() {
        return {
           apiCall: 'server.php',
           data: '',
    
        }
    },
    methods: {
        chiamataApi(){
            axios.get( this.apiCall )
            .then((res) => {
                this.data = res.data;
            });
        }
    },
    mounted(){
        this.chiamataApi();
    }
}).mount('#app')