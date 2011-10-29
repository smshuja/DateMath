<?php
/**
 * DateMath.php
 * DateMath helps in date manipulation
 * 
 * Copyright: Shuja Shabandri
 * http://dollarthis.com
 *
 */
class DateMath {
	private $dateTime = null;

	public function __construct($dateTime = null) {
		if(is_null($dateTime)) {
			$dateTime = time();
		} else if (!is_numeric($dateTime)) {
			$dateTime = strtotime($dateTime);
		}
		$this->dateTime = $dateTime;
	}

	public function addSeconds($num) {
		$this->dateTime += $num;
	}

	public function addMinutes($num) {
		$this->dateTime += ($num * 60);
	}

	public function addHours($num) {
		$this->dateTime += ($num * 3600);
	}

	public function addDays($num) {
		$this->dateTime += ($num * 86400);
		return $this;
	}

	public function addMonths($num) {
		$num = ($num < 0 ? '' : '+').$num;
		$this->dateTime = strtotime($num.' months', $this->dateTime);
		return $this;
	}

	public function addYears($num) {
		$num = ($num < 0 ? '' : '+').$num;
		$this->dateTime = strtotime($num.' years', $this->dateTime);
		return $this;
	}

	public function addWeeks($num) {
		$num = ($num < 0 ? '' : '+').$num;
		$this->dateTime = strtotime($num.' weeks', $this->dateTime);
		return $this;
	}

	public function firstDayOfWeek() {
		$this->dateTime = strtotime('-'.(gmdate('N', $this->dateTime)-1).' days', $this->dateTime);
		return $this;
	}
	
	public function firstDayOfMonth() {
		$this->dateTime = strtotime(gmdate('Y-m-01 H:i:s +0000', $this->dateTime));
		return $this;
	}
	
	public function lastDayOfMonth() {
		return $this->firstDayOfMonth()->addMonths(1)->addDays(-1);
	}
	
	public function lastDayOfWeek() {
		return $this->firstDayOfWeek()->addDays(6);
	}
	
	public function toString($format = 'Y-m-d H:i:s') {
		return date($format, $this->dateTime);
	}

	public function toGMTString($format = 'Y-m-d H:i:s') {
		return gmdate($format, $this->dateTime);
	}

	public function getTime() {
		return $this->dateTime;
	}
}
