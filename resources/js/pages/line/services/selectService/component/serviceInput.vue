<template>
  <div>
    <div class="row">
      <div class="col-5 mb-3"><div class="serviceLeft product-name">{{ service.name }}</div></div>
      <div class="col-3"><span class="price product-price">{{ service.price }} บาท</span></div>
      <div class="col-4">
        <div class="row">
            <div class="col-3 text-left">
              <button class="btn-product "
                @click="DECREASE_SERVICE_MODEL(service)"
                v-if="!hideInput">
                -
              </button>
            </div>

            <div class="col-3 text-left">
              <span class="amountModel product-amount">{{ service.model }}</span>
            </div>

            <div class="col-3 text-left">
              <button class="btn-product"
                @click="INCREASE_SERVICE_MODEL(service)"
                v-if="!hideInput">
                +
              </button>
            </div>

            <button @click="DEL_SERVICE_MODEL(service)" v-if="showDelete">
              delete
            </button>
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
