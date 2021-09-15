<div class="container-fluid px-5" id="biblioratos">
    <h1 class="text-center">Biblioratos</h1>
    <div class="row pt-4 justify-content-between">
        <div class="col-4">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        
        </div>
        <div class="col-auto">
            <a class="btn btn-primary mb-3" href="index.php?action=abmBiblioratos&order=nuevo">Nuevo Bibliorato</a>
        </div>
    </div>
    <div class="row">
        <div class="col" id="tablaFija">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Numero</th>
                    <th>Zona</th>
                    <th>Cantidad Total</th>
                    <th>Cantidad Carpetas</th>
                    
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>
                <?php
                #Muestra las filas segun la cantidad de biblioratos
                    if(isset($lista_biblioratos)){
                        foreach($lista_biblioratos as $fila){
                            
                            echo "<tr>
                                <td>$fila[id]</td>
                                <td>$fila[numero]</td>
                                <td>$fila[zona]</td>
                                <td>$fila[cantidad_total]</td>
                                <td>$fila[cantidad_carpetas]</td>
                                <td><a href=\"index.php?action=abmBiblioratos&order=modificar&id=$fila[id]\">Modificar</a></td>
                                <td><a href=\"index.php?action=abmBiblioratos&order=borrar&id=$fila[id]\">Borrar</a></td>
                                </tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</div>
