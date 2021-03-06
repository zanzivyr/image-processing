<?php 
    include('./edge-2.1.class.php');

    $src = '../media/testsquare3.jpg';
    $amp = 5; // display magnification

    $edges = new EdgeDetector($src, false);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta lang="en" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>Edge Detector v2.1</title>
        
        <link href="../styles.css" type="text/css" rel="stylesheet" />
        <style type="text/css">
            .row { height:<?php echo $amp; ?>px; }
            .pixel {
                width:<?php echo $amp; ?>px;
                height:<?php echo $amp; ?>px;
            }
        </style>
    </head>
    <body>
        <h1>Edge Detector version 2.1</h1>
        <p>Need to allow for adjustable filtering. When using qrcode_test.jpg, found that the gaussian blur blows out the edges and screws up edge detection.</p>
        <hr />
        <div id="content">
            <h2>original image</h2><p>
            <img class="origin" src="<?php echo $src; ?>" /></p>
            <?php echo $edges->display(); ?>
            <br /><br />
        </div>
        <div id="coords" class="coords">{_, _}</div>
        
        <script src="../main.js" type="module"></script>
    </body>
</html>