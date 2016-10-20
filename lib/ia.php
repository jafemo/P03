<?php
//////INICIAMOS LA CLASE//////
class ia{

	private $columna= 1;
	private $fila= 1;

//////ESTABLECEMOS LOS GETERS//////
	public function getColumna(){
		return $this->columna;
	}

	public function getFila(){
		return $this->fila;
	}
//////Y AHORA LOS SETTERS CON DOS VARIABLES DIFERENTES//////
	public function setColumna($col){
		if($col>3){
			$this->columna=3;
		}elseif ($col<0) {
			$this->columna=0;
		}else {
			$this->columna = $col;
		}
	}
	public function setFila($fil){
		if ($fil>3) {
			$this->fila = 3;
		}elseif ($fil<0) {
			$this->fila = 0;
		}else {
			$this->fila=$fil;
		}
	}

public function randompos(){
	$this->columna=rand(0,3);
	$this->fila=rand(0,3);
}
}
?>
