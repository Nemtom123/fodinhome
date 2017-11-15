<div id="contact" class="container" xmlns="">
    <h3 class="text-center">Termék bevételezés</h3>
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
                            Beszallító
                        </th>
                        <th class="text-center">
                            Termékneve
                        </th>
                        <th class="text-center">
                            Termék ára netto
                        </th>
                        <th class="text-center">
                            Mennyiség
                        </th>
                        <th class="text-center">
                            Új ár netto
                        </th>
                        <th class="text-center">
                            Új Mennyiség
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
                            <select class="form-control" id='meg' name='beszallito_id[0]'
                                    onChange='megrendelo(this,"0")'>
                                <option value="">Beszállító választás</option>
                                <?php
                                while ($sor = $beszallitoleker->fetch(PDO::FETCH_ASSOC)) {
                                    print "<option value='" . $sor['beszallito_id'] . "' >" . $sor['beszallito_nev'] . "</option>";
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
                            <input type="text" name='termek_mennyiseg[0]' id='badd100' value="" placeholder='Mennyiség'
                                   class="form-control"
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" required/>
                        </td>

                        <td>
                            <input type="text" id="uadd100" value="" name='Ujáranetto[0]'
                                   placeholder='Új ár netto' class="form-control"
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni">
                        </td>
                        <td>
                            <input type="text" name='uj_termek_mennyiseg[0]' id='ubadd100' value='' placeholder='Új
                            Mennyiség'
                                   class="form-control"
                                   pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" required/>
                        </td>
                        <td>
                            <select class="form-control" data-live-search="true"
                                    name="termek_megyseg[0]" id="egyseg10"
                                    placeholder="Mennyiségi egysége" required>
                                <option placeholder="Mennyiségi egység választás">Mennyiségi egység választás</option>
                                <option value="Db">Darab</option>
                                <option value="Kg">Kilogramm</option>
                                <option value="L">Liter</option>
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
                url: "get_bevet.php",
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
                    "<td><input class='form-control' id='meg1" + i + "' " +
                    "value=''><input type='hidden'  id='meg2" + i + "' name='beszallito_id[" + i + "]'></td>" +
                    "<td><select class='form-control' " +
                    " onChange='select2(this," + i + ")'id='add" + i + "'  name='termek_id[" + i + "]'><option " +
                    "value=''>Termék választás</option></select></td>" +
                    "<td><input  name='termek_ara_netto[" + i + "]' type='text'  id='add100" + i + "' value='' " +
                    "placeholder='Termék ára netto' class='form-control input-md'pattern='[0-9\s]{1,50}'" +
                    "title='Számokat lehet beütni' required/></td>" +
                    "<td><input  name='termek_mennyiseg[" + i + "]' id='badd100" + i + "' value='' type='text' " +
                    "placeholder='Mennyiség'  class='form-control input-md'></td>" +
                    "input-md'pattern='[0-9\s]{1,50}'  title='Számokat lehet beütni' disabled></td>" +
                    "<td><input  name='Ujáranetto[" + i + "]' type='text' placeholder='Új ár netto' class='form-control " +
                    "input-md'pattern='[0-9\s]{1,50}' id='uadd100" + i + "' value='' title='Számokat lehet " +
                    "beütni'></td>" +
                    "<td><input  name='uj_termek_mennyiseg[" + i + "]' type='text' placeholder='Új Mennyiség'  " +
                    "id='ubadd100" + i + "' class='form-control input-md'></td>" +
                    "<td><select class='form-control'id='egyseg1" + i + "' value=''  data-live-search='true' " +
                    "name='termek_megyseg[" + i + "]' placeholder='Mennyiségi egysége' required> <option " +
                    "placeholder='Mennyiségi egység választás'>Mennyiségi egység választás</option> <option " +
                    "value='Db'>Darab</option> <option value='Kg'>Kilgramm</option> <option value='L'>Liter</option> " +
                    "<option value='M'>Méter</option> <option value='M3'>Köbméter</option> </select></td>" +
                    "<td><input  name='Rögzítésiidő[" + i + "]' type='text' placeholder='Rögzítési idő'  value='<?php echo $date = date('Y-m-d'); ?>' class='form-control'/></td>"
                );
                $.each(jqXHR, function (index, value, i) {
                    var eredmeny = jqXHR['eredmeny'];
                    var i = 1;
                    $('#meg1' + jqXHR['i']).val(eredmeny['beszallito_nev']).css("border-color", "blue").prop('enabled', true);
                    $('#meg2' + jqXHR['i']).val(eredmeny['beszallito_id']).css("border-color", "blue").prop
                    ('enabled', true);

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
        vissza_erkezett.done(function (jqXHR) {
            var adat = jqXHR['adat'];
            var termek_ara_netto = jqXHR['termek_ara_netto'];
            var termek_mennyiseg = jqXHR['termek_mennyiseg'];
            var darab4 = adat['termek_mennyiseg'] === '0';
            var netto = adat['termek_ara_netto'] === '0';
            var ido = adat['termek_date'] === '0000-00-00';

            if (netto === false) {
                $('#add100').val(adat['termek_ara_netto']).css("border-color", "red").prop('enabled', true);
                $('#uadd100').val(adat['termek_ujnetto']).css("border-color", "green").prop('enabled', true);
                $('#madd100').val(adat['termek_megyseg']).css("border-color", "red").prop('enabled', true);
            }
            else {
                $('#add100').val(adat['termek_ara_netto']).css("border-color", "green").prop('enabled', true);
                $('#uadd100').val(adat['termek_ujnetto']).css("border-color", "red").prop('enabled', true);

            }
            if (darab4 === false) {
                $('#badd100').val(adat['termek_mennyiseg']).css("border-color", "red").prop('enabled', true);
                $('#ubadd100').val(adat['uj_termek_mennyiseg']).css("border-color", "green").prop('enable', true);
            }
            else {
                $('#badd100').val(adat['termek_mennyiseg']).css("border-color", "green").prop('enabled', true);
                $('#ubadd100').val(adat['uj_termek_mennyiseg']).css("border-color", "red").prop('enabled', true);

            }

            if (ido === false) {
                $('#dadd100').val(adat['termek_date']).css("border-color", "green");
            }
            else if (ido === true) {

            }

        });

    }
</script>

<script>
    function select2(val, i) {

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
            alert("HIBA: " + textStatus + jqXHR);
        });
        vissza_erkezett.done(function (jqXHR) {
            var adat = jqXHR['adat'];
            var termek_ara_netto = jqXHR['termek_ara_netto'];
            var termek_mennyiseg = jqXHR['termek_mennyiseg'];
            var darab4 = adat['termek_mennyiseg'] === '0';
            var netto = adat['termek_ara_netto'] === '0';
            var ido = adat['termek_date'] === '0000-00-00';

            if (netto === false) {
                $('#add100' + jqXHR['i']).val(adat['termek_ara_netto']).css("border-color", "red").prop('enabled', true);
                $('#uadd100' + jqXHR['i']).val(adat['termek_ujnetto']).css("border-color", "green").prop('enabled',
                    true);
                $('#madd100' + jqXHR['i']).val(adat['termek_megyseg']).css("border-color", "red").prop('enabled',
                    true);

            }
            else {
                $('#add100' + jqXHR['i']).val(adat['termek_ara_netto']).css("border-color", "green").prop('enabled',
                    true);
                $('#uadd100' + jqXHR['i']).val(adat['termek_ujnetto']).css("border-color", "red").prop('enabled',
                    true);
            }
            if (darab4 === false) {
                $('#badd100' + jqXHR['i']).val(adat['termek_mennyiseg']).css("border-color", "red").prop('enabled',
                    true);
                $('#ubadd100' + jqXHR['i']).val(adat['uj_termek_mennyiseg']).css("border-color", "green").prop
                ('enable', true);
            }
            else {
                $('#badd100' + jqXHR['i']).val(adat['termek_mennyiseg']).css("border-color", "green").prop('enabled',
                    true);
                $('#ubadd100' + jqXHR['i']).val(adat['uj_termek_mennyiseg']).css("border-color", "red").prop
                ('enabled', true);
            }

            if (ido === false) {
                $('#dadd100' + jqXHR['i']).val(adat['termek_date']).css("border-color", "green");
            }
            else if (ido === true) {
            } else {

            }
        });
    }
</script>
<script>
    var globalis_termek_tomb = "";

    $(document).ready(function () {
        var y = +1;
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
                url: "get_termek_bevet.php",
                data: {
                    globalis_termek_tomb: globalis_termek_tomb,
                    y: y
                }
            });
            vissza.fail(function (jqXHR, textStatus) {
                alert("hiba: " + textStatus + jqXHR);
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


