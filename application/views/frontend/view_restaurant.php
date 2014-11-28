<?php include 'metadata.php'?>
<body>
	<?php require 'nav.php'?>
	<!-- Begin Restaurant -->
	<div class="row restaurant">
		<div class="large-12 large-centered">
			<div id="slider_container" class="large-7 columns"
				style="position: relative; top: 0px; left: 0px; width: 612px; height: 350px; background: #191919; overflow: hidden;">
				<!-- Slides Container -->
				<div u="slides"
					style="cursor: move; position: absolute; left: 0px; top: 0px; width: 612px; height: 350px; overflow: hidden;">
					<div>
						<img u="image"
							src="<?php echo base_url()?>static/user_upload/restaurant_1.jpeg"
							alt="slide 1" /> 
						<img u="thumb"
							src="<?php echo base_url()?>static/user_upload/restaurant_1_thumb.jpg" />
					</div>
					<div>
						<img u="image"
							src="<?php echo base_url()?>static/user_upload/restaurant_2.jpeg"
							alt="slide 2" /> <img u="thumb"
							src="<?php echo base_url()?>static/user_upload/restaurant_2_thumb.jpg" />
					</div>
					<div>
						<img u="image"
							src="<?php echo base_url()?>static/user_upload/restaurant_3.jpeg"
							alt="slide 3" /> <img u="thumb"
							src="<?php echo base_url()?>static/user_upload/restaurant_3_thumb.jpg" />
					</div>
				</div>
				<!-- Arrow Navigator Skin Begin -->
				<!-- Arrow Left -->
				<span u="arrowleft" class="jssora05l"
					style="width: 40px; height: 40px; top: 158px; left: 8px;"> </span>
				<!-- Arrow Right -->
				<span u="arrowright" class="jssora05r"
					style="width: 40px; height: 40px; top: 158px; right: 8px"> </span>
				<!-- Arrow Navigator Skin End -->
				<!-- Thumbnail Item Skin Begin -->
				<div u="thumbnavigator" class="jssort01"
					style="position: absolute; width: 800px; height: 100px; left: 0px; bottom: 0px;">
					<div u="slides" style="cursor: move;">
						<div u="prototype" class="p"
							style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
							<div class=w>
								<thumbnailtemplate
									style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
							</div>
							<div class=c></div>
						</div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
			<div class="large-5 columns">
				<div class="row">
					<h3 class="restaurant-name">Elite Galeto Coffee 2</h3>
					<p class="restaurant-description">Cafe/kem- Y, Nhatban - Cap doi,
						Gia dinh, Nhom hoi</p>
				</div>
				<div class="row">
					<p class="restaurant-info">
						<i class="fa fa-location-arrow"></i>&nbsp; 11 Trần Quốc Toản, P.
						8, Quận 3, TP. HCM
					</p>
				</div>
				<div class="row">
					<p class="restaurant-info">
						<i class="fa fa-phone"></i>&nbsp; 0909752955
					</p>
				</div>
				<div class="row">
					<p class="restaurant-info">
						<i class="fa fa-clock-o"></i>&nbsp; 6.00AM - 10.00PM
					</p>
				</div>
				<div class="row">
					<p class="restaurant-info">
						<i class="fa fa-money"></i>&nbsp; 20.000 - 40.0000
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Restaurant -->
	<!-- Begin Restaurant Additions -->
	<div class="row restaurant-addition">
		<!-- Begin Comment Container-->
		<div class="large-9 columns">
			<div class="row comment-container">
				<div class="large-12 comments">
					<span>All Comments (5)</span>
					<!-- Begin Comment Input -->
					<div class="row">
						
						<div class="large-1 columns user-avatar">
							<img src="<?php echo base_url()?>static/frontend/img/unnamed.png"
							alt="slide 1" /> 
						</div>
						<div class="large-11 columns user-comment">
							<div class="row">
								<div class="large-12 columns">
									<input type="text" placeholder="Share your thoughts"/>
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<input class="button tiny" type="submit" value="Post"/>
								</div>
							</div>
						</div>
						<!-- End Comment Input -->
					</div>
					<!-- Comment 1 -->
					<div class="row single-comment">
						<div class="large-1 columns user-avatar">
							<img src="<?php echo base_url()?>static/user_upload/avatar_1.jpg"
								alt="slide 1" /> 
						</div>
						<div class="large-11 columns user-comments">
							<div class="row">
								<div class="large-12">
									<a href="">Minh Duc Nguyen</a>
								</div>
								<div class="large-12">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Comment 1 -->
					<div class="row single-comment">
						<div class="large-1 columns user-avatar">
							<img src="<?php echo base_url()?>static/user_upload/avatar_2.jpg"
								alt="slide 1" /> 
						</div>
						<div class="large-11 columns user-comments">
							<div class="row">
								<div class="large-12">
									<a href="">Khanh Kys</a>
								</div>
								<div class="large-12">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End comment -->
		<!-- Begin Sidebar -->
		<div class="large-3 columns">
			<div class="row">
				
			</div>
		</div>
		<!-- End Sidebar -->
	</div>
	<!-- End Restaurant Additions -->
	<?php require 'scripts.php'?>
	<?php require 'footer.php'?>
</body>
</html>