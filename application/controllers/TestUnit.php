<?php

class TestUnit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

			$data['cuti'] = $this->m_cuti->get_all_cuti()->result_array();
			$this->load->view('admin/cuti', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}

	}


    public function test_view_admin()
	{
		$test = $this->view_admin();
		$expected_result = 1;
		$test_name = "Menampilkan data cuti";

		echo $this->unit->run($test, $expected_result, $test_name);
	}
}