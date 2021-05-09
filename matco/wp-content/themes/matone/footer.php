<footer>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="adds1">
					<p>Address</p>
					<p>11th Floor, Tower 1, NeXTeracom Building, Cybercity, Ebene, Mauritius</p>
				</div>
				<div class="adds1">
					<p>Address</p>
					<p>11th Floor, Tower 1, NeXTeracom Building, Cybercity, Ebene, Mauritius</p>
				</div>
			</div>
			<div class="col">
				<div class="adds1">
					<p>Address</p>
					<p>11th Floor, Tower 1, NeXTeracom Building, Cybercity, Ebene, Mauritius</p></div>
				<div class="adds1">
					<p>Address</p>
					<p>11th Floor, Tower 1, NeXTeracom Building, Cybercity, Ebene, Mauritius</p></div>
			</div>
			<div class="col">
				<p>Important Links</p>
				<ul class="footer-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Home</a></li>
				</ul>
			</div>
			<div class="col">
				<p>Matco Company</p>
				<p>Please feel free to contact us using the details below or complete the form and your request shall be attended to as soon as possible.</p>
			</div>
		</div>
	</div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container register">
  <div class="row">
    <div class="col-md-3 register-left">
      <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
      <h3>Welcome</h3>
      <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print!</p>
      <!-- <input type="submit" name="" value="Login"/> --><br/>
    </div>
    <div class="col-md-9 register-right">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row register-form">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name *" value="" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name *" value="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password *" value="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
              </div>
              <div class="form-group">
                <div class="maxl">
                  <label class="radio inline"> 
                  <input type="radio" name="gender" value="male" checked>
                  <span> Male </span> 
                  </label>
                  <label class="radio inline"> 
                  <input type="radio" name="gender" value="female">
                  <span>Female </span> 
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" value="" />
              </div>
              <div class="form-group">
                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
              </div>
              <div class="form-group">
                <select class="form-control">
                  <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                  <option>What is your Birthdate?</option>
                  <option>What is Your old Phone Number</option>
                  <option>What is your Pet Name?</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
              </div>
              <input type="submit" class="btnRegister"  value="Register"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
<script type="text/javascript">
	$('.carousel').carousel({
  interval: 2000
})
	$("#menu-main-menu").append("<li class='menu-item menu-item-type-custom'><a href='#' class='ereg-btn' data-toggle='modal' data-target='#exampleModal'>Apply Now</a></li>");
</script>

<?php 	wp_footer(); ?>
</html>