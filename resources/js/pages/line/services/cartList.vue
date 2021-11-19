<template>
  <div class="container">
    <h1 class="h1-laundry my-4">ชำระเงิน</h1>
    <h2 class="title-product">{{ carts.amount }} ชิ้น</h2>
    <div class="cartAll">
      <serviceInputComponent
        v-for="(service, index) in carts.services"
        :key="index"
        :service="service"
        :showDelete="carts.services.length > 1"
      />

      <p class="my-3 total-price-box">
        <span class="total-price-title">รวม</span>
        <span class="total-price">{{ carts.priceAll }} บาท</span>
      </p>
    </div>
    <hr />

    <div class="uploadServiceImage ">
      <p class="text-center">อัปโหลดรูปภาพเพื่อยืนยัน ออร์เดอร์</p>
      <label for="file-upload" class="laundry-file-upload">
        <i class="fa fa-cloud-upload"></i> อัปโหลดสลิป
      </label>
      <input id="file-upload" type="file"/>

    </div>

    <div class="btnBottomRow">
      <div class="row p-2">
      <div class="col-6">
        <button @click="$emit('changePage', 'selectService')" class="w-100 btn-primary-lan">
          กลับ
        </button>
      </div>
      <div class="col-6">
        <button @click="$emit('changePage', 'inputInformation')" class="w-100 btn-primary-lan">
          ถัดไป
        </button>
      </div>
    </div>
    </div>

  </div>
</template>

<script>
import { mapGetters } from "vuex";
import serviceInputComponent from "./selectService/component/serviceInput.vue";

export default {
  components: {
    serviceInputComponent,
  },
  computed: {
    ...mapGetters("service_category", {
      carts: "carts",
    }),
  },
};
</script>
<style>
</style>
