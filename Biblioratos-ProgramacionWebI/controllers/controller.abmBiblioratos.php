<?php
    require_once "models/model.biblioratos.php";

    class ABMBiblioratosController{
        public function init(){
            $model = new ABMBiblioratos();
            #Segun la orden es lo que va a mostrar
            if(isset($_GET['order'])){
                $order = $_GET['order'];
                if($order == 'nuevo'){
                    include "views/modules/view.biblioratos.form.php";
                }
                elseif($order == 'insertar'){
                    $numero = $_POST['numero'];
                    $zona = $_POST['zona'];
                    $cantidad_total = $_POST['cantidad_total'];
                    $cantidad_carpetas = $_POST['cantidad_carpetas'];
                    
                    #lista_carpetas es usado por el view.abmBiblioratos.lista.php
                    $lista_biblioratos = $model->agregarBibliorato($numero,
                                                                    $zona,
                                                                    $cantidad_total,
                                                                    $cantidad_carpetas);

                    #modificar 
                    include "views/modules/view.abmBiblioratos.lista.php";
                }

                ##BORRAR
                #elseif($order == 'borrar'){
                #    $id = $_GET['id'];
                #    $lista_biblioratos = $model->borrarBiblioratos($id);
                #    include "views/modules/view.abmBiblioratos.lista.php";                    
                #}
#
                ##MODIFICAR
                #elseif($order == 'modificar'){
                #    $id = $_GET['id'];
                #    $biblioratos = $model->buscarBiblioratos($id);
                #    include "views/modules/view.biblioratos.form.php";
                #}

                elseif($order == 'cambiar'){
                    $id = $_GET['id'];
                    $numero = $_POST['apellido'];
                    $zona = $_POST['nombre'];
                    $cantidad_total = $_POST['fechaNacimiento'];
                    $cantidad_carpetas = $model->cambiarBibliorato($id,$dni,$apellido,$nombre,
                                                            $celular,$telefono,$email,
                                                            $ultimaInsc,$bibliorato,
                                                            $baja,$falta_carpeta);
                    include "views/modules/view.abmBiblioratos.lista.php";                      
                }
            }
            #Si order no esta pedida, mostrar solo la lista
            else{
                $lista_biblioratos = $model->listar();
                
                include "views/modules/view.abmBiblioratos.lista.php";
            }


        }
    }





?>