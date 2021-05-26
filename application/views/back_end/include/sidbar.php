<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>admin" class="brand-link">
        <img src="<?php echo base_url() ?>asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">NPG Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo base_url() ?>admin?id=profile" class="d-block"><?php echo $this->session->userdata('username') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?php echo base_url() ?>admin" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo base_url() ?>admin/complains" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Complain's
                            <span class="badge badge-info right">0</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo base_url() ?>admin/tender" class="nav-link">
                        <ii class="nav-icon far fa-file-pdf" aria-hidden="true"></ii>
                        <p>
                            Tender
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo base_url() ?>admin/slider" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo base_url() ?>admin/category" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Category
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/newpost" class="nav-link">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            New Post
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/editpost" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Edit Post
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>office" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Office Files
                        </p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>admin/gallery" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo base_url() ?>admin/adduser" class="nav-link">
                        <i class="nav-icon far fa-user-puls"></i>
                        <p>
                            Add New User

                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>