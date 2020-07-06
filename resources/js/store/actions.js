import router from '../router/index';

export default {
    fetchDraftBoard({ commit }) {
        window.axios.get('/api/draft-board').then(response => {
            const board = response.data

            if (board) {
                commit('updateBoard', board)
            }
        })
    },
    fetchPlayers({ commit }) {
        window.axios.get('/api/players')
            .then(response => {
                const players = response.data

                if (players) {
                    commit('updatePlayers', players)
                }
            })
    },
    fetchRosters({commit}) {
        window.axios
            .get('/api/rosters')
            .then((response) => {
                const rosters = response.data.data

                if (rosters) {
                    commit('updateRosters', rosters)
                }
            })
    },
    fetchUser({ commit }) {
        window.axios.get('/api/get-user')
            .then(response => {
                const user = response.data

                if (typeof user === 'object') {
                    commit('setCurrentUser', user)
                }
            })
    },
    openPlayerModal({ commit }, player) {
        commit('updateCurrentPlayer', player)
        commit('updatePlayerModalStatus', true)
    },
    selectPlayerFromDraft({commit, getters, state}) {
        window.axios.post(
            `/api/pick/${getters.nextPick.id}/select-player/${state.currentPlayer.id}`
        )
        .then(({ data }) => {
            if (data.success) {
                commit('addSelectedPlayerToDraftBoard', data)
                commit('addSelectedPlayerToRoster', data)
                commit('removeSelectedPlayerFromAvailablePlayers', data)

                // Reset some state values.
                commit('updatePlayerModalStatus', false)
                commit('updateCurrentPlayer', null)
                router.push('/draft-board')
            }
        }).catch((error) => {
            // todo: Show error message.
        });
    }
}
