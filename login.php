<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.06.20.
 * Time: 12:47
 */
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
    $login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
    $uname = strip_tags($_POST['txt_uname_email']);
    $umail = strip_tags($_POST['txt_uname_email']);
    $upass = strip_tags($_POST['txt_password']);

    if($login->doLogin($uname,$umail,$upass))
    {
        $login->redirect('megnevezesrogzit.php');
    }
    else
    {
        $error = "Sajnálom most ez nem sikerűlt !";
    }
}
include_once ('includes/dbMySql.php');
?>
<?php include_once ('header.php'); ?>

<body>
<?php include_once ("menu.php")?>
<form class="form-signin" method="post" id="login-form">
    <!--<form id="register" action="" method="post" onsubmit="return check()">-->

    <h2 class="form-signin-heading" style="text-align: center">Bejelentkezés.</h2><hr />

    <div id="error">
        <?php
        if(isset($error))
        {
            ?>
            <div class="alert alert-danger" style="text-align: center">
                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                <label style="color: #282E34; text-align: center">Még nem vagy regisztrálva <a href="#" style="color:#aa0000">Regisztráció
                        szünetel</a></label>
                <!-- <a href="sign-up.php" style="color:#aa0000">Regisztráció itt</a></label> -->
            </div>
            <?php
        }
        ?>
    </div>

    <button type="button" class="btn-lg btn-info center-block" data-toggle="modal"
            data-target="#myModal">Bejelentkezés
    </button>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header modal-header-info">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4><i class="glyphicon glyphicon-align-right"></i>Bejelentkezés</h4>
                    </div>

                    <div class="modal-body">
                        <div style="text-align: center; width: auto; height: auto">
                            <img src="image/user.png" alt="Avatar" class="avatar">
                        </div>
                        <form class="noteform" id="notesmodal" method="post">
                            <fieldset>
                                <p style="align-content: center; color: #3f3f3f">Felhasználói név</p>
                                <input type="text" class="form-control" name="txt_uname_email" placeholder="Felhasználó név  vagy Email cím"
                                       required />
                                <span id="check-e"></span>
                                <br>
                                <p style="align-content: center; color: #3f3f3f">Jelszó</p>
                                <input type="password" class="form-control" name="txt_password" placeholder="Jelszó" />
                            </fieldset>
                            <br>
                        </form>
                        <div class="col-sm-offset-5 col-sm-2 text-center">
                            <input type="submit" name="btn-login" class="btn btn-danger"
                                   data-toggle="modal" data-target="#myModal"
                                   id="submitnote" value="Bejelentkezés" />
                        </div>

                        <br>
                        <br>
                        <br>

                        <div class="modal-footer modal-footer-info" >
                            <button type="button" class="btn btn-default"
                                       data-dismiss="modal">Bezár
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<br><br><br><br><br><br><br><br>
<div class="clearfix"></div>

<!-- Start Footer -->
<div class='animatedParent' data-sequence='1000' >
    <footer class='animated growIn, navbar-fixed-bottom panel-footer' data-id='1' style="background-color:#282E34">
        <div class="text-center"  >
            <a class="up-arrow" href="login.php" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br><br><br><br><br>
            <p style="color: white">Licenced by FODIN HOME KFT</p>

        </div>
    </footer>
</div>
<!-- End Footer -->

<!-- Bootsnavs -->
<script src="bootsnav-master/js/bootsnav.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='css3-animate-it-master/js/css3-animate-it.js'></script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>


