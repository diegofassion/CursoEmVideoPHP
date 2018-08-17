<?php

interface Controlador { //INTERFACE DO ENCAPSULAMENTO
    public function ligar(); 
    public function desligar();
    public function abrirMenu();   //Quando está escrito abstract quer 
    public function fecharMenu();  //dizer que o código será desenvolvido fora
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}
