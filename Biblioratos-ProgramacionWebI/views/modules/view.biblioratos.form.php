
<div class="container-fluid px-5" id="nuevoBlibliorato">
    <?php
        if(!isset($biblioratos)){
            echo "<h2 class=\"titulo text-center\">Nuevo bibliorato</h2>";
        }
        else{
            echo "<h2 class=\"titulo text-center\">Modificar bibliorato</h2>";
        }
    ?>

    <div class="row pt-4 justify-content-center">
        <?php
            if(isset($biblioratos)){
                echo "  <div class=\"col-3\">
                            <h3>Datos actuales</h3>
                            <p>Numero: $biblioratos[numero] </p>
                            <p>Zona: $biblioratos[zona] </p>
                            <p>Cantidad Total: $biblioratos[cantidad_total] </p>
                            <p>Cantidad Carpetas: $biblioratos[cantidad_carpetas] </p>
                            
                        </div>";           
            }
        ?>
        <div class="col-9">
            <form 
                <?php
                    if(!isset($biblioratos)){
                        echo "action=\"index.php?action=abmBiblioratos&order=insertar\"";
                    }
                    else{
                        echo "action=\"index.php?action=abmBiblioratos&order=cambiar&id=$id\"";
                    }
                ?>

                
                method="POST" 
                class="row formulario justify-content-between">
                <fieldset class="col-4">
                    <legend class="w-auto">Datos personales</legend>
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" name ="dni" id="dni" placeholder="Documento">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name ="apellido" id="usuario" placeholder="Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name ="nombre" id="nombre" placeholder="Nombre">
                    </div>
                </fieldset>
                <fieldset class="col-3">
                    <legend>Datos de contácto</legend>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="tel" class="form-control" name="celular" id="celular" placeholder="Celular">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico">
                    </div>
                </fieldset>
                <fieldset class="col-4">
                    <legend>Datos de inscripción</legend>
                    <div class="mb-3">
                        <label for="ultimaInsc" class="form-label">Última inscripción</label>
                        <input type="date" class="form-control" name="ultimaInsc" id="ultimaInsc">
                    </div>
                    <div class="mb-3">
                        <label for="bibliorato" class="form-label">N° de Bibliorato</label>
                        <input type="tel" class="form-control" name="bibliorato" id="bibliorato" placeholder="Bibliorato">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name= "dado_de_baja"  id="dado_de_baja">
                        <label class="form-check-label" for="dado_de_baja">Dado de baja</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name= "falta_carpeta"  id="falta_carpeta">
                        <label class="form-check-label" for="falta_carpeta">Falta carpeta</label>
                    </div>
                </fieldset>

                <div class="row mt-5 justify-content-center">
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary mb-3">
                            <?php
                                if(!isset($biblioratos)){
                                    echo "Agregar";
                                }
                                else{
                                    echo "Modificar";
                                }
                            ?>
                        </button>
                    </div>
                            </div>

            </form>
        </div>
    </div>
</div>