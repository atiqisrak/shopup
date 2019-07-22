<?php
$page_title = "Food and snacks details |";
$content = "Want to know the a, b, c that makes that delicious burger you can't seem to stop eating. Here is the perfect place.";
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
    if(isset($_GET['user'])) {
    $user = $_GET['user'];
    $id = $_GET['id'];

?>

<?php

    $stmt = $auth_user->runQuery(" SELECT * FROM food WHERE `user_name`='$user' AND `food_id`='$id' ");
    $stmt->execute(array());
    $food=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($food as $food) {
        ?>
    <div class="container body" style="margin-top:60px;">
      <div class="main_container">



        <!-- top navigation -->
        <!-- /top navigation -->

        <!-- page content -->
        <div class="" role="main">

          <div class="">

            
            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
                <div class="x_panel">
                  

                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="<?php echo $food->snackimage; ?>" alt="<?php echo $food->snackname; ?>" />
                      </div>
                      <div class="product_gallery col-md-12 col-sm-12">
                        
                        <br />
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $food->snackimage; ?>" alt="<?php echo $food->snackname; ?>" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $food->snackimage; ?>" alt="<?php echo $food->snackname; ?>" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $food->snackimage; ?>" alt="<?php echo $food->snackname; ?>" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $food->snackimage; ?>" alt="<?php echo $food->snackname; ?>" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>

                      </div>

                      <?php require_once 'includes/body/productreviews/fooddetails.php'; ?>
                      
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title"><?php echo $food->snackname; ?></h3>

                      <p>
                      <?php echo $food->snackdetails; ?>
                        
                      </p>
                      <br />

                      <br />

                      <div class="">
                        <h2>Size <small>Please select one</small></h2>
                        <ul class="list-inline prod_size">
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Small</button>
                          </li>
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Xtra-Large</button>
                          </li>
                        </ul>
                      </div>
                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price"><?php echo $shop->currency.' '; ?><?php echo number_format($food->snackprice, 2); ?></h1>
                          <span class="price-tax">Ex Tax: Ksh80.00</span>
                          <br>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" class="btn btn-default btn-lg">Add to Cart</button>
                        <button type="button" class="btn btn-default btn-lg">Add to Wishlist</button>
                        <a href="food.php"><button type="button" class="btn btn-default btn-lg">Back</button></a>
                      </div>

                      <div class="product_social">
                        <ul class="list-inline">
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-rss-square"></i></a>
                          </li>
                        </ul>
                      </div>

                    </div>


                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
      </div>
    </div>

  





         <?php
    }
?>
<?php
}
?>  
<?php require_once 'includes/footer/footer.php'; ?>