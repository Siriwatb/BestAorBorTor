<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Navbar Search -->

		<!-- Messages Dropdown Menu -->

		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
				<i class="fas fa-cog"></i>
				<!-- <span class="badge badge-warning navbar-badge">15</span> -->
			</a>
			<div class="dropdown-menu" style="left: inherit; right: 0px;">
				<!-- <span class="dropdown-item dropdown-header">15 Notifications</span> -->
				<!-- <div class="dropdown-divider"></div> -->
				<!-- <a href="#" class="dropdown-item">
					<i class="fas fa-key mr-2"></i>
					 Change password
				</a> -->
				<!-- <div class="dropdown-divider"></div> -->
				<a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item">
				<i class="fas fa-power-off mr-2"></i> Logout
				</a>
			</div>
		</li>

	</ul>
</nav>
