<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/classic/img/logo.png">

  <script>
    function cetak(){
      document.getElementById("p").style.visibility="hidden";
      window.print();
    }
  </script>
</head>

<style type="text/css">
    h1,h2{font-family: times;margin-top: 0px;margin-bottom: }
    .header{text-align: center;line-height: 10px;}
    .content{font-size: 14px;}
</style>

<body class="">
  <div id="invoice" style="width: 800px;text-align: center;padding: 10px;margin-left:30px;height:1200px">
    <div style="text-align: left;">
    <center>
    <H2>PEMERINTAH KABUPATEN BANDUNG</H2>
    <H1><B>DINAS TENAGA KERJA</B></H1>
    <P>Jl. Raya Soreang Km.17 Telp (022) 5893002, 5891135 - Soreang</P>
    <HR>
    </center>
    <div class="content">
      <?php echo $content; ?>
    </div>
    <small>Dicetak Tanggal <?php echo date('d-m-Y'); ?> - Oleh : <?php echo YII::app()->user->record->fullname; ?></small>
    
    </div>
  </div>
</body>
</html>


