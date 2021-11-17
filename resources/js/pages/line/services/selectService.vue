<template>
  <div class="container">
    <h1 class="h1-laundry my-4">เลือกบริการ</h1>
    <selectServiceByGender :services="services" :categoryName="activeName" />
    <div class="btnBottomRow">
    <div class="row p-2">
      <div class="col-6">
        <button @click="$emit('changePage', 'selectCategory')" class="w-100 btn-primary-lan">
          กลับ
        </button>
      </div>
      <div class="col-6">
        <button
          @click="$emit('changePage', 'cartList')"
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
import selectServiceByGender from "./selectService/selectServiceByGender.vue";
export default {
  components: {
    selectServiceByGender,
  },
  computed: {
    ...mapGetters("service_category", {
      services: "services",
      activeName: "activeName",
      carts: "carts",
    }),
  },
};
</script>

<style>
</style>
