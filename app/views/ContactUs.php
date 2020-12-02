<?PHP
session_start();
include "app/views/header.php"; 
?>
  
  <div class="spacer-con">
    &nbsp;
</div>
  <!--content-->
<!-- <div class="contact">
			
			<div class="container">
			<div class="contact-form" style="margin: 10rem 5rem 0 0;">
				
				<div class="col-md-8 contact-grid">
					<form>	
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='الاسم';}">
					
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='البريد الكتروني';}">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='الموضوع';}">
						
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'الرسالة';}">الرسالة</textarea>
						<div class="send text-right">
							<input type="submit" value="إرسال">
						</div>
					</form>
				</div>
				<div class="col-md-4 contact-in float-left">

                <div class="row text-center">
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
               <p> Your Address ….. </p>
            </div>
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
               <p>+91- 90000000</p>
            </div>
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
               <p> your@gmail.com</p>
            </div>
         </div>
      </div>
      <!--Grid column-->
					
				<!-- </div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
			</div>
		</div>
		
	</div>  -->
<!--//content-->
<section class="container mt-12">
   <!--Contact heading-->
   <div class="row" >
      <!--Grid column-->
      <div class="col-sm-12 mb-4 col-md-5 mb-5">
         <!--Form with header-->
         <div  class="card border-warning rounded-0" >
            <div class="card-header p-0">
               <div class="bg-light text-white text-center py-2">
                  
               </div>
            </div>
            <div class="card-body p-3">
               
                  <div class="form-group">
                  <label class="float-right"> الاسم </label>
                  <div class="input-group">
                     <input value="" type="text" name="data[name]"  placeholder="الاسم" class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name">
                  </div>
				</div>
                  <div class="form-group">
                     <label class="float-right">البريد الكتروني</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="email" value="" name="data[email]" placeholder="البريد الكتروني" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="float-right">الموضوع</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" name="data[subject]" placeholder=" الموضوع" class="form-control" id="inlineFormInputGroupUsername" placeholder="Subject">
                     </div>
                  </div>
                  <div class="form-group ">
                     <label class="float-right">الرسالة</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text"  placeholder=" الرسالة" class="form-control" name="mesg">
                     </div>
                  </div>
                  <div class="text-center">
                     <input type="submit" name="submit" value="ارسال"  style="background-color: #F89132; border:#F89132; font-weight: bold;" class="btn btn-primary btn-block rounded-0 py-2">
                  </div>
             
			     </div>
				  
            </div>
         </div>
      <!--Grid column-->
	  
      <!--Grid column-->
      <div class="col-sm-12 col-md-7">
         <!--Google map-->
         <div class="mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117223.77996815204!2d85.3213263!3d23.3432048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11b5a9b0042eef56!2sourcita.com!5e0!3m2!1sen!2sin!4v1589706571407!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
         <!--Buttons-->
         <div class="row text-center">
            <div class="col-md-4">
               <a  class=" bg-dark px-3 py-2 rounded text-white mb-2 d-inline-block " ><i class="fa fa-map-marker"></i></a>
               <p> صنعاء- اليمن </p>
            </div>
            <div class="col-md-4">
               <a class="bg-dark px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
               <p>+967 777777777</p>
            </div>
            <div class="col-md-4">
               <a class="bg-dark px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
               <p> login@gmail.com</p>
            </div>
         </div>
      </div>
      <!--Grid column-->
	    </div>
</section>
          
      

  
<?PHP
include "app/views/footer.php"; 
?>
</body>
</html>