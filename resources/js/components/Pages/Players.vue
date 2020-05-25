<template>
    <div>
        <h1>PLAYERS</h1>
        <a @click="setPlayerType('rookies')">Rookies</a>
        <a @click="setPlayerType('veterans')">Veterans</a>
        <position v-if="hasPlayerType" v-for="(position, positionIndex) in players" :key="positionIndex"
                  :position="positionIndex"
                  :players="position"
        ></position>
        <modal v-show="showPlayerModal"
               @close="closeModal">
            <div slot="header">Player Header</div>
            <div slot="body">Player {{ currentPlayer }}</div>
        </modal>
    </div>
</template>

<script>
import Vue from "vue";
import { mapGetters } from "vuex";

import Modal from "../Common/modal.vue";
import Position from "../Players/Position.vue";

export default {
    components: {
        Modal,
        Position
    },
    mounted() {
        Vue.nextTick(() => {
            if (!this.hasPlayers) {
                this.fetchPlayers();
            }
        });
    },
    computed: {
        ...mapGetters(["currentPlayer", "hasPlayers", "hasPlayerType", "players", "showPlayerModal"])
    },
    methods: {
        closeModal() {
            this.$store.commit("updatePlayerModalStatus", false);
        },
        fetchPlayers() {
            window.axios.get("/api/players").then(response => {
                const data = response.data;

                if (data) {
                    this.$store.commit("updatePlayers", data);
                }
            });
        },
        setPlayerType(type) {
            this.$store.commit("updatePlayerType", type);
        }
    },
    watch: {
        currentPlayer(player) {
            console.log(player);
        }
    }
};
</script>
