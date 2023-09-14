<?php

class Pagination extends CrudCtrl
{
    protected $tabla;
    private $porPag;
    private $page;
    private $numPages;
    private $numProductos;


    //TODO: Metodo para validar la pagina 2.0




    public function __construct($tabla, $porPag, $page, $datos = array())
    {
        $this->tabla = $tabla;
        $this->porPag = $porPag;
        $this->page = $page;

        $this->numProductos = count($this->getById($datos));
        $this->numPages = (int) ceil(intval($this->numProductos) / intval($this->porPag));
        $this->page = $this->vlt_Page($page);
        // var_dump($this);
    }

    private function vlt_Page($page)
    {
        if ($page < 0) {
            $page = 0;
        } elseif ($page >= $this->numPages) {
            $page = $this->numPages - 1;
        }
        // var_dump($page);

        return $page;
    }

    public function getLimit()
    {
        $productoInicio = $this->page * $this->porPag;
        // var_dump($this->page);
        $limit = " limit $productoInicio, $this->porPag ";
        return $limit;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function previus()
    {
        if ($this->page == 0) {
            return 1;
        }

        return $this->page;
    }

    public function next()
    {
        if ($this->page + 2 > $this->numPages) {
            return $this->page + 1;
        }

        return $this->page + 2;
    }
}
