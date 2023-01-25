<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>


    <!-- Favicon -->
    <!-- <link rel="icon" href="<?= base_url('wedding-2/'); ?>images/favicon.ico" type="image/x-icon"> -->

    <!-- Library CSS -->
    <link href="<?= base_url('wedding-2/'); ?>css/glanz_library.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="<?= base_url('wedding-2/'); ?>fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?= base_url('wedding-2/'); ?>css/glanz_style.css" rel="stylesheet">


    <!-- font awesome -->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700%7COpen+Sans:300,400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">

    <!-- Other Fonts -->
    <link href="<?= base_url('wedding-2/'); ?>fonts/marsha/stylesheet.css" rel="stylesheet">

    <!-- Autoplay music in chrome -->
    <script>
        document.addEventListener('click', musicPlay);

        function musicPlay() {
            document.getElementById('ID').play();
            document.removeEventListener('click', musicPlay);
        }
    </script>

</head>


<!-- Body -->

<body class="gla_middle_titles">


    <!-- Page -->
    <div class="gla_page" id="gla_page">



        <!-- To Top -->
        <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>


        <!-- Music -->
        <div class="gla_music_icon">
            <i class="ti ti-music"></i>
        </div>
        <div class="gla_music_icon_cont">
            <?php foreach ($music as $mc) : ?>
                <iframe id="musicPlay" allow="autoplay" allow="loop" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?= $mc['id_music']; ?>&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true?autoplay=1&loop=1"></iframe>
            <?php endforeach; ?>
        </div>

        <!-- Header -->
        <header>