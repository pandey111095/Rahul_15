<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
	#product{

		margin-left: 20px;
	}
	.pull-left{

		margin-left: 20px;
	}
</style>
	<meta charset="utf-8">
	<title>Latest Songs</title>
	<?= link_tag('assets/css/bootstrap.min.css')?>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<?php include('header.php'); ?>

<body>
<!-- <?php //print_r($detail);//exit; ?> -->

<?php foreach ($detail as $song) : ?>

<div id="product">
<div class="sidebar pull-left visible-lg">
<div class="pb-left-column col-xs-12 col-sm-2">
<div class="product-image">
<div class="product-full">
<img src="<?php echo site_url($song->thumbnail)?>">
</div>
</div>
</div>
</div>
</div>
<div class="pull-left">
<div class="row">
<div class="row search-results">
Song Name:<?= $song->songname; ?>
</div>
<div class="row search-results">
Singer: <?= $song->singer; ?>
</div>
<div class="row search-results">
Album: <?= $song->albumname; ?>
</div>
<div class="row search-results">
Download: <a href="<?php echo base_url(); ?>Filedownload/download/<?= $song->id; ?>" class="btn btn-success">Download</a>
</div>
</div>
</div>






<?php endforeach; ?>

</body>