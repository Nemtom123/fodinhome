<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.10.01.
 * Time: 17:06
 */
?>
<div id="contact" class="container" xmlns="">
    <h3 class="text-center">Termék kiadás</h3>
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
                            Megrendelő
                        </th>
                        <th class="text-center">
                            Termékneve____
                        </th>
                        <th class="text-center">
                            Termék ára
                        </th>
                        <th class="text-center">
                            Raktáron
                        </th>
                        <th class="text-center">
                            Kiadandó
                        </th>
                        <th class="text-center">
                            Egység
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
                            <select class="form-control" id='meg' name='megrendelo_id[0]'
                                    onChange='megrendelo(this,"0")'>
                                <option value="">Megrendelő választás</option>
                                <?php
                                while ($sor = $kereses->fetch(PDO::FETCH_ASSOC)) {
                                    print "<option value='" . $sor['megrendelo_id'] . "' >" . $sor['megrendelocsaladi'] . ' ' . ' ' . $sor['megrendelokereszt'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" id='add[" + i + "]' name='termek_id[0]'
                                    onChange='valaszt1(this,"0")'>
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
                                   class="form-control" id='add100' value=''
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni"
                                   required/>
                        </td>
                        <td>
                            <input type="text" name='termek_mennyiseg0' id='badd100' value="" placeholder='Mennyiség'
                                   class="form-control"
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" required/>
                        </td>
                        <td>
                            <input type='text' name='Mennyiség[0]' id='darab100' value='' class='form-control'
                                   placeholder='Kérem a darabszámot' pattern='[0-9\s]{1,50}'
                                   title='Számokat lehet beütni' required/>
                        </td>
                        <td>
                            <select class="form-control" data-live-search="true"
                                    name="termek_megyseg[0]" id="egyseg100"
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
                            <input type="text" name='Rögzítésiidő[0]' placeholder='Rögzítési idő'
                                   value='<?php echo $date = date('Y-m-d'); ?>' class="form-control"/>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn pull-right" id="add_row" name="tovabb" value="0" type="submit">Tovabb</button>
        <button class="btn btn-danger pull-left" id="rogzit" name="rogzit" value="rogzit"
                type="submit" onclick="myFunction()">Rögzít
        </button>
        <button class="btn alert-info pull-right" id='delete_row' name="tovabb">Sor törlés</button>
    </div>
</form>
<script>
    var global_i_id = 0;
    var globalis_megrendelo_tomb = "";
    $(document).ready(function () {
        var i = 1;
        $("#add_row").click(function () {

            globalis_megrendelo_tomb = "";
            $("select[id*='meg'").each(function (index, value) {
                if (globalis_megrendelo_tomb.length > 0) {
                    globalis_megrendelo_tomb += ",";
                }
                globalis_megrendelo_tomb += value.value;
            });


            var vissza_erkezett = $.ajax({
                method: "POST",
                async: false,
                dataType: 'json',
                url: "get_rendel.php",
                data: {
                    globalis_megrendelo_tomb: globalis_megrendelo_tomb,
                    i: i
                }
            });
            vissza_erkezett.fail(function (jqXHR, textStatus) {
                alert("Error: " + textStatus + jqXHR);
            });
            vissza_erkezett.done(function (jqXHR) {
                $('#addr' + i).html("<td>" + (i + 1) + "</td>" +
                    "<td><input class='form-control' id='meg1" + i + "' value='' name='megrendelo_id[" + i + "]'><input type='hidden'  id='meg2" + i + "' name='megrendelo_id[" + i + "]'></td>" +
                    "<td><select class='form-control' " +
                    " onChange='select(this," + i + ")'id='add" + i + "' name='termek_id[" + i + "]'><option value=''>Termék választás</option></select></td>" +
                    "<td><input  name='termek_ara_netto[" + i + "]' type='text'  id='add100" + i + "' value='' " +
                    "placeholder='Termék ára netto' class='form-control input-md'pattern='[0-9\s]{1,50}'" +
                    "title='Számokat lehet beütni' required/></td>" +
                    "<td><input  name='termek_mennyiseg[" + i + "]' id='badd100" + i + "' value='' type='text' " +
                    "placeholder='Mennyiség'  class='form-control input-md'></td>" +
                    "input-md'pattern='[0-9\s]{1,50}'  title='Számokat lehet beütni' disabled></td>" +
                    "<td><input type='text' name='Mennyiség[" + i + "]' id='darab100" + i + "' " +
                    "class='form-control'placeholder='Kérem a darabszámot' pattern='[0-9\s]{1,50}'title='Számokat lehet beütni' required/>" +
                    "</td>" +
                    "<td><select class='form-control'id='egyseg100" + i + "' value=''  data-live-search='true' " +
                    "name='mennyisegegyseg[" + i + "]' placeholder='Mennyiségi egysége' required> <option " +
                    "placeholder='Mennyiségi egység választás'>Mennyiségi egység választás</option> <option " +
                    "value='Db'>Darab</option> <option value='Kg'>Kilgramm</option> <option value='Liter'>Liter</option> " +
                    "<option value='M'>Méter</option> <option value='M3'>Köbméter</option> </select></td>" +
                    "<td><input  name='Rögzítésiidő[" + i + "]' type='text' placeholder='Rögzítési idő'  value='<?php echo $date = date('Y-m-d'); ?>' class='form-control'/></td>"
                );
                $.each(jqXHR, function (index, value, i) {
                    var eredmeny = jqXHR['eredmeny'];
                    var i = 1;
                    $('#meg1' + jqXHR['i']).val(eredmeny['megrendelocsaladi'] + ' ' + eredmeny['megrendelokereszt'])
                        .css("border-color", "blue").prop('disabled', true);
                    $('#meg2' + jqXHR['i']).val(eredmeny['megrendelo_id']).css("border-color", "blue").prop('enabled', true);
                });
            });
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
    function valaszt1(val, i) {
        var vissza_erkezett = $.ajax({
            method: "POST",
            async: false,
            dataType: 'json',
            url: "get_termek.php",
            data: {
                netto: val.value,
                i: i
            }
        });
        vissza_erkezett.fail(function (jqXHR, textStatus) {
            alert("Error: " + textStatus + jqXHR);
        });
        vissza_erkezett.done(function (jqXHR, textStatus) {
            var adat = jqXHR['adat'];
            var termek_ara_netto = jqXHR['termek_ara_netto'];
            var termek_mennyiseg = jqXHR['termek_mennyiseg'];
            var novekedes = jqXHR['novekedes'];
            var bekert = jqXHR['bekert'];
            var darab4 = adat['termek_mennyiseg'] === '1';
            var darab5 = adat['termek_mennyiseg'] === '2';
            var darab6 = adat['termek_mennyiseg'] === '3';
            var netto = adat['termek_ara_netto'] === '0';
            var ido = adat['termek_date'] === '0000-00-00';

            $("#add").empty();

            if (netto === false) {
                $('#add100').val(adat['termek_ara_netto']).css("border-color", "green").prop('disabled', true);
                $('#uadd100').val(adat['termek_ujnetto']).css("border-color", "green").prop('disabled', true);
                $('#egyseg100').val(adat['termek_megyseg']).css("border-color", "blue").prop('disabled', true);
                $('#darab100').css("border-color", "orange").prop('enabled', true);
            }
            else {
                $('#add100').val(adat['termek_ara_netto']).css("border-color", "orange").prop('disabled', true);
                $('#uadd100').val(adat['termek_ujnetto']).css("border-color", "red").prop('disabled', true);
                $('#darab100').css("border-color", "orange").prop('enabled', true);
            }
            if (darab4 === true) {
                $('#badd100').val(adat['novekedes']).css("border-color", "red").prop('disabled', true);
                $('#ubadd100').val(adat['uj_termek_mennyiseg']).css("border-color", "red").prop('disabled', true);
            }
            else if (darab5 === true) {
                $('#badd100').val(adat['novekedes']).css("border-color", "red").prop('disabled', true);
                $('#ubadd100').val(adat['uj_termek_mennyiseg']).css("border-color", "red").prop('disabled', true);
            }
            else if (darab6 === true) {
                $('#badd100').val(adat['novekedes']).css("border-color", "orange").prop('disabled', true);
                $('#ubadd100').val(adat['uj_termek_mennyiseg']).css("border-color", "orange").prop('disabled', true);
            }
            else {
                $('#badd100').val(adat['novekedes']).css("border-color", "green").prop('disabled', true);
                $('#ubadd100').val(adat['uj_termek_mennyiseg']).css("border-color", "green").prop('disabled', true);


            }

            if (ido === false) {
                $('#dadd100').val(adat['termek_date']).css("border-color", "green");
            }
            else if (ido === true) {
                $('#dadd100').$.Date('Y-m-d');
            }

        });

    }
</script>

<script>
    function select(val, i) {

        var vissza_erkezett = $.ajax({
            method: "POST",
            async: false,
            dataType: 'json',
            url: "get_termek.php",
            data: {
                netto: val.value,
                i: i
            }
        });
        vissza_erkezett.fail(function (jqXHR, textStatus) {
            alert("Error: " + textStatus + jqXHR);
        });
        vissza_erkezett.done(function (jqXHR) {
            var adat = jqXHR['adat'];
            var termek_ara_netto = jqXHR['termek_ara_netto'];
            var termek_mennyiseg = jqXHR['termek_mennyiseg'];
            var bekert = jqXHR['bekert'];
            var darab4 = adat['termek_mennyiseg'] === '1';
            var darab5 = adat['termek_mennyiseg'] === '2';
            var darab6 = adat['termek_mennyiseg'] === '3';
            var netto = adat['termek_ara_netto'] === '0';
            var ido = adat['termek_date'] === '0000-00-00';

            $("#add").empty();
            //  $('#add1' + jqXHR['i']).val(termek_ara_netto);
            if (netto === false) {
                $('#add100' + jqXHR['i']).val(adat['termek_ara_netto']).css("border-color", "green").prop('disabled',
                    true);
                $('#uadd100' + jqXHR['i']).val(adat['termek_ujnetto']).css("border-color", "green").prop('disabled',
                    true);
                $('#egyseg100' + jqXHR['i']).val(adat['termek_megyseg']).css("border-color", "blue").prop('disabled',
                    true);
                $('#darab100' + jqXHR['i']).css("border-color", "orange").prop('enabled', true);
            }
            else {
                $('#add100' + jqXHR['i']).val(adat['termek_ara_netto']).css("border-color", "orange").prop('disabled',
                    true);
                $('#uadd100' + jqXHR['i']).val(adat['termek_ujnetto']).css("border-color", "red").prop('disabled',
                    true);
                $('#darab100' + jqXHR['i']).css("border-color", "orange").prop('disabled', true);
            }
            if (darab4 === true) {
                $('#badd100' + jqXHR['i']).val(adat['novekedes']).css("border-color", "red").prop('disabled', true);
                $('#ubadd100' + jqXHR['i']).val(adat['uj_termek_mennyiseg']).css("border-color", "red").prop
                ('disabled', true);
            }
            else if (darab5 === true) {
                $('#badd100' + jqXHR['i']).val(adat['novekedes']).css("border-color", "red").prop('disabled', true);
                $('#ubadd100' + jqXHR['i']).val(adat['uj_termek_mennyiseg']).css("border-color", "red").prop
                ('disabled', true);
            }
            else if (darab6 === true) {
                $('#badd100' + jqXHR['i']).val(adat['novekedes']).css("border-color", "orange").prop('disabled', true);
                $('#ubadd100' + jqXHR['i']).val(adat['uj_termek_mennyiseg']).css("border-color", "orange").prop
                ('disabled', true);
            }
            else {
                $('#badd100' + jqXHR['i']).val(adat['novekedes']).css("border-color", "green").prop('disabled', true);
                $('#ubadd100' + jqXHR['i']).val(adat['uj_termek_mennyiseg']).css("border-color", "green").prop
                ('disabled', true);
            }

            if (ido === false) {
                $('#dadd100' + jqXHR['i']).val(adat['termek_date']).css("border-color", "green");
            }
        });
    }
</script>
<script>
    var globalis_termek_tomb = "";

    $(document).ready(function () {
        var i = +1;
        var id = "";
        $("#add_row").click(function () {
            globalis_termek_tomb = "";
            $("select[id*='add'").each(function (index, value) {
                if (globalis_termek_tomb.length > 0) {
                    globalis_termek_tomb += ",";
                }
                globalis_termek_tomb += value.value;
                id = value.id;
            });


            var vissza = $.ajax({
                method: "POST",
                async: false,
                dataType: 'json',
                url: "get_termek_kivesz.php",
                data: {
                    globalis_termek_tomb: globalis_termek_tomb,
                    i: i
                }
            });
            vissza.fail(function (jqXHR, textStatus) {
                alert("Error: " + textStatus + jqXHR);
            });
            vissza.done(function (jqXHR) {
                $.each(jqXHR['erkezik'], function (index, value) {
                    var erkezik = value['erkezik'];
                    var termek_id = value['termek_id'];
                    var termekneve = value['termekneve'];
                    $('#' + id).append("<option value=\"" + termek_id + "\">" + termekneve +
                        "</option>").css("border-color", "blue").prop('enabled', true);
                });
            });
        });
    });

</script>
<script>


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
            function () {
            },
            // handling the promise rejection
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('I was closed by the timer')
                }
            }
        )
    }
</script>
<script src="sikeresrogzites.js"></script>


