export const mutations = {
    updatePlayerModalStatus(state, status) {
        state.showPlayerModal = status;
    },
    updateBoard(state, board) {
        state.draftBoard = board;
    },
    updateCurrentPlayer(state, player) {
        state.currentPlayer = player;
    },
    updateNavigationStatus(state, status) {
        state.showNavigation = status;
    },
    updatePlayers(state, players) {
        state.players = players;
    },
    updatePlayerType(state, type) {
        state.playerType = type;
    },
    updateRosters(state, rosters) {
        state.rosters = rosters;
    },
    updateUser(state, user) {
        state.user = user;
    }
};
