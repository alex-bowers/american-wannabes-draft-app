<template>
    <div>
        <h1>PLAYERS</h1>
        <a @click="setPlayerType('rookies')">Rookies</a>
        <a @click="setPlayerType('veterans')">Veterans</a>
        <div v-if="hasPlayerType">
            <position
                v-for="(position, positionIndex) in players"
                :key="positionIndex"
                :position="positionIndex"
                :players="position"
            ></position>
        </div>
        <modal
            v-if="isShowingPlayerModal"
            @close="closeModal"
        >
            <div slot="header">{{ currentPlayer.name }}</div>
            <div slot="body">{{ currentPlayer.position }}</div>
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
        })
    },
    computed: {
        ...mapGetters([
            'hasPlayerType',
            'hasPlayers',
            'players'
        ]),
        ...mapState([
            'currentPlayer',
            'isShowingPlayerModal'
        ])
    },
    methods: {
        ...mapActions(['fetchPlayers']),
        ...mapMutations([
            'updatePlayerModalStatus',
            'updatePlayerType'
        ]),
        closeModal() {
            this.updatePlayerModalStatus(false)
        },
        setPlayerType(type) {
            this.updatePlayerType(type)
        }
    }
}
</script>
