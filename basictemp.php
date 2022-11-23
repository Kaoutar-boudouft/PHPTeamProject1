<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= "Partie " . ($_GET['partie'] ?? 1) . " Exercice " . ($_GET['ex'] ?? 1) . " | " . ($_GET['type'] ?? 'enonce') ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: "Montserrat", sans-serif;
            overflow-x: hidden;
            font-size: 18px;
            font-weight: 500;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .navbar {
            width: 100%;
            height: 60px;
            display: flex;
            padding: 20px 120px;
            justify-content: space-between;
            align-items: center;
            background-color: #116EFA;
            color: white;
            position: fixed;
            top: 0;
            z-index: 1;
        }

        .navbar .burger {
            display: none;
        }

        .navbar .logo {
            margin-top: -20px;
            font-size: 24px;
            font-weight: 800;
            transition: all 200ms ease-in-out;
        }

        .navbar .logo:hover {
            /* color: #303641; */
        }

        .navbar .navLinks {
            width: 380px;
        }


        .navbar .navLinks ul {
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }

        .navbar .navLinks .navLink {
            transition: all 200ms;
        }

        .navbar .navLinks .navLink:hover {
            color: #303641;
        }

        .section {
            width: 100%;
            height: 100vh;
            padding: 10vh 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 48px !important;
            font-weight: 800;
        }

        #home {
            background-color: #cbf6ff;
        }

        #about {
            background-color: #e5daff;
        }

        #services {
            background-color: #ffdada;
        }

        #contact {
            background-color: #c8ffe1;
        }

        @media screen and (max-width: 768px) {
            .navbar .navLinks {
                position: absolute;
                top: 60px;
                right: 0;
                background-color: #EDEEF0;
                width: 50%;
                height: 90vh;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: all 200ms;
                color: #116EFA;
                transform: translatex(100%);
            }

            .navbar .navLinks ul {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
                height: 40vh;
            }

            .navbar.open .navLinks {
                transform: translatex(0%);
            }

            .navbar .burger {
                display: block;
                cursor: pointer;
                font-size: 22px;
            }

            .navbar .burger:hover {
                color: #116EFA;
            }
        }

        .left-profile-card .user-profile {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: auto;
            margin-bottom: 20px;
        }

        .left-profile-card h3 {
            font-size: 18px;
            margin-bottom: 0;
            font-weight: 700;
        }

        .left-profile-card p {
            margin-bottom: 5px;
        }

        .left-profile-card .progress-bar {
            /* background-color: var(--main-color);*/
        }

        .personal-info {
            margin-bottom: 30px;
        }

        .personal-info .personal-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .personal-list li {
            margin-bottom: 5px;
        }

        .personal-info h3 {
            margin-bottom: 10px;
        }

        .personal-info p {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .personal-info i {
            font-size: 15px;
            /* color: var(--main-color);*/
            ;
            margin-right: 15px;
            width: 18px;
        }

        .skill {
            margin-bottom: 30px;
        }

        .skill h3 {
            margin-bottom: 15px;
        }

        .skill p {
            margin-bottom: 5px;
        }

        .languages h3 {
            margin-bottom: 15px;
        }

        .languages p {
            margin-bottom: 5px;
        }

        .right-profile-card .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            /*background-color: var(--main-color);*/
        }

        .right-profile-card .nav>li {
            float: left;
            margin-right: 10px;
        }

        .right-profile-card .nav-pills .nav-link {
            border-radius: 26px;
        }

        .right-profile-card h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .right-profile-card h4 {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .right-profile-card i {
            font-size: 15px;
            margin-right: 10px;
        }

        .right-profile-card .work-container {
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
            padding: 10px;
        }


        /*timeline*/

        .img-circle {
            border-radius: 50%;
        }

        .timeline-centered {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-centered:before,
        .timeline-centered:after {
            content: " ";
            display: table;
        }

        .timeline-centered:after {
            clear: both;
        }

        .timeline-centered:before,
        .timeline-centered:after {
            content: " ";
            display: table;
        }

        .timeline-centered:after {
            clear: both;
        }

        .timeline-centered:before {
            content: '';
            position: absolute;
            display: block;
            width: 4px;
            background: #f5f5f6;
            /*left: 50%;*/
            top: 20px;
            bottom: 20px;
            margin-left: 30px;
        }

        .timeline-centered .timeline-entry {
            position: relative;
            /*width: 50%;
          float: right;*/
            margin-top: 5px;
            margin-left: 30px;
            margin-bottom: 10px;
            clear: both;
        }

        .timeline-centered .timeline-entry:before,
        .timeline-centered .timeline-entry:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry:after {
            clear: both;
        }

        .timeline-centered .timeline-entry:before,
        .timeline-centered .timeline-entry:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry:after {
            clear: both;
        }

        .timeline-centered .timeline-entry.begin {
            margin-bottom: 0;
        }

        .timeline-centered .timeline-entry.left-aligned {
            float: left;
        }

        .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
            margin-left: 0;
            margin-right: -18px;
        }

        .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
            left: auto;
            right: -100px;
            text-align: left;
        }

        .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
            float: right;
        }

        .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
            margin-left: 0;
            margin-right: 70px;
        }

        .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
            left: auto;
            right: 0;
            margin-left: 0;
            margin-right: -9px;
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .timeline-centered .timeline-entry .timeline-entry-inner {
            position: relative;
            margin-left: -20px;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner:before,
        .timeline-centered .timeline-entry .timeline-entry-inner:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner:after {
            clear: both;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner:before,
        .timeline-centered .timeline-entry .timeline-entry-inner:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner:after {
            clear: both;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
            position: absolute;
            left: -100px;
            text-align: right;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span {
            display: block;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span:first-child {
            font-size: 15px;
            font-weight: bold;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span:last-child {
            font-size: 12px;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
            background: #fff;
            color: #737881;
            display: block;
            width: 40px;
            height: 40px;
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding;
            background-clip: padding-box;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            text-align: center;
            -moz-box-shadow: 0 0 0 5px #f5f5f6;
            -webkit-box-shadow: 0 0 0 5px #f5f5f6;
            box-shadow: 0 0 0 5px #f5f5f6;
            line-height: 40px;
            font-size: 15px;
            float: left;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
            background-color: #303641;
            color: #fff;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-secondary {
            background-color: #ee4749;
            color: #fff;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
            background-color: #00a651;
            color: #fff;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
            background-color: #21a9e1;
            color: #fff;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
            background-color: #fad839;
            color: #fff;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
            background-color: #cc2424;
            color: #fff;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
            position: relative;
            background: #f5f5f6;
            padding: 1em;
            margin-left: 60px;
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding;
            background-clip: padding-box;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
            content: '';
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 9px 9px 9px 0;
            border-color: transparent #f5f5f6 transparent transparent;
            left: 0;
            top: 10px;
            margin-left: -9px;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2,
        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
            color: #737881;
            font-size: 12px;
            margin: 0;
            line-height: 1.428571429;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p+p {
            margin-top: 15px;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 a {
            color: #303641;
        }

        .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
            -webkit-opacity: .6;
            -moz-opacity: .6;
            opacity: .6;
            -ms-filter: alpha(opacity=60);
            filter: alpha(opacity=60);
        }

        .bs-example {
            margin: 30px;
        }

        .panel-body {
            max-height: 80vh;
            overflow: auto;
        }

        .bs-example ol {
            counter-reset: item;
            padding-left: 0;
        }

        .bs-example li {
            display: block
        }

        .bs-example li:before {
            width: 1%;
            min-width: 50px;
            padding-right: 10px;
            margin-right: 10px;
            text-align: right;
            white-space: nowrap;
            color: rgba(0, 0, 0, 0.3);
            content: counter(item);
            counter-increment: item;
            cursor: pointer;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            user-select: none;
            display: inline-block;
            border: solid #eee;
            border-width: 0 4px 0 0;
        }

        .left-profile-card svg {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <a href="#home">LOGO</a>
        </div>
        <div class="navLinks">
            <ul>
                <a title="La base" href="basictemp.php?nbr=2&&partie=1&&ex=1" class="navLink active">
                    <li>
                        Partie 1
                    </li>
                </a>
                <a title="Les fonctions" href="basictemp.php?nbr=6&&partie=2&&ex=1" class="navLink">
                    <li>
                        Partie 2
                    </li>
                </a>
                <a title="Les fichiers" href="basictemp.php?nbr=14&&partie=3&&ex=1" class="navLink">
                    <li>
                        Partie 3
                    </li>
                </a>
                <a title="La base de données" href="basictemp.php?nbr=20" class="navLink">
                    <li>
                        Partie 4
                    </li>
                </a>
            </ul>
        </div>
        <div class="burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
    </div>
    <div class="container mt-5" style="padding-top: 50px">
        <div class="row">
            <div class="col-lg-3 ">
                <div class="card left-profile-card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <nav class="nav flex-column nav-pills nav-gap-y-1">
                                        <?php
                                        // $nbr = $_GET["nbr"] ?? '';

                                        $nbr = $_GET["nbr"] ?? 2;
                                        $partie = $_GET["partie"] ?? 1;
                                        $ex = $_GET["ex"] ?? 1;

                                        for ($i = 1; $i <= $nbr; $i++) {

                                            echo ('<a href="basictemp.php?nbr=' . $nbr . '&&partie=' . $partie . '&&ex=' . $i . '" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded ' . ($i == $ex ? "active" : "") . ' ">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                          </svg> 
                          Exercice ' . $i . ' </a>');
                                        }
                                        ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card right-profile-card">
                    <div class="card-header alert-primary">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <?php
                            $nbr = $_GET["nbr"] ?? 2;
                            $partie = $_GET["partie"] ?? 1;
                            $ex = $_GET["ex"] ?? 1;
                            $type = $_GET['type'] ?? "enonce";
                            $array = array("enonce" => "Enoncé", "demo" => "Demo", "codesource" => "Code Source");
                            foreach ($array as $key => $value) {
                                echo ('<li class="nav-item">');
                                echo ('<a class="nav-link ' . ($type == $key ? "active" : "") . '" id="pills-home-tab" data-toggle="pill" href="basictemp.php?nbr=' . $nbr . '&&type=' . $key . '&&partie=' . $partie . '&&ex=' . $ex . '" role="tab" aria-selected="true">' . $value . '</a>');
                                echo ' </li>';
                            }
                            ?>


                        </ul>
                    </div>
                    <div class="card-body">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="bs-example">
                                <div class="panel panel-default">

                                    <div class="panel-body">
                                        <?php
                                        $type = $_GET["type"] ?? 'enonce';
                                        $partie = $_GET["partie"] ?? 1;
                                        $ex = $_GET["ex"] ?? 1;
                                        echo "<iframe src='Parties\Partie" . $partie . "\Exercice" . $ex . "\\" . $type . ".php' width='100%' height='350px'></iframe>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script>
        const burger = document.querySelector(".burger");
        const navbar = document.querySelector(".navbar");

        burger.addEventListener("click", () => {
            navbar.classList.toggle("open");
            console.log("click");
        });

        document.addEventListener("mouseup", (e) => {
            if (!navbar.contains(e.target) && navbar.classList.contains("open")) {
                navbar.classList.toggle("open");
            }
        });
    </script>
</body>

</html>