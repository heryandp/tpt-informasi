<?php $this->load->view('template/head'); ?>

<body>

<?php $this->load->view('template/sidebar'); ?>

<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Berkas Masuk</p>
	  <div style="overflow-x: scroll">
	  	<table id="tabel_berkas_masuk" class="ui small celled table">
		  <thead>
		    <tr><th>No</th>
		    <th>Wajib Pajak</th>
		    <th>NPWP</th>
		    <th>Jenis SPT</th>
		    <th>Tanda Terima</th>
		    <th>Tanggal SPT</th>
		    <th>Nilai</th>
		    <th>Masa</th>
		    <th>Restitusi</th>
		    <th>Tanggal Terima</th>
		    <th>Aksi</th>
		  </tr></thead>
		  <tbody>
		    <tr>
		      <td>1</td>
		      <td>HERYAN DWIYOGA</td>
		      <td>71.208.618.0-036-000</td>
		      <td>Tahunan Badan</td>
		      <td>S-99097242/PPWBIDR/WPJ.05/KP.0203/2019</td>
		      <td>20/07/2019</td>
		      <td>1.401.750.847,00</td>
		      <td>1 / 2016</td>
		      <td>Restitusi</td>
		      <td>03/09/2019</td>
		      <td><button class="ui small green button">Terima</button></td>
		    </tr>
		  </tbody>
	    </table>
	   </div>
	</div>
  </div>
</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#tabel_berkas_masuk').DataTable({
    		"pagingType": "full_numbers",
    	}
    	);
	});
</script>
<?php $this->load->view('template/foot'); ?>
