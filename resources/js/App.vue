<template>
    <div id="app">
        <navigation></navigation>

        <router-view></router-view>
    </div>
</template>

<script>
import Vue from "vue";
import { mapGetters } from "vuex";

import Navigation from "./components/Navigation.vue";

export default {
    components: {
        Navigation
    },
    mounted() {
        Vue.nextTick(() => {
            this.fetchUser();

            if (!this.hasDraftBoard) {
                this.fetchDraftBoard();
            }
        });
    },
    computed: {
        ...mapGetters(["hasDraftBoard"])
    },
    methods: {
        fetchDraftBoard() {
            window.axios.get("/api/draft-board").then(response => {
                const data = response.data;

                if (data) {
                    this.$store.commit("updateBoard", data);
                }
            });
        },
        fetchUser() {
            window.axios.get("/api/get-user").then(response => {
                const user = response.data;
                if (typeof user === "object") {
                    this.$store.state.user = user;
                }
            });
        }
    }
};
</script>

<style scoped>
</style>
