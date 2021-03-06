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
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Material Design Icons</h4>
                                <p class="category">Handcrafted by our friends from <a target="_blank"
                                                                                       href="https://design.google.com/icons/">Google</a>
                                </p>
                            </div>
                            <div class="card-content">
                                <div class="iframe-container hidden-sm hidden-xs">
                                    <iframe src="https://design.google.com/icons/">
                                        <p>Your browser does not support iframes.</p>
                                    </iframe>
                                </div>
                                <div class="col-md-6 hidden-lg hidden-md text-center">
                                    <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not
                                        working on Mobile and Tablets please visit the icons on their original page on
                                        Google. Check the <a href="https://design.google.com/icons/" target="_blank">Material
                                            Icons</a></h5>
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
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>
