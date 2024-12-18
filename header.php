 <header>
      <!-- *Top Bar Section start -->
      <section id="topBar">
         <div class="container">
            <div class="row align-items-center">
               <div
                  class="col-lg-6 col d-flex align-items-center justify-content-lg-start justify-content-center location">
                  <iconify-icon icon="fluent:location-20-regular"></iconify-icon>
                  <p>Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
               </div>
               <div class="col-lg-6 d-lg-flex d-none align-items-center justify-content-end quickActions">
                  <form action="">
                     <select>
                        <option>Eng</option>
                        <option>Bn</option>
                        <option>Hin</option>
                     </select>
                     <select>
                        <option>Usd</option>
                        <option>Bdt</option>
                        <option>Rp</option>
                     </select>
                  </form>
                  <a href="Register.php">Sign In / Sign Up</a>
               </div>
            </div>
         </div>
      </section>
      <!-- *Top Bar Section end -->

      <!-- *Middle Bar Section Desktop start -->
      <section id="middleBar" class="d-none d-lg-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-3">
                  <div class="logo">
                     <a href="index.php"><img class="img-fluid" src="./assets/img/Logo.png"></a>
                  </div>
               </div>
               <div class="col-6 d-flex align-items-center">
                  <div class="searchBoxLg">
                     <iconify-icon icon="cuida:search-outline"></iconify-icon>
                     <input type="search" placeholder="Search">
                  </div>
                  <button class="searchBtn" type="button">Search</button>
               </div>
               <div class="col-3 d-flex align-items-center justify-content-end actionLinks">
                  <iconify-icon icon="solar:heart-outline"></iconify-icon>
                  <!-- *Cart Icon added with sideBar -->

                  <div class="cartIcon">
                     <button type="button" data-bs-toggle="offcanvas" data-bs-target="#cartSideBar"
                        aria-controls="offcanvasWithBothOptions">
                        <iconify-icon icon="lets-icons:bag-alt"></iconify-icon>
                        <div class="quantity">2</div>
                     </button>
                  </div>


                  <!-- *Cart Icon added with sideBar -->
                  <div class="paymentdetails text-start">
                     <p>Shopping cart:</p>
                     <h5>$57.00</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- *Cart Sidebar Start -->
         <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="cartSideBar"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
               <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Shopping Card (2)</h5>
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="cardProduct">
                  <div class="row align-items-center product">
                     <div class="col-5"><img class="img-fluid" src="./assets/img/product.png" alt=""></div>
                     <div class="col-6">
                        <h6>Fresh Indian Orange</h6>
                        <p>1 kg x <span>12.00</span></p>
                     </div>
                     <div class="col-1">
                        <iconify-icon icon="charm:cross"></iconify-icon>
                     </div>
                  </div>
                  <div class="row align-items-center product">
                     <div class="col-5"><img class="img-fluid" src="./assets/img/product_1.png" alt=""></div>
                     <div class="col-6">
                        <h6>Green Apple</h6>
                        <p>1 kg x <span>14.00</span></p>
                     </div>
                     <div class="col-1">
                        <iconify-icon icon="charm:cross"></iconify-icon>
                     </div>
                  </div>
               </div>
               <div class="checkoutBtnBox">
                  <div class="d-flex justify-content-between">
                     <span class="cardQuantity">2 Product</span>
                     <span class="totalPrice">$26.00</span>
                  </div>
                  <a class="checkout d-block text-center" href="checkout.php">Checkout</a>
                  <a class="cart d-block text-center" href="cart.php">Go To Cart</a>
               </div>
            </div>
         </div>

         <!-- *Cart Sidebar End -->
      </section>
      <!-- *Middle Bar Section Desktop end -->

      <!-- *Middle Bar Section Mobile start -->
      <section id="middleBarSm" class="d-lg-none">
         <div class="container">
            <div class="row align-items-center">
               <!-- *Menu Sidebar Start-->
               <div class="col-3">
                  <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                     aria-controls="offcanvasScrolling">
                     <iconify-icon icon="gg:menu-left-alt"></iconify-icon>
                  </button>
               </div>
               <!-- *Menu Sidebar End-->
               <div class="col-6 d-flex justify-content-center">
                  <div class="logo">
                     <a href="index.php"><img src="./assets/img/Logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-3 text-end searchMob">
                  <iconify-icon icon="cuida:search-outline"></iconify-icon>
               </div>
            </div>
         </div>

         <!-- *Menu sidebar body start -->
         <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
               <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><img class="img-fluid"
                     src="./assets/img/Logo.png" alt=""></h5>
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-start menuSide">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li class="shopCollapse">
                     <div class="row align-items-center">
                        <div class="col-6"><a href="shop.php">Shop</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-right-bold"></iconify-icon>
                        </div>
                     </div>
                     <nav>
                        <ul class="shopOpen">
                           <li><a href="#">Food</a></li>
                           <li><a href="#">Baby Food & Care</a></li>
                           <li><a href="#">Home Cleaning</a></li>
                           <li><a href="#">Beauty & Health</a></li>
                           <li><a href="#">Fashion & Lifestyle</a></li>
                           <li><a href="#">Home & Kitchen</a></li>
                           <li><a href="#">Stationeries</a></li>
                        </ul>
                     </nav>
                  </li>
                  <li class="shopCollapse">
                     <div class="row">
                        <div class="col-6"><a href="#">Pages</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-right-bold"></iconify-icon>
                        </div>
                     </div>
                     <ul class="shopOpen">
                        <li><a href="#">24/7 Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                     </ul>
                  </li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
               </ul>
            </div>
         </div>
         <!-- *Menu sidebar body End -->

         <!-- *Search Box Mobile Start Here -->
         <section id="searchBoxMobile" class="searchBoxMobile">
            <div class="container">
               <div class="closeBtnSearch">
                  <iconify-icon icon="charm:cross"></iconify-icon>
               </div>
               <div class="row">
                  <div class="col d-flex searchBoxMenu">
                     <iconify-icon icon="majesticons:search-line"></iconify-icon>
                     <input type="search" placeholder="Search">
                     <button>Search</button>
                  </div>
               </div>
               <div class="searchResult">
                  <p>Showing Result for: <span>Search</span></p>
               </div>
               <div class="row">
                  <div class="col-6 searchProductCnt">
                     <a href="#"><img class="img-fluid" src="./assets/img/Product Image.png"></a>
                     <div class="productdetails text-start">
                        <h5>Indian Green Apple</h5>
                        <p>$14.99 <del>$20.99</del></p>
                     </div>
                  </div>
                  <div class="col-6 searchProductCnt">
                     <a href="#"><img class="img-fluid" src="./assets/img/Product Image (1).png"></a>
                     <div class="productdetails text-start">
                        <h5>Surjapur Mango</h5>
                        <p>$14.99</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- *Search Box Mobile End Here -->
      </section>
      <!-- *Middle Bar Section Mobile end -->

      <!-- *Bottom NavBar Mobile Start -->
      <section id="bottomNavBar" class="bottomNavBar d-lg-none">
         <div class="container">
            <div class="row justify-content-evenly align-items-center mt-3">
               <div class="col-3 active">
                  <iconify-icon icon="lucide:home"></iconify-icon>
               </div>
               <div class="col-3">
                  <a href="shop.php">
                     <iconify-icon icon="mage:shop"></iconify-icon>
                  </a>
               </div>
               <div class="col-3">
                  <a href="cart.php">
                     <iconify-icon icon="lets-icons:bag-alt"></iconify-icon>
                  </a>
               </div>
               <div class="col-3">
                  <a href="Register.php">
                     <iconify-icon icon="basil:user-outline"></iconify-icon>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- *Bottom NavBar Mobile End -->


      <!-- *Desktop Nav Bar Start -->
      <section id="nabBarDesk">
         <nav class="d-none d-lg-block navBarDesktop">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-3">
                     <div class="dropdown">
                        <button class="categoryDrop d-flex align-items-center justify-content-evenly" type="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           <iconify-icon icon="lucide:menu"></iconify-icon><span>All
                              Categories</span><iconify-icon icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                        </button>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">Food</a></li>
                           <li><a class="dropdown-item" href="#">Baby Food & Care</a></li>
                           <li><a class="dropdown-item" href="#">Home Cleaning</a></li>
                           <li><a class="dropdown-item" href="#">Beauty & Health</a></li>
                           <li><a class="dropdown-item" href="#">Fashion & Lifestyle</a></li>
                           <li><a class="dropdown-item" href="#">Home & Kitchen</a></li>
                           <li><a class="dropdown-item" href="#">Stationeries</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-7 middleNav">
                     <ul class="d-flex align-items-center justify-content-start">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li class="desktopParent">
                           <a class="d-flex align-items-center" href="shop.php">Shop <iconify-icon
                                 icon="iconamoon:arrow-down-2-bold"></iconify-icon></a>
                           <ul class="desktopChild">
                              <li><a href="#">Food</a></li>
                              <li><a href="#">Baby Food & Care</a></li>
                              <li><a href="#">Home Cleaning</a></li>
                              <li><a href="#">Beauty & Health</a></li>
                              <li><a href="#">Fashion & Lifestyle</a></li>
                              <li><a href="#">Home & Kitchen</a></li>
                              <li><a href="#">Stationeries</a></li>
                           </ul>
                        </li>
                        <li class="desktopParent"><a class="d-flex align-items-center" href="#">Pages
                              <iconify-icon icon="iconamoon:arrow-down-2-bold"></iconify-icon></a>
                           <ul class="desktopChild">
                              <li><a href="#">24/7 Support</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                           </ul>
                        </li>
                        <li><a class="" href="blog.php">Blog</a></li>
                        <li><a class="" href="about.php">About Us</a></li>
                        <li><a class="" href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-2 d-flex align-items-center quickCall">
                     <iconify-icon icon="ph:phone-call-light"></iconify-icon>
                     <a href="tel:219555-0114">(219) 555-0114</a>
                  </div>
               </div>
            </div>
         </nav>
      </section>
      <!-- *Desktop Nav Bar End -->
   </header>
