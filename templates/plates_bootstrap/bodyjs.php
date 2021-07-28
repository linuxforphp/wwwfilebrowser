<!-- Core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php foreach($view['js'] as $key => $value): ?>
    <script src="<?php echo $value ?>"></script>
<?php endforeach; ?>

<!-- Essential jQuery Plugins
        ================================================== -->
<!-- JAVASCRIPTS -->
<script src="<?=$view['urlbaseaddr'] ?>plugins/jquery/jquery.js"></script>
<script src="<?=$view['urlbaseaddr'] ?>plugins/popper/popper.min.js"></script>
<script src="<?=$view['urlbaseaddr'] ?>plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?=$view['urlbaseaddr'] ?>plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=$view['urlbaseaddr'] ?>plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="<?=$view['urlbaseaddr'] ?>plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="<?=$view['urlbaseaddr'] ?>plugins/aos/aos.js"></script>

<script src="<?=$view['urlbaseaddr'] ?>js/custom.js"></script>

<?php foreach($view['jsscripts'] as $key => $value): ?>
    <?php echo $value ?>
<?php endforeach; ?>

<!-- Modernizer Script for old Browsers -->
<script src="<?=$view['urlbaseaddr'] ?>js/modernizr-2.6.2.min.js"></script>
