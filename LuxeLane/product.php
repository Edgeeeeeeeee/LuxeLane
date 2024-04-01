<?php 
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    mysqli_select_db($link, "luxelane") or die(mysqli_error($link));

    if(isset($_GET['product_id'])) {
        $productId = mysqli_real_escape_string($link, $_GET['product_id']);

        $query = "SELECT * FROM products WHERE product_id = '$productId'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        if(mysqli_num_rows($result) > 0) {
            $product = mysqli_fetch_assoc($result);
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
    <title>Product Page</title>
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

    <div class="row" style="margin: 48px; margin-top: 24px; max-width: 100%;">
        <div class="col col-6">
            <div class="row" style="max-width: 100%;">
                <div class="col col-2">
                    <div class="prod-img-container">
                        <img src="<?php echo $product["image_1"]; ?>" alt="Portrait Image">
                    </div>

                    <div class="prod-img-container">
                        <img src="<?php echo $product["image_2"]; ?>" alt="Portrait Image">
                    </div>
                </div>
                <div class="col col-10" style="height: 68vh;">
                    <div class="prod-img-container" style="height: 100%;">
                        <img src="<?php echo $product["image_3"]; ?>" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-6" style="padding-left: 48px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="color: #EFB928;"><?php echo $product["product_name"]; ?></h3>
                <h4><?php echo '₱' . $product["price"]; ?></h4>
                <p class="p1" style="font-family: 'Oswald'; margin-bottom: 0px;">Description</p>
                <p class="p2"><?php echo $product["product_description"]; ?></p>
                <p class="p2" style="margin-bottom: 0px;">Available Sizes</p>
                <div class="btn-group">
                    <input type="radio" class="btn-check" name="options" id="XS" autocomplete="off" checked />
                    <label class="btn btn-secondary" for="XS" data-mdb-ripple-init>XS</label>
                
                    <input type="radio" class="btn-check" name="options" id="s" autocomplete="off" />
                    <label class="btn btn-secondary" for="s" data-mdb-ripple-init>S</label>
                
                    <input type="radio" class="btn-check" name="options" id="m" autocomplete="off" />
                    <label class="btn btn-secondary" for="m" data-mdb-ripple-init>M</label>
        
                    <input type="radio" class="btn-check" name="options" id="l" autocomplete="off" />
                    <label class="btn btn-secondary" for="l" data-mdb-ripple-init>L</label>
        
                    <input type="radio" class="btn-check" name="options" id="XL" autocomplete="off" />
                    <label class="btn btn-secondary" for="XL" data-mdb-ripple-init>XL</label>
                </div>
            </div>
            <div class="row" style="max-width: 100%;">
              <input type="number" value="50" min="0" max="100" step="10"/>
              <div class="col col-9">
                <button class="b1" style="height: 48px; font-size: 21px; margin-right: 8px;">Buy Now</button>
              </div>
              <div class="col col-3">
                <button class="b2" style="height: 48px; font-size: 21px;">Add to Cart</button>
              </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-2" style="max-width: 100%; margin-left: 48px; margin-right: 48px;">
      <div class="container-fluid" style="width: 50%; background-color: #CCCCCC;">

      </div>
      <div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="container top-picks">
      <h3 style="color: #EFB928;">Top Picks</h3>
      <p class="p2">Lorem ipsum dolor sit amet.</p>
      <div class="d-flex flex-row justify-content-start" style="max-width: 100%;">
        <div class="product">
          <img src="images/Sample Product.png" alt="">
          <div class="prod_desc">
            <h4 style="color: #EFB928; font-family: 'Oswald'; margin-bottom: 0px;">Flower Printed Tee</h4>
            <p class="p2" style="color: #FFFDFD; margin-bottom: 0px;">PHP 150.00</p>
          </div>
        </div>
        <div class="product">
          <div class="prod_desc">
            <h4 style="color: #EFB928; font-family: 'Oswald';">Flower Printed Tee</h4>
            <p class="p2" style="color: #FFFDFD;">PHP 150.00</p>
          </div>
        </div>
      </div>
    </div>

    <script src="./src/bootstrap-input-spinner.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>