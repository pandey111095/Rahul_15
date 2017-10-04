<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>

</style>
	<meta charset="utf-8">
	<title>Bhojpuri</title>
	<?= link_tag('assets/css/bootstrap.min.css')?>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php include('header.php'); ?>
	</head>
	<body>
<div class="container">
<div class="row">

            <div class="col-lg-12">
                <legend >Bhojpuri Songs</legend>
            </div>
            	<?php if(count($data)): ?>
                         <?php  foreach ($data as $data): ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo site_url("Download/page/$data->id")?>">
                    <img class="img-responsive" src="<?php echo site_url($data->thumbnail)?>">
                    <div class="name">
                    <h4>Song: <?=$data->songname ?></h4>
                    <h4>Singer: <?=$data->singer?></h4>
                    </div>
                </a>
            </div>
            <?php endforeach ?>
               
              <?php else: ?>
                  <p> no content</p>
               <?php endif ?>
</div>
</div>
</body>
</html>