<template>
  <div>
    <h1>ออเดอร์ของฉัน</h1>
    <div class="orderDes">
      <div class="orderCode">Order Code : {{ order.order_code }}</div>
      <div class="orderStatus">Waiting</div>
    </div>

    <div class="orderStepper my-4">
      <div class="step1">
        <div class="stepBtn" :class="{ active: activeStep(1) }"></div>
        <div class="stepName">1</div>
      </div>
      <div class="step2">
        <div class="stepBtn" :class="{ active: activeStep(2) }"></div>
        <div class="stepName">2</div>
      </div>
      <div class="step3">
        <div class="stepBtn" :class="{ active: activeStep(3) }"></div>
        <div class="stepName">3</div>
      </div>
      <div class="step4">
        <div class="stepBtn" :class="{ active: activeStep(4) }"></div>
        <div class="stepName">4</div>
      </div>
    </div>

    <hr />

    <div class="orderDetail">
      <step1 :order="order" />
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import step1 from "./orderDetail/step1.vue";
export default {
  components: {
    step1,
  },
  data: () => ({
    step: 1,
  }),
  computed: {
    id() {
      return this.$route.params.id;
    },
    ...mapGetters("order", {
      order: "show",
    }),
  },
  methods: {
    ...mapActions("order", {
      showOrder: "show",
    }),
    activeStep(n) {
      return this.step == n;
    },
  },
  async created() {
    await this.showOrder(this.id);
  },
};
</script>

<style lang="scss">
.orderStepper {
  display: flex;
  justify-content: space-around;

  div {
    .stepBtn {
      display: inline-block;
      border: 1px solid blue;
      width: 20px;
      height: 20px;
      padding: 0px;
      border-radius: 50%;
    }
    .active {
      background: blue;
    }
  }
}
</style>