<template>
  <div>
    <selectCategory
      v-if="currentPage == 'selectCategory'"
      @changePage="setCurrentPage"
    />
    <selectService
      @changePage="setCurrentPage"
      v-if="currentPage == 'selectService'"
    />
    <cartList @changePage="setCurrentPage" v-if="currentPage == 'cartList'" />
    <inputInformationRequest
      @changePage="setCurrentPage"
      v-if="currentPage == 'inputInformation'"
    />
    <inputInformationSender
      @changePage="setCurrentPage"
      v-if="currentPage == 'inputInformationSender'"
    />
    <paymentConfirm
      @changePage="setCurrentPage"
      v-if="currentPage == 'paymentConfirm'"
    />

    <cartFloat
      @changePage="setCurrentPage"
      v-if="currentPage == 'selectService' || currentPage == 'selectCategory'"
    />
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import selectCategory from "./selectCategory.vue";
import selectService from "./selectService.vue";
import cartList from "./cartList.vue";
import inputInformationRequest from "./inputInformationRequest.vue";
import inputInformationSender from "./inputInformationSender.vue";

import paymentConfirm from "./paymentConfirm.vue";

import cartFloat from "./selectService/component/cartFloat.vue";

export default {
  data: () => ({
    currentPage: "selectCategory",
  }),
  components: {
    selectCategory,
    selectService,
    cartList,
    inputInformationRequest,
    inputInformationSender,
    paymentConfirm,
    cartFloat,
  },
  computed: {
    ...mapGetters("service_category", {
      serviceCategory: "items",
    }),
  },
  methods: {
    ...mapActions("service_category", {
      fetchServiceCategory: "index",
    }),
    setCurrentPage(pageName) {
      this.currentPage = pageName;
    },
  },
  async created() {
    await this.fetchServiceCategory();
  },
};
</script>

<style>
</style>
