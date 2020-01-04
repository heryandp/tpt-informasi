<?php $this->load->view('template/head'); ?>

<body>

<?php $this->load->view('template/sidebar'); ?>

<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Buat Nota Dinas</p>
	  <div style="overflow-x: scroll">
	  	<table id="tabel_buat_nd" class="ui small celled table">
		  <thead>
		    <tr><th>No</th>
		    <th>Wajib Pajak</th>
		    <th>NPWP</th>
		    <th>Jenis SPT</th>
		    <th>Tanda Terima</th>
		    <th>Tanggal SPT</th>
		    <th>Nilai</th>
		    <th>Masa</th>
		    <th>Pembetulan</th>
		    <th>Restitusi</th>
		    <th>Tanggal Terima</th>
		    <th>Aksi</th>
		  </tr>
		 </thead>
	    </table>
	   </div>
	</div>
  </div>
</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
            {
                return {
                    "iStart": oSettings._iDisplayStart,
                    "iEnd": oSettings.fnDisplayEnd(),
                    "iLength": oSettings._iDisplayLength,
                    "iTotal": oSettings.fnRecordsTotal(),
                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                };
            };

		var table = $("#tabel_buat_nd").DataTable({
	        initComplete: function() {
	            var api = this.api();
	            $('#tabel_buat_nd_filter input')
	                .off('.DT')
	                .on('input.DT', function() {
	                    api.search(this.value).draw();
	            });
	        },
	            oLanguage: {
	            sProcessing: '<p style="color: green"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></p><span class="sr-only">Loading…</span>',
	            
	        },
	            processing: true,
	            serverSide: true,
	            ajax: {"url": "<?php echo base_url().'serverside/get/belum_nd'?>", "type": "POST"},
	                  columns: [
	                      {"data": "id"},
	                      {"data": "wp"},
	                      {"data": "npwp"},
	                      {"data": "jenis_spt"},
	                      {"data": "tanda_terima"},
	                      {"data": "tgl_spt"},
	                      {"data": "nilai",
	                      	render: function(data, type, row, meta) {
				                	return currency(row['nilai'], { separator: ',',decimal: '.' }).format();
				            },
	                  	  },
	                      {"data": "masa"},
	                      {"data": "pembetulan"},
	                      {"data": "restitusi"},
	                      {"data": "tgl_terima"},
	                      {"data": "id_spt",
				                className: "center",
				                render: function(data, type, row, meta) {
				                	return '<a href="../buat_nd/buat/'+row['id_spt']+'" class="ui small green button">Buat ND</a>'
				                },
				            }
	                ],
	              order: [[10, 'desc']],

	        rowCallback: function(row, data, iDisplayIndex) {
	            var info = this.fnPagingInfo();
	            var page = info.iPage;
	            var length = info.iLength;
	            var index = page * length + (iDisplayIndex + 1);
	            $('td:eq(0)', row).html(index);
	        }
	    });

	    // $('#tabel_buat_nd tbody').on( 'click', 'button', function () {
	    //     var data = table.row( $(this).parents('tr') ).data();
	    //     alert('eyyy');
	    // } );

	});

</script>
<?php $this->load->view('template/foot'); ?>
