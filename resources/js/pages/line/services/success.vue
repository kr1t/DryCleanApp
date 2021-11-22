<template>
  <div class="overflowHidden">
    <div class="centerBox mx-auto">
      <div class="imgSuccess">
        <img
          src="https://picsum.photos/seed/picsum/536/354"
          width="100"
          height="100"
        />
        <h2 class="orderNumber mt-2">หมายเลขออเดอร์ : {{ order_code }}</h2>
        <h1 class="orderThankyou">ขอบคุณที่ใช้บริการ</h1>
        <p class="orderStatusBlueS">รอการยืนยันการชำระเงิน</p>
      </div>
    </div>
    <router-link :to="{name:'line.orders'}">
          <button class="btnBotCenFixed btn-primary-lan">ออเดอร์ของฉัน</button>
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
  methods: {},
};
</script>

<style>
</style>
