<template>
  <div>
    <h1>ชำระเงิน</h1>
    <h2>{{ carts.amount }} ชิ้น</h2>
    <hr />
    <div class="cartAll">
      <serviceInputComponent
        v-for="(service, index) in carts.services"
        :key="index"
        :service="service"
        hideInput
      />
    </div>

    <hr />
    <div class="informationReq">
      <h6 class="text-secondary">ที่อยู่นัดรับ</h6>
      {{ information.first_name }} {{ information.last_name }} <br />
      {{ information.tel }} <br />
      {{ information.address }}
      Line Man
    </div>
    <hr />
    <div class="informationSender">
      <h6 class="text-secondary">ที่อยู่จัดส่ง</h6>
      {{ informationSender.first_name }} {{ informationSender.last_name }}
      <br />
      {{ informationSender.tel }} <br />
      {{ informationSender.address }}
      Line Man
    </div>
    <hr />
    <div class="imageOrder">
      รูปภาพยืนยัน ออร์เดอร์
      <img src="https://picsum.photos/seed/picsum/536/354" width="100" />
    </div>
    <hr />
    <!-- <div class="paymentMethod">
      <h3>เลือกช่องทางชำระเงิน</h3>
      <div class="inputPayment">
        <div class="form-check" v-for="(e, i) in paymentMethod" :key="i">
          <input
            class="form-check-input"
            type="radio"
            name="pmRadio"
            :id="e.id"
            :value="e.id"
            :disabled="e.disable"
            v-model="form.payment_method"
          />
          <label class="form-check-label" for="pmRadio">
            {{ e.name }}
          </label>
        </div>
      </div>
    </div> -->
    <div class="subTotal">รวม {{ carts.priceAll }} บาท</div>
    <div class="row p-2">
      <div class="col-6">
        <button @click="$emit('changePage', 'inputInformation')" class="w-100">
          กลับ
        </button>
      </div>
      <div class="col-6">
        <button @click="$emit('changePage', 'success')" class="w-100">
          ยืนยันออร์เดอร์
        </button>
      </div>
    </div>
  </div>
</template>


<script>
import { mapGetters } from "vuex";
import serviceInputComponent from "./selectService/component/serviceInput.vue";

export default {
  data: () => ({
    paymentMethod: [
      { id: 1, name: "บัตรเครดิต", disable: true },
      { id: 2, name: "QR Code" },
      { id: 3, name: "ชำระปลายทาง" },
    ],
    form: {
      payment_method: 2,
    },
  }),
  components: {
    serviceInputComponent,
  },
  computed: {
    ...mapGetters("service_category", {
      carts: "carts",
      information: "information",
      informationSender: "informationSender",
    }),
  },
};
</script>

<style>
</style>
