<?php
// $sessionData = $_SESSION['user'];
// $permission = $_SESSION['user']['user_permission'];

// // var_dump($sessionData);

// $fullName = $sessionData["title"] . ' ' . $sessionData["u_name"] . ' ' . $sessionData["u_surname"];
// $permissionString = "";

// for ($i = 1; $i <= count($permission); $i++) {
// 	if ($i != count($permission)) {
// 		$permissionString .= $permission[$i - 1]['description'] . ',';
// 	} else {
// 		$permissionString .= $permission[$i - 1]['description'];
// 	}
// }

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo base_url("admin/backoffice_dashboard") ?>" class="brand-link">
		<!-- <img src="assets/adminlte3_1/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
		<span class="brand-text font-weight-light">Best AorBorTor</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<!-- <div class="image">
          <img src="assets/adminlte3_1/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
			<div class="info ">
				<label class="text-light">
					<?php
					if (isset($permission)) {
						echo $permissionString;
					} else {
						echo "no permission";
					}
					?>
				</label>
				<a href="#" class="d-block text-center">
					<?php
					if (isset($fullName)) {
						echo $fullName;
					} else {
						echo "Unname";
					}
					?>
				</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

		<!-- Sidebar Menu -->
		<nav class="mt-2">

			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="" class="nav-link ">
						<!-- <i class="fas fa-circle nav-icon"></i> -->
						<i class="fas fa-tachometer-alt nav-icon"></i>
						<p>จัดการข้อมูลประเภทสถานที่</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link ">
						<!-- <i class="fas fa-circle nav-icon"></i> -->
						<i class="fas fa-tachometer-alt nav-icon"></i>
						<p>จัดการข้อมูลสถานที่</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link ">
						<!-- <i class="fas fa-circle nav-icon"></i> -->
						<i class="fas fa-tachometer-alt nav-icon"></i>
						<p>จัดการข้อมูลสินค้าชุมชน</p>
					</a>
				</li>

				<!-- admin -->

				










			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
