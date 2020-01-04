<?php $this->load->view('template/head'); ?>

<body>

<?php $this->load->view('template/sidebar'); ?>

<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Detail Berkas</p>
	  <table class="ui celled striped blue table">
		  <thead>
		    <tr>
		    	<th colspan="3">
		      Detail SPT
		    	</th>
		  	</tr>
		  </thead>	
		  <tbody>
		    <tr>
		      <td class="three wide">
		        <i class="user icon"></i> Wajib Pajak
		      </td>
		      <td>HERYAN DWIYOGA</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="id card outline icon"></i> NPWP
		      </td>
		      <td>71.208.618.0-036-000</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="folder icon"></i> Jenis SPT
		      </td>
		      <td>Tahunan Badan</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="archive icon"></i> Tanda Terima
		      </td>
		      <td>S-99097242/PPWBIDR/WPJ.05/KP.0203/2019</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="calendar outline icon"></i> Tanggal SPT
		      </td>
		      <td>2019-07-20</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="money bill alternate outline icon"></i> Nilai
		      </td>
		      <td>1.401.750.847,00</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="calendar outline icon"></i> Masa
		      </td>
		      <td>1/2016</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="file outline icon"></i> Restitusi
		      </td>
		      <td>Restitusi</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="calendar outline icon"></i> Tanggal Terima SPT
		      </td>
		      <td>2019-09-03</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="file outline icon"></i> Nota Dinas Pelayanan
		      </td>
		      <td>ND-LB.1/WPJ.05/KP.0203/2019</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="calendar outline icon"></i> Tanggal Nota Dinas
		      </td>
		      <td>2019-09-05</td>
		    </tr>
		    <tr>
		      <td>
		        <i class="info circle icon"></i> Status
		      </td>
		      <td><a class="ui green label">Open</a></td>
		    </tr>
		  </tbody>
	  </table>

		<!-- Histori -->
	  	<table class="ui small celled orange table">
		  	<thead>
		    	<tr>
		    		<th colspan="5"><i class="history icon"></i> Histori Berkas</th>
		    	</tr>
		    	<tr>
			    	<th class="collapsing">No</th>
				    <th>Tanggal</th>
				    <th>Seksi</th>
				    <th class="collapsing">User</th>
				    <th>Keterangan</th>
		  		</tr>
			</thead>
		  <tbody>
		  	<td>1</td>
		  	<td>2019-09-14 12.00.00</td>
		  	<td>Seksi Pelayanan</td>
		  	<td>817931438</td>
		  	<td>Berkas SPT diimpor</td>
		  </tbody>
	    </table>
	</div>
  </div>
</div>
</body>

<?php $this->load->view('template/foot'); ?>