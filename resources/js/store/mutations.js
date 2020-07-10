export default {
    addSelectedPlayerToDraftBoard(state, payload) {
        const currentRound = payload.pick.round

        state.draftBoard[currentRound][payload.pick.number].player = payload.player
    },
    addSelectedPlayerToRoster(state, payload) {
        // I don't need to update rosters if they haven't been fetched yet.
        if (state.rosters.length) {
            const rosterId = state.rosters.findIndex((roster) => roster.id === state.currentUser.id)

            state.rosters[rosterId].players[payload.player.position].push(payload.player)
        }
    },
    removeSelectedPlayerFromAvailablePlayers(state, payload) {
        const rookieOrVeteran = payload.player.rookie ? 'rookies' : 'veterans'
        const playerPosition = payload.player.position

        const playerId = state.players[rookieOrVeteran][playerPosition].findIndex((player) => player.id === payload.player.id)

        state.players[rookieOrVeteran][playerPosition].splice(playerId, 1)
    },
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
