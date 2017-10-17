<form name="jav" method="post" >
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered  table-hover"  id="tab_logic">
                    <thead class="alert-danger">
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Beszállító törlése
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td class="text-center" style="color: #aa0000">
                            1
                        </td>
                        <td>
                            <select class="form-control" id="sel1" name="jav" onChange="this.form.submit()">
                                <option>Törlendő választása</option>
                                <?php
                                while ($sor = $keres->fetch(PDO::FETCH_ASSOC)){
                                    print "<option value='".$sor['beszallito_id']."' >".$sor['beszallito_nev']."</option>";
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
