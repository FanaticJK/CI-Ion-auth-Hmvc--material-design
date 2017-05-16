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

        <div id="map"></div>

    </div>
</div>
