<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017.10.08.
 * Time: 10:36
 */

function AlphaNumeric($length)
{
    $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $clen   = strlen( $chars )-1;
    $id  = '';

    for ($i = 0; $i < $length; $i++) {
        $id .= $chars[mt_rand(0,$clen)];
    }
    return ($id);
}



?>
<div id="contact" class="container">
    <h3 class="text-center">Beszallitó rögzítés</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>
<form name="btn-rogzit" method="post">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered  table-hover" id="tab_logic">
                    <thead class="alert-success">
                    <tr>
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Beszállító neve
                        </th>
                        <th class="text-center">
                            Beszállítói kód
                        </th>
                        <th class="text-center">
                            Rögzítési idő
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="text" name='beszallito_nev[0]' placeholder='PL:Szerencse Kft' class="form-control"
                                   pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ 0-9/-\s]{3,20}" title="Üresen hagytad"
                                   required/>
                        </td>
                        <td>
                            <input type='text' name='beszallito_kod[0]'  value='<?php echo rand(); ?>'
                                   class='form-control'
                                   pattern='[0-9/-\s]{1,50}' title='Számokat lehet beütni' enabled/>
                        </td>
                        <td>
                            <input class="form-control" id="beszallito_ido" name="beszallito_ido[0]" value="<?php echo
                            $date = date('Y-m-d'); ?>" type="text" required>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn pull-right" id="add_row" name="tovabb" value="0" type="submit">Tovabb</button>
        <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
                type="submit" onclick="myFunction()">Rögzít
        </button>
        <button class="btn alert-info pull-right" id='delete_row' name="tovabb">Sor törlés</button>
    </div>
</form>
<script>
    $(document).ready(function () {
        var i = 1;
        var x = document.write = Math.floor((Math.random() * 1000) + 1);
        $("#add_row").click(function () {
            $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='beszallito_nev[" + i + "]' " +
                "type='text'placeholder='Pl:Szerencse Kft' class='form-control input-md' pattern='[A-Za-z, " +
                "öÖüÜóÓőŐúÚéÉáÁűŰíÍ 0-9/-\s]{3,50}'title='Üresen hagytad' required/> </td>" +
                "<td><input type='text' name='beszallito_kod[" + i + "]' value='" + x*i + "' class='form-control' pattern='[0-9/-\s]{1,50}' title='Számokat lehet beütni' required/></td>" +
                "<td><input  name='beszallito_ido[" + i + "]' type='text' placeholder='Rögzítési idő'  value='<?php echo $date = date('Y-m-d'); ?>' class='form-control'/></td>"
            );
            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });
        $("#delete_row").click(function () {
            if (i > 1) {
                $("#addr" + (i - 1)).html('');
                i--;
            }
        });

    });
</script>
<script>
    function myFunction() {
        swal({
            title: '',
            text: 'Sikeres Rögzítés!!!!',
            timer: 5000,
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
