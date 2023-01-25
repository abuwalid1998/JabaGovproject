<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h3>Form Struktur Organisasi Sekolah</h3>
		</div>
	</div>

	<?= form_open_multipart($form_action) ?>
		<?= isset($content->id) ? form_hidden('id', $content->id) : '' ?>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" id="label-photo">الصورة</label>
			<div class="col-sm-8">
				<?php if(!empty($content->photo)) : ?>
					<img src="<?= base_url("img/struktur_organisasi/$content->photo") ?>" height="150">
				<?php else: ?>
					<p>No Photo</p>
				<?php endif; ?>
				<br> 
				<small><span class="text-danger">*</span>	الحد الأقصى للصورة 3 mb</small>
				<br> <br>
				<input name="photo" type="file" class="form-control-file">
				<?php if($this->session->flashdata('image_error')) :  ?>
                <small class="form-text text-danger">
                  <?= $this->session->flashdata('image_error') ?>
                </small>
				<?php endif ?>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-8 offset-2">
				<a href="<?= base_url('struktur') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>تراجع</a>
				<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> تثبيت التعديلات</button>
			</div>
		</div>
	<?= form_close() ?>
</div>
