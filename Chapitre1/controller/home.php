<?php
require_once("");
?>

<body>
	<div class="wrapper">
		<div class="row row-offcanvas row-offcanvas-left">
			<!-- main right col -->
			<div class="column col-sm-12 col-xs-11" id="main">
				<!-- top nav -->
				<div class="navbar navbar-blue navbar-static-top">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse"
							data-target=".navbar-collapse">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="http://usebootstrap.com/theme/facebook" class="navbar-brand logo">b</a>
					</div>
					<nav class="collapse navbar-collapse" role="navigation">
						<form class="navbar-form navbar-left">
							<div class="input-group input-group-sm" style="max-width:360px;">
								<input class="form-control" placeholder="Search" name="srch-term" id="srch-term"
									type="text">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i
											class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
						<ul class="nav navbar-nav">
							<li>
								<a href="facebook.html"><i class="glyphicon glyphicon-home"></i> Home</a>
							</li>
							<li>
								<a href="post.php"><i class="glyphicon glyphicon-plus"></i> Post</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- /top nav -->
				<div class="padding">
					<div class="full col-sm-9">
						<!-- content -->
						<div class="row">
							<!-- main col left -->
							<div class="col-sm-5">
								<div class="panel panel-default">
									<div class="panel-thumbnail"><img src="assets/img/bg_5.jpg" class="img-responsive">
									</div>
									<div class="panel-body">
										<p class="lead">Blog d'Antoine</p>
										<p>420 Followers, 69 Posts</p>

										<p>
											<img src="assets/img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px"
												width="28px">
										</p>
									</div>
								</div>
							</div>

							<!-- main col right -->
							<div class="col-sm-7">

								<div class="well">
									<form class="form">
										<div class="input-group text-center">
											<h2>Welcome</h2>
										</div>
									</form>
								</div>

								<div class="panel panel-default">
									<div class="panel-thumbnail"><img src="assets/img/bg_4.jpg" class="img-responsive">
									</div>
									<div class="panel-body">
										<hr>
										Design, build, test, and prototype
										using Bootstrap in real-time from your Web browser. Bootply combines the
										power of hand-coded HTML, CSS and JavaScript with the benefits of
										responsive design using Bootstrap. Find and showcase Bootstrap-ready
										snippets in the 100% free Bootply.com code repository.
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-thumbnail"><img src="assets/img/bg_4.jpg" class="img-responsive">
									</div>
									<div class="panel-body">
										<hr>
										Design, build, test, and prototype
										using Bootstrap in real-time from your Web browser. Bootply combines the
										power of hand-coded HTML, CSS and JavaScript with the benefits of
										responsive design using Bootstrap. Find and showcase Bootstrap-ready
										snippets in the 100% free Bootply.com code repository.
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-thumbnail"><img src="assets/img/bg_4.jpg" class="img-responsive">
									</div>
									<div class="panel-body">
										<hr>
										Design, build, test, and prototype
										using Bootstrap in real-time from your Web browser. Bootply combines the
										power of hand-coded HTML, CSS and JavaScript with the benefits of
										responsive design using Bootstrap. Find and showcase Bootstrap-ready
										snippets in the 100% free Bootply.com code repository.
									</div>
								</div>

							</div>

							
						</div>
						<!--/row-->

						<div class="row">
							<div class="col-sm-6">
								<a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a>
								<small class="text-muted">|</small> <a href="#">Google+</a>
							</div>
						</div>

						<div class="row" id="footer">
							<div class="col-sm-6">

							</div>
							<div class="col-sm-6">
								<p>
									<a href="#" class="pull-right">�Copyright 2013</a>
								</p>
							</div>
						</div>

						<hr>

						<h4 class="text-center">
							<a href="http://usebootstrap.com/theme/facebook" target="ext">Download this Template
								@Bootply</a>
						</h4>

						<hr>


					</div><!-- /col-9 -->
				</div><!-- /padding -->
			</div>
			<!-- /main -->

		</div>
	</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('[data-toggle=offcanvas]').click(function () {
				$(this).toggleClass('visible-xs text-center');
				$(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
				$('.row-offcanvas').toggleClass('active');
				$('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
				$('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
				$('#btnShow').toggle();
			});
		});
	</script>
</body>

</html>