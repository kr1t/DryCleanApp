<template>
  <div>
    <div class="orderList" v-for="order in orders" :key="order.key">
      <router-link :to="{ name: 'line.orders.show', params: { id: order.id } }">
        <div class="card">
          <div class="card-body">
            <div class="clear-fix">
              <div class="orderListLeft">
                <div class="orderCode">{{ order.order_code }}</div>
                <div class="orderStatus">Pending</div>
                <div class="orderTime">{{ order.created_at_text }}</div>
              </div>
              <div class="orderPrice">{{ order.price_sum }} บาท</div>
              <div class="orderAmount">{{ order.services_count }} ชิ้น</div>
            </div>
          </div>
        </div>
      </router-link>
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