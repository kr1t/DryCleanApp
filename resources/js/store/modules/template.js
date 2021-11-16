import axios from "axios";

const template = collName => ({
  tState: {
    items: [],
    show: {}
  },
  tGetters: {
    items: state => state.items.data,
    show: state => state.show.item
  },
  tMutations: {
    SET_ITEMS(state, data) {
      state.items = data.items;
      console.log(state);
    },
    SET_SHOW(state, data) {
      state.show = data;
    }
  },
  tActions: {
    async index({ commit }, { page = 1, item = 10 }) {
      const { data } = await axios.get(`/api/${collName}`, { page, item });
      commit("SET_ITEMS", data);
    },
    async show({ commit }, id) {
      const { data } = await axios.get(`/api/${collName}/${id}`);
      commit("SET_SHOW", data);
    }
  }
});

export default template;
