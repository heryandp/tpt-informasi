<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_impor extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function input($data)
	{
		$query = "INSERT IGNORE INTO t_sptlb (id_spt,npwp_lb,jenis_spt,tanda_terima,tgl_spt,nilai,masa,restitusi,sumber,pembetulan,tgl_terima,user_impor) VALUES ('".$data['id_spt']."','".$data['npwp']."','".$data['jenis_spt']."','".$data['tanda_terima']."','".$data['tgl_spt']."','".$data['nilai']."','".$data['masa']."','".$data['restitusi']."','".$data['sumber']."','".$data['pembetulan']."','".$data['tgl_terima']."','".$data['user_impor']."')";
		$this->db->query($query);
	}

}

/* End of file M_impor.php */
/* Location: ./application/models/modul/M_impor.php */