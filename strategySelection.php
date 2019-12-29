<?php
class strategySelection {

	var $patientIdentifier;

	var $incidentDate;
	var $incidentTime;

	var $strategySelectionIdentifier;
	var $strategyOne;
	var $strategyTwo;
	var $strategyThree;
	var $strategyFour;
	var $strategyFive;
	var $strategySix;
	var $strategySeven;
	var $strategyEight;
	var $strategyNine;
	var $strategyTen;
	var $strategyEleven;
	var $strategyTwelve;
	var $strategyList;

	function __construct($sOne, $sTwo, $sThree, $sFour, $sFive, 
		$sSix, $sSeven, $sEight, $sNine, $sTen, $sEleven, $sTwelve) {

		$this->strategyOne = $sOne;
		$this->strategyTwo = $sTwo;
		$this->strategyThree = $sThree;
		$this->strategyFour = $sFour;
		$this->strategyFive = $sFive;
		$this->strategySix = $sSix;
		$this->strategySeven = $sSeven;
		$this->strategyEight = $sEight;
		$this->strategyNine = $sNine;
		$this->strategyTen = $sTen;
		$this->strategyEleven = $sEleven;
		$this->strategyTwelve = $sTwelve;
	}

	function strategiesSelected() {
		if($this->strategyOne == true) {
			$this->strategyList += $strategyOne;
		}

		if($this->strategyTwo == true) {
			$this->strategyList += $strategyTwo;
		}

		if($this->strategyThree == true) {
			$this->strategyList += $strategyThree;
		}

		if($this->strategyFour == true) {
			$this->strategyList += $strategyFour;
		}

		if($this->strategyFive == true) {
			$this->strategyList += $strategyFive;
		}

		if($this->strategySix == true) {
			$this->strategyList += $strategySix;
		} 

		if($this->strategySeven == true) {
			$this->strategyList += $strategySeven;
		}

		if($this->strategyEight == true) {
			$this->strategyList += $strategyEight;
		}

		if($this->strategyNine == true) {
			$this->strategyList += $strategyNine;
		}

		if($this->strategyTen == true) {
			$this->strategyList += $strategyTen;
		}

		if($this->strategyEleven == true) {
			$this->strategyList += $strategyEleven;
		}

		if($this->strategyTwelve == true) {
			$this->strategyList += $strategyTwelve;
		}

		return $this->strategyList;
	}

}
?>