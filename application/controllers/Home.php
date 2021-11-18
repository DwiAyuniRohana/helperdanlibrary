<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_obat');
		$this->load->helper('Kosong');
	}

	public function index()
	{
		$queryAllObat = $this->M_obat->getDataObat();
		$DATA = array('queryAllObt' => $queryAllObat);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah()
	{
		$this->load->view('halaman_tambah_obat');
	}

	public function halaman_edit($id)
	{
		$queryObatDetail = $this->M_obat->getDataObatDetail($id);
		$DATA = array('queryObtDetail' => $queryObatDetail);
		$this->load->view('halaman_edit_obat', $DATA);
	}

	public function fungsiTambah()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$penyimpanan = $this->input->post('penyimpanan');
		$penyuplai = $this->input->post('penyuplai');

		$ArrInsert = array(
			'id' => $id,
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'penyimpanan' => $penyimpanan,
			'penyuplai' => $penyuplai
		);

		$this->M_obat->insertDataObat($ArrInsert);
		redirect(base_url(''));
	}

	public function fungsiEdit()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$penyimpanan = $this->input->post('penyimpanan');
		$penyuplai = $this->input->post('penyuplai');


		$ArrUpdate = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'penyimpanan' => $penyimpanan,
			'penyuplai' => $penyuplai
		);

		$this->M_obat->updateDataObat($id, $ArrUpdate);
		redirect(base_url(''));
	}

	public function fungsiDelete($id)
	{
		$this->M_obat->deleteDataObat($id);
		redirect(base_url(''));
	}
}
