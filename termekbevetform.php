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
    <form name="tovabb" method="post" >
        <div class="row">
            <div class="col-md-4">
                <p>Termék neve</p>
                <p><span class="glyphicon "></span>Termék ára netto</p>
                <p><span class="glyphicon "></span>Mennyiség</p>
                <p><span class="glyphicon "></span>Mennyiségi egység</p>
                <p><span class="glyphicon "></span>Rögzítési idő</p>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="termekneve" name="termekneve" placeholder="Termék neve" type="text"
                               pattern="[A-Za-z,öÖüÜóÓőŐúÚéÉáÁűŰíÍ\s]{3,50}"  title="Számok és más karakterek nem lehetnek" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="termeknetto" name="termeknetto" placeholder="Termék ára (Netto)" type="text"
                               pattern="[0-9\s]{1,50}"  title="Számokat lehet beütni"  required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="mennyiseg" name="mennyiseg" placeholder="Mennyiség"
                               pattern="[0-9\s]{1,50}"  title="Számokat lehet beütni" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <select class="form-control" data-live-search="true" id="mennyisegegyseg" name="mennyisegegyseg"
                                placeholder="Mennyiségi egysége" required>
                            <option placeholder="Mennyiségi egység választás">Mennyiségi egység választás</option>
                            <option value="Db">Db</option>
                            <option value="Kg">Kg</option>
                            <option value="Liter">Liter</option>
                            <option value="M">M</option>
                            <option value="M3">M3</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="rogzitesiido" name="rogzitesiido" value="<?php echo $date = date('Y-m-d'); ?>" type="text" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" id="add_row" name="tovabb" value="0" type="submit">Tovabb</button>
                        <button class="btn-danger pull-left" id="add_row" name="rogzit" value="rogzit"
                                type="submit">Rögzít</button>
                    </div>
                </div>
            </div>

        </div>
</div>
