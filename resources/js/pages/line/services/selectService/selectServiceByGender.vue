<template>
  <div>
    <div class="selectGender">
      <button :class="checkActiveClass('all')" @click="setSelectName('all')">
        ทั้งหมด
      </button>
      <button :class="checkActiveClass('m')" @click="setSelectName('m')">
        ชาย
      </button>
      <button :class="checkActiveClass('f')" @click="setSelectName('f')">
        หญิง
      </button>
    </div>

    <div class="serviceLists">
      <div class="serviceListsAll">
        <div class="selectMale" v-if="selectName != 'f'">
          <div class="title-product"> {{ categoryName }} (ชาย) </div>
          <serviceInputComponent
            v-for="(service, index) in serviceFilterByGender('m')"
            :key="index"
            :service="service"
          />
          <hr />
        </div>
        <div class="selectMale" v-if="selectName != 'm'">
          <div class="title-product"> {{ categoryName }} (หญิง) </div>
          <serviceInputComponent
            v-for="(service, index) in serviceFilterByGender('f')"
            :key="index"
            :service="service"
          />
          <hr />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import serviceInputComponent from "./component/serviceInput.vue";
export default {
  components: {
    serviceInputComponent,
  },
  props: {
    services: {
      type: Array,
      default: [],
    },
    categoryName: {
      type: String,
    },
  },
  data: () => ({
    selectName: "all",
  }),
  methods: {
    setSelectName(name) {
      this.selectName = name;
    },
    checkActiveClass(name) {
      return this.selectName == name ? "active" : "";
    },
    serviceFilterByGender(n) {
      if (this.selectName == "all") {
        return this.services;
      }
      return this.services.filter((el) => el.type == n);
    },
  },
};
</script>

<style>
.selectGender{
  text-align: center;
  margin-bottom: 20px;
}
.selectGender button.active {
  background-color: #233aa6 !important;
  border-radius: 30px !important;
  padding: 10px 20px !important;
  color: #fff !important;
}
.selectGender button {
  color: #233aa6 !important;
  border: 1px solid #233aa6 !important;
  border-radius: 30px !important;
  padding: 10px 20px !important;
  background-color: #fff;
}
</style>
