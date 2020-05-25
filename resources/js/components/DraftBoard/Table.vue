<template>
    <div class="draft-board--table">
        <div v-for="(round, roundIndex) in $props.board" :key="roundIndex" class="table-round">
            <h2>Round {{ roundIndex }}</h2>
            <div v-for="(pick, pickIndex) in $props.board[roundIndex]" :key="pickIndex" class="table-pick">
                <h3>Pick {{ pickIndex + 1 }}</h3>
                <div v-if="pick.player" class="table-pick--player">
                    {{ pick.player.name }}
                </div>
                <div>{{ pick.user.name }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        board: {
            default: null,
            type: Object
        },
        user: {
            default: null
        }
    }
};
</script>
