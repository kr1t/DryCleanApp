<template>
  <div>
    <h2>นัดรับ</h2>

    <form>
      <div class="form-group">
        <label for="first_name" class="form-label">ชื่อ</label>
        <input
          type="text"
          name="first_name"
          required
          v-model="form.first_name"
        />
      </div>
      <div class="form-group">
        <label for="last_name" class="form-label">นามสกุล</label>
        <input type="text" name="last_name" required v-model="form.last_name" />
      </div>
      <div class="form-group">
        <label for="tel" class="form-label">เบอร์โทร</label>
        <input type="tel" name="tel" required v-model="form.tel" />
      </div>
      <div class="form-group">
        <label for="address" class="form-label">ที่อยู่</label>
        <textarea
          class="form-control"
          rows="3"
          required
          v-model="form.address"
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

      <div class="inputExpress">
        <div class="form-check" v-for="(e, i) in express" :key="i">
          <input
            class="form-check-input"
            type="radio"
            name="expressRadio"
            :id="e.id"
            :value="e.id"
            v-model="form.express_id"
          />
          <label class="form-check-label" for="expressRadio">
            {{ e.name }}
          </label>
        </div>
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
        express_id: 1,
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
