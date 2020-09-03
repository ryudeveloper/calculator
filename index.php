<html lang="en">

<head>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/QVh-Tz10ahidjrORgXOS1oB0/recaptcha__en.js"></script>
    <script src="/cdn-cgi/apps/head/SNxJQ1y2HVV_KT_YkvhgSKN8dro.js"></script>
    <link rel="stylesheet" href="css/odometer.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/boxydesigns.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/side.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
    <link rel="icon" href="https://pngimage.net/wp-content/uploads/2018/06/white-ball-png-4.png" type="image/png"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <meta charset="utf-8">
    <title>N A K E D . C L U B</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="mediapartners" content="index, follow">
    <meta http-equiv="content-language" content="en-us">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <meta name="description" content="N A K E D . C L U B | Offering CS:GO Flavored Drinks - Dominate the enemy. Sip Fanta. Get Gooder'">
</head>

<body style="background-color:#1B1B1D; color: #bdc3c7; font-family: 'Inconsolata', monospace; overflow:hidden;" class="  pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div id="pg"><canvas class="pg-canvas" width="2005" height="937" style="display: block;"></canvas></div>
    <div class="center">
        <div class="row" name="cards" id="cards" style="width:60%;">
            <div class="col-8 alert alert-warning animated fadeInUp" name="results" id="results" style="box-shadow: 0px 0px 45px 4px rgba(0,0,0,0.27); width:100%; display:none;"> Waiting for response... </div>
            <div class="loader col-8" id="load" style="width:100%;background-color: #1B1B1D; display:none;"></div>
        </div>
        <div class="row animated fadeIn" id="content2" name="content2" style="z-index:1;width:60%;background-color:#1B1B1D;">
            <div class="login col-8" style="z-index:10;width:100%; box-shadow: 0px 0px 45px 4px rgba(0,0,0,0.27);">
                <center>
                    <br><br>
                    <font color="#FACC91">
                        <h3>
                            <div class="animated bounceIn"> N A K E D' </div>
                        </h3>
                        <font size="2">
                            <p class="animated pulse" id="date">Wednesday, September 2nd, 2020</p>
                            <p id="time">12:58:25 PM</p>
                        </font>
                    </font>
                    <div class="content" style="width:100%;">
                        <font color="#FACC91">
                            <font size="2">
                                <a href="https://discord.gg/KtMskEK" style="color: black; background-color:#FACC91; padding:3px;"><b>Become a Naker' <i class="fas fa-users"></i></b></a> <a href="https://discord.gg/KtMskEK" style="color: black; background-color:#FACC91; padding:3px;"><b>Discord: <i class="fab fa-discord"></i></b></a> <a href="#" style="color: black; background-color:#FACC91; padding:3px;"><b>$name = ['ryudev'];#0007 <i class="fas fa-shield-alt"></i></b></a></font>
                        </font><br><br>
                    </div><br>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post">
                            <div class="form-group" id="boxes">
                                <input type="num1" class="form-control btn-warning" id="username" placeholder="Primeiro Numero:" name="num1" style="background-color: #1B1B1D; color: #bdc3c7; width:85%; border: none; text-align: center;" required="">
                                <br><br>
                                <input type="num2" class="form-control btn-warning input-md" id="num2" placeholder="Segundo Numero:" name="num2" style="background-color: #1B1B1D; color: #bdc3c7; width:85%; border: none; text-align: center;" required="">
                                <br><br>
                                <?php

                                $a = $_POST['num1'];
                                $b = $_POST['num2'];
                                $op = $_POST['operacao'];

                                if (!empty($op)) {
                                    if ($op == '+')
                                        $c = $a + $b;
                                    else if ($op == '-')
                                        $c = $a - $b;
                                    else if ($op == '*')
                                        $c = $a * $b;
                                    else
                                        $c = $a / $b;

                                    echo "O resultado da operação é: $c";
                                }
                                ?>
                                <br><br>
                                <input type="submit" name="operacao" value="+">
                                <input type="submit" name="operacao" value="-">
                                <input type="submit" name="operacao" value="*">
                                <input type="submit" name="operacao" value="/">
                                <br>
                                <br>
                                <button type="submit" class="btn btn-fanta2020" name="operacao" id="operacao" style="width:100%; height:70px;"><b>Calcular <i class="fas fa-sign-in-alt"></i></b></button><br>
                                <br><br>
                            </div>
                        </form>
                    </div>
                </center>
            </div><br><br>
        </div>
    </div><br>

    <footer>

        <script src="js/jquery.js">
        </script>
        <script src="js/moment.js">
        </script>
        <script src="js/pace.min.js">
        </script>
        <script src="js/partis.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        <script src="js/wow.js">
        </script>
        <script src="js/boxy.js">
        </script>
        <script src="https://www.google.com/recaptcha/api.js">
        </script>
        <script src="js/submit.js">
        </script>
        <script>
            $('#form').on('submit', function(e) {
                e.preventDefault(); // prevent native submit
                $('#enter').html('<b>Logging you in... <i class="fas fa-spinner fa-spin"></i></b>');
                $('#enter').addClass('active');
                $('#enter').prop('disabled', true);
                $('#load').fadeIn();
                $('.content').fadeOut();
                $(this).ajaxSubmit({
                    target: '#results',
                    success: function(data) {
                        $('#enter').html('Sign In');
                        $('#enter').removeClass('active');
                        $('#enter').prop('disabled', false);
                        $('.content').fadeIn();
                        $('#results').fadeIn();
                        $('#load').fadeOut();
                    }
                })
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#pg').particleground({
                    dotColor: '#bdc3c7',
                    lineColor: '#bdc3c7',
                    directionY: 'up',
                    density: "40000"
                });
                $('#cards').delay(1000).show(750);
            });
        </script>
        <script>
            new WOW().init();
        </script>
        <script>
            $(document).ready(function() {
                var interval = setInterval(function() {
                    var momentNow = moment();
                    $('#date').html(momentNow.format('dddd, MMMM Do, YYYY'));
                    $('#time').html(momentNow.format('LTS'));
                }, 1000);
            });
        </script>
    </footer>

</body>

</html>
