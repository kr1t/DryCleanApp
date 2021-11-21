<template>
  <div>
    <div class="orderList" v-for="order in orders" :key="order.key">
      <router-link :to="{ name: 'line.orders.show', params: { id: order.id } }">
        <div class="cardOrder">

              <div class="itemOrderDetail">
                <div class="orderCode">{{ order.order_code }}</div>
              </div>

              <div class="itemOrderDetail ">
                <div class="orderStatus">
                  <span class="badge bgConfirm">Confirm</span>
                </div>
              </div>

              <div class="itemOrderDetail">
                <span class="orderAmount">จำนวน {{ order.services_count }} ชิ้น   {{ order.price_sum }} บาท</span>
              </div>

              <div class="itemOrderDetail">
                <div class="orderTime">{{ order.created_at_text }}</div>
              </div>

        </div>
      </router-link>
    </div>
        <div class="orderStatus">
          <span class="badge bgWaiting">bgWaiting</span>
        </div>
        <div class="orderStatus">
          <span class="badge bgConfirm">bgConfirm</span>
        </div>
        <div class="orderStatus">
          <span class="badge bgDelivering">bgDelivering</span>
        </div>
        <div class="orderStatus">
          <span class="badge bgSuccess">bgSuccess</span>
        </div>
    <div class="orderAll">
      <button class="btnOrderAll">ดูรายการทั้งหมด</button>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  computed: {
    ...mapGetters("order", {
      orders: "items",
    }),
  },
};
</script>

<style>
</style>
