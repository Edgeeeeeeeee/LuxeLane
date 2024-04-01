<?php
include "connection.php";
?>

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Breadwinner</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <link rel="stylesheet" href="css/default.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#" style="color: #392A16; font-family: Pacifico;">Breadwinner</a>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Homepage.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Store</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutUs.html">About Us</a>
            </li>
            <li class="nav-item">
                <button class="btn btn-secondary" id="loginbtn" onclick="navToLogin()">Login</button>
            </li>
          </ul>
        </div>
    </nav>
  
    <div class="shopBody row">
    <div class="col-12 col-lg-10" id="mainContent">
      <div class="products row">
        <?php
          $categories = array(); // to store unique categories

          $res = mysqli_query($link, "select * from products");
          while ($row = mysqli_fetch_array($res)) {
            $category = $row["productCategory"];
            if (!in_array($category, $categories)) {
              $categories[] = $category;
            }

            echo '<div class="col-lg-6 col-md-6 col-sm-12 product ' . $category . '">';
                echo '<div class="productContainer row justify-content-between" data-toggle="modal" data-target="#id-'; echo $row["productId"]; echo '">';
                  echo '<div class="info">';
                    echo '<p class="productName">'; echo $row["productName"]; echo '<br><span class="productDetails">Lorem ipsum Dolor sit Amet</span></p>';
                    echo'<p class="productPrice">₱'; echo $row["productPrice"]; echo '.00</p>';
                  echo'</div>';
                  echo '<div>';
                    echo '<img src="'; echo $row["productImg"]; echo '" alt="img" class="prodImg">';
                  echo'</div>';
                echo'</div>';
              echo '</div>';

              echo '<div class="modal fade" id="id-' . $row["productId"] . '">';
                echo '<div class="modal-dialog modal-dialog-centered">';
                  echo'<div class="modal-content">';
                    echo'<div class="modal-body">';
                      echo'<div style="text-align: center">';
                        echo'<img src="'; echo $row["productImg"]; echo'" alt="img" class="img-fluid" style="max-width: 190px">';
                        echo'<button type="button" class="close" data-dismiss="modal">&times;</button>';
                      echo '</div>';
                      echo '<div class="row" style="text-align: left">';
                        echo '<div class="col-9">';
                          echo '<h5 class="modal-title" id="productName-' . $row["productId"] . '">' . $row["productName"] . '</h5>';
                          echo '<p style="text-align: left">'. $row["productDescription"] .'</p>';
                        echo '</div>';
                        echo '<div class="col-3">';
                          echo '<p class="productPrice" id="productPrice-' . $row["productId"] . '">₱' . $row["productPrice"] . '.00</p>';
                        echo '</div>';
                      echo '</div>';
                      echo '<div class="row quantifier" style="margin-left: 1%">';
                        echo '<div class="col-9">';
                          echo '<div class="row" style="padding: 0px">';
                            echo '<div>';
                              echo '<button class="qtyBTN down">-</button>';
                            echo '</div>';  
                            echo '<div>';
                              echo '<input class="qty" id="qty-' . $row["productId"] . '" type="number" min="1" max="99" step="1" value="1">';
                            echo '</div>'; 
                            echo '<div>';
                              echo '<button class="qtyBTN up">+</button>';
                            echo '</div>';  
                          echo '</div>';
                        echo '</div>';
                        echo '<div class="col-3">';
                          echo '<p class="unitPrice" id="unitPrice-' . $row["productId"] . '" style="font-weight: bold"></p>';
                        echo '</div>';
                      echo '</div>';
                      echo '<div>';
                        echo '<button class="addToCartBTN" type="button" onClick="addToCart(' . $row["productId"] . ')" data-dismiss="modal" >Add to Cart</button>';
                      echo'</div>';
                    echo'</div>';
                  echo '</div>';
                echo '</div>';
              echo'</div>';
            }
          ?>
        </div>
      </div>
      
      <button type="button" onclick="toggleSidePanel()" id="floatingButton">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M7.2 19.2C5.88 19.2 4.812 20.28 4.812 21.6C4.812 22.92 5.88 24 7.2 24C8.52 24 9.6 22.92 9.6 21.6C9.6 20.28 8.52 19.2 7.2 19.2ZM0 0V2.4H2.4L6.72 11.508L5.1 14.448C4.908 14.784 4.8 15.18 4.8 15.6C4.8 16.92 5.88 18 7.2 18H21.6V15.6H7.704C7.536 15.6 7.404 15.468 7.404 15.3L7.44 15.156L8.52 13.2H17.46C18.36 13.2 19.152 12.708 19.56 11.964L23.856 4.176C23.952 4.008 24 3.804 24 3.6C24 2.94 23.46 2.4 22.8 2.4H5.052L3.924 0H0ZM19.2 19.2C17.88 19.2 16.812 20.28 16.812 21.6C16.812 22.92 17.88 24 19.2 24C20.52 24 21.6 22.92 21.6 21.6C21.6 20.28 20.52 19.2 19.2 19.2Z" fill="#392A16"/>
        </svg>
      </button>

      <div class="filterSec col-lg-2 d-none d-lg-block">
        <button type="button" onclick="toggleSidePanel()" style="padding: 5%; background-color: #63413300; width: 128px; margin: 15px">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M7.2 19.2C5.88 19.2 4.812 20.28 4.812 21.6C4.812 22.92 5.88 24 7.2 24C8.52 24 9.6 22.92 9.6 21.6C9.6 20.28 8.52 19.2 7.2 19.2ZM0 0V2.4H2.4L6.72 11.508L5.1 14.448C4.908 14.784 4.8 15.18 4.8 15.6C4.8 16.92 5.88 18 7.2 18H21.6V15.6H7.704C7.536 15.6 7.404 15.468 7.404 15.3L7.44 15.156L8.52 13.2H17.46C18.36 13.2 19.152 12.708 19.56 11.964L23.856 4.176C23.952 4.008 24 3.804 24 3.6C24 2.94 23.46 2.4 22.8 2.4H5.052L3.924 0H0ZM19.2 19.2C17.88 19.2 16.812 20.28 16.812 21.6C16.812 22.92 17.88 24 19.2 24C20.52 24 21.6 22.92 21.6 21.6C21.6 20.28 20.52 19.2 19.2 19.2Z" fill="#392A16"/>
          </svg>
          Cart
        </button>
      <ul class="filterItems">
      <?php
        foreach ($categories as $category) {
          echo '<li onclick="filterProducts(\'' . $category . '\')">' . $category . '</li>';
        }
        ?>
        <li onclick="showAllProducts()">All</li>
      </ul>
    </div>

    <div id="sidePanel">
      <div class="row justify-content-between align-items-center">
        <h2 onclick="toggleSidePanel()">Your Bag</h2>
        <p onclick="toggleSidePanel()" class="back">Back ></p>
      </div>
      
      <div class="cartItems"></div>
      <div>
        <div class="row justify-content-between" style="max-height: fit-content; margin-top: 2%;">
          <div class="col-3">
            TOTAL:
          </div>
          <div class="col-3">
            <p class="totalPrice" ></p>
          </div>
        </div>
        <button type="button" class="addToCartBTN" onclick="navToCheckout()">Checkout</button>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="SADProject.js"></script>
  </body>
</html>