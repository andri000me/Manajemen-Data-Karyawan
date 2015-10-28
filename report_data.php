<?php
	$Open = mysql_connect("localhost","root","");
	$Koneksi = mysql_select_db("karyawan");
	$Lapor = "SELECT nik, nama, jk, jab, dept, tmp_lhr, tgl_lhr, gol_darah, agama, status, telp, email FROM data_karyawan ORDER by nik";
	$Hasil = mysql_query($Lapor);
	$Data = array();
	while($row = mysql_fetch_assoc($Hasil)){
		array_push($Data, $row);
	}
	$Judul = "Result Data Karyawan";
	$tgl= "Time : ".date("l, d F Y");
	$Header= array(
		array("label"=>"Nik", "length"=>23, "align"=>"L"),
		array("label"=>"Nama", "length"=>52, "align"=>"L"),
		array("label"=>"JK", "length"=>8, "align"=>"L"),
		array("label"=>"Jabatan", "length"=>32, "align"=>"L"),
		array("label"=>"Department", "length"=>40, "align"=>"L"),
		array("label"=>"Tempat Lahir", "length"=>30, "align"=>"L"),
		array("label"=>"Tgl Lahir", "length"=>20, "align"=>"L"),
		array("label"=>"Gol darah", "length"=>20, "align"=>"L"),
		array("label"=>"Agama", "length"=>20, "align"=>"L"),
		array("label"=>"St. Nikah", "length"=>18, "align"=>"L"),
		array("label"=>"Telp", "length"=>26, "align"=>"L"),
		array("label"=>"Email", "length"=>52, "align"=>"L"),
	);
	require ("fpdf16/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage('L','Legal','C');
	//judul
	$pdf->SetFont('arial','B','16');
	$pdf->Cell(0, 10, $Judul, '0', 1, 'C');
	//tanggal
	$pdf->SetFont('arial','i','8');
	$pdf->Cell(0, 10, $tgl, '0', 1, 'L');
	//header
	$pdf->SetFont('arial','B','10');
	$pdf->SetFillColor(190,190,0);
	$pdf->SetTextColor(255);
	$pdf->setDrawColor(128,0,0);
	foreach ($Header as $Kolom){
		$pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
	}
	$pdf->Ln();	
	//menampilkan data
	$pdf->SetFillColor(244,235,255);
	$pdf->SettextColor(0);
	$pdf->SetFont('arial','','9');
	$fill =false;
	foreach ($Data as $Baris){
		$i= 0;
		foreach ($Baris as $Cell){
			$pdf->Cell ($Header[$i]['length'], 8, $Cell, 1, '0', $Kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$pdf->Ln();
	}
	//output
	$pdf->Output();
?>