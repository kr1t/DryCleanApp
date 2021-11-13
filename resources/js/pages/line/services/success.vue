<template>
  <div>
    Success
    {{ order_code }}
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
