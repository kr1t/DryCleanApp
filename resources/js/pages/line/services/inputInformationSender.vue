<template>
  <div>
    <h2>จัดส่ง</h2>
    <div class="selectSenderType">
      <button :class="checkActiveClass('1')" @click="setSelectName('1')">
        ที่อยู่นัดรับ
      </button>
      <button :class="checkActiveClass('2')" @click="setSelectName('2')">
        เพิ่มที่อยู่ใหม่
      </button>
    </div>
    <form>
      <div class="form-group">
        <label for="first_name" class="form-label">ชื่อ</label>
        <input
          type="text"
          name="first_name"
          required
          v-model="form.first_name"
          :disabled="selectName == '1'"
        />
      </div>
      <div class="form-group">
        <label for="last_name" class="form-label">นามสกุล</label>
        <input
          type="text"
          name="last_name"
          required
          v-model="form.last_name"
          :disabled="selectName == '1'"
        />
      </div>
      <div class="form-group">
        <label for="tel" class="form-label">เบอร์โทร</label>
        <input
          type="tel"
          name="tel"
          required
          v-model="form.tel"
          :disabled="selectName == '1'"
        />
      </div>
      <div class="form-group">
        <label for="address" class="form-label">ที่อยู่</label>
        <textarea
          class="form-control"
          rows="3"
          required
          v-model="form.address"
          :disabled="selectName == '1'"
        ></textarea>
      </div>

      <div class="form-group">
        <label for="date" class="form-label">วันที่</label>
        <input type="date" name="date" required v-model="form.date" />
      </div>

      <div class="form-group">
        <label for="time" class="form-label">เวลา</label>
        <input type="time" name="time" required v-model="form.time" />
      </div>
    </form>

    <div class="row p-2">
      <div class="col-6">
        <button @click="$emit('changePage', 'cartList')" class="w-100">
          กลับ
        </button>
      </div>
      <div class="col-6">
        <button @click="add()" class="w-100" :disabled="checkEmpty()">
          ถัดไป
        </button>
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
