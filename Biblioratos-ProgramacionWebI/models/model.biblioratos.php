<?php
    class ABMBiblioratos{
        
        private function tablaBiblioratos(){
            if (!isset($_SESSION['biblioratos'])){
                $_SESSION['biblioratos'] = array(
                    array('id' => 1,'numero'=>3001,
                            'zona' => 'Rivadavia', 'cantidad_total' => 30,
                            'cantidad_carpetas'=>15),
                    array('id' => 2,'numero'=>3002,
                    'zona' => 'Rawson', 'cantidad_total' => 30,
                    'cantidad_carpetas'=>20),
                );
            }
            return $_SESSION['biblioratos'];
        }

        public function agregarBibliorato($numero,$zona,$cantidad_total,$cantidad_carpetas){
            $id = count($_SESSION['biblioratos']) + 1;
            #Creo la nueva fila con los datos del bibliorato
            $newFila = array('id' => $id,'numero'=>$numero,
                            'zona' => $zona, 'cantidad_total' => $cantidad_total,
                            'cantidad_carpetas'=>$cantidad_carpetas);
            #Agrego a la lista la nueva fila
            array_push($_SESSION['biblioratos'],$newFila);
            #Retorno la tabla de biblioratos
            return $this->tablaBiblioratos();
        }

        #public function borrarBiblioratos($id){
        #    foreach($_SESSION['biblioratos'] as $indice => $fila){
        #        #Al encontrar la fila con el id borra la fila dando su indice
        #        if($fila['id'] == $id){
        #            unset($_SESSION['biblioratos'][$indice]);
        #            #Hace break para terminar el for
        #            break;
        #        }
        #    }
        #    return $this->tablaBiblioratos();
        #}

        public function buscarBiblioratos($id){
            foreach($_SESSION['biblioratos'] as $indice => $fila){
                #Al encontrar la fila con el id borra la fila dando su indice
                if($fila['id'] == $id){
                    return $_SESSION['biblioratos'][$indice];
                }
            }
            return $this->tablaBiblioratos();
        }

        #public function cambiarCarpeta($id,$numero,$zona,$cantidad_total,$cantidad_carpetas){
        #    foreach($_SESSION['biblioratos'] as $indice => $fila){
        #        #Al encontrar la fila con el id cambio los datos
        #        if($fila['id'] == $id){
        #            if ($numero != ""){
        #                $_SESSION['biblioratos'][$indice]['numero'] = $numero;
        #            }
        #            if ($cantidad_total != ""){
        #                $_SESSION['biblioratos'][$indice]['cantidad_total'] = $cantidad_total;
        #            }
        #            if($cantidad_carpetas != ""){
        #                $_SESSION['biblioratos'][$indice]['cantidad_carpetas'] = $cantidad_carpetas;
        #            }
        #            
        #        }
        #    }
        #    return $this->tablaBiblioratos();           
        #}

        public function listar(){
            return $this->tablaBiblioratos();
        }
    }



?>