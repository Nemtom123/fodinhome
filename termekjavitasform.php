<form name="jav" method="post" class="ajax">
    <div class="alert alert-success js-alert hidden" role="alert">
        Sikeres rögzítés!
    </div>
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
                            Termék javítás
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            1
                        </td>
                        <td>
                            <select class="form-control" id="sel1" name="jav" onChange="this.form.submit()">
                                <option value="" class="center">     Termék választás    </option>
                                <?php
                                while ($sor = $bekeres->fetch(PDO::FETCH_ASSOC)){
                                    print "<option value='".$sor['termek_id']."' >".$sor['termekneve']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
