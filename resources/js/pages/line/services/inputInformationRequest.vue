<template>
  <div class="container">
    <h2 class="h1-laundry">นัดรับ</h2>

    <form class="form-address">
      <div class="form-group">
        <p for="first_name" class="form-label">ชื่อ</p>
        <input
        class="inputLaundry"
          type="text"
          name="first_name"
          required
          v-model="form.first_name"
        />
      </div>
      <div class="form-group">
        <p for="last_name" class="form-label">นามสกุล</p>
        <input class="inputLaundry" type="text" name="last_name" required v-model="form.last_name" />
      </div>
      <div class="form-group">
        <p for="tel" class="form-label">เบอร์โทร</p>
        <input class="inputLaundry" type="tel" name="tel" required v-model="form.tel" />
      </div>
      <div class="form-group">
        <p for="address" class="form-label">ที่อยู่</p>
        <textarea
          class="form-control inputLaundry"
          rows="3"
          required
          v-model="form.address"
        ></textarea>
      </div>

      <div class="form-group">
        <p for="date" class="form-label ">วันที่</p>
        <input class="inputLaundry" type="date" name="date" required v-model="form.date" />
      </div>

      <div class="form-group">
        <p for="time" class="form-label">เวลา</p>
        <input class="inputLaundry" type="time" name="time" required v-model="form.time" />
      </div>

    </form>

    <div class="btnBottomRow">
    <div class="row p-2">
      <div class="col-6">
        <button @click="$emit('changePage', 'cartList')" class="w-100 btn-primary-lan">
          กลับ
        </button>
      </div>
      <div class="col-6">
        <button @click="add()" class="w-100 btn-primary-lan" :disabled="checkEmpty()">
          ถัดไป
        </button>
      </div>
    </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
export default {
  data() {
    return {
      form: {
        first_name: "",
        last_name: "",
        tel: "",
        address: "",
        date: "",
        time: "",
      },
    };
  },
  computed: {
    ...mapGetters("service_category", {
      information: "information",
    }),
  },
  methods: {
    ...mapActions("service_category", {
      addInformation: "addInformation",
    }),
    add() {
      this.addInformation(this.form);
      this.$emit("changePage", "inputInformationSender");
    },
    checkEmpty() {
      let isV = false;
      for (let f in this.form) {
        if (!this.form[f]) {
          isV = true;
        }
      }
      return isV;
    },
  },
  created() {
    for (let f in this.form) {
      this.form[f] = this.information[f];
    }
  },
};
</script>

<style>
</style>
