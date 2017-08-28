<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.27.
 * Time: 17:06
 */
?>
<div id="contact" class="container">
    <h3 class="text-center">Termékbevételezés</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>
<form name="btn-rogzit" method="post" >
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
                            Megnevezési csoport rögzítés
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="text" name='megnevezes0'  placeholder='PL:Csavarok' class="form-control"
                                   pattern="[A-Za-z,öÖüÜóÓőŐúÚéÉáÁűŰíÍ\s]{3,50}"  title="Betüket lehet beütni" required/>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn pull-right" id="add_row" name="tovabb" value="0" type="submit">Tovabb</button>
        <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
                type="submit" onChange="this.form.submit()">Rögzít</button>
        <button class="btn alert-info pull-right" id='delete_row' name="tovabb">Sor törlés</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){
            $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='megnevezes0"+i+"' type='text' placeholder='Termék" +
                " " +
                "neve' class='form-control input-md' pattern='[A-Za-z,öÖüÜóÓőŐúÚéÉáÁűŰíÍ\s]{3,50}'  title='Betüket " +
                "lehet beütni' required/> </td>");

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
