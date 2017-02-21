<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author Jefferson
 */
class Caneta {
    //put your code here
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;


    function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->tampada = TRUE;
    }
    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCor() {
        return $this->cor;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }


}
