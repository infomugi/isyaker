<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */

$this->breadcrumbs=array(
	'Summonletters'=>array('index'),
	$model->id_recomendedletter,
	);

$this->pageTitle='Cetak Surat Panggilan Ke-'.$model->asfor;
?>

<style type="text/css">
	.kotak{width: 100%;}
	.kiri{width: 50%;float: left;}
	.kanan{width: 50%;float: right;}
	.isi, .jadwal{width: 90%;float: right;}
</style>

<div class="kotak">
	<div class="text-right">Soreang, <?php echo $model->created_date; ?></div>
		<div class="kiri">

			<table>
				<tr>
					<td style="width:30%">Nomor</td>
					<td>: 567/<?php echo $model->letter_code; ?>-HIPK/<?php echo date('mY', strtotime($model->created_date)); ?></td>
				</tr>
				<tr>
					<td style="width:30%">Sifat</td>
					<td>: <?php echo Summonletter::model()->characteristic($model->characteristic); ?></td>
				</tr>
				<tr>
					<td style="width:30%">Derajat</td>
					<td>: <?php echo Summonletter::model()->degree($model->degree); ?></td>
				</tr>		
				<tr>
					<td style="width:30%">Lampiran</td>
					<td>: <?php echo Summonletter::model()->attachment($model->attachment); ?></td>
				</tr>		
				<tr>
					<td style="width:30%">Perihal</td>
					<td>: <b><?php echo Recomendedletter::model()->asfor($model->asfor); ?></b></td>
				</tr>	
				<tr>
					<td style="width:30%"></td>
					<td>  <b>Sdr. <?php echo $model->Terminate->employee_name; ?></b></td>
				</tr>
				<tr>
					<td style="width:30%"></td>
					<td>  <b>Pekerja <?php $data=Company::model()->findByPk($model->Terminate->company_id); echo $data->name; ?></b></td>
				</tr>																						
			</table>

		</div>

		<div class="kanan">

			<table>
				<tr>
					K e p a d a : 
				</tr>
				<tr>
					<td style="width:10px">Yth</td>
					<td style="width:10px">1.</td>
					<td>Sdr. Pimpinan Perusahaan</td>
				</tr>
				<tr>
					<td style="width:10px"></td>
					<td style="width:10px"></td>
					<td><?php $data=Company::model()->findByPk($model->Terminate->company_id); echo $data->name; ?></td>
				</tr>
				<tr>
					<td style="width:10px"></td>
					<td style="width:10px"></td>
					<td><?php $data=Company::model()->findByPk($model->Terminate->company_id); echo $data->address; ?></td>
				</tr>

				<tr>
					<td style="width:10%"></td>
					<td style="width:10%">2.</td>
					<td style="width:50%">Sdr. <?php echo $model->Terminate->employee_name; ?></td>
				</tr>
				<tr>
					<td style="width:10%"></td>
					<td style="width:10%"></td>
					<td style="width:50%"><?php echo $model->Terminate->employee_address; ?></td>
				</tr>

				<tr>
					<td style="width:10%"></td>
					<td style="width:10%">3.</td>
					<td style="width:50%">Sdr. Pengurus <?php echo $model->Alliance->name ?></td>
				</tr>
				<tr>
					<td style="width:10%"></td>
					<td style="width:10%"></td>
					<td style="width:50%"><?php echo $model->Alliance->address ?></td>
				</tr>


				<tr>
					<td style="width:10%"></td>
					<td style="width:10%"></td>
					<td style="width:50%">di</td>
				</tr>					

				<tr>
					<td style="width:10%"></td>
					<td style="width:10%"></td>
					<td style="width:50%">T e m p a t</td>
				</tr>		

			</table>

		</div>	
	</div>

	<div class="kotak" style="text-align:justify">
		<div class="isi">

			<BR>
					<BR>
						<p>
							Berkenaan dengan   Permohonan  Mediasi dari  <b>Ketua <?php echo $model->Alliance->name ?></b> Kabupaten Bandung selaku Kuasa Hukum atas nama Sdr. <b><?php echo $model->Terminate->employee_name; ?></b>  Pekerja <b><?php $data=Company::model()->findByPk($model->Terminate->company_id); echo $data->name; ?></b>  dengan surat Nomor : <?php echo $model->letter_code_alliance; ?> tertanggal  <?php echo $model->letter_date_alliance; ?>  Perihal  Permohonan Penyelesaian Kasus Perselisihan Hubungan Industrial,  maka sesuai dengan Undang-Undang Nomor :  13 Tahun 2003  Jo Undang-Undang Nomor : 2 Tahun 2004  Telah diadakan Panggilan Mediasi  sebanyak 3 (tiga) kali  bertempat pada Dinas Tenaga Kerja Kabupaten Bandung dan kedua belah pihak memberikan keterangan sebagai berikut :						</p>
							<BR>
								<p>
									<B><u>KETERANGAN PIHAK PEKERJA :</u></B> 
									<BR>
										<?php echo $model->employee_description; ?>
									<BR>
									<B><u>KETERANGAN PIHAK PERUSAHAAN :</u></B> 
									<BR>
										<?php echo $model->company_description; ?>
									<BR>
									<B><u>PENDAPAT DAN ANJURAN MEDIATOR :</u></B> 
									<BR>
										<?php echo $model->recomended_mediator; ?>
									<BR>
									<p>Setelah meneliti berkas-berkas dan mendengar keterangan yang diberikan oleh Pihak Pekerja dan Pihak Perusahaan, maka  sesuai dengan ketentuan Perundang-undangan yang berlaku Mediator berpendapat sebagai berikut :</p>
									<BR>
									<center><b>M e n g a n j u r k a n</b></center>
									<BR>
									<?php echo $model->recomended_descriptio; ?>
									<BR>
										Demikian Anjuran ini disampaikan agar kedua belah pihak dapat memberikan jawaban secara tertulis selambat-lambatnya 10 (sepuluh) hari kerja setelah diterimanya Anjuran ini. Apabila dalam waktu tersebut tidak memberikan pendapat maka dianggap menolak Anjuran ini,  apabila salah satu pihak atau kedua belah pihak menolak, maka Pihak yang menolak tersebut dapat menyelesaikan Perselisihan ini melalui Pengadilan Hubungan Industrial. Dalam hal menyetujui anjuran tertulis dimaksud agar dibuatkan Persetujuan Bersama kemudian didaftarkan di Pengadilan Hubungan Industrial.
									</p>												

								</div>
							</div>

							<div class="kotak">
								<div class="kiri">
								<BR>
								<center>
								MENGETAHUI <BR>
								KEPALA DINAS TENAGA KERJA,<BR>
								<BR>
								<BR>
								<BR>
								<BR>
								<b>DRS. RUKMANA, M.Si.</b><BR>
								Pembina TK. I<BR>
								NIP. 19650520 199102 1 002
								</center>
								<BR>
								</div>
								<div class="kanan">
								<center>
								<BR>
								<BR>
								M E D I A T O R,<BR>
								<BR>
								<BR>
								<BR>
								<BR>
								<b>H. ENDANG SURYAMAN, DRS. MM</b><BR>
								NIP. 19611202 198903 1 007

								<BR>
								<BR>
								<BR>
								<BR>
								<b>NANI  SUMARNI, SH., MM.</b><BR>
								NIP. 19740129  200701 2 005								
								</center>

								</div>
							</div>



							<STYLE>
								th{width:150px;}
							</STYLE>

