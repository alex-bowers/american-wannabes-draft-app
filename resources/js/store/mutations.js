export default {
    setCurrentUser(state, user) {
        state.currentUser = user
    },
    updateBoard(state, board) {
        state.draftBoard = board
    },
    updateCurrentPlayer(state, player) {
        state.currentPlayer = player
    },
    updateNavigationStatus(state, status) {
        state.isShowingNavigation = status
    },
    updatePlayerModalStatus(state, status) {
        state.isShowingPlayerModal = status
    },
    updatePlayers(state, players) {
        state.players = players
    },
    updatePlayerType(state, type) {
        state.playerType = type
    },
    updateRosters(state, rosters) {
        state.rosters = rosters
    }
}
