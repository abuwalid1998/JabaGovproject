<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<img style="max-width:75px;" src="<?= base_url() ?>img\identitas\jaba.png">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if($title == 'Beranda') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url() ?>">الصفحة الرئيسية</a>
				</li>
				<li class="nav-item dropdown <?php if($title == 'Sejarah'  || $title == 'Struktur' || $title == 'Fasilitas') echo "active"; ?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					عن البلدة
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">عن البلدة</a>
					<a class="dropdown-item" href="<?= base_url('profil/struktur') ?>">الهيكلية الأدارية</a>
					<a class="dropdown-item" href="<?= base_url('profil/fasilitas') ?>">صور للبلدة</a>
				</div>
				</li>
				<!-- <li class="nav-item dropdown <?php if($title == 'Administrasi Perkantoran' || $title == 'Akutansi' || $title == 'Pemasaran') echo "active"; ?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Jurusan
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="<?= base_url('jurusan/ap') ?>">أعضاء البلدية</a>
					<a class="dropdown-item" href="<?= base_url('jurusan/ak') ?>">Akutansi</a>
					<a class="dropdown-item" href="<?= base_url('jurusan/pm') ?>">Pemasaran</a>
				</div>
				</li> -->
				<li class="nav-item <?php if($title == 'Tata Tertib') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url('tatatertib') ?>">الشكاوي والأقتراحات</a>
				</li>
				<li class="nav-item <?php if($title == 'Agenda') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url('agenda') ?>">الخطة السنوية</a>
				</li>
				<li class="nav-item <?php if($title == 'Berita') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url('blog') ?>">المقالات والأخبار</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
