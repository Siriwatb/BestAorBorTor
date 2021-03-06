<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Best AorBorTor</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/assets/adminlte3_1/dist/css/adminlte.min.css">

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>Best</b>AorBorTor</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Login</p>
				<form action="<?php echo base_url('auth/login'); ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Username" id='username' name='username'>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" id='password' name='password'>
						<div class="input-group-append">
							<div class="input-group-text">
								<i class="fas fa-lock"></i>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
				<!-- /.social-auth-links -->

				<!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="/assets/adminlte3_1/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="/assets/adminlte3_1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/assets/adminlte3_1/dist/js/adminlte.min.js"></script>

	<?php if ($this->session->flashdata('status') != '' && $this->session->flashdata('status_msg') != '') : ?>
		<script type="text/javascript">
			$(document).ready(function() {
				var status = '<?php echo $this->session->flashdata('status'); ?>';
				var status_msg = '<?php echo $this->session->flashdata('status_msg'); ?>';
				Swal.fire({
					icon: status,
					title: status_msg,
					confirmButtonText: '????????????'
				})
			});
		</script>
	<?php endif; ?>
</body>

</html>
