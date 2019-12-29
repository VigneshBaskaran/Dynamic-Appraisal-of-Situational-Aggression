<?php 
class incident {
	var $patientIdentifier;

	var $incidentTime;
	var $incidentDate;
	var $incidentType;

	var $DASA;

	var $incidentEffectivenessRating;

	function __construct($pIdentifier, $iTime, $iDate, $iType, $d) {
		$this->patientIdentifier = $pIdentifier;
		$this->incidentTime = $iTime;
		$this->incidentDate = $iDate;
		$this->incidentType = $iType;
	}

	function getIncidentPatientIdentifier() {
		return $this->patientIdentifier;
	}

	function getIncidentTime() {
		return $this->incidentTime;
	}

	function getIncidentDate() {
		return $this->incidentDate;
	}

	function getIncidentType() {
		return $this->incidentType;
	}

	function selectStrategiesForIncident() {

	}
}

?>