<?php $this->load->view('template/head'); ?>

<body>

<?php $this->load->view('template/sidebar'); ?>

<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Tentang</p>
	  <div class="ui top attached tabular menu">
		  <a class="item active" data-tab="first">Tentang Aplikasi</a>
		  <a class="item" data-tab="second">Penggunaan Aplikasi</a>
		</div>
		<div class="ui bottom attached tab segment active" data-tab="first">
		  First
		</div>
		<div class="ui bottom attached tab segment" data-tab="second">
		  Second
		</div>
	</div>
  </div>
</div>
</body>

<?php $this->load->view('template/foot'); ?>
