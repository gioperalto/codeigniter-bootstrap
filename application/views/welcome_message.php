<!-- Bootstrap Jumbotron component -->
<div class="jumbotron">
	<h1>Welcome to CodeIgniter <span class="small">and Bootstrap v3.1.1</span></h1>
</div>

<!-- Bootstrap container reduces space taken up by page elements inside of it -->
<div class="container">
	<section id="promo">
		<h4>The page you are looking at is being generated dynamically by CodeIgniter, but we've incorportated Bootstrap.</h4>

		<p>
			If you would like to edit this page you'll find it located at:
			<code>application/views/welcome_message.php</code>
		</p>

		<p>
			The corresponding controller for this page is found at:
			<code>application/controllers/Welcome.php</code>
		</p>
		
		<!-- Bootstrap Alert component lets you emphasize something important -->
		<p class="alert alert-info">If you are exploring CodeIgniter for the very first time, you should start by reading the <a class="text-danger" href="user_guide/">User Guide</a>.</p>
	</section>
	<section id="fa">
		<h4>As an added benefit, we've also integrated font-awesome v4.3.0</h4>
		<!-- Bootstrap row allows you to isolate certain parts of your page -->
		<div class="row">
			<!-- col-sm-4 is based on a 12-point grid system; this takes up 1/3 of the 12-pt grid -->
			<div class="col-sm-4 text-center">
				<div class="text-danger">
					<i class="fa fa-3x fa-street-view"></i>
					<h2>Icon 1</h2>
				</div>
			</div>
			<!-- col-sm-4 is based on a 12-point grid system; this takes up 1/3 of the 12-pt grid -->
			<div class="col-sm-4 text-center">
				<div class="text-success">
					<i class="fa fa-3x fa-ship"></i>
					<h2>Icon 2</h2>
				</div>
			</div>
			<!-- col-sm-4 is based on a 12-point grid system; this takes up 1/3 of the 12-pt grid -->
			<div class="col-sm-4 text-center">
				<div class="text-primary">
					<i class="fa fa-3x fa-diamond"></i>
					<h2>Icon 3</h2>
				</div>
			</div>
		</div>
		<!-- Bootstrap Alert component lets you emphasize something important -->
		<p class="alert alert-info">If you are exploring font-awesome for the very first time, you should start by checking out their <a class="text-danger" href="http://fortawesome.github.io/Font-Awesome/">website</a>.</p>

	</section>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>