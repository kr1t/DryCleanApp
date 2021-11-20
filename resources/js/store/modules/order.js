import templateFire from "./template";
const colName = "orders";
const { tState, tGetters, tMutations, tActions } = templateFire(colName);

import { findIndex, sumBy } from "lodash";
import axios from "axios";
// state
export const state = {
  ...tState
};

// getters
export const getters = {
  ...tGetters
};

// mutations
export const mutations = {
  ...tMutations
};

// actions
export const actions = {
  ...tActions
};
