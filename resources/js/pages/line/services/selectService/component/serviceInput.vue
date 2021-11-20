<template>
  <div>
    <div class="gridService">
      <div class="item">
        <div class="serviceLeft product-name">{{ service.name }}</div>
      </div>
      <div class="item text-center">
        <span class="price product-price">{{ service.price }} บาท</span>
      </div>
      <div class="item">
        <div class="gridServiceInput">
          <div class="item2">
            <button
              class="btn-product"
              @click="DECREASE_SERVICE_MODEL(service)"
              :disabled="service.model < 1"
              v-if="!hideInput"
            >
              -
            </button>
          </div>

          <div class="item2">
            <span class="amountModel product-amount">{{ service.model }}</span>
          </div>

          <div class="item2">
            <button
              class="btn-product"
              @click="INCREASE_SERVICE_MODEL(service)"
              v-if="!hideInput"
            >
              +
            </button>
          </div>

          <div class="item2">
            <button
              class="btn-product-del"
              @click="DEL_SERVICE_MODEL(service)"
              v-if="showDelete"
            >
              <i class="mdi mdi-delete-outline" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapMutations } from "vuex";
export default {
  props: {
    service: {
      type: Object,
    },
    showDelete: {
      type: Boolean,
      default: false,
    },
    hideInput: {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    ...mapMutations("service_category", {
      INCREASE_SERVICE_MODEL: "INCREASE_SERVICE_MODEL",
      DECREASE_SERVICE_MODEL: "DECREASE_SERVICE_MODEL",
      DEL_SERVICE_MODEL: "DEL_SERVICE_MODEL",
    }),
    inc(service) {
      this.increase(service);
      this.service.model++;
    },
  },
};
</script>

<style>
</style>
