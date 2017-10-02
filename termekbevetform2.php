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
<form name="rogzit" method="post">

    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered  table-hover" id="tab_logic">
                    <thead class="alert-info">
                    <tr>
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Termék választás
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
                            <select class="form-control" id='add1[" + i + "]' name='termek_id[" + 0 + "]'
                                    onChange='valaszt(this,"0")'>
                                <option value="">Termék választás</option>
                                <?php
                                while ($sor1 = $talal->fetch(PDO::FETCH_ASSOC)) {
                                    print " <option value='" . $sor1['termek_id'] . "'>" . $sor1['termekneve'] . "</option>";
                                    //  $valami[$sor1['termekneve']] = $sor1['termekneve'];

                                } ?>
                            </select>

                        </td>


                        <td>
                            <input type="text" name='termek_ara_netto[0]' placeholder='Termék ára netto'
                                   class="form-control" id='add10' value=''
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni"
                                   required/>
                        </td>
                        <td>
                            <input type="text" id="uadd10" value="" name='Ujáranetto0'
                                   placeholder='Új ár netto' class="form-control"
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" disabled>
                        </td>
                        <td>
                            <input type="text" name='termek_mennyiseg[0]' id='badd10' value="" placeholder='Mennyiség' class="form-control"
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" required/>
                        </td>
                        <td>
                            <select class="form-control" data-live-search="true"
                                    name="termek_megyseg[0]" id="madd10" data-value=""
                                    placeholder="Mennyiségi egysége" required>
                                <option placeholder="Mennyiségi egység választás">Mennyiségi egység választás</option>
                                <option value="Db">Darab</option>
                                <option value="Kg">Kilogramm</option>
                                <option value="Liter">Liter</option>
                                <option value="M">Méter</option>
                                <option value="M3">Köbméter</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" id="dadd10" name='termek_date[0]' placeholder='Rögzítési idő' value='<?php echo $date
                                = date('Y-m-d'); ?>'data-value=""  class="form-control"/>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn pull-right" id="add_row" name="tovabb" value="[0]" type="submit">Tovabb</button>
        <button class="btn btn-danger pull-left" id="rogzit" name="rogzit" value="rogzit"
                type="submit" onChange="this.form.submit()">Rögzít
        </button>
        <button class="btn alert-info pull-right" id='delete_row' name="tovabb[0]">Sor törlés</button>
    </div>
</form>
<script>
    $(document).ready(function () {
        var i = 1;
        $("#add_row").click(function () {
            $('#addr' + i).html("<td>" + (i + 1) + "</td><td><select class='form-control' " +
                " onChange='select(this,"+i+")' name='termek_id[" + i + "]'><?php while ($sor = $keres->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option name ='kell[0]' value='" . $sor['termek_id'] . "' >" . $sor['termekneve'] . "</option>";
                }?></select></td>" +
                "<td><input  name='termek_ara_netto[" + i + "]' type='text'  id='add1" + i + "' value='' placeholder='Termék ára netto' class='form-control input-md'pattern='[0-9\s]{1,50}'" +
                "title='Számokat lehet beütni' required/></td>" +
                "<td><input  name='Újánetto[" + i + "]' type='text' placeholder='Új ár netto' class='form-control " +
                "input-md'pattern='[0-9\s]{1,50}'  title='Számokat lehet beütni' disabled></td>" +
                "<td><input  name='termek_mennyiseg[" + i + "]' type='text' placeholder='Mennyiség'  class='form-control input-md'></td>" +
                "<td><select class='form-control' data-live-search='true' " +
                "name='termek_megyseg[" + i + "]' placeholder='Mennyiségi egysége' required> <option " +
                "placeholder='Mennyiségi egység választás'>Mennyiségi egység választás</option> <option " +
                "value='Db'>Db</option> <option value='Kg'>Kilgramm</option> <option " +
                "value='Liter'>Liter</option> " +
                "<option value='Méter'>Méter</option> <option value='Köbméter'>Köbméter</option> </select></td>" +
                "<td><input  name='termek_date[" + i + "]' type='text' placeholder='Rögzítési idő'  value='<?php echo $date = date('Y-m-d'); ?>' class='form-control'/></td>"
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
    $('#add1').click(function () {
        var values = [];
        $('table input:text').each(
            function () {
                if (values.indexOf(this.value) >=0) {
                    $(this).css("border-color", "red");
                    alert("Sajnos dupla adatot próbálsz felvenni!!!");

                } else {
                    $(this).css("border-color", "green");
                    values.push(this.value);
                }
            }
        );
    });
</script>
<script>
    function  valaszt(val,i) {
        var vissza_erkezett = $.ajax({
        method: "POST",
        async: false,
        dataType: 'json',
        url: "get_termek.php",
        data: {
            netto: val.value,
            i : i
        }
    });
        vissza_erkezett.fail(function (jqXHR, textStatus) {
            alert("Error: " + textStatus + jqXHR);
        });
        vissza_erkezett.done(function (jqXHR) {
            var adat = jqXHR['adat'];
            var termek_ara_netto = jqXHR['termek_ara_netto'];
            var termek_mennyiseg = jqXHR['termek_mennyiseg'];

            $("#add1").empty();
            $('#add10').val(adat['termek_ara_netto']);
            $('#dadd10').val(adat['termek_date']);
            $('#uadd10').val(adat['termek_ujnetto']);
            $('#madd10').val(adat['termek_megyseg']);
            $('#badd10').val(adat['termek_mennyiseg']>50).css("border-color", "green");});
    }
</script>
<script>
    function  select(val,i) {
        var vissza_erkezett = $.ajax({
            method: "POST",
            async: false,
            dataType: 'json',
            url: "get_termek.php",
            data: {
                netto: val.value,
                i : i
            }
        });
        vissza_erkezett.fail(function (jqXHR, textStatus) {
            alert("Error: " + textStatus + jqXHR);
        });
        vissza_erkezett.done(function (jqXHR) {
            var termek_ara_netto =  jqXHR['termek_ara_netto'];

            $("#add1").empty();

            $('#add1'+ jqXHR['i']).val(termek_ara_netto);
        });
    }
</script>

