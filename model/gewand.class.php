<?php
	class gewand {
		
		private $id;
		private $bezeichnung;
		private $farbe;
		private $groesse;
		private $kategorie;
		private $tragefaktor;
		
		function __construct($id,$bezeichnung, $farbe, $groesse, $kategorie, $tragefaktor){
			$this->id=$id;
			$this->bezeichnung=$bezeichnung;
			$this->farbe=$farbe;
			$this->groesse=$groesse;
			$this->kategorie=$kategorie;
			$this->tragefaktor=$tragefaktor; 
		}
		
		function __get($name){ //Feldname
				return $this->$name; 
			}
		
	}

?>