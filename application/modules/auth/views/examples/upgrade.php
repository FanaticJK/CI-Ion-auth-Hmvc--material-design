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
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="card-header text-center" data-background-color="purple">
                                <h3 class="title">Material Dashboard PRO</h3>
                                <p class="category">Are you looking for more components? Please check our Premium
                                    Version of Material Dashboard.</p>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive table-upgrade">
                                    <table class="table">
                                        <thead>
                                        <th></th>
                                        <th class="text-center">Free</th>
                                        <th class="text-center">PRO</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Components</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">200</td>
                                        </tr>
                                        <tr>
                                            <td>Plugins</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">15</td>
                                        </tr>
                                        <tr>
                                            <td>Example Pages</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">27</td>
                                        </tr>
                                        <tr>
                                            <td>Login, Register, Pricing, Lock Pages</td>
                                            <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                                            <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation,
                                                FullCalendar etc...
                                            </td>
                                            <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                                            <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Mini Sidebar</td>
                                            <td class="text-center"><i class="fa fa-times text-danger"></i></i></td>
                                            <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Premium Support</td>
                                            <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                                            <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="text-center">Free</td>
                                            <td class="text-center">Just $49</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-round btn-fill btn-default disabled">Current
                                                    Version</a>
                                            </td>
                                            <td class="text-center">
                                                <a target="_blank"
                                                   href="http://www.creative-tim.com/product/material-dashboard-pro/?ref=md-free-upgrade-archive"
                                                   class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
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