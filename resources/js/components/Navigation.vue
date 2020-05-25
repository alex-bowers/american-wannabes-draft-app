<template>
    <div v-if="signedIn" class="navigation">
        <div class="navigation--hamburger">
            <button @click="updateNavigationStatus()"
                    :class="{'is-active': navigationStatus}"
                    class="hamburger hamburger--elastic"
                    type="button"
                    aria-label="Menu"
                    aria-controls="navigation"
                    aria-expanded="true/false">
                <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <transition name="menu-slide-in">
            <div v-if="navigationStatus" class="navigation--pages">
                <router-link :to="'home'" @click.native="updateNavigationStatus()">Home</router-link>
                <router-link :to="'draft-board'" @click.native="updateNavigationStatus()">Draft Board</router-link>
                <router-link :to="'players'" @click.native="updateNavigationStatus()">Players</router-link>
                <router-link :to="'rosters'" @click.native="updateNavigationStatus()">Rosters</router-link>
            </div>
        </transition>
    </div>
</template>
<script>
import { mapGetters } from "vuex";

export default {
    computed: {
        ...mapGetters(["navigationStatus", "signedIn"])
    },
    methods: {
        updateNavigationStatus() {
            this.$store.commit(
                "updateNavigationStatus",
                !this.navigationStatus
            );
        }
    }
};
</script>
