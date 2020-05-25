import { state } from "./state";
import { Store } from "vuex";

export const getters = {
    hasDraftBoard: state => {
        return Object.keys(state.draftBoard).length > 0;
    },
    hasPlayers: state => {
        return Object.keys(state.players).length > 0;
    },
    hasPlayerType: state => {
        return typeof state.playerType !== null;
    },
    hasRosters: state => {
        return Object.keys(state.rosters).length > 0;
    },
    signedIn: state => {
        return Object.keys(state.user).length > 0;
    },
    draftBoard: state => {
        return state.draftBoard;
    },
    nextPick: (state, getters) => {
        if (getters.hasDraftBoard) {
            for (const round in state.draftBoard) {
                const hasAvailablePick = state.draftBoard[round].find(pick => {
                    if (!pick.player) {
                        return pick;
                    }
                });

                if (hasAvailablePick) {
                    return hasAvailablePick;
                }
            }
        }
    },
    user: state => {
        return state.user;
    },
    userHasCurrentPick: (state, getters) => {
        if (state.user && getters.nextPick) {
            return state.user.id === getters.nextPick.user.id;
        }
    },
    players: (state, getters) => {
        if (getters.hasPlayerType) {
            return state.players[state.playerType];
        }
    },
    allRosters: state => {
        return state.rosters.data;
    },
    navigationStatus: state => {
        return state.showNavigation;
    },
    currentPlayer: state => {
        return state.currentPlayer;
    },
    showPlayerModal: status => {
        return state.showPlayerModal;
    }
};
