<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EcoBazar - Shop</title>
   <?php require('links.php') ?>
   <link rel="stylesheet" href="./assets/css/shop.css">
</head>

<body>
   <?php require('header.php') ?>

   <main>
      <!-- *Breadcrumbs Start Here -->
      <section id="Breadcrumbs">
         <div class="container">
            <ul>
               <li class="d-flex align-items-center">
                  <a href="index.php" class="homeIcom">
                     <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
                  </a>
                  <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
               </li>
               <li class="d-flex align-items-center">
                  <a href="shop.php" class="active">Shop</a>
               </li>

            </ul>
         </div>
      </section>
      <!-- *Breadcrumbs End Hear -->
      <section id="allProduct">
         <div class="container">
            <div class="row">
               <!-- *Filtering Start Here -->
               <section id="filtering" class="col-lg-3 d-lg-block d-none">
                  <div class="filterBtn">
                     <button type="button">Filter
                     </button>
                     <span>
                        <iconify-icon icon="rivet-icons:filter" width="20" height="20"></iconify-icon>
                     </span>
                  </div>
                  <!-- *All Categories Radio Buttons Start Here-->
                  <div class="categories">
                     <div class="row align-items-center categoreBtn">
                        <div class="col-6 radioParent"><a type="button">All Categories</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                        </div>
                     </div>
                        <ul class="shopOpen active">
                           <li class="d-flex align-items-center All">
                              <input type="radio" id="All" name="Categories" checked>
                              <label for="All">All(52)<span>(134)</span></label>
                           </li>
                           <li class="d-flex align-items-center freshFruit">
                              <input type="radio" id="Fresh" name="Categories">
                              <label for="Fresh">Fresh Fruit (25)<span>(134)</span></label>
                           </li>
                           <li class="d-flex align-items-center vegetable">
                              <input type="radio" id="Vegetables" name="Categories">
                              <label for="Vegetables">Vegetables<span>(150)</span></label>
                           </li>
                           <li class="d-flex align-items-center cooking">
                              <input type="radio" id="Cooking" name="Categories">
                              <label for="Cooking">Cooking<span>(54)</span></label>
                           </li>
                           <li class="d-flex align-items-center snacking">
                              <input type="radio" id="Snacks" name="Categories">
                              <label for="Snacks">Snacks<span>(47)</span></label>
                           </li>
                           <li class="d-flex align-items-center beverage">
                              <input type="radio" id="Beverages" name="Categories">
                              <label for="Beverages">Beverages<span>(43)</span></label>
                           </li>
                           <li class="d-flex align-items-center health">
                              <input type="radio" id="Beauty" name="Categories">
                              <label for="Beauty">Beauty & Health<span>(38)</span></label>
                           </li>
                           <li class="d-flex align-items-center bread" class="d-flex align-items-center">
                              <input type="radio" id="Bread" name="Categories">
                              <label for="Bread">Bread & Bakery<span>(15)</span></label>
                           </li>
                        </ul>
                  </div>
                  <!-- *All Categories Radio Buttons End Here-->
                  <!-- *Price Range Slider Start Here -->
                  <div class="priceBox">
                     <div class="col-12 d-flex justify-content-between priceBtn">
                        <span>Price</span>
                        <span>
                           <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                        </span>
                     </div>
                     <div class="priceRangeWrapper">
                        <div class="priceRangeOpen active">
                           <div class="slider-wrapper">
                              <div class="range-input">
                                 <input type="range" class="min-range" min="0" max="10000" value="2500" step="1">
                                 <input type="range" class="max-range" min="0" max="10000" value="8500" step="1">
                              </div>
                              <div class="slider-container">
                                 <div class="price-slider">
                                 </div>
                              </div>
                           </div>
                           <div class="price-input-container">
                              <div class="price-input">
                                 <span>Price :</span>
                                 <input type="number" class="min-input price-value" value="2500">
                                 <iconify-icon icon="tabler:minus"></iconify-icon>
                                 <input type="number" class="max-input price-value" value="8500" readonly>
                                 <div class="price-field">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- *Price Range Slider End Here-->
                  <!-- *Rating Stert Here-->
                  <div class="rating">
                     <div class="row align-items-center ratingBtn">
                        <div class="col-6 ratingParent"><a type="button">Rating</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                        </div>
                     </div>
                        <ul class="ratingOpen active">
                           <li class="d-flex align-items-center">
                              <input type="radio" id="fiveStar" name="rating" checked>
                              <label for="fiveStar">
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <span>5.0</span>
                              </label>
                           </li>
                           <li class="d-flex align-items-center">
                              <input type="radio" id="ForStar" name="rating">
                              <label for="ForStar">
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <span>4.0 & up</span>
                              </label>
                           </li>
                           <li class="d-flex align-items-center">
                              <input type="radio" id="threeStar" name="rating">
                              <label for="threeStar">
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <span>3.0 & up</span>
                              </label>
                           </li>
                           <li class="d-flex align-items-center">
                              <input type="radio" id="tweStar" name="rating">
                              <label for="tweStar">
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <span>2.0 & up</span>
                              </label>
                           </li>
                           <li class="d-flex align-items-center">
                              <input type="radio" id="oneStar" name="rating">
                              <label for="oneStar">
                                 <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                 <span>1.0 & up</span>
                              </label>
                           </li>
                        </ul>
                  </div>
                  <!-- *Rating End Here-->
                  <!-- *Popular Tag End Here-->
                  <div class="popular">
                     <div class="row align-items-center popularBtn">
                        <div class="col-6 popularParent"><a type="button">Popular Tag</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                        </div>
                     </div>
                     <div class="popularCollapse">
                        <div class="popularTagBox active">
                           <span class="popularTag">Healthy</span>
                           <span class="popularTag">Low fat</span>
                           <span class="popularTag active">Vegetarian</span>
                           <span class="popularTag">Kid foods</span>
                           <span class="popularTag">Vitamins</span>
                           <span class="popularTag">Bread</span>
                           <span class="popularTag">Meat</span>
                           <span class="popularTag">Snacks</span>
                           <span class="popularTag">Tiffin</span>
                           <span class="popularTag">Launch</span>
                           <span class="popularTag">Dinner</span>
                           <span class="popularTag">Breackfast</span>
                           <span class="popularTag">Fruit</span>
                        </div>
                     </div>
                  </div>
                  <!-- *Popular Tag End Here-->
                  <!-- *Discount AD Start Here -->
                  <section id="discount">
                     <a href="" class="textBox">
                        <h2 class="text-center"><span>79%</span> Discount</h2>
                        <p>on your first order</p>
                        <span class="text-center d-block">
                           <span>Shop Now</span>
                           <iconify-icon icon="ep:right"></iconify-icon>
                        </span>
                     </a>
                  </section>
                  <!-- *Discount AD End Here -->

                  <!-- *Best Sale Products End Hear -->
                  <section id="saleProducts">
                     <h3>Sale Products</h3>
                     <div class="seleCard">
                        <a href="#">
                           <div class="row">
                              <img class="col-4 img-fluid" src="./assets/img/Green.png" alt="">
                              <div class="col-8">
                                 <h4>Red Capsicum</h4>
                                 <span>$32.00 <del>$20.99</del></span>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="seleCard">
                        <a href="#">
                           <div class="row">
                              <img class="col-4 img-fluid" src="./assets/img/FreshMango.png" alt="">
                              <div class="col-8">
                                 <h4>Red Capsicum</h4>
                                 <span>$32.00 <del>$20.99</del></span>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="seleCard">
                        <a href="#">
                           <div class="row">
                              <img class="col-4 img-fluid" src="./assets/img/GreenCapsicum.png" alt="">
                              <div class="col-8">
                                 <h4>Red Capsicum</h4>
                                 <span>$32.00 <del>$20.99</del></span>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </section>
                  <!-- *Best Sale Products End Hear -->


               </section>
               <!-- *Filtering End Hear -->

               <!--  *Proeduct Start Here -->
               <section id="product" class="col-lg-9 col-12">
                  <!-- *category Start Here -->
                  <section id="category">
                     <div class="row">
                        <div class="sortBox col-lg-6 col-12">
                           <div class="row align-items-center">
                              <div class="col-lg-12 col-8">
                                 <span>Sort by :</span>
                                 <select>
                                    <option value="1">Latest</option>
                                 </select>
                              </div>
                              <div class="filterMdBtn text-end d-inline d-lg-none d-block col-4">
                                 <button type="button">
                                    <span>
                                       <iconify-icon icon="rivet-icons:filter" width="20" height="20"></iconify-icon>
                                    </span>
                                 </button>

                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <h6 class="text-lg-end text-start mt-2 mt-lg-0"><span>52</span>Results Found</h6>
                        </div>
                     </div>
                  </section>

                  <!-- *Product Card Box Start Here -->
                  <section id="ProductCardBox">
                     <div class="row justify-content-center">
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/Image.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Big Potatos</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/Chanise.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Chanise Cabbage</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart FruitCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/Ladies.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Ladies Finger</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                           <!-- *Label Start Here -->
                           <div class="label">
                              <span>Out of Stock</span>
                           </div>
                           <!-- *Label End Here -->


                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/Eggplant.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Eggplant</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart CookingCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/Fresh.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Fresh Cauliflower</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart FruitCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/GreenApple.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Green Apple</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/GreenCapsicum.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Green Capsicum</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/GreenChili.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Green Chili</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/GreenCucumber.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Green Cucumber</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart CookingCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/GreenLittuce.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Green Littuce</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/LadiesFinger.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Ladies Finger</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/Green.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Green Capsicum</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/RedChili.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Red Chili</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart VegetablesCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/RedTomato.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Red Tomato</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                        <div class="cart FruitCard">
                           <a href="#">
                              <div class="imgBox">
                                 <img class="img-fluid" src="./assets/img/FreshMango.png" alt="">
                              </div>
                              <div class="details">
                                 <a href="#">Fresh Mango</a>
                                 <div class="priceAndCard d-flex align-items-center justify-content-between">
                                    <div class="price">
                                       <span class="col-2">$14.99</span>
                                       <span class="col-3 oldPrice">$20.99</span>
                                    </div>
                                    <span class="text-end col-6 addCatdBtn">
                                       <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                    </span>
                                 </div>
                                 <div class="review">
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                       style="color: #b3b3b3"></iconify-icon>
                                 </div>
                              </div>
                           </a>

                           <!-- *Hover Effect Start Here -->

                           <div class="iconBox">
                              <div class="Wishlist">
                                 <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                              </div>
                              <div class="View">
                                 <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                              </div>
                           </div>

                           <!-- *Hover Effect End Here -->

                        </div>
                     </div>
                     <div class="nextPage">
                        <div class="d-flex justify-content-center">
                           <span class="leftPage">
                              <iconify-icon icon="iconamoon:arrow-left-2-light" width="24" height="24"></iconify-icon>
                           </span>
                           <span class="next active">1</span>
                           <span class="next">2</span>
                           <span class="next">3</span>
                           <span class="next">4</span>
                           <span class="next">5</span>
                           <span class="rightPage">
                              <iconify-icon icon="iconamoon:arrow-right-2-light" width="24" height="24"></iconify-icon>
                           </span>
                        </div>
                     </div>
                  </section>
                  <!-- *Product Card Box End Hear -->
                  <!-- *category End Hear -->
               </section>
               <!-- *Product End Hear -->
            </div>
         </div>
      </section>

      <!-- *Filtering Mobile Start Here -->
      <div class="filterSlider d-lg-none col-block">
         <div class="filterCotant">
            <button type="button" class="filterClose">
               <iconify-icon icon="iconoir:cancel"></iconify-icon>
            </button>
            <!-- *Filtering Start Here -->
            <section id="filtering" class="col-12 d-block">
               <div class="filterBtn">
                  <button type="button">Filter
                  </button>
                  <span>
                     <iconify-icon icon="rivet-icons:filter" width="20" height="20"></iconify-icon>
                  </span>
               </div>
               <!-- *All Categories Radio Buttons Start Here-->
               <div class="categories">
                  <div class="row align-items-center categoreBtn">
                     <div class="col-lg-6 col-8 radioParent"><a type="button">All Categories</a></div>
                     <div class="col-lg-6 col-4 text-end">
                        <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                     </div>
                  </div>
                  <li class="shopCollapse">
                     <ul class="shopOpen active">
                        <li class="d-flex align-items-center All">
                           <input type="radio" id="AllMobile" name="Categories">
                           <label for="AllMobile">All(52)<span>(134)</span></label>
                        </li>
                        <li class="d-flex align-items-center freshFruit">
                           <input type="radio" id="FreshMobile" name="Categories">
                           <label for="FreshMobile">Fresh Fruit (25)<span>(134)</span></label>
                        </li>
                        <li class="d-flex align-items-center vegetable">
                           <input type="radio" id="VegetablesMobile" name="Categories">
                           <label for="VegetablesMobile">Vegetables<span>(150)</span></label>
                        </li>
                        <li class="d-flex align-items-center cooking">
                           <input type="radio" id="CookingMobile" name="Categories">
                           <label for="CookingMobile">Cooking<span>(54)</span></label>
                        </li>
                        <li class="d-flex align-items-center snacking">
                           <input type="radio" id="SnacksMobile" name="Categories">
                           <label for="SnacksMobile">Snacks<span>(47)</span></label>
                        </li>
                        <li class="d-flex align-items-center beverage">
                           <input type="radio" id="BeveragesMobile" name="Categories">
                           <label for="BeveragesMobile">Beverages<span>(43)</span></label>
                        </li>
                        <li class="d-flex align-items-center health">
                           <input type="radio" id="BeautyMobile" name="Categories">
                           <label for="BeautyMobile">Beauty & Health<span>(38)</span></label>
                        </li>
                        <li class="d-flex align-items-center bread" class="d-flex align-items-center">
                           <input type="radio" id="BreadMobile" name="Categories">
                           <label for="BreadMobile">Bread & Bakery<span>(15)</span></label>
                        </li>
                     </ul>
                  </li>
               </div>
               <!-- *All Categories Radio Buttons End Here-->
               <!-- *Price Range Slider Start Here -->
               <div class="priceBox">
                  <div class="col-12 d-flex justify-content-between priceBtn">
                     <span>Price</span>
                     <span>
                        <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                     </span>
                  </div>
                  <div class="priceRangeWrapper">
                     <div class="priceRangeOpen active">
                        <div class="slider-wrapper">
                           <div class="range-input">
                              <input type="range" class="min-range" min="0" max="10000" value="2500" step="1">
                              <input type="range" class="max-range" min="0" max="10000" value="8500" step="1">
                           </div>
                           <div class="slider-container">
                              <div class="price-slider">
                              </div>
                           </div>
                        </div>
                        <div class="price-input-container">
                           <div class="price-input">
                              <span>Price :</span>
                              <input type="number" class="min-input price-value" value="2500">
                              <iconify-icon icon="tabler:minus"></iconify-icon>
                              <input type="number" class="max-input price-value" value="8500" readonly>
                              <div class="price-field">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- *Price Range Slider End Here-->
               <!-- *Rating Stert Here-->
               <div class="rating">
                  <div class="row align-items-center ratingBtn">
                     <div class="col-6 ratingParent"><a type="button">Rating</a></div>
                     <div class="col-6 text-end">
                        <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                     </div>
                  </div>
                  <li class="shopCollapse">
                     <ul class="ratingOpen active">
                        <li class="d-flex align-items-center">
                           <input type="radio" id="fiveStar" name="Categories">
                           <label for="fiveStar">
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <span>5.0</span>
                           </label>
                        </li>
                        <li class="d-flex align-items-center">
                           <input type="radio" id="ForStar" name="Categories">
                           <label for="ForStar">
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <span>4.0 & up</span>
                           </label>
                        </li>
                        <li class="d-flex align-items-center">
                           <input type="radio" id="threeStar" name="Categories">
                           <label for="threeStar">
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <span>3.0 & up</span>
                           </label>
                        </li>
                        <li class="d-flex align-items-center">
                           <input type="radio" id="tweStar" name="Categories">
                           <label for="tweStar">
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <span>2.0 & up</span>
                           </label>
                        </li>
                        <li class="d-flex align-items-center">
                           <input type="radio" id="oneStar" name="Categories">
                           <label for="oneStar">
                              <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                 style="color: #b3b3b3"></iconify-icon>
                              <span>1.0 & up</span>
                           </label>
                        </li>


                     </ul>
                  </li>
               </div>
               <!-- *Rating End Here-->

               <!-- *Popular Tag End Here-->
               <div class="popular">
                  <div class="row align-items-center popularBtn">
                     <div class="col-lg-6 col-8 popularParent"><a type="button">Popular Tag</a></div>
                     <div class="col-lg-6 col-4 text-end">
                        <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                     </div>
                  </div>
                  <div class="popularCollapse">
                     <div class="popularTagBox active">
                        <span class="popularTag">Healthy</span>
                        <span class="popularTag">Low fat</span>
                        <span class="popularTag active">Vegetarian</span>
                        <span class="popularTag">Kid foods</span>
                        <span class="popularTag">Vitamins</span>
                        <span class="popularTag">Bread</span>
                        <span class="popularTag">Meat</span>
                        <span class="popularTag">Snacks</span>
                        <span class="popularTag">Tiffin</span>
                        <span class="popularTag">Launch</span>
                        <span class="popularTag">Dinner</span>
                        <span class="popularTag">Breackfast</span>
                        <span class="popularTag">Fruit</span>
                     </div>
                  </div>
               </div>
               <!-- *Popular Tag End Here-->

               <!-- *Discount AD Start Here -->
               <section id="discount">
                  <a href="" class="textBox">
                     <h2 class="text-center"><span>79%</span> Discount</h2>
                     <p>on your first order</p>
                     <span class="text-center d-block">
                        <span>Shop Now</span>
                        <iconify-icon icon="ep:right"></iconify-icon>
                     </span>
                  </a>
               </section>
               <!-- *Discount AD End Here -->

               <!-- *Best Sale Products End Hear -->
               <section id="saleProducts">
                  <h3>Sale Products</h3>
                  <div class="seleCard">
                     <a href="#">
                        <div class="row">
                           <img class="col-4 img-fluid" src="./assets/img/Green.png" alt="">
                           <div class="col-8">
                              <h4>Red Capsicum</h4>
                              <span>$32.00 <del>$20.99</del></span>
                              <div class="review">
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="seleCard">
                     <a href="#">
                        <div class="row">
                           <img class="col-4 img-fluid" src="./assets/img/FreshMango.png" alt="">
                           <div class="col-8">
                              <h4>Red Capsicum</h4>
                              <span>$32.00 <del>$20.99</del></span>
                              <div class="review">
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="seleCard">
                     <a href="#">
                        <div class="row">
                           <img class="col-4 img-fluid" src="./assets/img/GreenCapsicum.png" alt="">
                           <div class="col-8">
                              <h4>Red Capsicum</h4>
                              <span>$32.00 <del>$20.99</del></span>
                              <div class="review">
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                 <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </section>
               <!-- *Best Sale Products End Hear -->

            </section>
            <!-- *Filtering End Hear -->
         </div>
      </div>
      <!-- *Filtering Mobile End Here -->


   </main>
   <!-- *Footer Start Here -->
   <footer>
      <!-- *Footer top Start Here -->
      <section id="FooterTop">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 leftSide">
                  <div class="logo d-flex align-items-center">
                     <img class="img-fluid" src="./assets/img/fav.png" alt="Logo.png"><span>Ecobazar</span>
                  </div>
                  <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna congue
                     nec.
                  </p>
                  <span><a href="tel:555-0114">(219) 555-0114</a> or</span>
                  <span><a href="mailto:Proxy@gmail.com">Proxy@gmail.com</a></span>
               </div>
               <div class="col-lg-8 rightSide">
                  <div class="row">
                     <ul class="col-lg-3 col-6">
                        <h4>My Account</h4>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Order History</a></li>
                        <li><a href="">Shoping Cart</a></li>
                        <li><a href="">Wishlist</a></li>
                     </ul>
                     <ul class="col-lg-3 col-6">
                        <h4>Helps</h4>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Faqs</a></li>
                        <li><a href="">Terms & Condition</a></li>
                        <li><a href="">Wishlist</a></li>
                     </ul>
                     <ul class="col-lg-3 col-6">
                        <h4>Proxy</h4>
                        <li><a href="">About</a></li>
                        <li><a href="">Shop</a></li>
                        <li><a href="">Product</a></li>
                        <li><a href="">Track Order</a></li>
                     </ul>
                     <ul class="col-lg-3 col-6">
                        <h4>Categories</h4>
                        <li><a href="">Fruit & Vegetables</a></li>
                        <li><a href="">Meat & Fish</a></li>
                        <li><a href="">Bread & Bakery</a></li>
                        <li><a href="">Beauty & Health</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Footer top End Hear -->
      <!-- *copy Right Start Here -->
      <section id="copyRight">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                  <p>Ecobazar eCommerce © 2021. All Rights Reserved</p>
               </div>
               <div class="col-12 col-lg-6 text-lg-end">
                  <a href="#">
                     <img src="./assets/img/ApplePay.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Visa.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Discover.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Mastercard.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Cart.png" alt="">
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- *copy Right End Hear -->
   </footer>
   <!-- *Footer End Hear -->
   <script src="./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/main.js"></script>
   <script src="./assets/js/shop.js"></script>
</body>

</html>