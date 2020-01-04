<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_get extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function belum_nd($where)
	{
		$this->datatables->select('id,id_spt,nama as wp,npwp,jenis_spt,tanda_terima,tgl_spt,nilai,masa,pembetulan,restitusi,tgl_terima');
		$this->datatables->from('t_sptlb');
		$this->datatables->join('t_mfwp', 't_mfwp.npwp = t_sptlb.npwp_lb', 'left');
		$this->datatables->where('t_sptlb.status_nd = 0');
		$this->datatables->where($where);
		return $this->datatables->generate();
	}
	

}

/* End of file M_get.php */
/* Location: ./application/models/serverside/M_get.php */