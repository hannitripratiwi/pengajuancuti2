<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Cuti</title>
</head>

<body>
    <?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

    <?php

$id = 0;
foreach($cuti as $i)
:
$id++;
$id_cuti = $i['id_cuti'];
$id_user = $i['id_user'];
$nama_lengkap = $i['nama_lengkap'];
$alasan = $i['alasan'];
$nip = $i['nip'];
$jabatan = $i['jabatan'];
$perihal_cuti = $i['perihal_cuti'];
$tgl_diajukan = $i['tgl_diajukan'];
$mulai = $i['mulai'];
$berakhir = $i['berakhir'];
$id_status_cuti = $i['id_status_cuti'];

?>

    <?php $diff = abs(strtotime($mulai) - strtotime($berakhir));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    ?>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:12pt;"><span
            style="height:0pt; text-align:left; display:block; position:absolute; z-index:-1;">
                <img src="<?= base_url();?>assets/login/images/Logo.png" alt="AdminLTE Logo"
                width="120" height="105" alt="" class="fr-fir fr-dib fr-draggable"></span><strong><span
                style="font-family:'Times New Roman';">PT. Bringin Inti Teknologi</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:12pt;"><strong><span
                style="font-family:'Times New Roman';">Departemen Management</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:14pt;"><strong><span
                style="font-family:'Times New Roman';">Divisi SDM</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span
            style="font-family:Arial;">Gedung Intiland</span></p>
    <hr>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="font-family:'Times New Roman';">&nbsp;</span></p>
    <p
        style="margin-top:0pt; margin-left:355pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">Jakarta, <?= tgl_indo($tgl_diajukan)?></span>
    </p>
    <p
        style="margin-top:0pt; margin-left:320pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';"></span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="font-family:'Times New Roman';">Nomor</span><span
            style="width:4.84pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: &nbsp;&nbsp;&nbsp; &nbsp;/
            30 /SDM/2022</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; </span><span style="font-family:'Times New Roman';">Kepada Yth. Kepala SDM</span>
     <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span 
            style="font-family:'Times New Roman';">Lampiran</span><span 
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family:'Times New Roman';">: 1 (satu) lembar</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp;PT. Bringin Inti Teknologi&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="font-family:'Times New Roman';">Perihal</span><span
            style="width:4.84pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$perihal_cuti?>&nbsp;</span><span style="width:22.14pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">Di Tempat,</span><span
            style="font-family:'Times New Roman';">&nbsp;</span></p>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;Jakarta</span><span
            style="width:6.02pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:18pt; display:inline-block;">&nbsp;</span><span
            style="width:18pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Bersama
            ini diteruskan usul Cuti karena alasan penting pegawai PT. Bringin Inti Teknologi, atas nama saudara :</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Nama</span><span
            style="width:6.99pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$nama_lengkap?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Nip</span><span
            style="width:16.75pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$nip?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Jabatan</span><span
            style="width:0.27pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: <?=$jabatan?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="font-family:'Times New Roman';">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:18pt; display:inline-block;">&nbsp;</span><span
            style="width:18pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Dengan
            ini saya mengajukan Permohonan Cuti Karena Alasan Penting selama <?=$days?> hari kerja, yaitu
            terhitung mulai
            tanggal <?=$mulai?> s.d <?=$berakhir?> yang akan di pergunakan untuk <?=$alasan?>.</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:18pt; display:inline-block;">&nbsp;</span><span
            style="width:18pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Demikian
            Permohonan ini saya ajukan, atas pertimbangan dan perhatian Bapak diucapkan terima kasih.</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%;">
    <img src="<?= base_url();?>assets/login/images/ttd.png" alt="AdminLTE Logo"
                width="175" height="175" alt="" class="fr-fir fr-dib fr-draggable"></span><strong>
    <p></p>
    <?php endforeach; ?>
</body>

</html>