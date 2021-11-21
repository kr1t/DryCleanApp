<template>
  <div class="UlCustomlist">
        <ul>
          <li>
            <div class="row">

              <div class="orderReqTextHead col-6">นัดรับ</div>
              <div class="orderReqDateHead col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

              <div class="orderReqText col-6">เตรียมไปรับ</div>
              <div class="orderReqDate col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

              <div class="orderReqText col-6">รับ</div>
              <div class="orderReqDate col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

              <div class="orderReqText col-6">เข้าระบบ</div>
              <div class="orderReqDate col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

            </div>

          </li>
        </ul>
        <ul>
              <li>
                <div class="row">

              <div class="orderReqTextHead col-6">กำลังดำเนินการ</div>
              <div class="orderReqDateHead col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

              <div class="orderReqText col-6">เตรียมไปรับ</div>
              <div class="orderReqDate col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

              <div class="orderReqText col-6">รับ</div>
              <div class="orderReqDate col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

              <div class="orderReqText col-6">เข้าระบบ</div>
              <div class="orderReqDate col-6">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>

            </div>
              </li>
            </ul>
  </div>
</template>

<script>
export default {
  props: ["order"],
};
</script>

<style lang="scss">
ul {
  li {
    ul {
      padding-left: 0;
    }
  }
}
</style>
