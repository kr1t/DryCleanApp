<template>
  <div><router-view /></div>
</template>

<script>
export default {
  layout: "basic",
};
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
html,body{
  font-family: 'Prompt', sans-serif !important;
  text-decoration: none !important;
}
h1 {
  font-weight: 800;
  color: #233aa6;
  text-align: center;
  margin: 40px 0px 30px 0px;
}
hr{
  border: 1px solid #c8d1e6 !important;
}
.btn-primary-lan{
  color: #233aa6 !important;
  border: 1px solid #233aa6 !important;
  border-radius: 30px !important;
  padding: 10px 20px !important;
  background-color: #fff !important;
  font-weight: 600;
  &:disabled{
    opacity: 0.4;

    &:hover{
      opacity: 0.4;
    }
  }

  &:hover{
    color: #fff !important;
    border: 1px solid #233aa6 !important;
    background-color: #233aa6 !important;
    border-radius: 30px !important;
    padding: 10px 20px !important;
  }
}
button {
  &.btn-product{
    width: 25px !important;
    height: 25px !important;
    border: 1px solid #303030 !important;
    color: #303030 !important;
    border-radius: 50% !important;
    padding: 5px 5px !important;
    line-height: 0 !important;
    background-color: #fff;
      &:disabled{
        opacity: 0.4;

      &:hover{
        opacity: 0.4;
      }
    }
  }
  &.btn-product:hover{
    color: #fff !important;
    border: 1px solid #233aa6 !important;
    background-color: #233aa6 ;
  }
  &.btn-product-del{
    width: 25px !important;
    height: 25px !important;
    border: 1px solid #c01813 !important;
    color: #c01813 !important;
    border-radius: 50% !important;
    padding: 5px 3px !important;
    line-height: 0 !important;
    background-color: #fff;
  }
  &.btn-product-del:hover{
    color: #fff !important;
    border: 1px solid #c01813 !important;
    background-color: #c01813 ;
  }
  &.btnBotCenFixed{
    text-align: center;
    position: fixed;
    bottom: 15%;
    left: 50%;
    transform: translate(-50%, 0);
  }
}
.btnSecondaryCartList{
  opacity: 0.4;
  color: #fff;
  &:hover{
    color: #fff;
  }
}
.overflowHidden{
  overflow:hidden !important;
}

input[type="file"] {
    display: none;
}
.laundryFileUpload {
  width: 95%;
  margin-left: 2.5%;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  background: #FFFFFF;
  border: 1px solid #233AA6;
  box-sizing: border-box;
  box-shadow: 0px 7px 15px rgba(42, 49, 203, 0.1);
  border-radius: 10px;
  margin-bottom: 40px;
  color: #A5AACC;
}
.uploadIcon{
  font-size: 1.2rem;
  color: #233AA6;
}
.uploadText{
  margin-left: 10px;
  font-size: 0.9rem;
}
input {
    max-width: 100% !important;
}
.inputLaundry{
  width: 100% !important;
  background: #FFFFFF;
  border: 1px solid #E9EDF5;
  box-sizing: border-box;
  border-radius: 10px;
  padding: 10px;
  &:active{
    border: 1px solid #233AA6 !important;
  }
  &:disabled{
    background-color: #e9ecef !important;
  }
}
.swal2-styled.swal2-confirm,
.swal2-styled.swal2-cancel{
  border-radius: 45px;
  padding: 10px 30px;
}
.swal2-popup {
  border-radius: 10px;
}
.alertConfirm{
  border-radius: 10px;

}
.form-address{
  font-weight: 500;
}

.img-category img{
  width: 110px;
  height: 100px;
  object-fit: cover;
}
.title-category{
  font-size: 14px;
  text-align: center;
  font-weight: 400;
  margin-top: 10px;
  color: #fff;
}
.h1-laundry{
  font-weight: 800;
  color: #233aa6;
  text-align: center;
  margin: 40px 0px 30px 0px;
}
.card-cate{
  background: radial-gradient(101.52% 131.45% at 10% 44.83%, #1D4186 0.98%, #011365 100%);
  border-radius: 16px !important;
  border: none;
  margin-top: 10px;
  margin-bottom: 10px;
}
.card-body-cate{
  border-radius: 20px !important;
  background: radial-gradient(101.52% 131.45% at 10% 44.83%, #1D4186 0.98%, #011365 100%);
  border: none;
}
.title-product{
  text-align: left;
  font-weight: 700;
  font-size: 1.25rem;
  margin-bottom: 25px;
}
.product-name{
  text-align: left;
  font-weight: 500;
}
.product-price{
  text-align: left;
  font-weight: 500;
  color: #233aa6;
}
.product-amount{
  font-weight: 500;
  margin: 0px 7px;
}
.btn-outline-product{
  width: 25px;
  height: 25px;
  color: rgb(194, 194, 194);
  border: 1px solid rgb(194, 194, 194);
  border-radius: 50%;
}
.btn-cart-list{
  border-radius: 50%;
  background-color: #183980;
  color: #fff;
}
.total-price-title{
  font-weight: 700;
  font-size: 1.1rem;
  float: left;
}
.total-price{
  font-weight: 700;
  font-size: 1.25rem;
  float: right;
  color: #183980;
}
.total-price-box{
  height: 35px;
}
.form-label{
  margin-top: 15px;
  margin-bottom: 2px;
}
.form-address{
  margin-bottom: 20px;
}
.selectSenderType button{
  background: #FFFFFF;
  border: 1px solid #E9EDF5;
  box-sizing: border-box;
  border-radius: 38px;
  padding: 10px 20px !important;
  font-weight: 500;
  color: #233AA6 ;
  &.active{
    background: #FFFFFF !important;
    border: 1px solid #233AA6 !important;
    box-sizing: border-box;
    box-shadow: 0px 7px 15px rgba(165, 170, 204, 0.2);
    border-radius: 52px;
  }
}
.textSecLaundry{
  color: #A5AACC !important;
}
.pLine{
  line-height: 25px;
}
.imageOrder img{
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 20PX;
}
.btnBottomRow{
  margin: 20px 0px;
}
.swal2-title{
 font-size: 1.72em !important;
}
.centerBox{
  top: 30%;
  width: 100%;
  text-align: center;
  position: absolute;
}
.imgSuccess img {
  border-radius: 50%;
}
.orderNumber{
  font-family: Prompt;
  font-style: normal;
  font-weight: bold;
  font-size: 1rem;
  line-height: 30px;
}
.orderThankyou{
  font-size: 1.5rem;
  font-weight: bold;
}
.orderStatusBlueS{
  font-size: 0.75rem;
  color: #233AA6;
}
.cartFloat{
  position: fixed;
  right: 30px;
  bottom: 30px;
}
.cartAmountFloat{
  position:absolute;
  font-size: 0.75rem;
  background-color: #F78F1E;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  top: 0px;
  padding-top: 3px;
}
.cartFloat button{
  background-color: #233AA6;
  box-shadow: 0px 7px 15px rgba(42, 49, 203, 0.3);
  width: 60px;
  height: 60px;
  border: none;
  border-radius: 50%;
  font-size: 1.75rem;
}
.gridService {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: flex-start;
  align-items: stretch;
  box-sizing: border-box;
  margin: 0px -1.5px;
}
.gridServiceInput {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: flex-start;
  align-items: stretch;
  box-sizing: border-box;
  margin: 0px -1.5px;
}
.item {
  box-sizing: border-box;
  width: 33.33%;
  margin-bottom: 10px;
  padding: 0px 1.5px;
}
.item2 {
  box-sizing: border-box;
  width: 33.33%;
  margin-bottom: 10px;
  padding: 0px 1.5px;
  text-align: center;
}
.cardOrder{
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 0px;
  border: 1px solid #A5AACC;
  border-radius: 10px;
  font-size: 0.9rem;
  justify-content: flex-start;
  align-items: stretch;
  color: #233AA6;
  margin-bottom: 5px;
}
.itemOrderDetail{
  box-sizing: border-box;
  width: 50%;
  display: flex;
  padding: 10px;
}
.itemOrderDetail8{
  box-sizing: border-box;
  width: 70%;
  display: flex;
  margin-top: 1px;
}
.itemOrderDetail4{
  box-sizing: border-box;
  width: 30%;
  display: flex;
}
.orderAmount,.orderTime{
  margin-top: -20px;
  font-size: 0.9rem;
}
.orderStatus,.orderTime{
  width: 100%;
  text-align: right;
}
.orderCode{
  font-weight: 700;
  font-size: 1rem;
}
.orderStatus{
  font-weight: 700;
  font-size: 0.9rem;
}
.orderAll{
  width: 100%;
  padding: 5px;
  margin-bottom: 20px;
  margin-top: 10px;
}
.orderAll button{
  width: 100%;
  margin-top: 20px;
  border: none;
  background-color: transparent;
  color: #183980;
  font-size: 0.9rem;
  cursor: pointer;
  border-top: 1px solid #A5AACC;
  padding-top: 5px;
}
.bgWaiting{
  background-color: #F78F1E;
  border-radius: 20px;
  padding: 5px 9px;
}
.bgConfirm{
  background-color: #233AA6;
  border-radius: 20px;
  padding: 5px 9px;
}
.bgDelivering{
  background-color: #0b8aa0;
  border-radius: 20px;
  padding: 5px 9px;
}
.bgSuccess{
  background-color: #46a00b;
  border-radius: 20px;
  padding: 5px 9px;
}
.orderDes{
  width: 100%;
  height: 30px;
  text-align: center;
  vertical-align: middle;
  display: flex;
  flex-wrap: wrap;
}
.stepName{
  text-align: center;
  color: #233AA6;
  margin-top: 3px;
  font-weight: 500;
}
.orderStepper{
  vertical-align: middle;
  display: flex;
  flex-wrap: wrap;
}
.stepBtn{
  text-align: center;
  margin: 0 auto;
}
.stepBox{
  box-sizing: border-box;
  width: 25%;
  display: flex;
}
.step{
  width: 100%;
}
.orderReqDate{
  text-align: right;
  font-size: 0.7rem;
  font-weight: 500;
  margin: auto 0;
  vertical-align: middle;
}
.orderReqTextHead{
  font-size: 1.1rem;
  font-weight: 500;
  margin-bottom: 10px;
}
.orderReqDateHead{
  text-align: right;
  font-size: 0.75rem;
  font-weight: 500;
  margin-top: 5px;
}
.orderReqText{
  font-size: 0.9rem;
  font-weight: 500;
  margin: 10px 0px;
}
.UlCustomlist ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 20px;
}
.addOnPriceService{
  color: #F78F1E;
  font-weight: 500;
}
.btnSeeMoreDetailOrder{
  width: 100%;
  padding: 8px 12px;
  border: 1px solid #233AA6;
  background-color: #fff;
  box-sizing: border-box;
  filter: drop-shadow(0px 7px 15px #2a31cb1a);
  border-radius: 10px;
  text-align: left;
  font-weight: 500;
  font-size: 0.9rem;
  margin-bottom: 15px;
}
.btnSeeMoreDetailOrder i{
 position: absolute;
 right: 10px;
 color: #233AA6;
}
.height80px{
  width: 100%;
  height: 60px;
}
.button-bar {
    width: 100%;
    margin-top: 10px;
    padding: 10px;
    background: #fff;
    position: fixed;
    bottom: 0;
    left: 0;
    display: block;
    border: none !important;
    box-shadow: rgba(14, 30, 37, 0.062) 0px 2px 4px 0px, rgba(14, 30, 37, 0.185) 0px 2px 16px 0px;
}
.dotted {border: 1px dotted #233AA6; border-style: none none dotted; color: #fff; background-color: #fff; }
@media only screen and (max-width: 374px) {
  .swal2-title{
    font-size: 1.4em !important;
  }
  .orderAmount, .orderTime {
    margin-top: -20px;
    font-size: 0.82rem;
}
}
</style>
