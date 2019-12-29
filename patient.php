<?php
class patient {
	var $patientIdentifier;
	var $patientFirstName;
	var $patientLastName;
	var $patientDescription;
	var $incidentList[];

	function __construct($pIdentifier, $pFirstName, pLastName, pDescription) {
		echo " New Patient";
		$this->patientIdentifier = $pIdentifier;
	    $this->patientFirstName = $pFirstName;
		$this->patientLastName = $pLastName;
		$this->patientDescription = $pDescription;

	}

	function getIdentifier()
	{
		return $this->patientIdentifier;
	}

	function getFirstName()
	{
		return $this->patientFirstName;
	}

	function getLastName()
	{
		return $this->patientLastName;
	}

	function getDescription()
	{
		return $this->patientDescription;
	}

	function setDescription($desc) 
	{
		$this->patientIdentifier = $desc;
	}

	function createNewIncident() {
		if($this->patientIdentifier != null && $this->patientFirstName == null && $this->patientLastName == null && $this->patientDescription == null) {
			$incidentEvent = new incident($this->patientIdentifier, $this->patientFirstName, $this->patientLastName, $this->patientDescription);

			$this->incidentList[] += $incidentEvent;
		} 
	}

}

?>
