<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.27.
 * Time: 17:06
 */
require_once("Raktar.php");
?>
<div id="contact" class="container">
    <h3 class="text-center">Termékbevételezés</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
        </div>
</div>
<form name="rogzit" method="post" >
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered  table-hover"  id="tab_logic">
                <thead class="alert-info">
                <tr >
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center">
                        Megnevezés__
                    </th>
                    <th class="text-center">
                        Termékneve
                    </th>
                    <th class="text-center">
                        Termék ára netto
                    </th>
                    <th class="text-center">
                        Új ár netto
                    </th>
                    <th class="text-center">
                        Mennyiség
                    </th>
                    <th class="text-center">
                        Mennyiségi egység
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
                        <select class="form-control" id="sel1" name="jav" >
                            <?php
                            while ($sor = $keres->fetch(PDO::FETCH_ASSOC)){
                                print "<option value='".$sor['megnevezes_id']."' >".$sor['megnevezes']."</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <input type="text" name='Termékneve0'  placeholder='Termék neve' class="form-control"
                               pattern="[A-Za-z,öÖüÜóÓőŐúÚéÉáÁűŰíÍ\s]{3,50}"  title="Betüket lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" name='Termékáranetto0' placeholder='Termék ára netto' class="form-control"  pattern="[0-9\s]{1,50}"  title="Számokat lehet beütni"  required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="disabledInput"  name='Ujáranetto0' placeholder='Új ár netto' class="form-control"
                               pattern="[0-9\s]{1,50}"  title="Számokat lehet beütni"  disabled>
                    </td>
                    <td>
                        <input type="text" name='Mennyiség0' placeholder='Mennyiség' class="form-control"pattern="[0-9\s]{1,50}"  title="Számokat lehet beütni"  required/>
                    </td>
                    <td>
                        <select class="form-control" data-live-search="true"
                                name="mennyisegegyseg0"
                                placeholder="Mennyiségi egysége" required>
                            <option placeholder="Mennyiségi egység választás">Mennyiségi egység választás</option>
                            <option value="Db">Darabb</option>
                            <option value="Kg">Kilogramm</option>
                            <option value="Liter">Liter</option>
                            <option value="M">Méter</option>
                            <option value="M3">Köbméter</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name='Rögzítésiidő0' placeholder='Rögzítési idő'  value='<?php echo $date = date('Y-m-d'); ?>' class="form-control"/>
                    </td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <button class="btn pull-right" id="add_row" name="tovabb" value="0" type="submit">Tovabb</button>
    <button class="btn btn-danger pull-left" id="rogzit" name="rogzit" value="rogzit"
            type="submit" onChange="this.form.submit()">Rögzít</button>
    <button class="btn alert-info pull-right" id='delete_row' name="tovabb">Sor törlés</button>
</div>
</form>
<script>
    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){
            $('#addr'+i).html("<td>"+ (i+1) +"</td>" +
                "<td><select class='form-control' id='sel1' name='jav'><?php    while ($sor=$keres->fetch(PDO::FETCH_ASSOC)){print "<option value='".$sor['megnevezes_id']."' >".$sor['megnevezes']."</option>";}?></select> </td>" +
                "<td><input name='Termékneve["+i+"]' type='text' placeholder='Termék' " +
                "neve' class='form-control input-md' pattern='[A-Za-z,öÖüÜóÓőŐúÚéÉáÁűŰíÍ\s]{3,50}'  title='Betüket " +
                "lehet beütni' required/> </td>" +
                "<td><input  name='Termékáranetto"+i+"' type='text' placeholder='Termék ára netto' class='form-control input-md'pattern='[0-9\s]{1,50}'  title='Számokat lehet beütni' required/></td>" +
                "<td><input  name='Újánetto"+i+"' type='text' placeholder='Új ár netto' class='form-control " +
                "input-md'pattern='[0-9\s]{1,50}'  title='Számokat lehet beütni' disabled></td>" +
                "<td><input  name='Mennyiség"+i+"' type='text' placeholder='Mennyiség'  class='form-control input-md'></td>" +
                "<td><select class='form-control' data-live-search='true' " +
                "name='mennyisegegyseg"+i+"' placeholder='Mennyiségi egysége' required> <option " +
                "placeholder='Mennyiségi egység választás'>Mennyiségi egység választás</option> <option " +
                "value='Db'>Darab</option> <option value='Kg'>Kilgramm</option> <option value='Liter'>Liter</option> " +
                "<option value='M'>Méter</option> <option value='M3'>Köbméter</option> </select></td>" +
                "<td><input  name='Rögzítésiidő"+i+"' type='text' placeholder='Rögzítési idő'  value='<?php echo $date = date('Y-m-d'); ?>' class='form-control'/></td>"
            );

            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++;
        });
        $("#delete_row").click(function(){
            if(i>1){
                $("#addr"+(i-1)).html('');
                i--;
            }
        });

    });
</script>
