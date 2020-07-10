<template>
    <div v-if="$props.team" class="rosters--team">
        <div class="team--header">
            <h2>{{ $props.team.name }}</h2>
        </div>
        <div v-if="$props.team.players" class="team--players">
            <div
                v-for="(position, positionIndex) in $props.team.players"
                :key="positionIndex"
                class="position--wrap"
            >
                <div
                    v-for="(player, playerIndex) in position"
                    :key="playerIndex"
                    class="players--wrap"
                >
                    <div class="rosters--player">
                        <h3>{{ player.name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        team: {
            default: null,
            type: Object
        }
    }
}
</script>
