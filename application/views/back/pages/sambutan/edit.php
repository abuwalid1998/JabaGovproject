<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h3>الكلمة الترحيبية</h3>
		</div>
	</div>

	<?= form_open_multipart($form_action) ?>
		<?= isset($content->id) ? form_hidden('id', $content->id) : '' ?>

		<div class="form-group row">
			<label for="sambutan" class="col-sm-2 col-form-label">المحتوى</label>
			<div class="col-sm-8">
				<textarea name="content" id="content" rows="5" class="form-control" value="<?= $content->content ?>"><?= $content->content ?></textarea>
				<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" id="label-photo">الصورة</label>
			<div class="col-sm-8">
				<?php if(!empty($content->photo)) : ?>
					<img src="<?= base_url("img/sambutan/$content->photo") ?>" alt="" height="150">
				<?php else: ?>
					<p>No Photo</p>
				<?php endif; ?>
				<br> 
				<small><span class="text-danger">*</span>الحد الأقصى للصورة</small>
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
				<a href="<?= base_url('sambutan') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>العودة</a>
				<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> تثبيت التعديلات</button>
			</div>
		</div>
	<?= form_close() ?>
</div>
