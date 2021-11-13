import templateFire from "./template";
const colName = "service_categories";
const { tState, tGetters, tMutations, tActions } = templateFire(colName);

import { findIndex, sumBy } from "lodash";
import axios from "axios";
// state
export const state = {
  ...tState,
  idActive: null,
  information: {
    first_name: "",
    last_name: "",
    tel: "",
    address: "",
    date: "",
    time: ""
    // first_name: "Krittanai",
    // last_name: "Muangnoi",
    // tel: "0964759651",
    // address: "dqwwq",
    // date: "2021-11-11",
    // time: "03:26"
  },
  informationSender: {}
};

// getters
export const getters = {
  ...tGetters,
  activeName: state =>
    state.items.data.find(el => el.id == state.idActive).name,
  services: state =>
    state.items.data.find(el => el.id == state.idActive).services,
  carts: state => {
    let services = [];

    if (state.items.data) {
      for (let el of state.items.data) {
        services.push(...el.services.filter(service => service.model > 0));
      }
    }

    let amount = sumBy(services, "model");
    let priceAll = sumBy(services, service => service.model * service.price);

    return { services, amount, priceAll };
  },
  information: state => state.information,
  informationSender: state => state.informationSender
};

// mutations
export const mutations = {
  ...tMutations,
  SET_CATEGORY_ACTIVE(state, categoryActive) {
    state.idActive = categoryActive;
  },
  INCREASE_SERVICE_MODEL(state, service) {
    let activeIndex = findIndex(state.items.data, {
      id: state.idActive
    });
    let activeService = findIndex(state.items.data[activeIndex].services, {
      id: service.id
    });
    state.items.data[activeIndex].services[activeService].model++;
  },
  DECREASE_SERVICE_MODEL(state, service) {
    let activeIndex = findIndex(state.items.data, {
      id: state.idActive
    });
    let activeService = findIndex(state.items.data[activeIndex].services, {
      id: service.id
    });
    state.items.data[activeIndex].services[activeService].model--;
  },
  DEL_SERVICE_MODEL(state, service) {
    let activeIndex = findIndex(state.items.data, {
      id: state.idActive
    });
    let activeService = findIndex(state.items.data[activeIndex].services, {
      id: service.id
    });
    state.items.data[activeIndex].services[activeService].model = 0;
  },
  ADD_INFORMATION(state, form) {
    state.information = form;
  },
  ADD_INFORMATION_SENDER(state, form) {
    state.informationSender = form;
  }
};

// actions
export const actions = {
  ...tActions,
  setCategoryActive({ commit }, activeId) {
    commit("SET_CATEGORY_ACTIVE", activeId);
  },
  addInformation({ commit }, form) {
    commit("ADD_INFORMATION", form);
  },
  addInformationSender({ commit }, form) {
    commit("ADD_INFORMATION_SENDER", form);
  },
  async makeOrder({ state, getters }) {
    const { information, informationSender } = state;
    const { carts } = getters;
    const { data } = await axios.post("/api/orders", {
      information,
      informationSender,
      carts
    });
    console.log(data);
  }
};
