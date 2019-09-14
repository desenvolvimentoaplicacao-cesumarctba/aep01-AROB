<?php
// PHP Hotel San Germain
// http://www.hotelsangermain.com/php-hotel-san-germain
// Copyright (c) All Rights Reserved NetArt Media
// Find out more about our products and services on:
// http://www.hotelsangermain.com
// Released under the MIT license
?><?php
if(!defined('IN_LOGIN_SCRIPT')) die("");

?>
<div class="header-line">
	  <div class="container">
		<h3><?php echo $this->texts["admin_panel"];?></h3>
	  </div>
</div>

<div class="container">
	<br/>
	<div class="row">

	
		<div class="col-md-7">
			<br/>
			
			<form id="main" action="login_action.php" method="post">
			
				<fieldset>
					<legend><?php echo $this->texts["login_to_continue"];?></legend>
					<ol>
					
						<li>
							<label><?php echo $this->texts["username"];?></label>
							
							<input type="text" name="username" value=""/>
						</li>
						<li>
							<label><?php echo $this->texts["password"];?></label>
							
							<input type="password" name="password" value=""/>
						</li>
					<ol>
				</fieldset>
				
				<div class="clearfix"></div>
				<br/>
				<button type="submit" class="btn btn-primary pull-right"><?php echo $this->texts["login"];?></button>
				<div class="clearfix"></div>
			</form>
			
			<br/>
			<br/>
			
			
		
		</div>
		
		<div class="col-md-5">
		<!--news slider-->
		<br/>
		
			<div class="slideshow-wrap">
			
				<div id="slideshow">
				
				<?php
					$xml = $this->load_login_slides();
				
					foreach($xml->slide as $slide)
					{
						?>
						<div>
							<?php echo $slide->content;?>
						</div>
						<?php
					}
					foreach($xml->slide as $slide)
					{
						?>
						<div>
							<?php echo $slide->content;?>
						</div>
						<?php
					}
				?>
				   <div>
					
				   </div>
				   
				   <div class="clearfix"></div>
				</div>
			</div>
			
			<script>
			
		$(document).ready(function() {

					$("#slideshow > div:gt(0)").hide();

					setInterval(function() {
					  $('#slideshow > div:first')
						.fadeOut(1000)
						.next()
						.fadeIn(1000)
						.end()
						.appendTo('#slideshow');
					},  5000);

				});
			</script>
		
		
		<!--end news slider-->
		</div>
	</div>
	<br/>
	<br/>
</div>