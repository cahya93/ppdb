          <!-- Main Sidebar Container -->
          <?php
            $level_id = $this->session->userdata('level_id');
            $queryMenu = "  SELECT `user_menu`.`id`,`menu`
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`. `id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`level_id` = $level_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
           ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>
          <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <?php foreach ($menu as $m) : ?>
                  <a href="<?= base_url(''); ?>" class="brand-link">
                      <img src="<?= base_url(); ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                      <span class="brand-text font-weight-light"><?= $m['menu']; ?></span>
                  </a>

                  <!-- Sidebar -->
                  <div class="sidebar">
                      <!-- Sidebar user panel (optional) -->
                      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                          <div class="image">
                              <img src="<?= base_url('template/images/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
                          </div>
                          <div class="info">
                              <a href="#" class="d-block"><?= $user['nama']; ?></a>
                          </div>
                      </div>
                      <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                                         FROM `user_sub_menu` JOIN `user_menu` 
                                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                            WHERE `user_sub_menu`.`menu_id` = $menuId
                                            AND `user_sub_menu`.`is_active` = 1
                                        ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>

                      <!-- Looping Menu -->
                      <!-- Sidebar Menu -->
                      <nav class="mt-2">
                          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                              <?php foreach ($subMenu as $sm) : ?>
                                  <li class="nav-item has-treeview">
                                      <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                          <i class="nav-icon <?= $sm['icon']; ?>"></i>
                                          <p>
                                              <?= $sm['title']; ?>
                                          </p>
                                      </a>
                                  </li>
                                  <!-- SUB Menu -->

                              <?php endforeach; ?>

                          <?php endforeach; ?>

                          <li class="nav-item has-treeview ">
                              <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                                  <i class="nav-icon fas fa-user-alt"></i>
                                  <p>
                                      Logout
                                  </p>
                              </a>
                          </li>
                          </ul>
                      </nav>
                      <!-- /.sidebar-menu -->
                  </div>
                  <!-- /.sidebar -->
          </aside>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                  <div class="container-fluid">
                      <div class="row mb-2">
                          <div class="col-sm-6">
                              <h1 class="m-0 text-dark"><?= $title; ?></h1>
                          </div><!-- /.col -->
                          <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                  <li class="breadcrumb-item"><a href="<?= base_url('administrator'); ?>">Dashboard</a></li>
                                  <li class="breadcrumb-item active"><?= $title; ?></li>
                              </ol>
                          </div>
                      </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->

              <!-- Main content -->
              <div class="content">
                  <div class="container-fluid">
                      <div class="row">

                          <!-- v_home -->