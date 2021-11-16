<template>
  <div>
    Orders
    <OrderList />
  </div>
</template>

<script>
import { mapActions } from "vuex";
import OrderList from "./orderList.vue";
export default {
  components: {
    OrderList,
  },
  methods: {
    ...mapActions("order", {
      fetchOrder: "index",
    }),
  },
  async created() {
    await this.fetchOrder({});
  },
};
</script>

<style>
</style>