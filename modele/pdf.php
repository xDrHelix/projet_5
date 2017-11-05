<?php

require_once 'fpdf.php';

class PDF extends FPDF {
	// En-tête
	function Header() {
	    // Police Arial gras 15
	    $this->SetFont('Arial','B',15);
	    // Titre
	    $this->Cell(187,10,'Fiche JDR',1,0,'C');
	    // Saut de ligne
	    $this->Ln(15);
	}

	// Pied de page
	function Footer() {
	    // Positionnement à 1,5 cm du bas
	    $this->SetY(-15);
	    // Police Arial italique 8
	    $this->SetFont('Arial','I',8);
	    // Numéro de page
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}