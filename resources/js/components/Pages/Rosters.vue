<template>
    <div v-if="hasRosters">
        <h1>ROSTERS</h1>
        <team-roster
            v-for="(team, teamIndex) in allRosters"
            :key="teamIndex"
            :team="team"
        ></team-roster>
    </div>
</template>

<script>
import Vue from 'vue'
import { mapActions, mapGetters, mapState } from 'vuex'

import TeamRoster from '../Rosters/Team.vue'

export default {
    components: {
        TeamRoster
    },
    mounted() {
        Vue.nextTick(() => {
            if (!this.hasRosters) {
                this.fetchRosters()
            }
        })
    },
    computed: {
        ...mapGetters(['hasRosters']),
        ...mapState({
            'allRosters': state => state.rosters
        })
    },
    methods: {
        ...mapActions(['fetchRosters'])
    }
}
</script>
