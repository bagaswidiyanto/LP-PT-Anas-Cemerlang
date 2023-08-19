<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['evaluasi'] = $this->db->get('tbl_evaluasi')->result();
		$this->data['keunggulan'] = $this->db->get('tbl_keunggulan')->result();
		$this->data['about'] = $this->db->get('tbl_about_us')->row();
		$this->data['al'] = $this->db->get('tbl_about_layanan')->row();

		$this->data['visi1'] = $this->db->get_where('tbl_visi', array('id' => 1))->row();
		$this->data['visi2'] = $this->db->get_where('tbl_visi', array('id' => 2))->row();

		$this->data['misi1'] = $this->db->get_where('tbl_misi', array('id' => 1))->row();
		$this->data['misi2'] = $this->db->get_where('tbl_misi', array('id' => 2))->row();
		$this->data['misi3'] = $this->db->get_where('tbl_misi', array('id' => 3))->row();

		$this->data['gk'] = $this->db->get('tbl_general_kontraktor')->row();
		$this->data['master_persediaan'] = $this->db->get('tbl_master_persediaan')->result();

		$this->data['persediaan1'] = $this->db->get_where('tbl_persediaan', array('id_persediaan' => 1))->result();
		$this->data['persediaan2'] = $this->db->get_where('tbl_persediaan', array('id_persediaan' => 2))->result();
		$this->data['persediaan3'] = $this->db->get_where('tbl_persediaan', array('id_persediaan' => 3))->result();

		$this->db->order_by('id', 'asc');
		$this->db->limit(2);
		$this->data['yt1'] = $this->db->get('tbl_video_yt')->result();

		$this->db->order_by('id', 'desc');
		$this->db->limit(2);
		$this->data['yt2'] = $this->db->get('tbl_video_yt')->result();

		$this->data['konsul'] = $this->db->get('tbl_konsultasi')->row();
		$this->data['service'] = $this->db->get('tbl_service')->result();
		$this->data['kegiatan'] = $this->db->get('tbl_kegiatan')->result();

		$this->data['deskMisi'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 1))->row();
		$this->data['deskHelp'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 2))->row();



		$this->web = 'content/v_home';
		$this->layout();
	}
}