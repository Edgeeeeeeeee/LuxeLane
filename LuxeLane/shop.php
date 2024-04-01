<?php 
    $link=mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    mysqli_select_db($link, "luxelane")or die(mysqli_error($link))
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #fffdfdfd; backdrop-filter: blur(2px);">
        <div class="container" style="margin: 0px;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarButtonsExample" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <a href="#" class="mx-auto d-lg-none" style="text-decoration: none;">
            <span class="nav-logo" style="color: #EFB928;">Luxe</span>
            <span class="nav-logo" style="color: #161103;">Lane</span>
          </a>

          <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-curr" aria-current="page" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">About Us</a>
              </li>
            </ul>

            <a href="#" class="mx-auto d-none d-lg-block"  style="text-decoration: none;">
              <span class="nav-logo" style="color: #EFB928;">Luxe</span>
              <span class="nav-logo" style="color: #161103;">Lane</span>
            </a>

            <a href="login.html">
              <button class="btn login_btn">Login</button>
            </a>
          </div>
        </div>
    </nav>

      <div class="container-fluid header">
        
      </div>
      
      <div class="row row-cols-2 g-0">
        <div class="col-2" style="padding: 16px;">
          <h3>Filters</h3>
            <form action="" method="post">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Gender
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="padding-bottom: 0px;">
                      <div class="d-flex justify-content-between">
                        <label class="form-check-label" for="all">
                          All
                        </label>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="all" id="all" />
                        </div>
                      </div>

                      <div class="d-flex justify-content-between">
                        <label class="form-check-label" for="male">
                          Male
                        </label>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="male" id="male" />
                        </div>
                      </div>

                      <div class="d-flex justify-content-between">
                        <label class="form-check-label" for="female">
                          Female
                        </label>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="female" id="female" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Category
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="padding-bottom: 0px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus..
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Type
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus..
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Price
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus..
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Collection
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus..
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
        <div class="col col-10">
          <div class="row justify-content-evenly" style="padding: 16px; margin-right: 0px;">
            <?php
              $res = mysqli_query($link, "select * from products");
              while ($row = mysqli_fetch_array($res)) {
                $productId = $row["product_id"];
                echo '<div class="col-3 card">';
                  echo '<a href="product.php?product_id=' . $productId . '">';
                    echo '<img src="'. $row["image_1"] .'" alt="">';
                    echo '<div class="card-content">';
                      echo '<div class="prod_desc">';
                        echo '<h4>' . $row["product_name"] . '</h4>';
                        echo '<p class="p2 price">PHP ' . $row["price"] . '.00</p>';
                        echo '<p class="p2 subtext">Learn more</p>';
                      echo '</div>';
                    echo '</div>';
                  echo '</a>';
                echo '</div>';
              }
            ?>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>