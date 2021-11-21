<template>
  <div class="container">
    <h1 class="h1-laundry">ออเดอร์ของฉัน</h1>
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
