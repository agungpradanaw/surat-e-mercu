<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Akun Admin
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url('admin') ?>">
					<i class="fa fa-home"></i> Dashboard</a>
			</li>
			<li>
				<i class="fa fa-user"></i> Tambah Akun Admin</li>
		</ol>
		<br>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<?php if ($this->session->flashdata('usernamesudahada')): ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4>
						<i class="icon fa fa-close"></i>Info</h4>
					Maaf username anda sudah terdaftar
				</div>
				<?php elseif($this->session->flashdata('info_berhasil')): ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4>
						<i class="icon fa fa-info"></i>Info</h4>
					Berhasil Mendaftar Surat
				</div> 
				<?php endif ?>
			</div>
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"></h3>
						<?php echo form_open('admin/tambahakun',array('class'=>'form-horizontal','method'=>'post')); ?>
						<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
					<div class="form-group">
							<label class="control-label col-sm-2" for="Username">Username:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?=set_value('username')?>"
								required>
								<span class="text-danger">
									<?=form_error('username')?>
								</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Nama Lengkap:</label>
							<div class="col-sm-5">
								<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="password">Fakultas:</label>
							<div class="col-sm-3">
           						<select name="fakultas" class="form-control" id="fakultas">
              						<option >Pilih Program Studi</option>
              						<option value="Fakultas Desain dan Seni Kreatif">Fakultas Desain dan Seni Kreatif</option>
              						<option value="Fakultas Teknik">Fakultas Teknik</option>
              						<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
              						<option value="Fakultas Ilmu Komunikasi">Fakultas Ilmu Komunikasi</option>
              						<option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
              						<option value="Fakultas Psikolog">Fakultas Psikolog</option>
            					</select>
            				</div>
          				</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="password">Password:</label>
							<div class="col-sm-5">
								<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
								<span class="text-danger">
									<?=form_error('password')?>
								</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="confirmpassword">Confirm Password:</label>
							<div class="col-sm-5">
								<span class="text-danger">
									<?=form_error('repassword')?>
								</span>
								<input type="password" class="form-control" id="repassword" name="repassword" placeholder="Confirm Password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Daftar</button>
								<button type="reset" class="btn btn-danger">Cancel</button>
							</div>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
</body>