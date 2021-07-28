<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<?php if (isset($view['headjs'])): ?>
    <?=$this->section('headjs', $this->fetch('headjs', ['view' => $view]))?>
<?php else: ?>
    <?=$this->section('head', $this->fetch('head', ['view' => $view]))?>
<?php endif ?>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
<?=$this->section('navbar', $this->fetch('navbar', ['view' => $view]))?>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
    <div class="shapes-container">
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                <h1 class="text-white font-weight-bold mb-4">FileBrowser</h1>
                <p class="text-white mb-5">FileBrowser is a free, open-source, self-hosted web application for managing files and folders.</p>
                <a href="/download" class="btn btn-main">Download Now</a>
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <img class="img-fluid" src="<?=$view['urlbaseaddr'] ?>images/filebrowser_feature.png" alt="screenshot">
            </div>
        </div>
    </div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
    <div class="container">
        <div class="rounded shadow p-5 bg-white">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <i class="ti-unlock text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 ">Sharing made easy</h3>
                    <p class="regular text-muted">Share a folder with colleagues, your team, friends or family.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <i class="ti-shine text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 ">Powerful tools</h3>
                    <p class="regular text-muted">Use to quickly zip and download remote files.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <i class="ti-thought text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 ">Accesss remote content</h3>
                    <p class="regular text-muted">Manage FTP/SFTP, S3, or other 3rd party cloud storage.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto justify-content-center">
                <!-- Feature Mockup -->
                <div class="image-content" data-aos="fade-right">
                    <img class="img-fluid" src="<?=$view['urlbaseaddr'] ?>images/filebrowser_demo.gif" alt="iphone">
                </div>
            </div>
            <div class="col-lg-6 mr-auto align-self-center">
                <div class="feature-content">
                    <!-- Feature Title -->
                    <h2>Manage your remote files</h2>
                    <!-- Feature Description -->
                    <p class="desc">
                        <ul>
                            <li>You can manage files locally (on your server's hard drive) or remotely (other storage adapters),</li>
                            <li>Multi-user support, with home folders,</li>
                            <li>Copy, move, rename, edit, create, delete, preview, zip, unzip, download, or upload your files,</li>
                            <li>Batch download multiple files or folders at once,</li>
                            <li>File upload supports drag & drop, progress bar, pause and resume,</li>
                            <li>Upload large files regardless of your server configuration.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Feature Grid  ====-->

<div class="container-footer">
    <?=$this->section('footer', $this->fetch('footer', ['view' => $view]))?>
</div>

<?php if ($view['bodyjs'] === 1): ?>
    <?=$this->section('bodyjs', $this->fetch('bodyjs', ['view' => $view]))?>
<?php endif ?>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=$view['urlbaseaddr'] ?>js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
