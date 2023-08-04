<?php

error_reporting(E_ALL);

/**
 * modelo sin título - class.Compra.php
 *
 * $Id$
 *
 * This file is part of modelo sin título.
 *
 * Automatically generated on 02.05.2023, 14:21:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Cliente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Cliente.php');

/* user defined includes */
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C92-includes begin
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C92-includes end

/* user defined constants */
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C92-constants begin
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C92-constants end

/**
 * Short description of class Compra
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Compra
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute idCompra
     *
     * @access public
     * @var Int
     */
    public $idCompra = null;

    /**
     * Short description of attribute totalProductos
     *
     * @access public
     * @var Int
     */
    public $totalProductos = null;

    /**
     * Short description of attribute Fecha
     *
     * @access public
     * @var int
     */
    public $Fecha = 0;

    /**
     * Short description of attribute valor
     *
     * @access public
     * @var int
     */
    public $valor = 0;

    // --- OPERATIONS ---

    /**
     * Short description of method getIdCompra
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return int
     */
    public function getIdCompra()
    {
        $returnValue = (int) 0;

        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC0 begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC0 end

        return (int) $returnValue;
    }

    /**
     * Short description of method setIdCompra
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  int idCompra
     * @return void
     */
    public function setIdCompra($idCompra)
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC2 begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC2 end
    }

    /**
     * Short description of method getTotalProductos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return int
     */
    public function getTotalProductos()
    {
        $returnValue = (int) 0;

        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC4 begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC4 end

        return (int) $returnValue;
    }

    /**
     * Short description of method setTotalProductos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  int totalProductos
     * @return void
     */
    public function setTotalProductos($totalProductos)
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC6 begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC6 end
    }

    /**
     * Short description of method getFecha
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return int
     */
    public function getFecha()
    {
        $returnValue = (int) 0;

        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC8 begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CC8 end

        return (int) $returnValue;
    }

    /**
     * Short description of method setFecha
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  int Fecha
     * @return void
     */
    public function setFecha($Fecha)
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CCA begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CCA end
    }

    /**
     * Short description of method getValor
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return int
     */
    public function getValor()
    {
        $returnValue = (int) 0;

        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CCC begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CCC end

        return (int) $returnValue;
    }

    /**
     * Short description of method setValor
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  int valor
     * @return void
     */
    public function setValor($valor)
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CCE begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CCE end
    }

} /* end of class Compra */

?>