<template>
    <div v-if="$props.pick" class="draft-board--next-pick">
        <div class="next-pick--header">
            <span>Round {{ $props.pick.round }}</span>
            <span>Pick {{ $props.pick.number }}</span>
        </div>
        <div class="next-pick--message">
            <div v-if="currentUserHasCurrentPick">
                <span>You're on the clock!</span>
                <button>
                    <router-link :to="'players'">Select Player</router-link>
                </button>
            </div>
            <div v-else>
                {{ $props.pick.user.name }} is on the clock.
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    props: {
        pick: {
            type: Object
        }
    },
    computed: {
        ...mapGetters(['currentUserHasCurrentPick'])
    }
}
</script>
