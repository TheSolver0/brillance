<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Talents Holidays 2024</title>
    <meta name="description" content="BIENVENUE À  Talents Holidays 2024">
    <meta name="keywords" content="escrutin, votes,miss,master,concours,beaute, mister, Franck giresse IMAM, Cameroun">
    <meta property="og:image" content="assets/template_home/images/logo_og.png">
    <meta property="og:title" content=" Talents Holidays 2024">
    <meta name="author" content="Franck Giresse IMAM">

    <link rel="shortcut icon" href=" assets/template_home/images/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href=" assets/template_home/images/api120.png">
    <link rel="apple-touch-icon" sizes="152x152" href=" assets/template_home/images/api152.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,400,600|Open+Sans:300,400,700">
    <link href=" assets/css/bootstrap-escrutin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/template_home/css/template_vert.css" media="all">
    <link rel="stylesheet" href=" assets/template_home/css/radio.css" media="all">
    <link href=" assets/css/style_vert.css" rel="stylesheet">
    <link href=" assets/css/launch_modal.css" rel="stylesheet">
    <link href=" assets/css/home_slide.css" rel="stylesheet">
    <link href=" assets/css/partners.css" rel="stylesheet">
    <link href=" assets/flip/flipclock.css" rel="stylesheet">


    <!-- AniCollection.css library -->
    {{-- <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css"> --}}

    <link href=" assets/slider/css/style.css" rel="stylesheet">

    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&amp;display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href= assets/template_home/css/styles.css media="all"/>
    <script src=" assets/template_home/js/html5shiv.js"></script>
    <script src=assets/template_home/js/respond.min.js></script>
    <![endif]-->

    <style>
        .handpolice {
            font-family: 'Tangerine', cursive !important;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .bloc-img {
            display: flex !important;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;

        }

        .icon-tpva {
            text-align: center;
            margin-top: -6.5rem !important;
        }

        .footer_img {
            width: 250px;
            margin-top: -5rem;
        }

        .blocEtat {
            display: flex !important;
            flex-direction: row;
            justify-content: center;
        }

        .etatDon {
            margin-top: -30px !important;
        }

        .navbar .navbar-brand img {
            display: none;
            max-height: 50px;
            overflow-clip-margin: content-box;
            overflow: clip;
        }
    </style>

    <!-- <body class="page-home" onload="load_actions();" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style=""> -->

<body>

    <!-- navbar -->
    <div class="navbar ontop-now" id="">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href=" ">
                    <img src=" assets/img/Brillance camerounA2.png" alt="Logo" class="img-fluid">
                    <img src="assets/img/Brillance camerounA2.png" alt="Logo" class="secondary img-fluid">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href=" "><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Accueil</a>
                    </li>
                    <li><a href=" page/reglement.aspx"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp;Règlement</a>
                    </li>
                    <li class="hidde"><a href=" page/infos_vote.aspx"><i class="fa fa-question-circle"
                                aria-hidden="true"></i>&nbsp;Comment voter ?</a></li>

                </ul>
                <input type="hidden" value=" " id="base_url">
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- end of navbar -->

    <!-- header -->
    <header class="head head-soft">
        <div class="container text-center">

            <div class="info">
                <h1 class="lead handpolice">
                    <b> Talents Holidays 2024</b>
                    <span><i class="fa fa-quote-left"></i>&nbsp;Savoir se démarquer c'est aussi un talent!&nbsp;<i
                            class="fa fa-quote-right"></i></span>
                </h1>
                <p class="intro">
                </p>
                <h3 class="lead2 handpolice2 hiddn-xs hiddn">MEILLEURS VOTES</h3>
                <div class="slide hi-slide hidden-xs hiddn">
                    <div class="hi-prev "></div>
                    <div class="hi-next "></div>
                    <ul>
                        @for($i = $candidats->count() ; $i < 8 ; $i++)

                        @foreach ($candidats as $candidat)
                            <li style="z-index: 1; width: 120px; height: 150px; top: 69px; left: 500px;">
                                <a
                                class="profile-img" href="{{'https://wa.me/237686231985/?text=Vote%20Candidat%20'.$candidat->id}}" target="_blank">
                                <img src="{{asset("$candidat->path")}}" alt="N°8" style="opacity: 0.2;">
                                <small>{{$candidat->name}}<br> CATEGORIE {{$candidat->categorie}} | <b> {{$candidat->vote}} VOTES</b></small>
                                </a>
                            </li>

                        @endforeach
                        @endfor

                    </ul>
                </div>
                <br>



                <div class="form-inline" role="form">
                    <button  class="ebtn btn-sm" id="affichechoix">
                        <span class="btn-content" style="font-weight: 700;">Voter maintenant</span>
                        <span class="icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                    </button> <br> <br>
                    <div id="choixcategorie" style="display: none;">
                        <button  class="ebtn btn-sm" id="afficheCandidatsmiss">
                            <span class="btn-content" style="font-weight: 700;">Miss</span>
                            <span class="icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                        </button>
                        <button  class="ebtn btn-sm" id="afficheCandidatsmaster">
                            <span class="btn-content" style="font-weight: 700;">Master</span>
                            <span class="icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                        </button>
                    </div>

                </div>
            </div>

            <section class="section section-pricing hidde2 js-scroll-counter scroll-counter" id="candidatsmiss" style="display: none;">
                <div id="lgx-speakers" class="lgx-speakers lgx-speakers42 aos-all">
                    <div class="lgx-inner2">
                        <div class="container" id="zone_result_ajax">
                            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                                @foreach ($candidatsmiss as $index => $candidat)

                                    <div class="col-xs-12 col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-up"
                                    data-aos-duration="3000">
                                    <div class="lgx-single-speaker2 lgx-single-speaker3">
                                        <a class="profile-img"
                                            href=""
                                            target="_blank">
                                        </a>
                                        <figure>
                                            <a class="profile-img"
                                                href="https://www.academic.missante.cm/candidate?appkey=1.aspx"
                                                target="_blank">
                                                <img src="{{asset("$candidat->path")}}"
                                                    alt="CDT" style="max-height:860px;">
                                            </a>
                                            <figcaption>
                                                <a class="profile-img"
                                                    target="_blank">
                                                </a>
                                                <div class="social-group"><a class="profile-img"
                                                        target="_blank">
                                                    </a><a class="sp-tw" href="#"><i
                                                            class="fa fa-twitter"></i></a>
                                                    <a class="sp-fb" href="#"><i
                                                            class="fa fa-facebook"></i></a>
                                                    <a class="sp-insta" href="#"><i
                                                            class="fa fa-instagram"></i></a>
                                                    <a class="sp-in" href="#"><i
                                                            class="fa fa-linkedin"></i></a>
                                                </div>
                                                <div class="speaker-info">
                                                    <table class="table table-stripped tabDashbord">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="3" class="user"><i
                                                                        class="fa fa-user"></i>&nbsp;{{$candidat->name}}</td>
                                                            </tr>
                                                            <tr class="lib">
                                                                {{-- <td><i class="fa fa-tags"></i>&nbsp;1</td> --}}
                                                                <td><i class="fa fa-heart"></i>&nbsp;{{$candidat->votes}} Votes</td>
                                                                <td><i
                                                                        class="fa fa-sort-numeric-asc"></i>&nbsp;{{$index+1}}<small><sup>ère</sup></small>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <a id="btn-voter1" class="lgx-btn lgx-btn-red"
                                                        href="https://wa.me/237691223089?text=Bonjour%20Brillance%20je%20viens%20pour%20voter%20pour%20le%20candidat%20{{$candidat->name}}%20d'identifiant%20{{$candidat->id}}"
                                                        {{-- href="route('candidat.vote')" --}}
                                                        style="color:#fff;margin-top:3px;margin-bottom:3px;"
                                                        >
                                                        <i class="fa fa-heart"></i>&nbsp;Voter
                                                    </a>
                                                </div>
                                            </figcaption>
                                        </figure>

                                    </div>
                                </div>


                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="section section-pricing hidde2 js-scroll-counter scroll-counter" id="candidatsmaster" style="display: none;">
                <div id="lgx-speakers" class="lgx-speakers lgx-speakers42 aos-all">
                    <div class="lgx-inner2">
                        <div class="container" id="zone_result_ajax">
                            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                                @foreach ($candidatsmaster as $index => $candidat)

                                    <div class="col-xs-12 col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-up"
                                    data-aos-duration="3000">
                                    <div class="lgx-single-speaker2 lgx-single-speaker3">
                                        <a class="profile-img"
                                            href=""
                                            target="_blank">
                                        </a>
                                        <figure>
                                            <a class="profile-img"
                                                href="https://www.academic.missante.cm/candidate?appkey=1.aspx"
                                                target="_blank">
                                                <img src="{{asset("$candidat->path")}}"
                                                    alt="CDT" style="max-height:860px;">
                                            </a>
                                            <figcaption>
                                                <a class="profile-img"
                                                    href="https://www.academic.missante.cm/candidate?appkey=1.aspx"
                                                    target="_blank">
                                                </a>
                                                <div class="social-group"><a class="profile-img"
                                                        href="https://www.academic.missante.cm/candidate?appkey=1.aspx"
                                                        target="_blank">
                                                    </a><a class="sp-tw" href="#"><i
                                                            class="fa fa-twitter"></i></a>
                                                    <a class="sp-fb" href="#"><i
                                                            class="fa fa-facebook"></i></a>
                                                    <a class="sp-insta" href="#"><i
                                                            class="fa fa-instagram"></i></a>
                                                    <a class="sp-in" href="#"><i
                                                            class="fa fa-linkedin"></i></a>
                                                </div>
                                                <div class="speaker-info">
                                                    <table class="table table-stripped tabDashbord">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="3" class="user"><i
                                                                        class="fa fa-user"></i>&nbsp;{{$candidat->name}}</td>
                                                            </tr>
                                                            <tr class="lib">
                                                                {{-- <td><i class="fa fa-tags"></i>&nbsp;1</td> --}}
                                                                <td><i class="fa fa-heart"></i>&nbsp;{{$candidat->votes}} Votes</td>
                                                                <td><i
                                                                        class="fa fa-sort-numeric-asc"></i>&nbsp;{{$index+1}}<small><sup>ère</sup></small>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <a id="btn-voter1" class="lgx-btn lgx-btn-red"
                                                        href="https://wa.me/237691223089?text=Bonjour%20Brillance%20je%20viens%20pour%20voter%20pour%20le%20candidat%20{{$candidat->name}}%20d'identifiant%20{{$candidat->id}}"
                                                        {{-- href="route('candidat.vote')" --}}
                                                        style="color:#fff;margin-top:3px;margin-bottom:3px;"
                                                        >
                                                        <i class="fa fa-heart"></i>&nbsp;Voter
                                                    </a>
                                                </div>
                                            </figcaption>
                                        </figure>

                                    </div>
                                </div>


                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </header>


    <style>
        .bloc-img {
            display: flex !important;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;

        }

        .icon-tpva {
            text-align: center;
            margin-top: -6.5rem !important;
        }

        .footer_img {
            width: 250px;
            margin-top: -5rem;
        }

        .premium {
            position: relative;
            clear: right;
            width: 55px;
            height: 55px;
        }
    </style>
    <footer id="footer" class="clearfix">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 widget bloc-img">
                        <img class="footer_img" src=" assets/img/Brillance camerounA2.png" alt="LOGO_FOOTER">
                        <ul class="social-icons icon-tpva">
                            <li><a target="_blank" href="#"> <i class="fa fa-twitter fa-2"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-instagram fa-2"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-facebook fa-2"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 widget">
                        <h3 class="widget-title">Contacts</h3>
                        <div class="widget-body">
                            <p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;
                                Informations générales: (+237) 655 93 41 45<br>
                                <i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;
                                Assistance votes: +237 697 00 82 83<br>
                                <a href="mailto:#">support@escrutin.net</a><br>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-2 widget">
                        <div class="widget-body">
                            <p>Plateforme Créee par Digital Pulse Agency</p>
                            <img src=" assets/img/logodpa.svg" alt="DPA">
                        </div>
                    </div>
                </div> <!-- /row of widgets -->
            </div>

        </div>


        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 widget2">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href=" ">Accueil</a> |
                                <a href=" page/reglement.aspx">Règlement</a> |
                                <a href=" page/infos_vote.aspx">Comment voter ?</a>

                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget2">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright © 2024 By <b>Digital Pulse Agency</b>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

    </footer>
    <button onclick="topFunction();" id="myBtnTop" title="Go to top"><i class="fa fa-angle-double-up"
            aria-hidden="true"></i>
        <br>Top</button>
    <!-- FENETRES MODALES-->
    <!-- FENETRES CHARGEMENT-->
    <div id="load_modal" class="modal fade bs-example-modal-sm" data-backdrop="static">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src=" assets/img/loader.gif" class="img-responsive" id="loader_img">
                    <h6 class="modal-title" id="loader_title"></h6>
                </div>
                <div class="modal-footer" style="margin:auto;text-align:center;">
                    <img src=" assets/img/escrutin-footer.png" class="img-responsive" id="loader_signature">
                </div>
            </div>
        </div>
    </div>
    <!-- FENETRES CHARGEMENT END-->

    <!-- FENETRES INFORMATIONS-->
    <div id="myModal_detail" data-backdrop="static" class="modal fade bs-example-modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Informations détaillées de la candidate</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5" id="img_cdt_detail"></div>
                        <div class="col-sm-7" id="infos"></div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- FENETRES INFORMATIONS END-->

    <!-- FENETRES CONNEXION-->

    <!-- FENETRES CONNEXION END-->


    <!--Infos Modal HTML -->
    <div id="myModal_voter" class="modal fade bs-example-modal-lg" style="color:#000;" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background: #bdc3c7!important;">
                <form action=" payment/startvote.aspx" method="POST" id="formVote">
                    <div class="modal-header head-table">
                        <button type="button" class="close" onclick="fermer();" aria-hidden="true">×</button>
                        <h4 class="modal-title"></h4>
                        <div id="userData"></div>
                    </div>
                    <div class="modal-body">

                        <div class="row" id="blocInfos">
                            <div class="col-xs-2 hidden-sm hidden-md hidden-lg"></div>
                            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-8" id="img_cdt"></div>
                            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12" id="elt_form"></div>
                            <div class="col-xs-2 hidden-sm hidden-md hidden-lg"></div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="lgx-btn btn-flat" id="btn_paid">
                            <i class="fa fa-credit-card" aria-hidden="true"></i> Proceder au paiement </button>
                        <button type="button" class="lgx-btn btn-flat hidden" id="btn_code" onclick="voter();">
                            <i class="fa fa-credit-card" aria-hidden="true"></i> Enregistrer mon vote </button>
                        <button type="button" class="btn btn-action btn-ghost" onclick="fermer();">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Annuler </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Infos Modal HTML -->

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://connect.facebook.net/en_US/sdk.js?hash=3991a4d48589f1c7f5f9b84ec12a0403" async=""
        crossorigin="anonymous"></script>
    <script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src=" assets/template_home/js/bootstrap-hover-dropdown.min.js"></script>
    <script src=" assets/template_home/js/headroom.min.js"></script>
    <script src=" assets/template_home/js/jQuery.headroom.min.js"></script>
    <script src=" assets/template_home/js/template.js"></script>

    <script src=" assets/js/bootstrap-notify.js"></script>
    <script src=" assets/js/jquery.hislide.js"></script>
    <script src=" assets/slider/js/main.js"></script>
    <script src=" assets/flip/flipclock.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src=" assets/scripts/messages.js"></script>
    <script src=" assets/js/anijs-min.js"></script>
    <script src=" assets/scripts/voter.js"></script>
    <script src=" assets/scripts/home.js"></script>
    <script src=" assets/scripts/facebook.js"></script>
    <script>
        $('.slide').hiSlide();
    </script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });

            AOS.init();
        });
    </script>
    <script type="text/javascript">
        var clock;

        $(document).ready(function() {
            var clock;
            var userInput = $('.clock').attr('exp');
            var message = $('.clock').attr('msg');

            clock = $('.clock').FlipClock({
                clockFace: 'DailyCounter',
                autoStart: false,
                callbacks: {
                    stop: function() {
                        $('.message').html(message)
                    }
                }
            });
            //userInput="2022-03-20T12:55";
            const date = new Date(userInput);
            const now = new Date();
            seconds = parseInt((date.getTime() - now.getTime()) / 1000);
            console.log(seconds);

            clock.setTime(seconds);
            clock.setCountdown(true);
            clock.start();


        });

        // $('#categorie').hide();

        $("#affichechoix").on('click', function(e)
            {
                e.preventDefault();
                $('#choixcategorie').show(1000);
            });
        $("#afficheCandidatsmiss").on('click', function(e)
            {
                e.preventDefault();
                $('#candidatsmaster').hide(1000);
                $('#candidatsmiss').toggle(1000);
            });
        $("#afficheCandidatsmaster").on('click', function(e)
            {
                e.preventDefault();
                $('#candidatsmiss').hide(1000);
                $('#candidatsmaster').toggle(1000);
            });

    </script>




    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
    </div>
</body>

</html>
