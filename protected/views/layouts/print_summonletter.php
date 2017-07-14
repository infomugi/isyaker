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
    
    <BR>
    <BR>
    <BR>
    <BR>
    <BR>

    <div class="content">
      <?php echo $content; ?>
    </div>
    
    </div>
  </div>
</body>
</html>


