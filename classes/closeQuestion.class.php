<?php

declare(strict_types=1);

class closeQuestion{
	//properties
	protected $instruction;
	protected $answers = array();
	private $answerCount = 0;
	protected $correctAnswers = array();
	private $multimediaURL;
	
	//methods
	//getters
	public function getInstruction(){
		return $this->instruction;
	}
	public function getAnswer(int $_nr){
		return $this->answers[$_nr];
	}
	//editor - setters
	public function setInstruction(string $_instruction){
		$this->instruction = $_instruction;
	}
	public function addAnswer(string $_answer){
		array_push($this->answers, $_answer);
		$this->answerCount++;
	}
	public function rmAnswer(int $_nr){
		$this->answers = array_splice($this->answers, $_nr, $_nr);
	}
	
	
}

?>
