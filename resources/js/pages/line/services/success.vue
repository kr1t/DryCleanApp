<template>
  <div>
    Success
    {{ order_code }}

    <router-link :to="{ name: 'line.orders' }">
      <button class="btn btn-primary">ออเดอร์ของฉัน</button>
    </router-link>
  </div>
</template>

<script>
import { mapState } from "vuex";
export default {
  computed: {
    ...mapState("service_category", {
      order_code: "order_code",
    }),
  },
};
</script>

<style>
</style>
