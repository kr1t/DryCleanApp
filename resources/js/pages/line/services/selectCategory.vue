<template>
  <div class="container">
    <div class="text-center">
      <h1 class="h1-laundry my-4">เลือกบริการ</h1>
      <div class="row">
        <div class="col-6" v-for="category in categories" :key="category.id">
          <div class="card card-cate">
            <div class="card-body card-body-cate" @click="setActive(category.id)">
              <div class="img-category">
                <img :src="category.image_url" alt="" />
              </div>

              <p class="title-category">{{ category.name }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters("service_category", {
      categories: "items",
    }),
  },
  methods: {
    ...mapActions("service_category", {
      setCategoryActive: "setCategoryActive",
    }),
    setActive(id) {
      this.setCategoryActive(id);
      this.$emit("changePage", "selectService");
    },
  },
};
</script>

<style>
.img-category img {
  width: 110px;
  height: 100px;
  object-fit: cover;
}
.title-category {
  font-size: 14px;
  text-align: center;
  font-weight: 400;
  margin-top: 10px;
  color: #fff;
}
.h1-laundry {
  font-weight: 800;
  color: #233aa6;
}
.card {
  border-radius: 20px !important;
  background-color: #183980 !important;
  border: none;
}
.card-body {
  border-radius: 20px !important;
  background-color: #183980 !important;
  border: none;
}
</style>
