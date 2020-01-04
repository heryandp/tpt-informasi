<?php $this->load->view('template/head'); ?>

<body>

<?php $this->load->view('template/sidebar'); ?>

<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Impor Berkas</p>
	  <div class="ui active dimmer">
	    <div class="ui text loader">Loading</div>
	  </div>
	  <input type="file" (change)="fileEvent($event)" name="filecsv" accept=".csv" class="inputfile" id="imporcsv" />
	  <label for="imporcsv" class="ui green button">
	    <i class="ui download icon"></i> 
	    Load Data (.csv)
	  </label>
	  <input type="button" (change)="fileEvent($event)" class="inputfile" id="previewcsv" />
	  <label for="previewcsv" class="ui orange button">
	    <i class="search icon"></i> 
	    Preview CSV
	  </label>
	  	<button id="uploadcsv" class="ui primary button"><i class="ui upload icon"></i>Impor CSV</button>
	    <script type="text/javascript">
		    $(function () {
		        $("#previewcsv").bind("click", function () {
		            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
		            if (regex.test($("#imporcsv").val().toLowerCase())) {
		                if (typeof (FileReader) != "undefined") {
		                    var reader = new FileReader();
		                    reader.onload = function (e) {
		                        var table = $("<tbody/>");
		                        var rows = e.target.result.split("\n");
		                        for (var i = 1; i < rows.length-1; i++) {
		                            var row = $("<tr/>");
		                            var cells = rows[i].split(';');
		                            if (cells.length = 10) {
		                                for (var j = 0; j < cells.length; j++) {
		                                    var cell = $("<td class='"+j+"_csv'/>");
		                                    cell.html(cells[j]);
		                                    row.append(cell);
		                                }
		                                table.append(row);
		                            } else {
		                            	alert("Format CSV tidak sesuai!");
		                            }
		                        }
		                        $("#tabelcsv tbody").remove();
		                        $("#tabelcsv").append(table);
		                        $("#uploadcsv").show();
		                        $('.ui.active.dimmer').hide();
		                    }
		                    reader.readAsText($("#imporcsv")[0].files[0]);
		                } else {
		                    alert("Browser tidak mendukung HTML5!");
		                }
		            } else {
		                alert("File tidak valid atau belum diupload!");
		            }
		        });
		    });
		</script>
	  	<div style="padding-top:1em;overflow-x: scroll;">
		  	<table id="tabelcsv" class="ui small celled table">
			  <thead>
			    <tr>
			    	<th>No</th>
				    <th>NPWP</th>
				    <th>Tanda Terima</th>
				    <th>Tanggal SPT</th>
				    <th>Nilai</th>
				    <th>Masa</th>
				    <th>Restitusi</th>
				    <th>Sumber</th>
				    <th>Pembetulan</th>
				    <th>Tanggal Terima</th>
			  	</tr>
			   </thead>
			   <tbody>
			   	
			   </tbody>
		    </table>
	    </div>
	    <p><i class="info icon"></i>Delimiter menggunakan titik koma (;). Download format (.csv) <a href="<?php echo base_url('assets/template_impor_sptlb.csv'); ?>">di sini</a></p>
	</div>
  </div>
</div>
</body>
<script type="text/javascript">
	$('.ui.active.dimmer').hide();
	$("#uploadcsv").hide();

	$(document).on('click', '#uploadcsv', function(){
		$('.ui.active.dimmer').show();
		var file = document.getElementById("imporcsv").files[0];
		var allResults;

		if (!$('#imporcsv')[0].files.length)
			{
				alert("Please choose at least one file to parse.");
				return enableButton();
			}
			
		Papa.parse(file,{
			download: true,
            header: true,
            skipEmptyLines: true,
            error: function(err, file, inputElem, reason) { 
            	$('.ui.active.dimmer').hide();
        	},
            complete: function(results) {
            	allResults = results.data;
			  	// Ajax bos
			  	$.ajax({
			  		url:'impor_proses',
			  		method:'post',
			  		data:{"data":allResults},
			  		success:function(data){
			  			$('.ui.active.dimmer').hide();
			  			Swal.fire({
						  type: 'success',
						  title: 'Yey! Impor CSV berhasil!',
						  showConfirmButton: true,
						});
						$("#tabelcsv tbody").remove();
			  		},
			  		error: function (request, status, error) {
				        Swal.fire({
						  type: 'error',
						  title: 'Wadooh! Impor CSV error!',
						  showConfirmButton: true,
						});
						$('.ui.active.dimmer').hide();
				    }
			  	});
            },
		});

	 });

</script>
<?php $this->load->view('template/foot'); ?>
