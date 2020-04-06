<script>
    import axios from 'axios';
    export default {
        name: "Calendar",
        props: ['matchday_id_prop'],
        data() {
            return {
                matchday_id: null,
                matches: [],
            }
        },
        mounted() {
            var self = this;
            self.matchday_id = self.matchday_id_prop;
            self.retrieveMatches();
        },
        methods: {
            previousMatch(){
              this.matchday_id -= 1;
              this.retrieveMatches()
            },
            nextMatch(){
                this.matchday_id += 1;
                this.retrieveMatches()
            },
            retrieveMatches() {
                var self = this;
                axios({
                    method: 'get',
                    url: '/retrieve-matches?matchday_id=' + self.matchday_id,
                    data: self.matchday_id
                }).then((response) => {
                    self.matches = response.data;
                }).catch((error) => {
                    console.log(error)
                });
            },
        }
    }
</script>
