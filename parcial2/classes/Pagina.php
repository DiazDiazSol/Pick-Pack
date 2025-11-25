<?PHP
class Pagina
{

    private $nombre;
    private $titulo;

    /**
     * Valida el identificador de una vista y devuelve un objeto con los datos de la misma
     * @param ?string $vista El identificador de la vista, o null
     *
     * @return Pagina devuelve objeto Vista
     */
    public static function validar_pagina(?string $pagina)
    {

        //OBTENEMOS TODOS LOS DATOS DE NUESTRO JSON
        $JSON = file_get_contents('datos/secciones.json');
        $PaginaData = json_decode($JSON);

        //RECORREMOS EL JSON
        foreach ($PaginaData as $item) {

            //SI SE ECUENTRA UNA VISTA QUE COORDINE CON LA SOLICITADA
            if ($item->nombre == $pagina) {

                //CHECKEAMOS QUE ESTÉ ACTIVA
                if ($item->activa) {

                    //CHECKEAMOS QUE NO SEA RESTRINGIDA
                    if ($item->restringida) {
                        //SI ES RESTRINGIDA, DEVOLVEMOS DATOS 403
                        $paginaNoDisp = new self();

                        $paginaNoDisp->nombre = '403';
                        $paginaNoDisp->titulo = 'Página Restringida';

                        return $paginaNoDisp;
                    } else {
                        //DEVOLVEMOS LOS DATOS DE LA VISTA
                        $objPagina = new self();

                        $objPagina->nombre = $item->nombre;
                        $objPagina->titulo = $item->titulo;

                        return $objPagina;
                    }
                } else {
                    //DEVOLVEMOS LOS DATOS DE PÁGINA NO DISPONIBLE
                    $paginaNoDisp = new self();

                    $paginaNoDisp->nombre = 'no_disponible';
                    $paginaNoDisp->titulo = 'Página no disponible por el mometo';


                    return $paginaNoDisp;
                }
            }
        }

        //SI NO SE ENCUENTRA, DEVOLVEMOS DATOS DE 404
        $pagina404 = new self();

        $pagina404->nombre = "404";
        $pagina404->titulo = "Página no Econtrada";


        return $pagina404;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }
}
