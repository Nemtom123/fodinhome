<?php
require_once("session.php");
require_once("Beszallito.php");
require_once("error.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
include_once ('raktarheader.php');
?>

<?php include_once ("raktarmenu.php");?>
<br/><br>
<?php
echo '<form method="post" class="media" name="jav">';
echo '<br><br><br><br>';

$javit = new Beszallito();

$keres = $javit->runQuery("SELECT * FROM beszallitok ORDER BY beszallito_nev ASC");
$keres->execute(array());
?>
<div id="contact" class="container">
    <h3 class="text-center">Beszállító törlése</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>

<?php include_once ('beszallitoform.php'); ?>

<br>
<?php

if (isset($_POST['jav'])){

    $beszallito_id = $_POST['jav'];
    $keres = $javit->BeszallitoLeKerdez($beszallito_id);
    $ujsor = $keres->fetch(PDO::FETCH_ASSOC);
    $torol = new Beszallito();


    if(isset($_POST['btn-rogzit']))
    {
        $beszallito_nev = strip_tags($_POST['felulir']);
        $beszallito_id = $_POST['felulir_id'];

        if($beszallito_nev  == '')	{
            $error[] = "Ne hagyd üresen kérlek !";
        }


        else
        {
            try
            {
                $leker = $torol->runQuery("SELECT beszallito_nev FROM beszallitok WHERE beszallito_nev=:beszallito_nev ORDER BY beszallito_nev DESC ");
                $leker->execute(array(':beszallito_nev'=>$beszallito_nev ));
                $row=$leker->fetch(PDO::FETCH_ASSOC);

                if($row['beszallito_nev'] != $beszallito_nev) {
                    $error[] = ":"." $beszallito_nev ";
                }
                else
                {
                    if($row['beszallito_nev'] == $beszallito_nev) {
                        $torol->BeszallitoTorol($beszallito_id);
                        $torol->redirect('beszallitotorles.php?joined');
                    } else if (isset($_GET['joined'])) {
                        ?>
                        <div class=" btn-alert alert-info">
                            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
                      .form.submit()">Gratulálok</b>
                        </div>
                        <?php
                    }
                }
            } catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }
    }
    ?>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered  table-hover"  id="tab_logic">
                <thead class="alert-danger">
                <tr >
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center">
                        Beszállító törlés
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td class="text-center" style="color: #aa0000">
                        1
                    </td>
                    <td>
                        <input type="text"class="form-control" name="felulir" id="usr" value="<?php echo $ujsor['beszallito_nev']; ?>" />
                        <input type="hidden"class="form-control" name="felulir_id" id="usr" value="<?php echo $ujsor['beszallito_id']; ?>" />
                    </td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>


    <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
            type="submit"onclick="myFunction()">Rögzít
    </button>
    </div>
    </form>
<?php
include_once ('raktarfooter.php');

}
?>
<script>
    function myFunction() {
        swal({
            title: 'Sikeresen törölted',
            text: '',
            timer: 50,
            onOpen: function () {
                swal.showLoading()
            }
        }).then(
            function () {},
            // handling the promise rejection
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('I was closed by the timer')
                }
            }
        )
    }
</script>


