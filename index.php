<?php
require_once __DIR__ . "/config/config.php";
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <!-- Please respect the amount of work we've put for free into this project and leave the authors in the header and footer. Thank you. -->

    <meta name="author" content="toster234">

    <title>This site is coming soon!</title>

    <!-- CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="alert alert-success" role="alert" style="margin-Top: 200px">
            <h4 class="alert-heading"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php echo $config["general"]["text1"]; ?></h4>
            <hr />
            <p class="mb-0"><?php echo $config["general"]["text2"]; ?></p>
        </div>
<?php if(!empty($config['contact']['items'])) { ?>
	<hr />
    <div class="alert alert-info" role="alert">       
                    <h4 class="alert-heading"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $config['contact']['title']; ?></h4>
		    <hr />
                        <ul class="list-unstyled">
                            <?php foreach ($config['contact']['items'] as $item) {
                                $name = $item[0];
                                $linkdesc = $item[1];
                                $link = $item[2];
                                echo '<li>' . $name . ' <span class="pull-right"><a href="' . $link . '">' . $linkdesc . '</a></span></li>';
                            } ?>
                        </ul>
                <?php } ?>
    </div>


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <hr>
            <p class="pull-left" id="website-copyright">&copy; <?php echo $config["general"]["title"]; ?></p>
            <div class="pull-right">
                <ul class="list-inline">
                    <li>
                        <p>
                            <a href="https://github.com/toster234/soon-website">soon-website</a> v 1.1.0 &mdash; &copy; <a href="https://steamcommunity.com/id/toster234">toster234</a> 2017
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
