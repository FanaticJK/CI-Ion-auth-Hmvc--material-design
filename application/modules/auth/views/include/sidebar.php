<div class="sidebar-wrapper">
    <ul class="nav">
        <li <?php echo ($this->uri->segment(1) == "")? "class='active'": "";?>>
            <a href="<?php echo base_url();?>">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li <?php echo ($this->uri->segment(3) == "user")? "class='active'": "";?>>
            <a href="<?php echo base_url();?>auth/examplePages/user">
                <i class="material-icons">person</i>
                <p>User Profile</p>
            </a>
        </li>
        <li <?php echo ($this->uri->segment(3) == "table")? "class='active'": "";?>>
            <a href="<?php echo base_url();?>auth/examplePages/table">
                <i class="material-icons">content_paste</i>
                <p>Table List</p>
            </a>
        </li>
        <li <?php echo ($this->uri->segment(3) == "typography")? "class='active'": "";?>>
            <a href="<?php echo base_url();?>auth/examplePages/typography">
                <i class="material-icons">library_books</i>
                <p>Typography</p>
            </a>
        </li>
        <li <?php echo ($this->uri->segment(3) == "icons")? "class='active'": "";?>>
            <a href="<?php echo base_url();?>auth/examplePages/icons">
                <i class="material-icons">bubble_chart</i>
                <p>Icons</p>
            </a>
        </li>
        <li <?php echo ($this->uri->segment(3) == "maps")? "class='active'": "";?>>
            <a href="<?php echo base_url();?>auth/examplePages/maps">
                <i class="material-icons">location_on</i>
                <p>Maps</p>
            </a>
        </li>
        <li <?php echo ($this->uri->segment(3) == "notifications")? "class='active'": "";?>>
            <a href="<?php echo base_url();?>auth/examplePages/notifications">
                <i class="material-icons text-gray">notifications</i>
                <p>Notifications</p>
            </a>
        </li>
    </ul>
</div>