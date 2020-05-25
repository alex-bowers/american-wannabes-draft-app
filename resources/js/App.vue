<template>
    <div id='app'>
        <navigation></navigation>

        <router-view></router-view>
    </div>
</template>

<script>
import Vue from 'vue'
import { mapActions, mapGetters, mapMutations } from 'vuex'

import Navigation from './components/Navigation.vue'

export default {
    components: {
        Navigation
    },
    mounted() {
        Vue.nextTick(() => {
            this.fetchUser()

            if (!this.hasDraftBoard) {
                this.fetchDraftBoard()
            }
        })
    },
    computed: {
        ...mapGetters(['hasDraftBoard'])
    },
    methods: {
        ...mapActions([
            'fetchDraftBoard',
            'fetchUser'
        ]),
        ...mapMutations(['updateBoard']),
    }
}
</script>
