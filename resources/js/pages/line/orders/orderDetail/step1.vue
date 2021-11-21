<template>
  <div>
    <ul>
      <li>
        <div class="row">
          <div class="orderReqText col-4">นัดรับ</div>
          <div class="orderReqDate col-8">
            {{ order.information_request.date }}
            {{ order.information_request.time }}
          </div>
        </div>

        <ul>
          <li>
            <div class="row">
              <div class="orderReqText col-4">นัดรับ</div>
              <div class="orderReqDate col-8">
                {{ order.information_request.date }}
                {{ order.information_request.time }}
              </div>
            </div>
          </li>
        </ul>
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
