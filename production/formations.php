<?php
    session_start ();
    ini_set('session.cookie_domain', substr($_SERVER['SERVER_NAME'],strpos($_SERVER['SERVER_NAME'],"."),100));
if (!isset($_SESSION["email"]))
   {
      header("location: index.php");
   }
    include('php/formation/get_formation.php');
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FABLAB</title>
        <link rel="icon" href="images/fablab-png.png" type="image/gif" sizes="20x20">

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                
                <?php include("header.php"); ?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Formations</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form id="formation" class="form-horizontal form-label-left" enctype="multipart/form-data" action="php/formation/add_formation.php" method="post" data-parsley-validate>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Titre <span class="required">*</span>
                                        </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="input_validate" name="titre_formation" class="form-control col-md-7 col-xs-12" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Image (jpeg | jpg | png) <span class="required">*</span> 
                                        </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" id="input_validate" name="image_formation" class="form-control col-md-7 col-xs-12" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="resizable_textarea form-control" form="formation" maxlength="500" rows="10" name="description_formation" id="input_validate" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lien <span class="required">*</span> 
                                        </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="input_validate" name="lien_formation" class="form-control col-md-7 col-xs-12" required>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" form="formation" class="btn btn-success" style="">Valider</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Historique Formations</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content" style="">
                                    <table id="datatable1" class="table table-striped table-bordered table1">
                                        <thead>
                                            <tr>
                                                <th>Formation</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                    while ($infos=$formation->fetch())
                                                    {
                                                        echo'<tr>
                                                                <td>'.$infos['titre_formation'].'</td>
                                                                
                                                                <td>
                                                                    <button type="button" class="btn btn-success" style="padding:0;"><a style="color:black;padding: 10px;" data-toggle="modal" data-target="#myModal'.$infos['id_formation'].'">Modifier</a></button>
                                                                    
                                                                    <button type="button" class="btn btn-danger" style="padding:0;"><a style="color:black;padding: 10px;"href="php/formation/sup_formation.php?id_formation='.$infos['id_formation'].'">Supprimer</a></button> 
                                                                </td>
                                                                
                                                                <!-- Modal -->
                                                                  <div class="modal fade" id="myModal'.$infos['id_formation'].'" role="dialog">
                                                                    <div class="modal-dialog">

                                                                      <!-- Modal content-->
                                                                      <div class="modal-content">
                                                                        <div class="modal-header">
                                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                          <h4 class="modal-title">Modal Header</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                          <form id="formation'.$infos['id_formation'].'" class="form-horizontal form-label-left" enctype="multipart/form-data" action="php/formation/change_formation.php?id_formation='.$infos['id_formation'].'" method="post">
                                                                            <div class="form-group">
                                                                                <label>Titre</label>
                                                                                <div>
                                                                                    <input type="text" id="input_validate" name="titre_formation" value="'.$infos['titre_formation'].'">
                                                                                </div>
                                                                            </div>
                                                                            <hr />
                                                                            <div class="form-group">
                                                                                <label> Image (jpeg | jpg | png)</label>
                                                                                <div>
                                                                                    <input type="file" id="input_validate" name="image_formation" required>
                                                                                </div>
                                                                            </div>
                                                                            <hr />
                                                                            <div class="form-group">
                                                                                <label>Description</label>
                                                                                <div>
                                                                                    <textarea class="resizable_textarea form-control" form="formation'.$infos['id_formation'].'" maxlength="500" rows="10" name="description_formation" id="input_validate" >'.$infos['description_formation'].'</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <hr />
                                                                            <div class="form-group">
                                                                                <label>Lien</label>
                                                                                <div>
                                                                                    <input type="text" id="input_validate" name="lien_formation" value="'.$infos['lien_formation'].'">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                                          
                                                                          <button type="submit" form="formation'.$infos['id_formation'].'" class="btn btn-success" style="">Valider</button>
                                                                        </div>
                                                                      </div>

                                                                    </div>
                                                                  </div>
                                                            </tr>';
                                                    }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="../vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="../vendors/Flot/jquery.flot.js"></script>
        <script src="../vendors/Flot/jquery.flot.pie.js"></script>
        <script src="../vendors/Flot/jquery.flot.time.js"></script>
        <script src="../vendors/Flot/jquery.flot.stack.js"></script>
        <script src="../vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="../vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

        <script src="js/input_validate.js"></script>

    </body>

    </html>
