<?php

class Fiche extends Modele {

	public function __construct() {

	}

	public function recupFiches($idU) {
		$sql = 'select *'
				. ' from personnages'
				. ' where id_utilisateur = ?'
                . ' order by id desc';
        $fiches = $this->executerRequete($sql, array($idU));
        return $fiches;
	}

	public function recupFiche($idU, $idFiche) {
		$sql = 'select *'
				. ' from personnages'
				. ' where id_utilisateur = ?'
				. ' and id = ?';
        $donneesFiche = $this->executerRequete($sql, array($idU, $idFiche));
        return $donneesFiche->fetch();
	}

	public function ajouterFiche($idU, $nom, $race, $sexe, $classe, $metier, $force, $dexterite, $constitution, 
                                $intelligence, $sagesse, $charisme, $equipement, $objets, $competences, $sorts) {

		$sql = 'insert into personnages(`id_utilisateur`, `nom`, `race`, `sexe`, `classe`, `pv`, `pm`, `metier`, `equipement`, `objets`, `competences`, `sorts`, `force`, `dexterite`, `constitution`, `intelligence`, `sagesse`, `charisme`)'
                . ' values(?, ?, ?, ?, ?, "120", "100", ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $fiches = $this->executerRequete($sql, array($idU, $nom, $race, $sexe, $classe, $metier, $equipement,
        		$objets, $competences, $sorts, $force, $dexterite, $constitution, $intelligence, $sagesse, $charisme));
	}

	public function supprFiche($idFiche) {
		$sql = 'delete from personnages where id = ?';
		$fiches = $this->executerRequete($sql, array($idFiche));
	}

	public function modifierFiche($nom, $race, $sexe, $classe, $metier, $niveau, $experience,
                                $force, $dexterite, $constitution, $intelligence, $sagesse, $charisme, $equipement,
                                $objets, $competences, $sorts, $pv, $pm, $argent, $idU, $idFiche) {
		$sql = 'update personnages set `nom` = ? ,'
				. ' `race` = ?,'
				. ' `sexe` = ?,'
				. ' `classe` = ?,'
				. ' `metier` = ?,'
				. ' `niveau` = ?,'
				. ' `experience` = ?,'
				. ' `force` = ?,'
				. ' `dexterite` = ?,'
				. ' `constitution` = ?,'
				. ' `intelligence` = ?,'
				. ' `sagesse` = ?,'
				. ' `charisme` = ?,'
				. ' `equipement` = ?,'
				. ' `objets` = ?,'
				. ' `competences` = ?,'
				. ' `sorts` = ?,'
				. ' `pv` = ?,'
				. ' `pm` = ?,'
				. ' `argent` = ?'
				. ' where `id_utilisateur` = ?'
				. ' and `id` = ?';
        $fiches = $this->executerRequete($sql, array($nom, $race, $sexe, $classe, $metier, $niveau, $experience,
                                $force, $dexterite, $constitution, $intelligence, $sagesse, $charisme, $equipement,
                                $objets, $competences, $sorts, $pv, $pm, $argent, $idU, $idFiche));
	}

	public function recupFichePublic($idFiche) {
		$sql = 'select *'
				. ' from personnages'
				. ' where id = ?';
        $donneesFiche = $this->executerRequete($sql, array($idFiche));
        return $donneesFiche->fetch();
	}
}