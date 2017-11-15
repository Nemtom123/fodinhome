<form name="jav" method="post" >
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered  table-hover"  id="tab_logic">
                    <thead class="alert-success">
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Megrendelő javítása
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
                                <option value="">Megrendelő választás</option>
                                <?php
                                while ($sor = $megrendelo->fetch(PDO::FETCH_ASSOC)){
                                    print "<option value='".$sor['megrendelo_id']."' >".$sor['megrendelocsaladi']
                                        . ' '. $sor['megrendelokereszt'] . ' ' . ' ->' . ' ' .$sor['megrendelokod']."</option>";
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
