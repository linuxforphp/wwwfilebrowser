<!DOCTYPE html>
<html lang="en">

<?php if (isset($view['headjs'])): ?>
    <?=$this->section('headjs', $this->fetch('headjs', ['view' => $view]))?>
<?php else: ?>
    <?=$this->section('head', $this->fetch('head', ['view' => $view]))?>
<?php endif ?>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
<?=$this->section('navbar', $this->fetch('navbar', ['view' => $view]))?>

<!-- content -->
<main role="main">
    <div class="container">
        <div class="h1 mt-5 mb-5 text-blue-dark"><b>Releases</b></div>
        <div class="table-responsive pt-5 pb-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>Version</th>
                    <th>Date</th>
                    <th>ZIP</th>
                    <th>GUNZIP</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-blue-dark">8.0.2</td>
                    <td>2021-08-02</td>
                    <td><a href="<?=$view['urlbaseaddr'] ?>files/filebrowser-8.0.2.zip" target="_blank">Download</a></td>
                    <td><a href="<?=$view['urlbaseaddr'] ?>files/filebrowser-8.0.2.tar.gz" target="_blank">Download</a></td>
                </tr>
                <tr>
                    <td class="text-blue-dark">8.0.1</td>
                    <td>2021-07-30</td>
                    <td><a href="<?=$view['urlbaseaddr'] ?>files/filebrowser-8.0.1.zip" target="_blank">Download</a></td>
                    <td><a href="<?=$view['urlbaseaddr'] ?>files/filebrowser-8.0.1.tar.gz" target="_blank">Download</a></td>
                </tr>
                <tr>
                    <td class="text-blue-dark">8.0.0</td>
                    <td>2021-07-19</td>
                    <td><a href="<?=$view['urlbaseaddr'] ?>files/filebrowser-8.0.0.zip" target="_blank">Download</a></td>
                    <td><a href="<?=$view['urlbaseaddr'] ?>files/filebrowser-8.0.0.tar.gz" target="_blank">Download</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- /content -->

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
