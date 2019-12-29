<?php
class DASA {

	var $patientIdentifier;

	var $questionOne;
	var $questionTwo;
	var $questionThree;
	var $questionFour;
	var $questionFive;
	var $questionSix;
	var $questionSeven;
	var $DASACount;
	var $DASAList;

	function __construct($qOne, $qTwo, $qThree, $qFour, $qFive, $qSix, $qSeven) {
		$this->questionOne = $qOne;
		$this->questionTwo = $qTwo;
		$this->questionThree = $qThree;
		$this->questionFour = $qFour;
		$this->questionFive = $qFive;
		$this->questionSix = $qSix;
		$this->questionSeven = $qSeven;
	}

	function getDASACount() {
		if($this->questionOne == true) {
			$DASACount++;
		}

		if($this->questionTwo == true) {
			$DASACount++;
		}

		if($this->questionThree == true) {
			$DASACount++;
		}

		if($this->questionFour == true) {
			$DASACount++;
		}

		if($this->questionFive == true) {
			$DASACount++;
		}

		if($this->questionSix == true) {
			$DASACount++;
		}

		if($this->questionSeven == true) {
			$DASACount++;
		}

		return $this->DASACount;
	}

	function getDASASelected() {
		if($this->questionOne == true) {
			$this->DASAList += $this->questionOne;
		}

		if($this->questionTwo == true) {
			$this->DASAList += $this->questionTwo;
		}

		if($this->questionThree == true) {
			$this->DASAList += $this->questionThree;
		}

		if($this->questionFour == true) {
			$this->DASAList += $this->questionFour;
		}

		if($this->questionFive == true) {
			$this->DASAList += $this->questionFive;
		}

		if($this->questionSix == true) {
			$this->DASAList += $this->questionSix;
		}

		if($this->questionSeven == true) {
			$this->DASAList += $this->questionSeven;
		}

		return $this->DASAList;
	}



}

?>
