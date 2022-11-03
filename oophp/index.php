<?php
    include 'fungsi.php';
    $jumlah = new Jumlah ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iKantin Wikrama</title>

    <!--Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar-inverse" role="navigation" >
        <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-shopping-cart"></i>    iKantin Wikrama</a>
                </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><i class="fa fa-home"></i>Beranda</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#buy"><i class="fa fa-shopping-cart"></i>Beli</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"></a></li>
                </ul>
            </div> <!-- / navbar-collapse -->
        </div>  <!-- / navbar-fluid -->
    </nav>

    <div class="container" style="margin-top:50px;">
        <div class="panel-success">
            <div class="panel-body bg-primary">
                <div class="container">
                    <h1><i class="fa fa-shopping-cart"></i> Selamat datang di iKantin Wikrama</h1>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container">
                    <div class="col-md-10">
                        <h4>Klik disini untuk pembelian <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#buy">
                            <i class="fa fa-shopping-cart"></i> Beli </button></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container">
                    <?php
                        if (isset($_POST['check'])) {
                            $jmlbakso = $_POST['bakso'];
                            $jmlbakwan = $_POST['bakwan'];

                                if ($jmlbakwan == null) {
                                    $jumlah->getJumlah (0, $jmlbakso);
                                }   
                                elseif ($jmlbakso == null) {
                                    $jumlah->getJumlah ($jmlbakwan, 0);
                                }
                                else {
                                    $jumlah->getJumlah ($jmlbakwan, $jmlbakso);
                                }
                            $jumlah->setHarga();
                            $jumlah->cetakStruk();
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br> <br>

    <!-- [Modal Form] -->
    <div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                        <h4 class="modal-title" id=""> Form Pembelian </h4>
                </div>

                <div class="modal-body">
                    <form class="form-group" action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-cutlery"> </i> </span>
                            <input type="number" class="form-control" name="bakwan" id="bakwan" placeholder="Masukkan Jumlah Bakwan Yang Dibeli*" readOnly>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-cutlery"></i> </span>
                            <input type="number" class="form-control" name="bakso" id="bakso" placeholder="Masukkan Jumlah Bakso Yang Dibeli*" readOnly>
                        </div>

                        <div class="modal-footer">
                        <button type="button" id="btnbakwan" onclick="Onlybakwan()" class="btn btn-success" style="float:left;"> Bakwan </button>
                            <button type="button" id="btnbakso" onclick="Onlybakso()" class="btn btn-success" style="float:left;"> Bakso </button>
                            <button type="button" onclick="Keduanya()" class="btn btn-success" style="float:left;"> Bakwan & Bakso </button>
                            <button type="button" onclick="exit()" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close </button>
                            <button type="submit" class="btn btn-primary" name="check"><i class="fa fa-check"></i> Cek Total</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for  Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all complied plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

<script type="text/javascript">
    function Onlybakso() {
        document.getElementById("bakso").readOnly = false;
        document.getElementById("bakwan").readOnly = true;

        document.getElementById("btnbakwan").disabled = false;
        document.getElementById("btnbakso").disabled = true;
    }

    function Onlybakwan() {
        document.getElementById("bakso").readOnly = true;
        document.getElementById("bakwan").readOnly = false;

        document.getElementById("btnbakwan").disabled = true;
        document.getElementById("btnbakso").disabled = false;
    }

    function Keduanya() {
        document.getElementById("bakso").readOnly = false;
        document.getElementById("bakwan").readOnly = false;

        document.getElementById("btnbakwan").disabled = false;
        document.getElementById("btnbakso").disabled = false;    
    }

    function exit() {
        document.getElementById("bakso").readOnly = true;
        document.getElementById("bakwan").readOnly = true;
    }
</script>