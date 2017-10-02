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
                            Megrendelő törlése
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
                                <?php
                                while ($sor = $keres->fetch(PDO::FETCH_ASSOC)){
                                    print "<option value='".$sor['megnevezes_id']."' >".$sor['megnevezes']."</option>";
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
