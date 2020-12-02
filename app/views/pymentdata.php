<?php
//session_start(); 
 
if (!isset($_SESSION['user_id'])) 
{
  header("location:logincheckout");
}
include "app/views/header.php"; 
//else echo  $_SESSION['user_id'];
?>

        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="signin my-5">
                <div class="signin-body" style="direction: rtl;">
                  <h5 class="signin-title text-center">الدفع</h5>
                  <div class="error" id="div_erroe"></div>
                  <div class="success"></div>
                  <form class="form-signin" action="http://localhost/bank_new_api/api/take_card.php" method="post" >
                    <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control"placeholder="نوع البطاقة " name="card_name" required autofocus>
                        <label for="inputName" ></label>
                      </div>
                      <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control"placeholder="رقم البطاقة  " name="card_num" required autofocus>
                        <label for="inputName" ></label>
                      </div>
                    <div class="form-label-group">
                       <input type="password" id="inputPassword" class="form-control" placeholder=" كلمة المرور" name="card_pass" required>
                       <label for="inputEmail" ></label>
                    </div>
                      <div class="form-label-group">
                        <input type="date" id="inputName" class="form-control"placeholder=" تاريخ الإنتهاء  " name="Expired_date" required autofocus>
                        <label for="inputName" ></label>
                      </div>	
                      <input type="hidden" name="url" class="product-id" value="http://localhost/Ecom-store-project/main/pymentresult">
                      <input type="hidden" name="cost" class="product-id" value="<?=  $_POST['cost']?>">
                      <input type="hidden" name="user" class="product-id" value="<?= $_SESSION['user_id']?>">
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">الدفع </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<br><br>
<?PHP
include "app/views/footer.php"; 
?>
    <script>
      $("#sliderShuffle").cycle({
        next: '#next',
        prev: '#prev'
      });
      
      $('.owl-carousel').owlCarousel({
        items:4,
        loop:true,
        margin:15,
        autoplay:true,
        autoplayTimeout:3000, //3 Second
        nav:true,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            nav:true
          },
          600:{
            items:3,
            nav:true
          },
          1000:{
            items:4,
            nav:true
          }
        }

      });

      $(function(){
        $(".topbar ul li").click(function(){
          $(".topbar ul li").not(this).find("ul").slideUp();
          $(this).find("ul").slideToggle();
        });
        $(".topbar ul li ul li, productCategories ul li .megamenu").click(function(e){
          e.stopPropagation();	
        });
        $(".productCategories ul li").click(function(){
          $(".productCategories ul li").not(this).find(".megamenu").hide();
          $(this).find(".megamenu").toggle();
        });
        $(".otherInfoBody").hide();
        $(".otherInfoHandle").click(function(){
          $(".otherInfoBody").slideToggle();
        });
        $(".signBtn").click(function(){
          $("body").css("overflow", "hidden");
          $(".loginBox").slideDown();
        });
        $(".closeBtn").click(function(){
          $("body").css("overflow", "visible");
          $(".loginBox").slideUp();
        });
        $(".productViewBtn").click(function(e){
          e.preventDefault();
          $("body").css("overflow", "hidden");
          $(".productViewBox").slideDown();
        });
        $(".productViewBox-closeBtn").click(function(){
          $("body").css("overflow", "visible");
          $(".productViewBox").slideUp();
        });

        $(".sp-wrap").smoothproducts();
      });
    </script>
      
        
  
  </body>
</html>


 
