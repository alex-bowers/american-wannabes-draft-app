<template>
    <div class="position--players">
        <h2>{{ position }}</h2>
        <div v-for="(player, playerIndex) in players" :key="playerIndex" class="players--wrap">
            <div class="players--name">
                <a @click="openPlayerModal(player)">{{ player.name }}</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        players: {
            type: Array
        },
        position: {
            type: String
        }
    },
    methods: {
        openPlayerModal(player) {
            this.$store.commit("updateCurrentPlayer", player.id);
            this.$store.commit("updatePlayerModalStatus", true);
        }
    }
};
</script>
