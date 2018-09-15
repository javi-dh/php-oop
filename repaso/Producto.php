<?php

	class Producto {
		// public - visible desde afuera siempre
		// protected - visible solo para las clases hijas
		// private - visible solo para la misma clase

		protected $name;
		protected $price;

		public function __construct($name, $price) {
			$this->name = $name;
			$this->price = $price;
		}

		public function getPdtoData(){
			return $this->name . ' ' . $this->price;
		}
	}
