<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">แก้ไขข้อมูล</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?php echo base_url("/school/school_update") ?> " method="post">
            <input name="school_id" type="hidden" class="form-control" id="school_id" placeholder="" value="<?php echo $school['school_id']; ?>">
            <div class="card-body">
                <div class="form-group">
                    <label>ชื่อโรงเรียน</label>
                    <input name="name_school" type="text" class="form-control" id="nameschool" placeholder="NameSchool" value="<?php echo $school['name_school']; ?>">
                </div>
                <div class="form-group">
                    <label>จำนวนนักเรียน</label>
                    <input name="number_studemt" type="text" class="form-control" id="number_studemt" placeholder="number" value="<?php echo $school['number_studemt']; ?>">
                </div>
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <input name="location" type="text" class="form-control" id="Location" placeholder="location" value="<?php echo $school['location']; ?>">
                </div>
                <div class="form-group">
                    <label>ละติจูด</label>
                    <input name="latitude" type="text" class="form-control" id="latitude" placeholder="latitude" value="<?php echo $school['latitude']; ?>">
                </div>
                <div class="form-group">
                    <label>ลองติจูด</label>
                    <input name="longitude" type="text" class="form-control" id="longitude" placeholder="longitude" value="<?php echo $school['longitude']; ?>">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" onclick="return confirmUpdate();">บันทึก</button>
					<a href="<?php echo base_url('school/school_tables'); ?>" class="btn btn-secondary">ย้อนกลับ</a>
                </div>
			</div>
        </form>
    </div>
</div>
<script type="text/javascript">
    function confirmUpdate() {
        return confirm('คุณต้องการบันทึกหรือไม่');
    }
</script>
