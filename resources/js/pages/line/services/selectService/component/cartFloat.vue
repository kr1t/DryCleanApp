<template>
  <button
    class="btn"
    :class="carts.amount ? 'btn-primary' : 'btn-secondary'"
    style="position: fixed; right: 30px; bottom: 30px"
    @click="gotoCartList()"
  >
    {{ carts.amount }}
  </button>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters("service_category", {
      carts: "carts",
    }),
  },
  methods: {
    gotoCartList() {
      if (this.carts.amount) {
        this.$emit("changePage", "cartList");
      }
    },
  },
};
</script>

<style>
</style>
