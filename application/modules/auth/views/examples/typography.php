<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
			<div class="logo">
				<a href="<?php echo base_url(); ?>" class="simple-text">
					CI HMVC ION-AUTH
				</a>
			</div>

            <?php $this->load->view('include/sidebar.php');?>
	    </div>

	    <div class="main-panel">
            <?php $this->load->view('include/head.php');?>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Material Dashboard Heading</h4>
	                                <p class="category">Created using Roboto Font Family</p>
	                            </div>
	                            <div class="card-content">
									<div id="typography">
										<div class="title">
											<h2>Typography</h2>
										</div>
										<div class="row">
											<div class="tim-typo">
												<h1><span class="tim-note">Header 1</span>The Life of Material Dashboard </h1>
											</div>
											<div class="tim-typo">
												<h2><span class="tim-note">Header 2</span>The life of Material Dashboard </h2>
											</div>
											<div class="tim-typo">
												<h3><span class="tim-note">Header 3</span>The life of Material Dashboard </h3>
											</div>
											<div class="tim-typo">
												<h4><span class="tim-note">Header 4</span>The life of Material Dashboard </h4>
											</div>
											<div class="tim-typo">
												<h5><span class="tim-note">Header 5</span>The life of Material Dashboard </h5>
											</div>
											<div class="tim-typo">
												<h6><span class="tim-note">Header 6</span>The life of Material Dashboard </h6>
											</div>
											<div class="tim-typo">
												<p><span class="tim-note">Paragraph</span>
													I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
											</div>
											<div class="tim-typo">
												<span class="tim-note">Quote</span>
												<blockquote>
												 <p>
												 I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
												 </p>
												 <small>
												 Kanye West, Musician
												 </small>
												</blockquote>
											</div>

											<div class="tim-typo">
												<span class="tim-note">Muted Text</span>
												<p class="text-muted">
												I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
												</p>
											</div>
											<div class="tim-typo">
												<span class="tim-note">Primary Text</span>
												<p class="text-primary">
												I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...                        </p>
											</div>
											<div class="tim-typo">
												<span class="tim-note">Info Text</span>
												<p class="text-info">
												I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...                        </p>
											</div>
											<div class="tim-typo">
												<span class="tim-note">Success Text</span>
												<p class="text-success">
												I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...                        </p>
											</div>
											<div class="tim-typo">
												<span class="tim-note">Warning Text</span>
												<p class="text-warning">
												I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
												</p>
											</div>
											<div class="tim-typo">
												<span class="tim-note">Danger Text</span>
												<p class="text-danger">
												I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...                        </p>
											</div>
											<div class="tim-typo">
												<h2><span class="tim-note">Small Tag</span>
													Header with small subtitle <br>
													<small>Use "small" tag for the headers</small>
												</h2>
											</div>
										</div>
									</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Company
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>
