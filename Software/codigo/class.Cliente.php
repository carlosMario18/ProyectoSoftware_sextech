<?php

error_reporting(E_ALL);

/**
 * modelo sin título - class.Cliente.php
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
 * include Compra
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Compra.php');

/* user defined includes */
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C91-includes begin
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C91-includes end

/* user defined constants */
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C91-constants begin
// section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C91-constants end

/**
 * Short description of class Cliente
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Cliente
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute idCliente
     *
     * @access public
     * @var int
     */
    public $idCliente = 0;

    /**
     * Short description of attribute Nombre
     *
     * @access public
     * @var String
     */
    public $Nombre = null;

    /**
     * Short description of attribute Correo
     *
     * @access public
     * @var String
     */
    public $Correo = null;

    // --- OPERATIONS ---

    /**
     * Short description of method getNombres
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getNombres()
    {
        $returnValue = null;

        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C9D begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C9D end

        return $returnValue;
    }

    /**
     * Short description of method setNombres
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String Nombre
     * @return void
     */
    public function setNombres( String $Nombre)
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C9F begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000C9F end
    }

    /**
     * Short description of method getIdCliente
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getIdCliente()
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CA1 begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CA1 end
    }

    /**
     * Short description of method setIdCliente
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  int idCliente
     * @return void
     */
    public function setIdCliente($idCliente)
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CA3 begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CA3 end
    }

    /**
     * Short description of method getCorreo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getCorreo()
    {
        $returnValue = null;

        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CAC begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CAC end

        return $returnValue;
    }

    /**
     * Short description of method setCorreo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String Correo
     * @return void
     */
    public function setCorreo( String $Correo)
    {
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CAE begin
        // section -64--88-20-25-1292b48:187c8c76341:-8000:0000000000000CAE end
    }

} /* end of class Cliente */

?>