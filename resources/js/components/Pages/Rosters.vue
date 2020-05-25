<template>
    <div v-if="hasRosters">
        <h1>ROSTERS</h1>
        <team-roster v-for="(team, teamIndex) in allRosters" :key="teamIndex"
            :team="team"
        ></team-roster>
    </div>
</template>

<script>
    import Vue from 'vue';
    import { mapGetters } from 'vuex';

    import TeamRoster from '../Rosters/Team.vue';

    export default {
        components: {
            TeamRoster
        },
        mounted() {
            Vue.nextTick(() => {
                if (!this.hasRosters) {
                    this.fetchRosters();
                }
            });
        },
        computed: {
            ...mapGetters([
                'allRosters',
                'hasRosters'
            ])
        },
        methods: {
            fetchRosters() {
                window.axios
                    .get('/api/rosters')
                    .then((response) => {
                        const data = response.data;

                        if (data) {
                            this.$store.commit('updateRosters',  data);
                        }
                    });
            }
        }
    }
</script>

<style scoped>

</style>
