export default {
    currentUserHasCurrentPick: (state, getters) => {
        if (state.currentUser && getters.nextPick) {
            return state.currentUser.id === getters.nextPick.user.id
        }
    },
    hasDraftBoard: (state) => {
        return Object.keys(state.draftBoard).length > 0
    },
    hasPlayers: (state) => {
        return Object.keys(state.players).length > 0
    },
    hasPlayerType: (state) => {
        return typeof state.playerType !== null
    },
    hasRosters: (state) => {
        return Object.keys(state.rosters).length > 0
    },
    isSignedIn: (state) => {
        return Object.keys(state.currentUser).length > 0
    },
    nextPick: (state, getters) => {
        if (getters.hasDraftBoard) {
            for (const round in state.draftBoard) {
                const hasAvailablePick = state.draftBoard[round].find(pick => {
                    if (!pick.player) {
                        return pick
                    }
                })

                if (hasAvailablePick) {
                    return hasAvailablePick
                }
            }
        }
    },
    players: (state, getters) => {
        if (getters.hasPlayerType) {
            return state.players[state.playerType]
        }
    }
}
