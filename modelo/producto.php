<?php
class producto
{
    public $id;
    public $nombre;
    public $codigo;
    public $precio;
    public $marca;
    public $proveedor = array();
    
    public function mostrardatos()
        {
            echo 'Datos del producto<br>';
            echo 'id: '.$this->id.'<br>';
            echo 'nombre: '.$this->nombre.'<br>';
            echo 'codigo: '.$this->codigo.'<br>';
            echo 'precio: '.$this->precio.'<br>';
            echo 'marca: '.$this->marca.'<br>';
            echo 'datos de los proveedores';
            foreach ($this->proveedor as $pv)
            {
                echo'id: '.$pv->id.'<br>';
                echo'nombre: '.$pv->nombre.'<br>';
                echo'cuil: '.$pv->cuil.'<br>';
                echo'direccion: '.$pv->direccion.'<br>';
                echo'telefono: '.$pv->telefono.'<br>';
            }

        }






}