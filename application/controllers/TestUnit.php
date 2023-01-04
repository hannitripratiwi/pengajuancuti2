<?php

class TestUnit extends CI_Controller
{
	public function tampil()
	{
		if($this->m_cuti->get_all_cuti()->result_array())
		{
			return true;
		}
	}

	public function test_tampil()
	{
		$test = $this->tampil();
		$expected_result = true;
		$test_name = "Menampilkan data cuti";

		echo $this->unit->run($test, $expected_result, $test_name);
	}
}



