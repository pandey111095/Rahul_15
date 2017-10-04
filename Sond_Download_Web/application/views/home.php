<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	   <meta charset="utf-8">
	   <title>Home</title>
	   <?= link_tag('assets/css/bootstrap.min.css')?>
	   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<?php include('header.php'); ?>    
    <body>
        <script src="assets/js/jssor.slider-22.2.6.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jssor_1_slider_init = function() 
            {
                var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
                }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            /*responsive code begin*/
            /*you can remove responsive code if you pagen't want the slider scales while winpagew resizing*/
            function ScaleSlider() 
            {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) 
                {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else 
                {
                    winpagew.setTimeout(ScaleSlider, 30);
                }
                }
                ScaleSlider();
                $Jssor$.$AddEvent(winpagew, "load", ScaleSlider);
                $Jssor$.$AddEvent(winpagew, "resize", ScaleSlider);
                $Jssor$.$AddEvent(winpagew, "orientationchange", ScaleSlider);
                /*responsive code end*/
            };
        </script>
    <style>
       
        .jssorb05 {
            position: absolute;
            }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('assets/image/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('assets/image/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;margin-top: -18px;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('assets/image/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url('image/bhojpuri.jpg')?>" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">TOUCH SWIPE SLIDER</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url('image/hindi.jpg')?>" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
            <div>
                <img data-u="image" src="<?php echo base_url('image/english.jpg')?>" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    	<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <legend >Latest</legend>
            </div>
            	<?php if(count($latest)): ?>
                         <?php  foreach ($latest as $latest): ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo site_url("Download/page/$latest->id")?>">
                    <img class="img-responsive" src="<?php echo site_url($latest->thumbnail)?>">
                </a>
            </div>
            <?php endforeach ?>
               
              <?php else: ?>
                  <p> no content </p>
               <?php endif ?>
            </div>

            	<hr>
            <div class="row">

            <div class="col-lg-12">
                <legend>Listen it again</legend>
            </div>
            	<?php if(count($watch)): ?>
                         <?php  foreach ($watch as $watch): ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo site_url("Download/page/$watch->id")?>">
                    <img class="img-responsive" src="<?php echo site_url($watch->thumbnail)?>">
                </a>
            </div>
            <?php endforeach ?>
               
              <?php else: ?>
                  <p> no content</p>
               <?php endif ?>
            </div>

            	<hr>
            <div class="row">

            <div class="col-lg-12">
                <legend>Recomandded</legend>
            </div>
            	<?php if(count($rec)): ?>
                         <?php  foreach ($rec as $rec): ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo site_url("Download/page/$rec->id")?>">
                    <img class="img-responsive" src="<?php echo site_url($rec->thumbnail)?>">
                </a>
            </div>
            <?php endforeach ?>
               
              <?php else: ?>
                  <p> no content</p>
               <?php endif ?>
            </div>

        <hr>


</body>