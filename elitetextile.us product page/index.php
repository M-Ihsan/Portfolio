<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["buyNow"])) {
    $image = $_POST["image"];
    $color = $_POST["color"];
    $length = $_POST["product-size"];
    $pieces = $_POST["quantity"];
    $sql = "INSERT INTO `product`(`image`, `color`, `length`, `pieces`) VALUES ('$image','$color','$length','$pieces')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500"
      rel="stylesheet"
    />

    <meta name="robots" content="noindex,follow" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    />
    

    <link href="style.css" rel="stylesheet" />

    <title>T-Shirt Over Size - EliteTextile</title>
  </head>
  <body>
    <!-- 
Link: https://getbootstrap.com/docs/5.3/components/carousel 

Dark variant 
-->
    <div class="loader fade-in" id="page-loader">
      <div class="loader_1"></div>
    </div>

    <!-- ---------------------------top new year field ----------------------------------- -->
    <div class="bg-black" style="height: 60px">
      <div
        id="carouselExampleDark"
        class="carousel carousel-dark slide"
        data-bs-ride="carousel"
        data-bs-interval="2900"
      >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2900">
            <div style="min-height: 85px">
              <div class="carousel-caption d-block">
                <h5 class="text-light carousel_heading">
                  🏷️New Year Sale 2025 !
                </h5>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2900">
            <div style="min-height: 85px">
              <div class="carousel-caption d-block">
                <h5 class="text-light carousel_heading">
                  🏷️New Year Sale 2025 !
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ---------------------------navbar section------------------ -->
   

    <nav class="navbar navbar-expand-lg ps-4">
      <div class="container-fluid">
        <!-- Offcanvas Toggler -->
        <button
          class="navbar-toggler setting-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasMenu"
          aria-controls="offcanvasMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Elite Image -->
        <a class="navbar-brand mx-auto eliteimage">
          <img
            src="image/elite-textile-01-1-1024x1024.png"
            alt="Elite Textile Logo"
          />
        </a>

        <!-- Offcanvas Menu -->
        <div
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="offcanvasMenu"
          aria-labelledby="offcanvasMenuLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title mb-5" id="offcanvasMenuLabel"></h5>
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul
              class="navbar-nav ms-5 mb-lg-0"
              style="font-size: 17px; gap: 21px; color: black; cursor: pointer"
            >
              <li class="nav-item dropdown position-relative">
                <a class="nav-link font-li" href="#">KNIT WEAR</a>
                <ul class="dropdown-menu custom-dropdown">
                  <li><a class="dropdown-item" href="#">Hoodie</a></li>
                  <li><a class="dropdown-item" href="#">Zipper</a></li>
                  <li><a class="dropdown-item" href="#">Sweat Shirt</a></li>
                  <li><a class="dropdown-item" href="#">Polo</a></li>
                  <li><a class="dropdown-item" href="#">T Shirt</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown position-relative">
                <a class="nav-link font-li" href="#">BED SHEETS</a>
                <ul class="dropdown-menu custom-dropdown">
                  <li><a class="dropdown-item" href="#">Percale</a></li>
                  <li><a class="dropdown-item" href="#"> Sateen</a></li>
                  <li><a class="dropdown-item" href="#"> Bamboo sheets </a></li>
                  <li><a class="dropdown-item" href="#"> Linen sheets </a></li>
                  <li>
                    <a class="dropdown-item" href="#"> Microfiber sheets </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"> Flannel sheets </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"> Jersey knit sheets </a>
                  </li>
                  <li><a class="dropdown-item" href="#"> Silk sheets </a></li>
                  <li>
                    <a class="dropdown-item" href="#"> Egyptian sheets </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"> Polyester sheets </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown position-relative">
                <a class="nav-link font-li" href="#">TOWELS</a>
                <ul class="dropdown-menu custom-dropdown">
                  <li><a class="dropdown-item" href="#">Bath Towels</a></li>
                  <li><a class="dropdown-item" href="#">Hand Towels</a></li>
                  <li><a class="dropdown-item" href="#">Beach Towels</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown position-relative">
                <a class="nav-link font-li" href="#">CAPS</a>
                <ul class="dropdown-menu custom-dropdown">
                  <li><a class="dropdown-item" href="#">Baseball Caps</a></li>
                  <li><a class="dropdown-item" href="#">Beanies</a></li>
                  <li><a class="dropdown-item" href="#">Sun Hats</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link font-li">PRIVACY POLICY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-li">REFUND POLICY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-li">ABOUT US</a>
              </li>
            </ul>
          </div>
        </div>
        <form class="d-flex gap-2 ms-auto form-icons">
          <i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="25"
              fill="currentColor"
              class="bi bi-search"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
              />
            </svg>
          </i>
          <i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              fill="currentColor"
              class="bi bi-person"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
              />
            </svg>
          </i>
          <i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="25"
              fill="currentColor"
              class="bi bi-heart"
              viewBox="0 0 16 16"
            >
              <path
                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"
              />
            </svg>
          </i>
          <i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="25"
              fill="currentColor"
              class="bi bi-bag"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"
              />
            </svg>
          </i>
        </form>
      </div>
    </nav>
    <hr class="mt-0" />
    <!-- -----------------------------product view------------------------------------------ -->
    

    <main class="product-container">
      <div class="image-column" id="slideshow-items-container">
        <div id="lens"></div>
        <img
          data-image="white"
          class="active slideshow-items"
          data-zoom-image="image/white-21.jpg"
          src="image/white-21.jpg"
          alt=""
        />
        <img
          data-image="black"
          class="slideshow-items"
          src="image/black-24.jpg"
          alt=""
        />
        <img
          data-image="blue"
          class="slideshow-items"
          src="image/blue-23.jpg"
          alt=""
        />
        <img
          data-image="brown"
          class="slideshow-items"
          src="image/brwon.jpg"
          alt=""
        />
        <img
          data-image="cyan"
          class="slideshow-items"
          src="image/cyan-12.jpg"
          alt=""
        />
        <img
          data-image="green"
          class="slideshow-items"
          src="image/green-19.jpg"
          alt=""
        />
        <img
          data-image="gray"
          class="slideshow-items"
          src="image/gray-20.jpg"
          alt=""
        />
        <img
          data-image="orange"
          class="slideshow-items"
          src="image/orange-22.jpg"
          alt=""
        />
        <img
          data-image="pink"
          class="slideshow-items"
          src="image/pink-21.jpg"
          alt=""
        />
        <img
          data-image="purple"
          class="slideshow-items"
          src="image/purple-22.jpg"
          alt=""
        />
        <img
          data-image="red"
          class="slideshow-items"
          src="image/red-20.jpg"
          alt=""
        />
        <img
          data-image="yellow"
          class="slideshow-items"
          src="image/yellow-19.jpg"
          alt=""
        />

        <div id="result"></div>
        <img
          data-image="white"
          class="active"
          data-zoom-image="image/white-21.jpg"
          src="image/white-21.jpg"
          alt=""
        />
        <img data-image="black" src="image/black-24.jpg" alt="" />
        <img data-image="blue" src="image/blue-23.jpg" alt="" />
        <img data-image="brown" src="image/brwon.jpg" alt="" />
        <img data-image="cyan" src="image/cyan-12.jpg" alt="" />
        <img data-image="green" src="image/green-19.jpg" alt="" />
        <img data-image="gray" src="image/gray-20.jpg" alt="" />
        <img data-image="orange" src="image/orange-22.jpg" alt="" />
        <img data-image="pink" src="image/pink-21.jpg" alt="" />
        <img data-image="purple" src="image/purple-22.jpg" alt="" />
        <img data-image="red" src="image/red-20.jpg" alt="" />
        <img data-image="yellow" src="image/yellow-19.jpg" alt="" />
      </div>

      <div class="product-details">
        <h2 class="product-title">T-Shirt Over Size</h2>
        <div class="product-price">
          <p class="prices">
            $ 29 <span class="old-price">$50.00</span>
            <span class="bg-black text-light p-2 rounded-5 saveprice"
              >Save $21.00</span
            >
          </p>
          <p class="size-p">
            Have A look To
            <button
              type="button"
              class="btn-primary chart-btn"
              data-bs-toggle="modal"
              data-bs-target="#drawerModal"
            >
              Size Chart
            </button>
          </p>
          <p class="discount">Special Discount | 4 Days Left⏳</p>
        </div>

        <div
          class="modal fade right"
          id="drawerModal"
          tabindex="-1"
          aria-labelledby="drawerModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog M-5">
            <div class="modal-content">
              <div class="modal-header">
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <h5 class="mb-4 text-center">
                  Size Chart - Tops, Blouses, etc.
                </h5>
                <div class="accordion" id="sizeChartAccordion">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseSize"
                        aria-expanded="false"
                        aria-controls="collapseSize"
                      >
                        How to measure size
                      </button>
                    </h2>
                    <div
                      id="collapseSize"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingOne"
                      data-bs-parent="#sizeChartAccordion"
                    >
                      <div class="accordion-body">
                        <img
                          src="/image/Size-guide-_-Women-_-Upper-body_Meternity-Upper-body_1-250x156.avif"
                          alt="Size Guide for Women - Upper Body"
                        />
                        <h5>1. Chest circumference</h5>
                        <p>
                          Measure your bust around the fullest part while
                          wearing a bra that fits you.
                        </p>

                        <h5>2. Waist circumference</h5>
                        <p>
                          Measure your waist at the narrowest point.
                          <span style="font-weight: bold"
                            >Maternity Clothing:</span
                          >
                          Do not measure your waist.
                        </p>

                        <h5>3. Arm length</h5>
                        <p>Measure the arm from shoulder to wrist.</p>

                        <h5>4. Lower hip circumference</h5>
                        <p>Measure your lower hips at the fullest point.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="custom-tabs-container">
                  <ul class="custom-tabs">
                    <li class="active" onclick="showChart('regular')">
                      Regular
                    </li>
                    <li onclick="showChart('tall')">Tall</li>
                    <li onclick="showChart('unisex')">Unisex</li>
                  </ul>
                  <div class="custom-size-chart-container">
                    <!-- Regular Size Chart -->
                    <div id="regular" class="custom-chart active">
                      <h5 class="custom-title">Regular Size Chart</h5>
                      <div class="table-scroll">
                        <table class="custom-size-chart">
                          <thead>
                            <tr>
                              <th>Size</th>
                              <th>XS</th>
                              <th>S</th>
                              <th>M</th>
                              <th>L</th>
                              <th>XL</th>
                              <th>XXL</th>
                              <th>XXXL</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>USA</td>
                              <td>36</td>
                              <td>38</td>
                              <td>40</td>
                              <td>43</td>
                              <td>47</td>
                              <td>51</td>
                              <td>55</td>
                            </tr>
                            <tr>
                              <td>EU</td>
                              <td>46</td>
                              <td>48</td>
                              <td>50</td>
                              <td>53</td>
                              <td>57</td>
                              <td>61</td>
                              <td>65</td>
                            </tr>
                            <tr>
                              <td>UK</td>
                              <td>36</td>
                              <td>38</td>
                              <td>40</td>
                              <td>43</td>
                              <td>47</td>
                              <td>51</td>
                              <td>55</td>
                            </tr>
                            <tr>
                              <td>Japan</td>
                              <td>91</td>
                              <td>97</td>
                              <td>102</td>
                              <td>109</td>
                              <td>119</td>
                              <td>130</td>
                              <td>140</td>
                            </tr>
                            <tr>
                              <td>Chest</td>
                              <td>35 – 36</td>
                              <td>37 – 38</td>
                              <td>39 – 41</td>
                              <td>42 – 44</td>
                              <td>45 – 48</td>
                              <td>49 – 52</td>
                              <td>55</td>
                            </tr>
                            <tr>
                              <td>Neck</td>
                              <td>13 ½ – 14</td>
                              <td>14 – 14 ½</td>
                              <td>15 – 15 ½</td>
                              <td>16 – 16 ½</td>
                              <td>17 – 17 ½</td>
                              <td>18 – 18 ½</td>
                              <td>18 ¾</td>
                            </tr>
                            <tr>
                              <td>Sleeve</td>
                              <td>31 – 32</td>
                              <td>32 – 33</td>
                              <td>33 – 34</td>
                              <td>34 – 35</td>
                              <td>35 – 35 ½</td>
                              <td>35 ½ – 36</td>
                              <td>36 ½</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <!-- Tall Table -->
                    <div id="tall" class="custom-chart">
                      <h5 class="custom-title">Tall Size Chart</h5>
                      <div class="table-scroll">
                        <table class="custom-size-chart">
                          <thead>
                            <tr>
                              <th>Size</th>
                              <th>XS Tall</th>
                              <th>S Tall</th>
                              <th>M Tall</th>
                              <th>L Tall</th>
                              <th>XL Tall</th>
                              <th>XXL Tall</th>
                              <th>XXXL Tall</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>USA</td>
                              <td>36</td>
                              <td>38</td>
                              <td>40</td>
                              <td>43</td>
                              <td>47</td>
                              <td>51</td>
                              <td>55</td>
                            </tr>
                            <tr>
                              <td>EU</td>
                              <td>46</td>
                              <td>48</td>
                              <td>50</td>
                              <td>53</td>
                              <td>57</td>
                              <td>61</td>
                              <td>65</td>
                            </tr>
                            <tr>
                              <td>UK</td>
                              <td>36</td>
                              <td>38</td>
                              <td>40</td>
                              <td>43</td>
                              <td>47</td>
                              <td>51</td>
                              <td>55</td>
                            </tr>
                            <tr>
                              <td>Japan</td>
                              <td>91</td>
                              <td>97</td>
                              <td>102</td>
                              <td>109</td>
                              <td>119</td>
                              <td>130</td>
                              <td>140</td>
                            </tr>
                            <tr>
                              <td>Chest</td>
                              <td>34 – 36</td>
                              <td>36 – 38</td>
                              <td>39 – 41</td>
                              <td>42 – 44</td>
                              <td>45 – 47</td>
                              <td>48 – 50</td>
                              <td>51 – 53</td>
                            </tr>
                            <tr>
                              <td>Neck</td>
                              <td>13 ½ – 14</td>
                              <td>14 – 14 ½</td>
                              <td>15 – 15 ½</td>
                              <td>16 – 16 ½</td>
                              <td>17 – 17 ½</td>
                              <td>18 – 18 ½</td>
                              <td>19 – 19 ½</td>
                            </tr>
                            <tr>
                              <td>Sleeve</td>
                              <td>32 ½</td>
                              <td>33 ½</td>
                              <td>34 ½</td>
                              <td>35 ½</td>
                              <td>36 ½</td>
                              <td>37 ½</td>
                              <td>38 ½</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <!-- Unisex Table -->
                    <div id="unisex" class="custom-chart">
                      <h5 class="custom-title">Unisex Size Chart</h5>
                      <div class="table-scroll">
                        <table class="custom-size-chart">
                          <thead>
                            <tr>
                              <th>Men's size</th>
                              <th>XS</th>
                              <th>S</th>
                              <th>M</th>
                              <th>L</th>
                              <th>XL</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Chest</td>
                              <td>35 – 36</td>
                              <td>37 – 38</td>
                              <td>39 – 41</td>
                              <td>42 – 44</td>
                              <td>45 – 48</td>
                            </tr>
                            <tr>
                              <td>Neck</td>
                              <td>13 ½ – 14</td>
                              <td>14 – 14 ½</td>
                              <td>15 – 15 ½</td>
                              <td>16 – 16 ½</td>
                              <td>17 – 17 ½</td>
                            </tr>
                            <tr>
                              <td>Sleeve</td>
                              <td>31 – 32</td>
                              <td>32 – 33</td>
                              <td>33 – 34</td>
                              <td>34 – 35</td>
                              <td>35 – 35 ½</td>
                            </tr>
                            <tr>
                              <td>Women's Size</td>
                              <td>S</td>
                              <td>M</td>
                              <td>L</td>
                              <td>XL</td>
                              <td>XXL</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="product-configuration">
          <div class="product-color">
            <span id="selected-color">Color</span>
            <div class="color-options">
              <div>
                <input
                  data-image="black"
                  type="radio"
                  id="black"
                  name="color"
                  value="black"
                />
                <label for="black"><span></span></label>
              </div>
              <div>
                <input
                  data-image="blue"
                  type="radio"
                  id="blue"
                  name="color"
                  value="blue"
                />
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input
                  data-image="brown"
                  type="radio"
                  id="brown"
                  name="color"
                  value="brown"
                />
                <label for="brown"><span></span></label>
              </div>
              <div>
                <input
                  data-image="cyan"
                  type="radio"
                  id="cyan"
                  name="color"
                  value="cyan"
                />
                <label for="cyan"><span></span></label>
              </div>
              <div>
                <input
                  data-image="green"
                  type="radio"
                  id="green"
                  name="color"
                  value="green"
                />
                <label for="green"><span></span></label>
              </div>
              <div>
                <input
                  data-image="gray"
                  type="radio"
                  id="gray"
                  name="color"
                  value="gray"
                />
                <label for="gray"><span></span></label>
              </div>
              <div>
                <input
                  data-image="orange"
                  type="radio"
                  id="orange"
                  name="color"
                  value="orange"
                />
                <label for="orange"><span></span></label>
              </div>
              <div>
                <input
                  data-image="pink"
                  type="radio"
                  id="pink"
                  name="color"
                  value="pink"
                />
                <label for="pink"><span></span></label>
              </div>
              <div>
                <input
                  data-image="purple"
                  type="radio"
                  id="purple"
                  name="color"
                  value="purple"
                />
                <label for="purple"><span></span></label>
              </div>
              <div>
                <input
                  data-image="red"
                  type="radio"
                  id="red"
                  name="color"
                  value="red"
                />
                <label for="red"><span></span></label>
              </div>
              <div>
                <input
                  data-image="white"
                  type="radio"
                  id="white"
                  name="color"
                  value="white"
                  checked
                />
                <label for="white"><span></span></label>
              </div>
              <div>
                <input
                  data-image="yellow"
                  type="radio"
                  id="yellow"
                  name="color"
                  value="yellow"
                />
                <label for="yellow"><span></span></label>
              </div>
            </div>
          </div>
        </div>
        <div class="product-size-container">
          <h5>
            Length
            <span
              class="product-selected-size"
              id="selectedSize"
              style="display: none"
            ></span>
          </h5>
          <ul class="product-size-list">
            <li class="product-size-item">
              <input
                type="radio"
                id="size-2xl"
                name="product-size"
                value="2XL"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-2xl">2XL</label>
            </li>
            <li class="product-size-item">
              <input
                type="radio"
                id="size-3xl"
                name="product-size"
                value="3XL"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-3xl">3XL</label>
            </li>
            <li class="product-size-item">
              <input
                type="radio"
                id="size-4xl"
                name="product-size"
                value="4XL"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-4xl">4XL</label>
            </li>
            <li class="product-size-item">
              <input
                type="radio"
                id="size-l"
                name="product-size"
                value="L"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-l">L</label>
            </li>
            <li class="product-size-item" >
              <input
                type="radio"
                id="size-m"
                name="product-size"
                value="M"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-m"  >M</label>
            </li>
            <li class="product-size-item">
              <input
                type="radio"
                id="size-s"
                name="product-size"
                value="S"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-s">S</label>
            </li>
            <li class="product-size-item">
              <input
                type="radio"
                id="size-xl"
                name="product-size"
                value="XL"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-xl">XL</label>
            </li>
            <li class="product-size-item">
              <input
                type="radio"
                id="size-xs"
                name="product-size"
                value="XS"
                onchange="handleSizeSelection(this)"
              />
              <label for="size-xs">XS</label>
            </li>
          </ul>
          <button class="product-clear-button" onclick="clearSelection()">
            Clear
          </button>
        </div>

        <!-- cart buttons / checkout/bynow  -->
        <div class="add-to-cart">
          <div class="custom-note">
            <label for="customizeNote">Customize Note</label>
            <textarea
              id="customizeNote"
              class="custom-textarea"
              placeholder="Your customized print, design, logo, size etc"
            ></textarea>
          </div>
          <!-- Quantity Selector -->
          <div class="quantity-selector">
            <div class="quantity-wrapper">
              <button id="decrement" class="btn-quantity btn-decrease">
                -
              </button>
              <input
                id="quantity"
                type="number"
                value="1"
                min="1"
                class="quantity-input"
              />
              <button id="increment" class="btn-quantity btn-increase">
                +
              </button>
            </div>
          </div>

          <!-- Cart Buttons -->
          <div class="cart-buttons">
            <button id="addToCart" class="addToCart butn butn-add-to-cart">
              Add to Cart
            </button>
            <button
              id="viewCart"
              class="viewCart"
              style="
                width: 120px;
                height: 50px;
                border: none;
                background: #3e3e3e;
                border-radius: 10px;
                color: white;
                font-family: sans-serif;
                margin-bottom: -10px;
              "
            >
              View cart
            </button>
            <button id="buyNow" name="buyNow" class="butn butn-buy-now">Buy Now</button>
            <div class="bulk-discount">
              <button class="bulk-discount-btn">
                <img src="image/supermarket (2).png`  " /> Enjoy Bulk Purchase
                Discount
              </button>
              <div class="bulk-options">
                <div class="bulk-option">
                  <h5>15 Pieces</h5>
                  <span>10% OFF</span>
                </div>
                <div class="bulk-option">
                  <h5>25 Pieces</h5>
                  <span>15% OFF</span>
                </div>
                <div class="bulk-option">
                  <h5>50 Pieces</h5>
                  <span>30% OFF</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Cart Drawer -->
        <!-- <div id="cartDrawer" class="cart-drawer">
       <div class="cart-drawer-header">
    Your Cart
</div>
<div class="cart-item-container">
    <div class="cart-item" id="cartItem" style="display: flex; flex-wrap: wrap; gap: 15px; padding: 10px;">
    </div>
   
</div>


        <div class="cart-checkout" style="padding: 15px; width: 100%;">
            <div style="border-top: 1px solid #ddd; padding-top: 15px;">
              <button id="promo-toggle" 
              style="width: 100%; text-align: left; background: none; border: none; font-size: large; font-weight: bold; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
          Apply a promo code
          <span id="toggle-icon" style="transform: rotate(0deg); transition: transform 0.9s;">▼</span>
      </button>
      
      <div id="promo-code-input" style="max-height: 0; overflow: hidden; opacity: 0; transition: all 0.9s ease-in-out;">
          <input type="text" id="promo-code" placeholder="Enter promo code" style="width: 100%; padding: 10px; font-size: large;"/>
      </div>
      
                <div id="promo-code-section" style="display: none; margin-top: 10px;">
                    <div style="display: flex; gap: 10px;">
                        <input type="text" placeholder="Promo code"
                            style="flex-grow: 1; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" />
                        <button
                            style="background: #000; color: #fff; padding: 10px; border: none; border-radius: 5px;">Apply</button>
                    </div>
                </div>
            </div>

            <div>
                <p id="subtotalElement" style="margin: 0; font-size: large; font-weight: bold;">Subtotal - $0.00
                </p>
                <p style="color: #888;">Shipping & taxes calculated at checkout.</p>
                <button
                    style="width: 100%; background: #000; color: #fff; padding: 10px; border: none; border-radius: 5px;">Checkout
                    Now</button>
            </div>
        </div>
    </div>
         -->
        <!-- Cart Drawer -->
        <div id="cartDrawer" class="cart-drawer">


          <button id="closeCartDrawer" class="close-btn">&times;</button>

          <div class="cart-drawer-header">Your Cart</div>
          
          <div class="cart-item-container">
            <div
              class="cart-item"
              id="cartItem"
              
            >
              <img src="https://via.placeholder.com/50" alt="Product Image" />

              <div class="cart-item-details">
                <p class="product-title">
                  T-Shirt Over size - <span class="product-color">Blue</span>,
                  <span class="product-size">M</span>
                </p>
                <div class="cart-item-actions">
                  <button class="qty-dec-btn">-</button>
                  <span class="quantity">3</span>
                  <button class="qty-inc-btn">+</button>
                </div>
              </div>

              <div
                class="cart-item-price"
                style="display: flex; justify-content: right"
              >
                <p class="price">
                  <del class="original-price">$150.0</del>
                  <strong class="discounted-price">$87.0</strong>
                </p>
                <p class="discount-text">(Save 42%)</p>
                <button class="delete-btn">&#128465;</button>
              </div>
            </div>
          </div>

          <!-- checkout section  -->
          <div class="cart-checkout" style="padding: 15px; margin-bottom: -5% ; width: 100%">
            <!-- Promo Code Section -->
             <hr  style="margin-left: -15px; width: 106% ; " >
            <div>
              <button
                id="promo-toggle"
              class="apply-btn  "  >
                Apply a promo code
                <span
                  id="toggle-icon"
                  style="transform: rotate(180deg); transition: transform 0.3s"
                  ><img src="image/down-arrow-svgrepo-com.svg" alt=""></span
                >
              </button>
              <div
  id="promo-code-input"
  style="
    position: relative;
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transition: all 0.5s;
  "
>
  <style>
    #promo-code-input::before {
      content: "";
      display: block;
      height: 20px; /* Creates spacing above */
    }
  </style>
                <input
                  type="text"
                  id="promo-code"
                  placeholder="Enter promo code"
                  style="width: 70%; padding: 10px;  flex-grow: 1;
                  padding: 10px;
                  border: 1px solid #ddd;
                  border-radius: 5px;"
                />
                <button
                style="
                  background: #efefef;
                  color: #000000;
                  padding: 10px;
                  border: 1px solid #bdbdbd;
                  border-radius: 5px;
                  width: 25%;
                "
              >
                Apply
              </button>
              </div>

              <!-- <div
                id="promo-code-section"
                style="display: none; margin-top: 10px"
              >
                <div style="display: flex; gap: 10px">
                  <input
                    type="text"
                    placeholder="Promo code"
                    style="
                      flex-grow: 1;
                      padding: 10px;
                      border: 1px solid #ddd;
                      border-radius: 5px;
                    "
                  />
                  <button
                    style="
                      background: #000;
                      color: #fff;
                      padding: 10px;
                      border: none;
                      border-radius: 5px;
                    "
                  >
                    Apply
                  </button>
                </div>
              </div> -->
            </div>
            <div class="cart-item-divider-2 "></div>

           <!-- Subtotal Section -->
<div>
  <p id="subtotalElement" class="float-end prices-2" >
     $0.00
  </p>
  <span id="totalQuantity" class="totalquatity" >
    Total Quantity - 0
  </span>
  <p  class="ship-taxes">
    Shipping & taxes calculated at checkout.
  </p>

              <button
                style="
                  width: 100%;
                  background: #000;
                  color: #fff;
                  padding: 10px;
                  border: none;
                  border-radius: 5px;
                "
              >
                Checkout Now
              </button>
            </div>
          </div>
                    
        </div>


        
        <div class="custom-details-section mt-5 ms-2">
          <details class="custom-details">
            <summary class="custom-summary">DESCRIPTION</summary>
            <span class="custom-details-text">
              Premium Men’s T-Shirt with Modern Fit and Customizable
              Design</span
            >
            <p class="custom-details-text">
              Achieve effortless style and unmatched comfort with our premium
              men’s T-shirt, tailored for versatility and everyday wear.
              Featuring a sleek modern fit and a classic crew neck design, this
              T-shirt is perfect for layering or wearing on its own. Crafted
              from high-quality materials, it offers softness, durability, and
              breathability, making it an essential wardrobe staple.
            </p>

            <ul>
              <li>Art.- No.:<span> MTS-987654321</span></li>
              <li>Length: <span>Regular</span></li>
              <li>Fit : <span>Modern Fit</span></li>
              <li>Style<span> Crew Neck T-Shirt</span></li>
              <li>Colours Available: <span>12 Colours</span></li>
              <li>
                Description: <span>Soft, Lightweight, and Breathable</span>
              </li>
            </ul>
            <p>
              This T-shirt is ideal for casual outings, gym sessions, or
              lounging at home. Clients can also customize this product with
              their own designs, logos, sizes, and colours, making it an
              excellent choice for personal use, corporate branding, or
              promotional campaigns.
            </p>
          </details>
        </div>
        <div class="custom-details-section ms-2">
          <details class="custom-composition">
            <summary class="custom-summary">
              COMPOSITION & MATERIAL DETAILS
            </summary>
            <p class="custom-details-text">Material Composition:</p>

            <ul>
              <li>Cotton: <span> 90%</span></li>
              <li>Polyester: <span>10%</span></li>
            </ul>
            <p>Additional Information About the Materials</p>
            <ul class="comp-ul">
              <li>50% recycled cotton sourced from textile waste.</li>
              <li>
                30% recycled polyester made from PET bottles or old textiles.
              </li>
              <li>
                Small components like threads and labels are excluded from
                weight calculations.
              </li>
            </ul>
            <p>Materials in this product explained:</p>
            <ul>
              <li>
                Cotton:
                <span> Provides ultimate softness and breathability.</span>
              </li>
              <li>
                Polyester:
                <span>Ensures durability and lightweight performance.</span>
              </li>
              <li>
                Recycled Materials:<span
                  >Promotes sustainability without compromising quality.</span
                >
              </li>
            </ul>
          </details>
        </div>
        <div class="custom-details-section ms-2">
          <details class="custom-composition">
            <summary class="custom-summary">CARE INSTRUCTIONS</summary>
            <h6 class="custom-details-text">
              Care Instructions for Your Elite Textile Men’s T-Shirt
            </h6>

            <p>
              Keep your T-shirt looking fresh and feeling soft by following
              these care tips:
            </p>
            <h6>Sustainability Tip:</h6>
            <p>
              At EliteTextile.us, we support eco-friendly practices by
              encouraging recycling, reuse, and responsible garment care.
            </p>
            <h6>Instructions:</h6>
            <ul>
              <li>
                Washing:
                <span> Machine wash at 30°C with similar colours.</span>
              </li>
              <li>
                Bleaching: <span>Avoid bleach to maintain fabric quality.</span>
              </li>
              <li>
                Drying:<span
                  >Tumble dry on low heat or air dry for best results.</span
                >
              </li>
              <li>
                Ironing:<span> Use a low-heat setting if necessary.</span>
              </li>
              <li>
                Dry Cleaning: <span> Not recommended for this product.</span>
              </li>
            </ul>
            <p>
              Following these care instructions ensures long-lasting quality and
              reduces environmental impact.
            </p>
          </details>
        </div>
        <section class="row">
          <div class="col-12 svg-section">
            <h5>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="27"
                height="27"
                fill="currentColor"
                class="bi bi-globe me-3"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"
                /></svg
              >Free Shipping For Orders Over $99
            </h5>
            <h5>
              <img
                src="image/delivery-truck-truck-svgrepo-com.svg"
                alt=""
              />Easy Return and Refund - 30 Days Warranty
            </h5>
            <h5>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="27"
                height="27"
                fill="currentColor"
                class="me-3 bi bi-check-circle"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                />
                <path
                  d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"
                /></svg
              >24 Hours Response
            </h5>
            <h5>
              <img src="image/icons8-lock.svg" alt="" />100% Secure Payments
            </h5>
          </div>

          <div class="product-card col-12">
            <h2 class="section-title">YOU MAY ALSO LIKE</h2>
            <div class="product">
              <img
                src="image/white-21-300x300.jpg"
                alt="T-Shirt Over size"
                class="product-image"
              />
              <p class="product-title_2">T-Shirt Over size</p>
              <p class="product-price">
                <span class="current-price">$29</span>
                <span class="original-price">$50</span>
              </p>
            </div>
          </div>
          <div class="social-links my-4">
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-tiktok"></i> TikTok</a>
          </div>
        </section>
      </div>
    </main>

    <main class="container-fluid cherry_top">
      <hr class="" />
      <section class="container-fluid my-5 form-section">
        <h2 class="mb-4 form-head">Reviews</h2>
        <p class="form-par">There are no reviews yet.</p>
        <h4 class="form-head-2">Be the first to review “T-Shirt Over size”</h4>
        <p class="form-par2">
          Your email address will not be published. Required fields are marked
          <span class="text-danger">*</span>.
        </p>
        <form class="row g-3">
          <div class="col-12">
            <label class="form-label"
              >Your Rating <span class="text-danger">*</span></label
            >
            <div class="star-rating">
              <input type="radio" id="5-stars" name="rating" value="5" />
              <label for="5-stars" class="star">&#9733;</label>
              <input type="radio" id="4-stars" name="rating" value="4" />
              <label for="4-stars" class="star">&#9733;</label>
              <input type="radio" id="3-stars" name="rating" value="3" />
              <label for="3-stars" class="star">&#9733;</label>
              <input type="radio" id="2-stars" name="rating" value="2" />
              <label for="2-stars" class="star">&#9733;</label>
              <input type="radio" id="1-star" name="rating" value="1" />
              <label for="1-star" class="star">&#9733;</label>
            </div>
          </div>
          <div class="col-md-6">
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Your Name"
              required
            />
          </div>
          <div class="col-md-6">
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Your Email"
              required
            />
          </div>
          <div class="col-12">
            <textarea
              class="form-control"
              id="review"
              rows="5"
              placeholder="Write your review here..."
              required
            ></textarea>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="saveInfo" />
              <label class="form-check-label" for="saveInfo">
                Save my name, email, and website in this browser for the next
                time I comment.
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-dark">Submit</button>
          </div>
        </form>
      </section>
    </main>

    <footer>
      <div class="footer-container">
        <!-- Logo and Description -->
        <div class="footer-section">
          <img
            src="image/elite-textile-01-1-1024x1024.png"
            alt="Elite Textile Logo"
            class="footer-logo img-fluid"
          />
          <p>
            With 40 years of exceptional service in Asia, Elite Textile proudly
            brings its legacy of quality and trust to America. We redefine
            online shopping by making it as seamless and personal as an in-store
            experience. Elevate your wardrobe with our stylish clothing, perfect
            for personal use or bulk orders.
          </p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-tiktok"></i> TikTok</a>
          </div>
        </div>

        <!-- Important Links -->
        <div class="footer-section">
          <h4>Important Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Shipping Policy</a></li>
            <li><a href="#">Payment Methods</a></li>
            <li><a href="#">Refund and Returns Policy</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Signup Form -->
        <div class="footer-section">
          <h4>Sign Up and Save</h4>
          <p>
            Subscribe to get special offers, free giveaways, and
            once-in-a-lifetime deals.
          </p>
          <form>
            <label for="email"
              >Email Address <span class="text-danger">*</span></label
            >
            <input type="email" placeholder="E.g. john@doe.com" required />
            <button type="submit">Subscribe</button>
          </form>
        </div>

        <!-- Contact Info -->
        <div class="footer-section">
          <h4>Contact Us</h4>
          <p><i class="fas fa-phone"></i> +17869124992</p>
          <p><i class="fas fa-envelope"></i> elitetextile.us@gmail.com</p>
        </div>
      </div>

      <!-- Bottom Footer -->
      <div class="footer-bottom">
        <p>Copyright © 2025 EliteTextile | Powered by JaidooEmpire</p>
      </div>
    </footer>

    <!-- Scripts -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
      charset="utf-8"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevateZoom.min.js"></script>

    <script src="script.js" charset="utf-8"></script>
  </body>
</html>


