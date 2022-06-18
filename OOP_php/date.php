<?php
class Date
{
	public $date;
	public $year;
	public $month;
	public $day;

	public function __construct($date = null){
		$this->date = $date;
		if ($date == null){
		$this->date = date('d-m-Y');}
	}
	public function getDay(){
		return date('d', strtotime($this->date));
	}
	public function getMonth($lang = null){
		if ($lang == 'en'){
			$engMNames = [
        	1 => 'january', 'february', 'march', 'april', 'may',  'june', 'july', 'august', 'september', 'october',  'november', 'december',];
			return $engMNames[date('m', strtotime($this->date))];
		} elseif ($lang == 'ru')
		{
			$rusMNames = [
        	1 =>'Январь', 'Февраль', 'Март', 'Апрель', 'Май',  'Июнь', 
             'Июль', 'Август', 'Сентябрь', 'Октябрь',  'Ноябрь', 'Декабрь',];

			return $rusMNames[date('m', strtotime($this->date))];
		}
		else{return date('m', strtotime($this->date));}
	}
	public function getYear(){
		return date('Y', strtotime($this->date));

	}
	public function getWeekDay($lang = null)
	{
		if ($lang == 'en'){
			$engDaysNames = [
        	'sunday',
        	'monday',
        	'tuesday',
        	'wednesday',
        	'thursday',
        	'friday',
        	'saturday',];
			return $engDaysNames[date('N', strtotime($this->date))];
		} elseif ($lang == 'ru')
		{
			$rusDaysNames = [
        	'воскресенье',
        	'понеделник',
        	'вторник',
        	'среда',
        	'четверг',
       		'пятница',
        	'суббота',];

			return $rusDaysNames[date('N', strtotime($this->date))];
		}
		else{
		return date('N', strtotime($this->date));
		}	
	}
		
	public function addDay($value)
	{
		$this->date = date('Y-m-d', strtotime($this->date."+ ${value} days"));
		return $this;
	}
		
	public function subDay($value)
	{
		$this->date = date('Y-m-d', strtotime($this->date."- ${value} days"));
		return $this;
	}
		
	public function addMonth($value)
	{
		$this->date =  date('Y-m-d', strtotime($this->date."+ ${value} months"));
		return $this;
	}
		
	public function subMonth($value)
	{
		$this->date =  date('Y-m-d', strtotime($this->date."- ${value} months"));
		return $this;
	}
		
	public function addYear($value)
	{
		$this->date =  date('Y-m-d', strtotime($this->date."+ ${value} years"));
		return $this;
	}
		
	public function subYear($value)
	{
		$this->date =  date('Y-m-d', strtotime($this->date."- ${value} years"));
		return $this;
	}
		
	public function format($format)
	{
		$this->date =  date($format, strtotime($this->date));
		return $this->date;
	}
	
	public function __toString()
	{
		return date('Y-m-d', strtotime($this->date));
	}
}

	$date = new Date('2025-12-31');
	
	echo $date->getYear().'<br>';
	echo $date->getMonth().'<br>';
	echo $date->getMonth('en').'<br>';
	echo $date->getMonth('ru').'<br>';
	echo $date->getDay().'<br>'; 
	
	echo $date->getWeekDay().'<br>';
	echo $date->getWeekDay('ru').'<br>';
	echo $date->getWeekDay('en').'<br>';

	echo (new Date('2025-12-31'))->addYear(1).'<br>';
	echo (new Date('2025-12-31'))->addDay(1).'<br>';
	
	echo (new Date('2025-12-31'))->subDay(3)->addYear(1);
?>


