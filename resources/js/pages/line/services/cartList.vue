<template>
  <div class="container">
    <h1 class="h1-laundry">ชำระเงิน</h1>
    <h2 class="title-product"  v-if="carts.amount > 0">{{ carts.amount }} ชิ้น</h2>
    <div class="cartAll">
      <div v-if="carts.amount > 0">
         <serviceInputComponent
        v-for="(service, index) in carts.services"
        :key="index"
        :service="service"
        showDelete
      />
      </div>

      <div v-else class="text-center">
        <h4 class="py-5">กรุณาเพิ่มสินค้าเพื่อทำรายการต่อ</h4>
      </div>

      <p class="my-3 total-price-box"  v-if="carts.amount > 0">
        <span class="total-price-title">รวม</span>
        <span class="total-price">{{ carts.priceAll }} บาท</span>
      </p>
    </div>
    <hr />

    <div class="uploadServiceImage"  v-if="carts.amount > 0">
      <p class="text-center">อัปโหลดรูปภาพเพื่อยืนยัน ออร์เดอร์</p>
      <label for="file-upload" class="laundryFileUpload">
        <i class="mdi mdi-tray-arrow-up uploadIcon" aria-hidden="true"></i
        ><span class="uploadText">อัปโหลดสลิป</span>
      </label>
      <input id="file-upload" type="file" />
    </div>

    <div class="btnBottomRow">
      <div class="row p-2">
        <div class="col-6">
          <button
            @click="$emit('changePage', 'selectService')"
            class="w-100 btn-primary-lan"
          >
            กลับ
          </button>
        </div>
        <div class="col-6">
          <button
            @click="$emit('changePage', 'inputInformation')"
            class="w-100 btn-primary-lan"
            :disabled="carts.amount < 1"
          >
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
    serviceInputComponent
  },
  computed: {
    ...mapGetters("service_category", {
      carts: "carts"
    })
  }
};
</script>
<style></style>
