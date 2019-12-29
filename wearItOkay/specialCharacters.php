<?php
class specialCharacters {
	public $backtickSymbol;
	public $tildeSymbol;
	public $explainationMark;
	public $atSymbol;
	public $hashSymbol;
	public $dollarSymbol;
	public $percentageSymbol;
	public $carrotSymbol;
	public $andSymbol;
	public $starSymbol;
	public $openBracketSymbol;
	public $closeBracketSymbol;
	public $hyphenSymbol;
	public $underscoreSymbol;
	public $plusSymbol;
	public $equalsSymbol;
	public $squareOpenBracketSymbol;
	public $squareCloseBracketSymbol;
	public $squareOpenBraceSymbol;
	public $squareCloseBraceSymbol;
	public $straightSlashSymbol;
	public $forwardSlashSymbol;
	public $colonSymbol;
	public $semicolonSymbol;
	public $singleQuoteSymbol;
	public $doubleQuoteSymbol;
	public $greaterThanSymbol;
	public $commaSymbol;
	public $lessThanSymbol;
	public $periodSymbol;
	public $backSlashSymbol;
	public $questionMarkSymbol;
	
	function __construct()
	{ 
		$this->$backtickSymbol = "`";
		$this->$tildeSymbol = "~";
		$this->$explainationMark = "!";
		$this->$atSymbol = "@";
		$this->$hashSymbol = "#";
		$this->$dollarSymbol = "$";
		$this->$percentageSymbol = "%";
		$this->$carrotSymbol = "^";
		$this->$andSymbol = "&";
		$this->$starSymbol = "*";
		$this->$openBracketSymbol = "(";
		$this->$closeBracketSymbol = ")";
		$this->$hyphenSymbol = "-";
		$this->$underscoreSymbol = "_";
		$this->$plusSymbol = "+";
		$this->$equalsSymbol = "=";
		$this->$squareOpenBracketSymbol = "[";
		$this->$squareCloseBracketSymbol = "]";
		$this->$squareOpenBraceSymbol = "{";
		$this->$squareCloseBraceSymbol = "}";
		$this->$straightSlashSymbol = "|";
		$this->$forwardSlashSymbol = "\\";
		$this->$colonSymbol = ":";
		$this->$semicolonSymbol = ";";
		$this->$singleQuoteSymbol = "'";
		$this->$doubleQuoteSymbol = '"';
		$this->$greaterThanSymbol = "<";
		$this->$commaSymbol = ",";
		$this->$lessThanSymbol = ">";
		$this->$periodSymbol = ".";
		$this->$backSlashSymbol = "/";
		$this->$questionMarkSymbol = "?";
	}
	
}
?>