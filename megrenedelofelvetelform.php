<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.27.
 * Time: 17:06
 */
?>
<div id="contact" class="container">
    <h3 class="text-center">Megrendelő adatai</h3>
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
                            Családinév
                        </th>
                        <th class="text-center">
                            Keresztnév
                        </th>
                        <th class="text-center">
                            Kód
                        </th>
                        <th class="text-center">
                            Dátum
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="text" name='megrendelocsaladi[0]' placeholder='PL:Kovács' class="form-control"
                                   pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ \s]{3,20}" title="Betüket lehet beütni"
                                   required/>
                        </td>
                        <td>
                            <input type="text" name='megrendelokereszt[0]' placeholder='PL:Lajos' class="form-control"
                                   pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ \s]{3,20}" title="Betüket lehet beütni"
                                   required/>
                        </td>
                        <td>
                            <input type='text' name='megrendelokod[0]'  value='<?php echo rand(0,10000000); ?>'
                                   class='form-control'
                                   pattern='[0-9/-\s]{1,50}' title='Számokat lehet beütni' enabled/>
                        </td>
                        <td>
                            <input class="form-control" id="rogzitesiido" name="megrendelodate[0]" value="<?php echo
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
            type="submit">Rögzít
    </button>
    <button class="btn alert-info pull-right" id='delete_row' name="tovabb">Sor törlés</button>
    </div>
</form>
<script>
    $(document).ready(function () {
        var i = 1;
        var x = document.write = Math.floor((Math.random() * 1000000) + 1);
        $("#add_row").click(function () {
            $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='megrendelocsaladi[" + i + "]' " +
                "type='text'placeholder='Pl:Kovács' class='form-control input-md' pattern='[A-Za-z, " +
                "öÖüÜóÓőŐúÚéÉáÁűŰíÍ\s]{3,50}'title='Betüket lehet beütni' required/> </td>" +
                "<td><input type='text' name='megrendelokereszt[" + i + "]'  placeholder='PL:Lajos'" +
                " class='form-control'pattern='[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ\s]{3,20}'  title='Betüket lehet beütni'required/></td>" +
                "<td><input type='text' name='megrendelokod[" + i + "]' value='" + x*i + "' " +
                "class='form-control'pattern='[0-9/-\s]{1,50}'title='Számokat lehet beütni' required/> </td>" +
                "<td><input  name='megrendelodate[" + i + "]' type='text' placeholder='Rögzítési idő'" +
                "  value='<?php echo $date = date('Y-m-d'); ?>' class='form-control'/></td>"
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
