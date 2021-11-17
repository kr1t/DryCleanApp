<template>
  <div class="container">
    <h2 class="h1-laundry my-4">จัดส่ง</h2>
    <div class="selectSenderType">
      <div class="row">
        <div class="col-6">
          <button class="w-100" :class="checkActiveClass('1')" @click="setSelectName('1')">
            ที่อยู่นัดรับ
          </button>
        </div>
        <div class="col-6">
          <button class="w-100" :class="checkActiveClass('2')" @click="setSelectName('2')">
            เพิ่มที่อยู่ใหม่
          </button>
        </div>
      </div>
    </div>
    <form class="form-address">
      <div class="form-group">
        <p for="first_name" class="form-label">ชื่อ</p>
        <input
        class="inputLaundry"
          type="text"
          name="first_name"
          required
          v-model="form.first_name"
          :disabled="selectName == '1'"
        />
      </div>
      <div class="form-group">
        <p for="last_name" class="form-label">นามสกุล</p>
        <input
        class="inputLaundry"
          type="text"
          name="last_name"
          required
          v-model="form.last_name"
          :disabled="selectName == '1'"
        />
      </div>
      <div class="form-group">
        <p for="tel" class="form-label">เบอร์โทร</p>
        <input
        class="inputLaundry"
          type="tel"
          name="tel"
          required
          v-model="form.tel"
          :disabled="selectName == '1'"
        />
      </div>
      <div class="form-group">
        <p for="address" class="form-label">ที่อยู่</p>
        <textarea
          class="form-control inputLaundry"
          rows="3"
          required
          v-model="form.address"
          :disabled="selectName == '1'"
        ></textarea>
      </div>

      <div class="form-group">
        <p for="date" class="form-label">วันที่</p>
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
        <button @click="$emit('changePage', 'inputInformation')" class="w-100 btn-primary-lan">
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
      selectName: 1,
    };
  },
  computed: {
    ...mapGetters("service_category", {
      information: "information",
    }),
  },
  methods: {
    ...mapActions("service_category", {
      addInformation: "addInformationSender",
    }),
    add() {
      this.addInformation(this.form);
      this.$emit("changePage", "paymentConfirm");
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
    setSelectName(name) {
      this.selectName = name;
      if (name == "1") {
        for (let f in this.form) {
          this.form[f] = this.information[f];
          this.form.date = "";
          this.form.time = "";
        }
      }
      if (name == "2") {
        for (let f in this.form) {
          this.foxrm[f] = "";
        }
      }
    },
    checkActiveClass(name) {
      return this.selectName == name ? "active" : "";
    },
  },
  created() {
    for (let f in this.form) {
      this.form[f] = this.information[f];
    }
    this.form.date = "";
    this.form.time = "";
  },
};
</script>

<style>
.selectSenderType button.active {
  background: blue;
}
</style>
