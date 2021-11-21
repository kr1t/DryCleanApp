<template>
  <div class="container mt-4">
    <h1>ออเดอร์ของฉัน</h1>
    <div class="orderDes">
      <div class="itemOrderDetail8">
        <div class="orderCode">Order Code : {{ order.order_code }} </div>
      </div>
      <div class="itemOrderDetail4">
        <div class="orderStatus">
          <span class="badge bgWaiting">Waiting</span>
        </div>
      </div>
    </div>

    <div class="orderStepper my-4">
      <div class="step1">
        <div class="step stepBox">
          <div class="stepBtn" :class="{ active: activeStep(1) }"></div>
        </div>
        <div class="stepName">นัดรับ</div>
      </div>
      <div class="step2">
        <div class="step stepBox">
          <div class="stepBtn" :class="{ active: activeStep(2) }"></div>
        </div>
        <div class="stepName">ดำเนินการ</div>
      </div>
      <div class="step3">
        <div class="step stepBox">
          <div class="stepBtn" :class="{ active: activeStep(3) }"></div>
        </div>
        <div class="stepName">เสร็จสิ้น</div>
      </div>
      <div class="step4">
        <div class="step stepBox">
          <div class="stepBtn" :class="{ active: activeStep(4) }"></div>
        </div>
        <div class="stepName">นำส่ง</div>
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
