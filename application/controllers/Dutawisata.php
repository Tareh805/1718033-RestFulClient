<?php
Class Dutawisata extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/ci-rest/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function index(){
        $data['data_dutawisata'] = json_decode($this->curl->simple_get($this->API.'/dutawisata'));
        $this->load->view('dutawisa/daftar_calon',$data);
    }

    function simpan_data(){
        if(isset($_POST['submit'])){
            $data = array(
            'id_peserta' => $this->post->input('id_peserta'),
            'nama_peserta' => $this->post->input('nama_peserta'),
            'tanggal_lahir' => $this->post->input('tanggal_lahir'),
            'usia' => $this->post->input('usia'),
            'jenis_kelamin' => $this->post->input('jenis_kelamin'),
            'tinggi' => $this->post->input('tinggi'),
            'berat' => $this->post->input('berat'),
            'agama' => $this->post->input('agama'),
            'alamat' => $this->post->input('alamat'),
            'nama_kota' => $this->post->input('nama_kota'),
            'pendidikan' => $this->post->input('pendidikan'),
            'nama_ortu' => $this->post->input('nama_ortu'),
            'id_datakota' => $this->post->input('id_datakota'));
            $insert =  $this->curl->simple_post($this->API.'/dutawisata', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('dutawisata');
        }else{
            $this->load->view('dutawisata/tambah_calon');
        }
    }

    function edit_data(){
        if(isset($_POST['submit'])){
            $data = array(
            'id_peserta' => $this->post->post('id_peserta'),
            'nama_peserta' => $this->post->post('nama_peserta'),
            'tanggal_lahir' => $this->post->post('tanggal_lahir'),
            'usia' => $this->post->post('usia'),
            'jenis_kelamin' => $this->post->post('jenis_kelamin'),
            'tinggi' => $this->post->post('tinggi'),
            'berat' => $this->post->post('berat'),
            'agama' => $this->post->post('agama'),
            'alamat' => $this->post->post('alamat'),
            'nama_kota' => $this->post->post('nama_kota'),
            'pendidikan' => $this->post->post('pendidikan'),
            'nama_ortu' => $this->post->post('nama_ortu'),
            'id_datakota' => $this->post->post('id_datakota'));
            $update =  $this->curl->simple_put($this->API.'/dutawisata', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('dutawisata');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['data_dutawisata'] = json_decode($this->curl->simple_get($this->API.'/dutawisata',$params));
            $this->load->view('dutawisata/edit_calon',$data);
        }
    }

    function delete($id){
        if(empty($id)){
            redirect('dutawisata');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/dutawisata', array('id_peserta'=>$id_peserta), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('dutawisata');
        }
    }
}
