<template>
    <div>
        <h1>PLAYERS</h1>
        <a @click="updatePlayerType('rookies')">Rookies</a>
        <a @click="updatePlayerType('veterans')">Veterans</a>
        <div v-if="hasPlayerType">
            <position
                v-for="(position, positionIndex) in players"
                :key="positionIndex"
                :players="position"
                :position="positionIndex"
            ></position>
        </div>
        <modal
            v-if="isShowingPlayerModal"
            @close="closeModal"
        >
            <div slot="header">
                <h3 v-if="currentUserHasCurrentPick">

                </h3>
            </div>
            <div slot="body">
                <h2>{{ currentPlayer.name }}</h2>
                <ul>
                    <li>Position: {{ currentPlayer.position }}</li>
                    <li v-if="fullProTeamName">
                        Team: {{ fullProTeamName }}
                    </li>
                    <li v-if="fullCollegeTeamName">
                        College: {{ fullCollegeTeamName }}
                    </li>
                </ul>
            </div>
            <div
                v-if="currentUserHasCurrentPick"
                slot="footer"
            >
                <button @click="selectPlayer">Select Player</button>
            </div>
        </modal>
    </div>
</template>

<script>
import Vue from 'vue'
import { mapActions, mapGetters, mapMutations, mapState } from 'vuex'

import Modal from '../Common/Modal.vue'
import Position from '../Players/Position.vue'

export default {
    components: {
        Modal,
        Position
    },
    mounted() {
        Vue.nextTick(() => {
            if (!this.hasPlayers) {
                this.fetchPlayers()
            }

            this.updatePlayerType('rookies');
        })
    },
    computed: {
        ...mapGetters([
            'currentUserHasCurrentPick',
            'hasPlayerType',
            'hasPlayers',
            'players'
        ]),
        ...mapState([
            'currentPlayer',
            'isShowingPlayerModal'
        ]),
        fullCollegeTeamName() {
            return this.currentPlayer && this.currentPlayer.college
                ? `${this.currentPlayer.college.team} ${this.currentPlayer.college.nickname}`
                : null
        },
        fullProTeamName() {
            return this.currentPlayer && this.currentPlayer.team
                ? `${this.currentPlayer.team.team} ${this.currentPlayer.team.nickname}`
                : null
        }
    },
    methods: {
        ...mapActions([
            'fetchPlayers',
            'selectPlayerFromDraft'
        ]),
        ...mapMutations([
            'updatePlayerModalStatus',
            'updatePlayerType'
        ]),
        closeModal() {
            this.updatePlayerModalStatus(false)
        },
        selectPlayer() {
            if(confirm('Are you sure?')) {
                this.selectPlayerFromDraft()
            }
        }
    }
}
</script>
