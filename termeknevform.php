<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.27.
 * Time: 17:06
 */

?>
<div id="contact" class="container">
    <h3 class="text-center">Új terméknév rögzítés</h3>
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
                            Megnevezés csoport
                        </th>
                        <th class="text-center">
                            Terméknév felvétele
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            1
                        </td>
                        <td>
                            <select class="form-control" id="sel1" name="megnevezes_id[0]" >
                                <?php
                                while ($sor1 = $talal->fetch(PDO::FETCH_ASSOC)){
                                    print "<option value='".$sor1['megnevezes_id']."' >".$sor1['megnevezes']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="text" name='termekneve[0]'  placeholder='Termék neve' class="form-control"
                                   pattern="[0-9 A-Za-z,öÖüÜóÓőŐúÚéÉáÁűŰíÍ * - /\s]{3,50}"  title="Betüket lehet
                                   beütni" required/>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn pull-right" id="add_row" name="tovabb" value="[0]" type="submit">Tovabb</button>
        <button class="btn btn-danger pull-left" id="rogzit" name="rogzit" value="rogzit"
                type="submit" onChange="this.form.submit()">Rögzít</button>
        <button class="btn alert-info pull-right" id='delete_row' name="tovabb[0]">Sor törlés</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){
            $('#addr'+i).html("<td>"+ (i+1) +"</td><td><select class='form-control' id='sel1' name='megnevezes_id["+i+"]'><?php
                    while ($sor = $keres->fetch(PDO::FETCH_ASSOC)){
                        echo "<option name ='kell[0]' value='".$sor['megnevezes_id']."' >".$sor['megnevezes']."</option>";
                    }
                    ?></select></td>" +
                "<td><input name='termekneve["+i+"]' type='text' placeholder='Termékneve' " +
                "neve' class='form-control input-md' pattern='[0-9 A-Za-z,öÖüÜóÓőŐúÚéÉáÁűŰíÍ */-\s]{3,50}'  " +
                "title='Betüket " +
                "lehet beütni' required/> </td>"

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
    $('#add_row').click(function(){
        var values = [];
        $('table input:text').each(
            function() {
                if (values.indexOf(this.value) >= 0) {
                    $(this).css("border-color", "red");
                    alert("Sajnos dupla adatot próbálsz felvenni!!!");

                } else {
                    $(this).css("border-color", ""); //clears since last check
                    values.push(this.value);
                }
            }
        );
    });
</script>