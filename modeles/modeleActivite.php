<?php
	include_once("database.php");

	class Activite {
		
		function __construct() {
			$this->db = new Database();
			$this->db->getPDO();			
		}

		// LISTER ACTIVITE

		public function listerAct() {
			return $this->db->query("select * from activite natural join typactivite natural join etablissement");
		}

		// LISTER TYPE ACTIVITE

		public function listerTypAct() {
			return $this->db->query("select * from typactivite");
		}

		// LISTER ETABLISSEMENT

		public function listerEtab() {
			return $this->db->query("select * from etablissement");
		}

		// AJOUTER ACTIVITE

		public function ajouterAct($titre, $description, $idtypact, $idetab) {
			return $this->db->query("insert into activite (idact, titre, description, idtypact, idetab) values (default, '$titre', '$description', '$idtypact', '$idetab')");
		}

		// MODIFIER ACTIVITE

		public function modifierAct($idact, $titre, $description, $idtypact, $idetab) {
			$this->db->query("update activite set titre = '$titre' where idact = '$idact'");
			$this->db->query("update activite set description = '$description' where idact = '$idact'");
			$this->db->query("update activite set idtypact = '$idtypact' where idact = '$idact'");
			$this->db->query("update activite set idetab = '$idetab' where idact = '$idact'");					
		}

		// SUPPRIMER ACTIVITE

		public function supprAct($idact) {
			$this->db->query("delete from activite cascade where idact = '$idact'");
		}
	}
?>