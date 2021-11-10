<template>
  <div>
    <h2>{{ carts.amount }} ชิ้น</h2>
    <hr />
    <div class="cartAll">
      <serviceInputComponent
        v-for="(service, index) in carts.services"
        :key="index"
        :service="service"
        :showDelete="carts.services.length > 1"
      />

      รวม {{ carts.priceAll }} บาท
    </div>
    <hr />

    <div class="uploadServiceImage">
      อัปโหลดรูปภาพเพื่อยืนยัน ออร์เดอร์
      <input type="file" />
    </div>

    <div class="row p-2">
      <div class="col-6">
        <button @click="$emit('changePage', 'selectService')" class="w-100">
          กลับ
        </button>
      </div>
      <div class="col-6">
        <button @click="$emit('changePage', 'inputInformation')" class="w-100">
          ถัดไป
        </button>
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
