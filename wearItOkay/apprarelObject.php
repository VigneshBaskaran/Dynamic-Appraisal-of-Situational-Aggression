<?php 
class apprarelObject {
	private $apprarelName;
	private $apprarelQuantity;
	private $apprarelSize;
	private $apprarelColour;
	
	function __construct($aName, $aQuantity, $aSize, $aColour)
	{
		$this->$apprarelName = $aName;
		$this->$apprarelQuantity = $aQuantity;
		$this->$apprarelSize = $aSize;
		$this->$apprarelColour = $aColour;
	}
	
	private function addQuantity($additionalQuantity)
	{
		$this->$apprarelQuantity += $additionalQuantity;
	}
	
	private function buyQuantity($buyQuantity)
	{
		$this->$apprarelColour - $buyQuantity;
	}

}
?>
