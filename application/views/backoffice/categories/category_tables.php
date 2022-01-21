<?php print_r($cate);?>
<div class="col-md-12">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">ตาราง</h3>
		</div>
		<div class="card-body">

			<a class="btn btn-success float-right mb-3" href="" onclick="">
				<i class="fas fa-plus"></i>
				เพิ่มข้อมูล
			</a>

			<!-- <form action="<?php echo base_url("/school/school_tables") ?> " method="post">

				<div class="form-group">
					<label>ค้นหา</label>
					<div class="input-group mb-3">
						<input name="search" type="text" class="form-control rounded-0" id="nameschool" placeholder="ค้นหา...">
						<span class="input-group-append">
							<button type="submit" class="btn btn-info btn-flat">Search</button>
						</span>
					</div>
				</div>
			</form> -->
			<table class="table">
				<tr>
					<th class="text-center">ชื่อประเภท</th>
					<th>อัพเดท</th>
					<th>ลบ</th>

				</tr>
				<tbody>
					<?php foreach ($cate as $value) {
					?>
						<tr>
							<td class="text-center"><?php echo $value['name_category']; ?></td>
							<td><a type="button" class="btn btn-block btn-warning btn-sm" href="">แก้ไข</a></td>
							<td><a type="button" class="btn btn-block btn-danger btn-sm" href="" onclick="return confirmDelete();">ลบ</a></td>

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	function confirmDelete() {
		return confirm('คุณต้องการลบหรือไม่');
	}
</script>
