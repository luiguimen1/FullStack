<?php
if ($_POST) {
    ?>
    <form id="forMate" name="forMate">
        <fieldset class="col-12">
            <legend>Operaciones Matematicas</legend>
            <div class="form-group col-lg-6">
                <label for="Numero1">Numero 1</label>
                <input type="text" class="form-control" id="num1" required maxlength="6" minlength="1" name="num1" aria-describedby="Num1Help" placeholder="Ingrese un numero">
                <small id="Num1Help" class="form-text text-muted">Debe ingresar un numero sin puntos ni tildes</small>
            </div>

            <div class="form-group col-lg-6">
                <label for="Numero2">Numero 1</label>
                <input type="text" class="form-control" required maxlength="6" minlength="1" id="num2" name="num2" aria-describedby="Num2Help" placeholder="Ingrese un numero">
                <small id="Num2Help" class="form-text text-muted">Debe ingresar un numero sin puntos ni tildes</small>
            </div>
            <div class="form-group col-lg-6">
                <label for="Numero2">Operación</label>
                ´<select id="opera" required class="form-control" name="opera">
                    <option value="" selected>Seleccion</option>
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">División</option>
                    <option value=4>Multiplicación</option>
                    <option value=4>Exponente</option>
                </select>
                <small id="Num2Help" class="form-text text-muted">Debe ingresar un numero sin puntos ni tildes</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
    <?php
} else {
    header("location: ./");
}
?>