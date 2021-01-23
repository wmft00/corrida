<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $titulo; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo url::base(); ?>bootstrap/css/bootstrap.min.css">
        <!--icones-->
        <link rel="stylesheet" href="<?php echo url::base(); ?>css/sprite-icones.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo url::base(); ?>plugins/select2/select2.min.css">
        <!--fonts-icons-->
        <link rel="stylesheet" href="<?php echo url::base(); ?>dist/css/fonts.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo url::base(); ?>dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="<?php echo url::base(); ?>dist/css/skins/skin-blue.min.css">
        
        <script type="text/javascript">
            var URLBASE = "<?php echo url::base() ?>";
        </script>

        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo url::base() ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="<?php echo url::base(); ?>plugins/select2/select2.full.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo url::base() ?>dist/js/app.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo url::base() ?>plugins/iCheck/icheck.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo url::base() ?>plugins/chartjs/Chart.min.js"></script>
        <!--MASCARAS-->
        <script src="<?php echo url::base(); ?>js/maskedmoney-1.3.min.js" type="text/javascript"></script>
        <script src="<?php echo url::base(); ?>js/maskedinput-1.4.min.js" type="text/javascript"></script>
        <!--FANCYBOX-->
        <script src="<?php echo url::base(); ?>js/fancybox-1.3.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo url::base(); ?>css/fancybox-1.3.1.min.css" type="text/css" media="" />
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="<?php echo url::base(); ?>plugins/datepicker/datepicker3.css">
        <script src="<?php echo url::base(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="<?php echo url::base(); ?>plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js"></script>
        <!--VALIDADOR-->
        <script src="<?php echo url::base(); ?>js/validar-1.3.5.js" type="text/javascript"></script>
        <!--forms-->
        <script src="<?php echo url::base(); ?>js/forms_etc.min.js?v=1"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Navegação</span>
                    </a>
                    
                    <div class="mudaestabelecimento" style="margin-left: 50px;">
                        <ul class="nav navbar-nav">
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <!-- Optionally, you can add icons to the links -->
                            <li class="header">
                                Cruds
                            </li>
                            <li class="<?php if (Request::current()->controller() == "index") { ?>active<?php } ?>">
                                <a href="<?php echo url::base(); ?>">
                                    <span>Início</span>
                                </a>
                            </li>
                            <li class="<?php if (Request::current()->controller() == "corredores") { ?>active<?php } ?>">
                                <a href="<?php echo url::base(); ?>corredores">
                                    <span>Corredores</span>
                                </a>
                            </li>
                            <li class="<?php if (Request::current()->controller() == "provas") { ?>active<?php } ?>">
                                <a href="<?php echo url::base(); ?>provas">
                                    <span>Provas</span>
                                </a>
                            </li>
                            <li class="<?php if (Request::current()->controller() == "corredoresprovas") { ?>active<?php } ?>">
                                <a href="<?php echo url::base(); ?>corredoresprovas">
                                    <span>Corredores Provas</span>
                                </a>
                            </li>
                            <li class="<?php if (Request::current()->controller() == "resultados") { ?>active<?php } ?>">
                                <a href="<?php echo url::base(); ?>resultados">
                                    <span>Inclusão de Resultados</span>
                                </a>
                            </li>
                            <li class="<?php if (Request::current()->controller() == "classificacaoidade") { ?>active<?php } ?>">
                                <a href="<?php echo url::base(); ?>classificacaoidade">
                                    <span>Classificação por Idade</span>
                                </a>
                            </li>
                            <li class="<?php if (Request::current()->controller() == "classificacaogeral") { ?>active<?php } ?>">
                                <a href="<?php echo url::base(); ?>classificacaogeral">
                                    <span>Classificação Geral</span>
                                </a>
                            </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php echo $conteudo; ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    <!--qualquer coisa-->
                </div>
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

    </body>
</html>