<template>
  <div>
    <div class="serviceLeft">{{ service.name }}</div>
    <div class="serviceRight">
      <span class="price">{{ service.price }} บาท</span>
      <span class="inputMinMax">
        <button
          @click="DECREASE_SERVICE_MODEL(service)"
          :disabled="service.model < 1"
          v-if="!hideInput"
        >
          -
        </button>
        <span class="amountModel">{{ service.model }}</span>
        <button @click="INCREASE_SERVICE_MODEL(service)" v-if="!hideInput">
          +
        </button>

        <button @click="DEL_SERVICE_MODEL(service)" v-if="showDelete">
          delete
        </button>
      </span>
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
