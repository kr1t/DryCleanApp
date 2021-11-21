<template>
  <div class="cartFloat">
    <button
      class="btn"
      :class="carts.amount ? 'btn-primary' : 'btn-secondary'"
      @click="gotoCartList()"
      >
      <i class="mdi mdi-cart-variant" aria-hidden="true"></i>

      <span class="cartAmountFloat" v-if="carts.amount > 0">{{ this.carts.amount }}</span>
    </button>
  </div>

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
