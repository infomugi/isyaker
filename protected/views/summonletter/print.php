<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */

$this->breadcrumbs=array(
	'Summonletters'=>array('index'),
	$model->id_summonletter,
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
				<td>: <b><?php echo Summonletter::model()->asfor($model->asfor); ?></b></td>
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
					Sehubungan dengan perselisihan Hubungan Industrial yang terjadi di Perusahaan Saudara berdasarkan pengaduan yang telah tercatat di Kantor Kami, maka sesuai Undang-undang Nomor : 2 Tahun 2004 Jo Undang undang Nomor : 13 Tahun 2003 Jo Peraturan Menteri Tenaga Kerja dan Transmigrasi Nomor : 17 Tahun 2014 Tentang Pengangkatan dan Pemberhentian Mediator Hubungan Industrial serta Tata Kerja Mediasi, maka atas hal itu kami mengundang Saudara untuk menghadiri pertemuan yang akan diselenggarakan pada : 
				</p>
				<p>
					<div class="jadwal">
						<table>
							<tr>
								<td width="25%">Hari</td>
								<td width="70%">: <b><?php echo Summonletter::model()->showDay($model->letter_date); ?></b></td>
									</tr>
									<tr>
										<td width="25%">Tanggal</td>
										<td width="70%">: <?php echo $model->letter_date; ?></td>
									</tr>
									<tr>
										<td width="25%">Waktu</td>
										<td width="70%">: <?php echo $model->letter_time; ?></td>
									</tr>	
									<tr>
										<td width="25%">Tempat</td>
										<td width="70%">: Ruang Sidang Dinas Tenaga Kerja Kab. Bandung</td>
									</tr>
									<tr>
										<td width="25%"></td>
										<td width="70%">: Komplek Pemda Jl. Raya Soreang Km.17</td>
									</tr>											
									<tr>
										<td width="25%">Masalah</td>
										<td width="70%">: <?php echo Terminate::model()->type($model->Terminate->type); ?></td>
									</tr>	
									<tr>
										<td width="25%">Menghadap</td>
										<td width="70%">1. <?php echo $model->AppearOne->fullname; ?></td>
									</tr>	
									<tr>
										<td width="25%"></td>
										<td width="70%">2. <?php echo $model->AppearTwo->fullname; ?></td>
									</tr>																																																												
								</table>
							</div>
						</p>
						<BR><BR><BR><BR><BR><BR><BR><BR><BR>
							<p>
								Untuk memperlancar jalannya pertemuan diwajibkan masing-masing pihak membawa data dan atau bukti tertulis berikut : 
								<UL>
									<ol>1. Surat Kuasa / Mandat jika dikuasakan.</ol>
									<ol>2. Bagi Perusahaan diwajibkan membawa PP / PKB</ol>
									<ol>3. Surat keterangan tertulis mengenai duduk perkara / latar belakang alasan yang diperselisihkan serta pendirian masing-masing oihak (Risalah Bipartit).</ol>
									<ol>4. Butir 1 dan 3 dibuat dalam  rangkap 4 (empat)</ol>
									<ol>5. Bagi Perusahaan diwajibkan membawa Cap/ Stempel Perusahaan</ol>
								</UL>
								Demikian agar saudara memperhatikan dan hadir tepat waktu.
							</p>												

						</div>
					</div>

					<div class="kotak">
						<div class="kiri">
							<BR>
								<BR>
									<BR>
										<BR>
											<BR>
											<BR>
											<BR>
												<SMALL><b>Tembusan</b> disampaikan kepada Yth : <br>
													1. Bapak Bupati Bandung (sebagai laporan)
												</SMALL>
											</div>
											<div class="kanan">
												<center>
													<BR>

														AN. KEPALA DINAS TENAGA KERJA <BR>
														KABID HUBIN SYAKER,<BR>
														<BR>
															<BR>
															 <BR>
															 <BR>
																<b>H. ULOH SAEFULOH, SH., M.Si.</b><BR>
																NIP. 18591124 198103 1 004
															</center>



														</div>
													</div>


													<STYLE>
														th{width:150px;}
													</STYLE>

