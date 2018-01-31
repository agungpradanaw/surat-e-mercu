<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statussurat_model extends CI_Model {

	// SURAT KP
	public function SuratKpToProses($id_surat,$nomorsuratkp)
	{
		$data = array (
			'status'   => 'Proses',
			'no_surat' => $nomorsuratkp
		);

		$this->db->where('id_surat',$id_surat);
		$this->db->where('jenis_surat','Kerja Praktek');
		$this->db->limit(1);
		return $this->db->update('surat',$data);
	}

	public function SuratKpToFinish($id_surat)
	{
		$data = array(
			'status'=>'Selesai',
			'tanggal_selesai'=>date('Y-m-d')	
		);

		$this->db->where('id_surat',$id_surat);
		$this->db->where('jenis_surat','Kerja Praktek');
		$this->db->limit(1);
		return $this->db->update('surat',$data);
	}

	public function SuratKpToTake($id_surat)
	{
	    $data = array(
			'status'=>'Ambil',
			'tanggal_diambil'=>date('Y-m-d')	
		);

		$this->db->where('id_surat',$id_surat);
		$this->db->where('jenis_surat','Kerja Praktek');
		$this->db->limit(1);
		return $this->db->update('surat',$data);
	}

	public function JumlahSuratKpWaiting()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Menunggu');
		$this->db->where('jenis_surat','Kerja Praktek');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function JumlahSuratKpProses()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Proses');
		$this->db->where('jenis_surat','Kerja Praktek');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function JumlahSuratKpFinish()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Selesai');
		$this->db->where('jenis_surat','Kerja Praktek');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function JumlahSuratKpTake()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Ambil');
		$this->db->where('jenis_surat','Kerja Praktek');
		$query = $this->db->get();
		return $query->num_rows();
	}

	// SURAT TA
	public function SuratTAToProses($id_surat)
	{
		$data = array(
			'status'=>'Selesai'	
		);

		$this->db->where('id_surat',$id_surat);
		$this->db->limit(1);
		return $this->db->update('surat',$data);
	}

	public function SuratTAToFinish($id_surat)
	{
		$data = array(
			'status'=>'Selesai'	
		);

		$this->db->where('id_surat',$id_surat);
		$this->db->limit(1);
		return $this->db->update('surat',$data);
	}

	public function SuratTAToTake($id_surat)
	{
		$data = array(
			'status'=>'Selesai'	
		);

		$this->db->where('id_surat',$id_surat);
		$this->db->limit(1);
		return $this->db->update('surat',$data);
	}

	public function JumlahSuratTAWaiting()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Menunggu');
		$this->db->where('jenis_surat','Tugas Akhir');
		$query = $this->db->get();
		return $query->num_rows();	
	}

	public function JumlahSuratTAProses()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Proses');
		$this->db->where('jenis_surat','Tugas Akhir');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function JumlahSuratTAFinish()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Selesai');
		$this->db->where('jenis_surat','Tugas Akhir');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function JumlahSuratTATake()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('status','Ambil');
		$this->db->where('jenis_surat','Tugas Akhir');
		$query = $this->db->get();
		return $query->num_rows();
	}


}

/* End of file Statussurat_model.php */
/* Location: ./application/models/Statussurat_model.php */