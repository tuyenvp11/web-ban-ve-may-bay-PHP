<?php
include "db/connect.php";
require('../fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->CharSet = "UTF-8";
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$id_order = $_GET['id_order'];
$lietkesql = "SELECT * FROM `tbl_ds-datve`";
$result = mysqli_query($conn, $lietkesql);

$pdf->SetFillColor(193,229,252);

$pdf->Write(10, 'Đơn hàng bao gồm: ');
$pdf->Ln(10);
$width_cell = array(5,35,80,12,30,48,40);
$pdf->Cell($width_cell[0],10,'id_order',1,0,'C',true);
$pdf->Cell($width_cell[1],10,'diemdi',1,0,'C',true);
$pdf->Cell($width_cell[2],10,'diemden',1,0,'C',true);
$pdf->Cell($width_cell[3],10,'ngaydi',1,0,'C',true);
$pdf->Cell($width_cell[4],10,'hanghk',1,0,'C',true);
$pdf->Cell($width_cell[5],10,'soluong',1,0,'C',true);
$pdf->Cell($width_cell[6],10,'tongtien',1,0,'C',true);
$pdf->Cell($width_cell[6],10,'date_create',1,0,'C',true);
$pdf->Cell(40,10,'Xuất thành công');
$pdf->Output();
?>