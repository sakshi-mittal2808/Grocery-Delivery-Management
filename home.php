<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRINAVAN KIRAN</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="syle.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo"><i class="fa fa-shopping-basket"></i>VRINDAVAN KIRAN</a>
        <navbar class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#categories">categories</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
            <a href="#contact us">contact us</a>
        </navbar>

        <div class="icons" style="display: inline-block; margin-left: 20px;">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <!-- Search -->
        <form action="" class="search">
            <input type="search" placeholder="search here...." id="search_box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <!--  login -->
        <form action="" class="log-in">
            <h1>login now</h1>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">Click here</a></p>
            <p>don't have account <a href="#">Click here</a></p>
            <input type="submit" value="login now" class="box">
        </form>
    </header>

    <!-- HOME -->
    <section class="home" id="home">
    <div class="content" style="width:100%;  background-image: url('images/grocery.jpg'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center; padding:50px;">
        <h1>Welcome to VRINDAVAN KIRAN</h1>
        <h3>fresh and <span>organic </span>products for you</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" class="btn" style="border:2px solid white; color: white;" >shop now</a>
    </div>
    </section>

    <!-- features -->
    <section class="features" id="features">
        <h1 class="heading"> our <span>features</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images\fresh_and_organic.jpg">
                <h3>fresh and organic</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn" style="border-color:black; color:black;">read more</a>
            </div>
            <div class="box">
                  <img src="images\delivery.jpg">
                  <h3>delivery in an hour</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <a href="#" class="btn" style="border-color:black; color:black;">read more</a>
            </div>
            <div class="box">
              <img src="images\online_payment.jpg">
              <h3>Easy payment</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <a href="#" class="btn" style="border-color:black; color:black;">read more</a>
            </div>
        </div>
    </section>

    <!-- CATEGORIES -->
    <section class="categories" id="categories">
        <h1 class="heading"> our <span>categories</span></h1>
        <div class="product-slider">
            <div class="box-container">
                <div class=" box">
                    <img src="images\beverage.jpg"><br>
                    <a href="#beverages">Beverages</a>
                </div>
                <div class=" box">
                    <img src="images\bread.jpg"><br>
                    <a href="#bread">Bread or Bakery</a>
                </div>
                <div class=" box">
                    <img src="images\canned godds.jpg"><br>
                    <a href="#jarred">Jarred Goods</a>
                </div>
                <div class=" box">
                    <img src="images\dairy.webp"><br>
                    <a href="#dairy">Dairy</a>
                </div>
                <div class=" box">
                    <img src="images\baking.webp"><br>
                    <a href="#baking">Baking Goods</a>
                </div>
                <div class=" box">
                    <img src="images\frozen_foods.webp"><br>
                    <a href="#frozen">Frozen Foods</a>
                </div>
                <div class=" box">
                    <img src="images\meat.webp"><br>
                    <a href="#meat">Meat</a>
                </div>
                <div class=" box">
                    <img src="images\produce.webp"><br>
                    <a href="#produce">Produce</a>
                </div>
                <div class=" box">
                    <img src="images\cleaners.webp"><br>
                    <a href="#cleaner">Cleaners</a>
                </div>
                <div class=" box">
                    <img src="images\paper-goods.webp"><br>
                    <a href="#paper">Paper Goods</a>
                </div>
                <div class=" box">
                    <img src="images\personal-care.webp"><br>
                    <a href="#personal">Personal Care</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BEVERAGES -->
    <section class="beverages" id="beverages">
        <h1 class="heading"><span>BEVERAGES</span></h1>
        <div class="product-slider">
            <div class="box-container">
                <div class=" box">
                    <img src="images\coffee.jpg"><br>
                    <h3>coffee</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\tea.jpg"><br>
                    <h3>tea</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\juice.jpg"><br>
                    <h3>juice</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\soda.jpg"><br>
                    <h3>soda</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\alcohol.jpg"><br>
                    <h3>alcohol</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BREAD OR BAKERY -->
    <section class="beverages" id="bread">
        <h1 class="heading"><span>bread or bakery</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\sandwich.jpg"><br>
                    <h3>sandwich bread</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\dinner-rolls.jpg"><br>
                    <h3>dinner-rolls</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\tortills.jpg"><br>
                    <h3>tortillas</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\bagels.jpg"><br>
                    <h3>bagels</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- jarred -->
    <section class="beverages" id="jarred">
        <h1 class="heading"><span>jarred goods</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\pickle.webp"><br>
                    <h3>Pickle</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\spaghetti-sauce.webp"><br>
                    <h3>spaghetti sauce</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\ketchup.jpg"><br>
                    <h3>tomato ketchup</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>                
            </div>
        </div>
    </section>

    <!-- DAIRY -->
    <section class="beverages" id="dairy">
        <h1 class="heading"><span>DAIRY</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\cheese.jpg"><br>
                    <h3>cheese</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\egg.jpg"><br>
                    <h3>eggs</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\milk.webp"><br>
                    <h3>milk</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\yogurt.webp"><br>
                    <h3>yogurt</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\butter.webp"><br>
                    <h3>butter</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BAKING GOODS -->
    <section class="beverages" id="baking">
        <h1 class="heading"><span>baking goods</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\cereals.webp"><br>
                    <h3>cereals</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\flour.webp"><br>
                    <h3>flour</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\sugar.webp"><br>
                    <h3>sugar</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\salt.jpg"><br>
                    <h3>salt</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\pasta.webp"><br>
                    <h3>pasta</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\creams.webp"><br>
                    <h3>creams</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FROZEN -->
    <section class="beverages" id="frozen">
        <h1 class="heading"><span>FROZEN GOODS</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\frozen vegetables.webp"><br>
                    <h3>frozen vegetables</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\waffles.webp"><br>
                    <h3>waffles</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\icecream.webp"><br>
                    <h3>ice cream</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- MEAT -->
    <section class="beverages" id="meat">
        <h1 class="heading"><span>Meat</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\meat.webp"><br>
                    <h3>meat</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\beef.webp"><br>
                    <h3>beef</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\pork.webp"><br>
                    <h3>pork</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCE -->
    <section class="beverages" id="produce">
        <h1 class="heading"><span>produce</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\vegetables.webp"><br>
                    <h3>vegetables</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\fruits.webp"><br>
                    <h3>fruits</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- cleaners -->
    <section class="beverages" id="cleaner">
        <h1 class="heading"><span>cleaners</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\cleaning.webp"><br>
                    <h3>all-product cleaner</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\dishwasher.jpg"><br>
                    <h3>dishwasher</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\cloths.webp"><br>
                    <h3>laundary detergent</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>                
            </div>
        </div>
    </section>

     <!--paper-->
     <section class="beverages" id="paper">
        <h1 class="heading"><span>paper goods</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\foil-paper.webp"><br>
                    <h3>foil paper</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\paper-bag.webp"><br>
                    <h3>paper bag</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\toilet-paper.webp"><br>
                    <h3>toilet paper</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>                
            </div>
        </div>
    </section>

    <!--personal-->
    <section class="beverages" id="personal">
        <h1 class="heading"><span>personal goods</span></h1>
        <div class="product-slider">
            <div class=" box-container">
                <div class=" box">
                    <img src="images\sanitary.webp"><br>
                    <h3>sanitary napkins</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\shampoo.webp"><br>
                    <h3>shampoo or soap</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class=" box">
                    <img src="images\shaving-cream.webp"><br>
                    <h3>cream</h3>
                    <div class="price">$4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>                
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="footer" id="contact us" style="background-color: #F8E8EE;">
        <div class="boxc">
            <div class="block">
                <h1>Shop non-stop from vrindavan kiran <i class="fas fa-shopping-basket"></i></h1>
                <a href="#" class="fa fa-clock-o"></a>
            </div>

            <div class="block">
                <h3>contact info</h3>
                <a href="#" class="inks"><i class="fas fa-phone"></i>+91-9876543210</a>
                <a href="#" class="inks"><i class="fas fa-phone"></i>+91-9123456789</a>
                <a href="#" class="inks"><i class="fas fa-envelope"></i>sakshiagrawal2808@gmail.com</a>
                <a href="#" class="inks"><i class="fas fa-map-marker-alt"></i>vrindavan, india 281121</a>
            </div>

            <div class="block">
                <h3>quick links</h3>
                <a href="#" class="inks"><i class="fas fa-arrow-right"></i>home</a>
                <a href="#" class="inks"><i class="fas fa-arrow-right"></i>features</a>
                <a href="#" class="inks"><i class="fas fa-arrow-right"></i>categories</a>
                <a href="#" class="inks"><i class="fas fa-arrow-right"></i>review</a>
                <a href="#" class="inks"><i class="fas fa-arrow-right"></i>blogs</a>
            </div>

            <div class="block">
                <h3>Reach out us</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- javascript include -->
    <script src="script.js"></script>

</body>
</html>