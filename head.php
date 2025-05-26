<!doctype html>
<html lang="en">

<head>
   <link rel="stylesheet" href="<?= PROOT; ?>assets/swiper/swiper-bundle.min.css" />
   <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon icon-->
    <link rel="shortcut icon" href="<?= PROOT; ?>assets/media/logo.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <!-- Color modes -->
    <script src="<?= PROOT; ?>assets/js/color-modes.js"></script>

    <!-- Libs CSS -->
    <link href="<?= PROOT; ?>assets/css/simplebar.min.css" rel="stylesheet" />
    <link href="<?= PROOT; ?>assets/css/bootstrap-icons.min.css" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/scrollCue.css" />

    <!-- Box icons -->
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/boxicons.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/theme.min.css">
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/xpto.css">

        
    <title>BitShell</title>
    <style>
        *, body {
            font-family: "Cutive Mono", monospace;
            font-weight: 400;
            font-style: normal;  
        }
    </style>
</head>

<body>
    
    <div class="nav-scroller bg-bod shadow-sm">
        <nav class="nav nav-sm justify-content-between bg-soft-warning">
            <div class="js-swiper-equal-height swiper swiper-equal-height">
                <div class="swiper-wrapper">
                    <?php 
                        // if (is_array($coin_data)) {
                        //     if (isset($coin_data['data'])) {
                        //         foreach (array_slice($coin_data['data'], 0, 10) as $crypto) {
                        //             $icon = "https://s2.coinmarketcap.com/static/img/coins/64x64/{$crypto['id']}.png";
                        //             echo '

                        //                 <div class="swiper-slide">
                        //                     <div class="swiper-slide">
                        //                         <a class="nav-link" href="javascript:;">
                        //                             <img src="' . $icon . '" alt="' . $crypto['name'] .'" class="img-fluid w-rem-6 h-rem-6">
                        //                             ' . $crypto['name'] . ' (' . $crypto['symbol'] . ') : $' . number_format($crypto['quote']['USD']['price'], 2) . '
                        //                         </a>
                        //                     </div>
                        //                 </div>
                                        
                        //             ';
                        //         }
                        //     }
                        // }
                    ?>
                </div>
            </div>
        </nav>
    </div>
