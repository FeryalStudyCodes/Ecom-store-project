<?PHP
include "app/views/header.php"; 
?>
    
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="signin my-5">
                <div class="signin-body" style="direction: rtl;">
                  <h5 class="signin-title text-center">الدخول</h5>
                  <div class="error" id="div_erroe"></div>
                  <div class="success"></div>
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                  <form class="form-signin" action="main/checklogin" method="post">
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control"placeholder="الإيميل" name="email" required autofocus >
                      <label for="inputEmail" ></label>
                    </div>
      
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder=" كلمة المرور" name="password" required>
                      <label for="inputPassword"> </label>
                    </div>
      
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1" style="float: right;">تذكر الباسورد</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">الدخول</button>
                    <!--span class="psw"><a href="#">Forgot password?</a></span-->

                    <span class="social-label">أو</span>
                    <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fa fa-google mr-2"></i>   سجل الدخول عبر جميل </button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fa fa-facebook mr-2"></i> سجل الدخول عبر فيسبوك</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="container">
          <div class="row">
          <div class="col-md-12 text-center">
          <span> ليس لديك حساب؟ </span><a style="color:#f79635;font-weight: 600;" class="register"  href="main/singnup">انشاء حساب</a>
          </div>
          </div>
         </div>
      
</body>
</html>

            <!-- Modal Header 
            <div class="modal-header">
                <h4>login</h4> 
            </div>
<form action="singnup/add" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>-->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<br>
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

 