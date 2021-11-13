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
}
button {
  color: #233aa6 !important;
  border: 1px solid #233aa6 !important;
  border-radius: 30px !important;
  padding: 10px 20px !important;
  background-color: #fff !important;
  font-weight: 600;

  &:disabled{
    opacity: 0.4;

    &:hover{
      opacity: 0.4;  //this is what you want
    }
  }

  &:hover{
    color: #fff !important;
    border: 1px solid #233aa6 !important;
    background-color: #233aa6 !important;
    border-radius: 30px !important;
    padding: 10px 20px !important;
  }

  &.btn-product{
    width: 25px !important;
    height: 25px !important;
    border: 1px solid rgb(27, 27, 27) !important;
    color: rgb(27, 27, 27) !important;
    border-radius: 50% !important;
    padding: 5px 5px !important;
    line-height: 0 !important;
  }
  &.btn-product:hover{
    color: #fff !important;
    border: 1px solid #233aa6 !important;
  }
}
// .btn-primary{
//   background-color: #233aa6 !important;
//   border-radius: 30px !important;
//   padding: 10px 20px !important;
//   font-weight: 600;
// }
// .btn-outline-primary{
//   color: #233aa6 !important;
//   border: 1px solid #233aa6 !important;
//   border-radius: 30px !important;
//   padding: 10px 20px !important;
//   font-weight: 600;
// }
// .btn-outline-primary:hover{
//   color: #fff !important;
//   border: 1px solid #233aa6 !important;
//   background-color: #233aa6 !important;
//   border-radius: 30px !important;
//   padding: 10px 20px !important;
// }
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
}
.card{
  border-radius: 20px !important;
  background-color: #183980 !important;
  border: none;
  margin-top: 10px;
  margin-bottom: 10px;
}
.card-body{
  border-radius: 20px !important;
  background-color: #183980 !important;
  border: none;
}
.title-product{
  text-align: left;
  font-weight: 700;
  font-size: 1.25rem;
}
.product-name{
  text-align: left;
  font-weight: 600;
}
.product-price{
  text-align: left;
  font-weight: 600;
  color: #233aa6;
}
.product-amount{
  font-weight: 600;
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
</style>
