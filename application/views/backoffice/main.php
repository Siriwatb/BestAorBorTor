<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");


if (!isset($_SESSION['user'])) {
	unset($_SESSION['user']);
	session_destroy();
	redirect('auth');
	exit();
}

$googleApiKey = $this->config->item('google_maps_api_key');

?>
<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UDRU Faculty of science -> Public Relations Management System</title>
	<link href="https://www.udru.ac.th/website/templates/ja_smallbiz/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url("/assets/adminlte3_1/plugins/fontawesome-free/css/all.min.css") ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url("/assets/adminlte3_1/dist/css/adminlte.min.css") ?>">

	<!-- DataTables -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- SweetAlert2 -->
	<!-- <link rel="stylesheet" href="/assets/adminlte3_1/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"> -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/jqvmap/jqvmap.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="/assets/adminlte3_1/plugins/summernote/summernote-bs4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini">
	<input type="hidden" id="base_url" value="<?php echo site_url(); ?>" />
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view('backoffice/main_part/navbar'); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view('backoffice/main_part/main_sidebar'); ?>
		<!-- /Main Sidebar Container -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">
								<?php
								if (isset($pageName)) {
									echo $pageName;
								} else {
									echo 'Untitled Pagename';
								}
								?>
							</h1>
						</div>
						<!-- /.col -->
						<!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div> -->
						<!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<?php
						if (isset($content)) {
							$this->load->view($content);
						}
						?>
						
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<?php $this->load->view('backoffice/main_part/main_footer'); ?>
		<!-- /.Main Footer -->

	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->


	<!-- jQuery -->
	<script src="<?php echo base_url("/assets/adminlte3_1/plugins/jquery/jquery.min.js") ?>"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="/assets/adminlte3_1/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url("/assets/adminlte3_1/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url("/assets/adminlte3_1/dist/js/adminlte.min.js") ?>"></script>
	<!-- SweetAlert2 -->
	<!-- <script src="/assets/adminlte3_1/plugins/sweetalert2/sweetalert2.min.js"></script> -->


	<!-- moment js  -->
	<script src="<?php echo base_url("/assets/adminlte3_1/plugins/moment/moment.min.js") ?>"></script>
	<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
	<!-- InputMask -->

	<script src="<?php echo base_url("/assets/adminlte3_1/plugins/inputmask/jquery.inputmask.min.js") ?>"></script>
	<script>
		const BaseURL = $('#base_url').val();
		$(document).ready(function() {
			$('.select2').select2({
				theme: 'bootstrap4'
			});

			$(":input").inputmask();

		});
	</script>
	<!-- Select2 -->
	<script src="/assets/adminlte3_1/plugins/select2/js/select2.full.min.js"></script>
	<!-- ChartJS -->
	<script src="/assets/adminlte3_1/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="/assets/adminlte3_1/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="/assets/adminlte3_1/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="/assets/adminlte3_1/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="/assets/adminlte3_1/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="/assets/adminlte3_1/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="/assets/adminlte3_1/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="/assets/adminlte3_1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

	<!-- DataTables  & Plugins -->
	<script src="/assets/adminlte3_1/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/jszip/jszip.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="/assets/adminlte3_1/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

	<?php if ($this->session->flashdata('status') != '' && $this->session->flashdata('status_msg') != '') : ?>
		<script type="text/javascript">
			$(document).ready(function() {
				var status = '<?php echo $this->session->flashdata('status'); ?>';
				var status_msg = '<?php echo $this->session->flashdata('status_msg'); ?>';
				Swal.fire({
					icon: status,
					title: status_msg,
					confirmButtonText: 'ตกลง'
				})
			});
		</script>
	<?php endif; ?>
	
	<script async src="https://maps.googleapis.com/maps/api/js?key=<?php echo $googleApiKey;?>&callback=initMap"></script>

	<!-- Site script -->
	<?php
	if (isset($content)&& isset($script)) { ?>
		<script src="<?php echo $script; ?>"></script>
	<?php } ?>


	<!-- /.Site script -->


</body>

</html>
