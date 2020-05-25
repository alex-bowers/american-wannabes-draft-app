<template>
    <div>
        <h1>HOME</h1>
        <next-pick
            :pick="nextPick"
        ></next-pick>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

import NextPick from '../Common/NextPick.vue'

export default {
    components: {
        NextPick
    },
    computed: {
        ...mapGetters(['nextPick'])
    }
}
</script>
