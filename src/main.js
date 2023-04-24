const { createApp } = Vue;
createApp({
    data() {
        return {
            api: 'server.php',
            movieList: []
        }
    },
    methods: {
        createMoviesList() {
            axios.get(this.api)
                .then((response) => {
                    this.movieList = response.data;
                    console.log(this.movieList)
                })
        }
    },
    created() {
        this.createMoviesList();
    }
}).mount('#app')