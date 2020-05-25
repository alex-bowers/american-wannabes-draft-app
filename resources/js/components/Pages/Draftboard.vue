<template>
    <div>
        <h1>DRAFTBOARD</h1>
        <next-pick
            :pick="nextPick"
        ></next-pick>
        <draft-table
            :board="draftBoard"
            :user="user"
        ></draft-table>
    </div>
</template>

<script>
import { mapGetters, mapState } from 'vuex'

import DraftTable from '../DraftBoard/Table.vue'
import NextPick from '../Common/NextPick.vue'

export default {
    components: {
        DraftTable,
        NextPick
    },
    computed: {
        ...mapGetters(['nextPick',]),
        ...mapState(['draftBoard', 'user'])
    },
}
</script>
