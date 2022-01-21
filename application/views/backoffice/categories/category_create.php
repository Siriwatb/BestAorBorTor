<div class="col-md-12">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">กรอกข้อมูล</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<form action="<?php echo base_url("/school/add_data") ?> " method="post">
			<div class="card-body">
				<div class="form-group">
					<label>ชื่อโรงเรียน</label>
					<input name="name_school" type="text" class="form-control" id="nameschool" placeholder="NameSchool">
				</div>
				<div class="form-group">
					<label>จำนวนนักเรียน</label>
					<input name="number_studemt" type="text" class="form-control" id="number_studemt" placeholder="number">
				</div>
				<div class="form-group">
					<label>ที่อยู่</label>
					<input name="location" type="text" class="form-control" id="Location" placeholder="location">
				</div>
				<div class="form-group">
					<label>ละติจูด</label>
					<input name="latitude" type="text" class="form-control" id="latitude" placeholder="latitude">
				</div>
				<div class="form-group">
					<label>ลองติจูด</label>
					<input name="longitude" type="text" class="form-control" id="longitude" placeholder="longitude">
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">บันทึก</button>
					<a href="<?php echo base_url('school/school_tables'); ?>" class="btn btn-secondary">ย้อนกลับ</a>
				</div>
			</div>
		</form>
	</div>
</div>
