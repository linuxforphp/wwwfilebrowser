<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?=$view['description'] ?>">
    <meta name="author" content="<?=$view['author'] ?>">
    <link rel="icon" href="<?=$view['favicon'] ?>">

    <link rel="apple-touch-icon" href="<?=$view['urlbaseaddr'] ?>apple-touch-icon.png">

    <title><?=$view['title'] ?></title>

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>plugins/bootstrap/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>plugins/themify-icons/themify-icons.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" media="screen" href="<?=$view['urlbaseaddr'] ?>plugins/owl-carousel/assets/owl.carousel.min.css">
    <!-- Owl Carousel Theme -->
    <link rel="stylesheet" media="screen" href="<?=$view['urlbaseaddr'] ?>plugins/owl-carousel/assets/owl.theme.green.min.css">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>plugins/fancybox/jquery.fancybox.min.css">
    <!-- AOS -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>plugins/aos/aos.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>css/style.css">

    <!-- Core CSS -->
    <?php foreach($view['css'] as $key => $value): ?>
        <link href="<?=$value ?>" rel="stylesheet">
    <?php endforeach; ?>

    <?php foreach($view['jshead'] as $key => $value): ?>
        <script src="<?php echo $value ?>"></script>
    <?php endforeach; ?>

    <?php foreach($view['jsscriptshead'] as $key => $value): ?>
        <?php echo $value ?>
    <?php endforeach; ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=$view['urlbaseaddr'] ?>js/html5shiv.min.js"></script>
      <script src="<?=$view['urlbaseaddr'] ?>js/respond.min.js"></script>
    <![endif]-->
</head>
