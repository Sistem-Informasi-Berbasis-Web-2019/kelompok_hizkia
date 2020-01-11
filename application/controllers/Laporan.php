<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Laporan extends CI_Controller{
 
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('mdl_login');
    }
    
    function index(){
        $this->load->library('pdf');
        $this->load->model('Mdl_login');
        if ($this->mdl_login->logged_id()){
        $pdf = new FPDF('L','mm',array(355,215)); //L For Landscape / P For Portrait
        $pdf->AddPage();
        // membuat halaman baru
        
        // setting jenis font yang akan digunakan
        // $pdf->SetFont('Arial','B',14);
        // mencetak string 

      
        $pdf->SetFont('Arial','B',17);
        $pdf->cell(135);
        $pdf->Cell(50,7,'Data Pendaftar',0,0,'C');
        $pdf->Ln();
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(0,7,'',0,1);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(58,6,'Nama Pembina',1,0,'C');
        $pdf->Cell(35,6,'No Pembina',1,0,'C');
        $pdf->Cell(75,6,'Nama Pangkalan/Sekolah',1,0,'C');
        $pdf->Cell(35,6,'Gugus Depan',1,0,'C');    
        $pdf->Cell(125,6,'Alamat Gugus',1,0,'C');
        

        $pdf->SetFont('Arial','',11);
        $pdf->sety(30);
        
        $masuk = $this->db->get('pendaftar')->result();
        $no = 1;
		foreach ($masuk as $row){
			$pdf->SetFillColor(255,255,255);
			$pdf->Cell(10,12,$no++,1,0,'C',true);
			$pdf->Cell(58,12,$row->nama_pembina,1,0,'L',true);
            $pdf->Cell(35,12,$row->no_pembina,1,0,'C',true);
			$pdf->Cell(75,12,$row->nama_pangkalan,1,0,'L',true);
			$pdf->Cell(35,12,$row->gugus_depan,1,0,'C',true);
			$pdf->Multicell(125,6,$row->alamat_gugus,1,'L');
         }

        $pdf->Output();
        }else{
            echo '<script>
            alert("Anda Belum Login");
            document.location.href="'.base_url('adminlla').'";
            </script>';
         }
    }

}