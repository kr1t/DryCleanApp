<template>
  <div class="container">
    <h1 class="h1-laundry">ชำระเงิน</h1>
    <h2 class="title-product">{{ carts.amount }} ชิ้น</h2>
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
      <h6 class="textSecLaundry">ที่อยู่นัดรับ</h6>
      <p class="pLine">
        {{ information.first_name }} {{ information.last_name }}
        <br>
        {{ information.tel }}
      </p>
      <p>{{ information.address }}</p>
    </div>
    <hr />
    <div class="informationSender">
      <h6 class="textSecLaundry">ที่อยู่จัดส่ง</h6>
      <p class="pLine">
        {{ informationSender.first_name }} {{ informationSender.last_name }}
        <br>
        {{ informationSender.tel }}
      </p>
      <p>{{ informationSender.address }}</p>
    </div>
    <hr />
    <div class="imageOrder">
      <p>รูปภาพยืนยัน ออร์เดอร์</p>
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
    <p class="my-3 total-price-box">
        <span class="total-price-title">รวม</span>
        <span class="total-price">{{ carts.priceAll }} บาท</span>
      </p>
    <div class="btnBottomRow">
      <div class="row p-2">
      <div class="col-6">
        <button @click="$emit('changePage', 'inputInformation')" class="w-100 btn-primary-lan">
          กลับ
        </button>
      </div>
      <div class="col-6">
        <button @click="confirmOrder()" class="w-100 btn-primary-lan">ยืนยันออร์เดอร์</button>
      </div>
      </div>
    </div>

  </div>
</template>


<script>
import { mapActions, mapGetters } from "vuex";
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
  methods: {
    ...mapActions("service_category", {
      makeOrder: "makeOrder",
    }),
    confirmOrder() {
      this.$swal
        .fire({
          title: "ต้องการยืนยันออร์เดอร์ ?",
          text: "เมื่อทำการยืนยันแล้ว สามารถยกเลิกรายการ หากยังไม่ได้รับการยืนยันรายการจากระบบ",
          showCancelButton: true,
          cancelButtonText: "ยกเลิก",
          confirmButtonColor: "#233AA6",
          cancelButtonColor: "#F78F1E",
          confirmButtonText: "ยืนยัน",
          class:"alertConfirm",
        })
        .then(async (result) => {
          if (result.isConfirmed) {
            const { order_code } = await this.makeOrder();
            if (order_code) {
              this.$emit("changePage", "success");
            }
          }
        });
    },
  },
};
</script>

<style>
</style>
