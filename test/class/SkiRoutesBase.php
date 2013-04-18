<?php

include_once('ons_common.php');

abstract class SkiRoutesBase extends PHPUnit_Framework_TestCase //ONS_Tests_DatabaseTestCase
{
/**/	
	abstract public function FileName();

	public function RouteCountProvider(){
  		return SkiData::RouteCountProvider($this->FileName());  	      
    }				
	
	public function RouteProvider(){
  		return SkiData::RouteProvider($this->FileName());  	      
    }				

	public function LegProvider(){
		return SkiData::LegProvider($this->FileName());
	}
	
	public function Destination(){
		return SkiData::Destination($this->FileName());
	}

	/**
	 * 
	 */	
	function testClassCreated(){
		error_log(get_class($this));		
		
		$journey=new Journeys("C:/Users/nick/Ski/".$this->FileName().".htm");							
		$this->assertNotNull($journey);
		return $journey;
	}	
	
	
	/**
	 * @depends testClassCreated
	 */
	function testClassIsJourney($journey){
		$this->assertEquals('Journeys',get_class($journey));
		return $journey;
	}	

	/**
	 * @depends testClassIsJourney
	 */
	function testDestinationNotEmpty(){
		$this->assertNotEquals('Empty',$this->Destination());
	}
	

	/**
	 * @depends testClassIsJourney
	 * @depends testDestinationNotEmpty
	 * @dataProvider RouteProvider	 
	 */
	function testRouteProviderNotEmpty($route,$data,$journey){
		$this->assertNotEquals('Empty',$data['From']);
	}	

	/**
	 * @depends testClassIsJourney
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteCountProvider
	 */
	function testRouteCountIsCorrect($count,$journey){	
		$this->assertEquals($count,count($journey->Routes));
	}

	/**
	 * @depends testClassIsJourney
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider	 
	 */
	function testRoutesAreRoute($index,$data,$journey){
		$this->assertEquals('Route',get_class($journey->Routes[$index]));
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testRouteProviderNotEmpty
	 * @depends testRoutesAreRoute
	 * @dataProvider RouteProvider
	 */
	function testRoutesFromStationIsCorrect($index,$data,$journey){		
		$this->assertEquals('London St. Pancras International',$journey->Routes[$index]->From['Station']);
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testRoutesAreRoute
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider
	 */
	function testRoutesFromDateIsCorrect($index,$data,$journey){		
		$this->assertEquals($data['From'],$journey->Routes[$index]->From['Date']->format('H:i d/m/Y'));
	}
		
	/**
	 * @depends testClassIsJourney
	 * @depends testRoutesAreRoute
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider
	 */
	function testRoutesToStationIsCorrect($index,$data,$journey){		
		$this->assertEquals($this->destination(),$journey->Routes[$index]->To['Station']);
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testRoutesAreRoute
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider
	 */
	function testRoutesToDateIsCorrect($index,$data,$journey){		
		$this->assertEquals($data['To'],$journey->Routes[$index]->To['Date']->format('H:i d/m/Y'));
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testRoutesFromStationIsCorrect
	 * @depends testRoutesFromDateIsCorrect
	 * @depends testRoutesToStationIsCorrect
	 * @depends testRoutesToDateIsCorrect
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider
	 */
	function testRoutesTitleIsCorrect($index,$data,$journey){
		$dates=substr($data['From'],0,(substr($data['From'],-10)==substr($data['To'],-10)?5:16)).' - '.$data['To'];
		$this->assertEquals("London St. Pancras International to ".$this->destination()." ($dates)",$journey->Routes[$index]->Description());
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testRoutesAreRoute
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider
	 */
	function testRoutesAreInvalid($index,$data,$journey){		
		$this->assertEquals($data['Valid'],$journey->Routes[$index]->valid);
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testRoutesAreRoute
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider
	 */
	function testRoutesLegCountIsCorrect($index,$data,$journey){		
		$this->assertEquals($data['Legs'],count($journey->Routes[$index]->Legs));
	}

	/**
	 * @depends testClassIsJourney
	 * @depends testDestinationNotEmpty
	 * @dataProvider LegProvider
	 */
	function testLegProviderNotEmpty($route,$leg,$data,$journey){
		if (!isset($data['Valid'])) {
			$data['Valid']=$data[0];			
		}						
		$this->assertNotEquals('Empty',$data['Valid']);
	}
		
   	/**
	 * @depends testClassIsJourney
	 * @depends testRoutesLegCountIsCorrect
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsAreLeg($route,$leg,$data,$journey){		
		$this->assertEquals('Leg',get_class($journey->Routes[$route]->Legs[$leg]));
	}
  
	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsIsValid($route,$leg,$data,$journey){
		if (!isset($data['Valid'])) {
			$data['Valid']=$data[0];			
		}						
		$this->assertEquals($data['Valid'],$journey->Routes[$route]->Legs[$leg]->valid);
	}

	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsTrainIsCorrect($route,$leg,$data,$journey){		
		if (!isset($data['Train'])) {
			$data['Train']=$data[4];			
		}						
		$this->assertEquals($data['Train'],$journey->Routes[$route]->Legs[$leg]->Train);
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsFromStationIsCorrect($route,$leg,$data,$journey){
		if (isset($data['From'])){
			if (!isset($data['From']['Station'])) $data['From']['Station']=$data['From'][0];	
		}		
		else {
			$data['From']['Station']=$data[1];			
		}
				
		$this->assertEquals($data['From']['Station'],$journey->Routes[$route]->Legs[$leg]->From['Station']);
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsFromDateIsCorrect($route,$leg,$data,$journey){		
		if (isset($data['From'])){
			if (!isset($data['From']['Date'])) $data['From']['Date']=$data['From'][2].' '.trim($data['From'][1]);	
		}
		else {
			$data['From']['Date']=$data[3].' '.str_replace('.03.13', '/03/2013',trim($data[2]));
		}
		$this->assertEquals($data['From']['Date'],$journey->Routes[$route]->Legs[$leg]->From['Date']->format('H:i d/m/Y'));
	}
		
	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsToStationIsCorrect($route,$leg,$data,$journey){		
		if (isset($data['To'])){
			if (!isset($data['To']['Station'])) $data['To']['Station']=$data['To'][0];
		}
		else {
			$data['To']['Station']=$data[5];
		}
		$this->assertEquals($data['To']['Station'],$journey->Routes[$route]->Legs[$leg]->To['Station']);
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsToDateIsCorrect($route,$leg,$data,$journey){		
		if (isset($data['To'])){
			if (!isset($data['To']['Date'])) $data['To']['Date']=$data['To'][2].' '.trim($data['To'][1]);	
		}
		else {
			$data['To']['Date']=$data[7].' '.str_replace('.03.13','/03/2013',trim($data[6]));
		}
		$this->assertEquals($data['To']['Date'],$journey->Routes[$route]->Legs[$leg]->To['Date']->format('H:i d/m/Y'));
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsTitleIsCorrect($route,$leg,$data,$journey){
		if (!isset($data['Train'])) {
			$data['Train']=$data[4];			
		}						
		if (isset($data['From'])){
			if (!isset($data['From']['Station'])) $data['From']['Station']=$data['From'][0];
			if (!isset($data['From']['Date'])) $data['From']['Date']=$data['From'][2].' '.trim($data['From'][1]);	
		}
		else {
			$data['From']['Station']=$data[1];			
			$data['From']['Date']=$data[3].' '.str_replace('.03.13','/03/2013',trim($data[2]));
		}
		if (isset($data['To'])){
			if (!isset($data['To']['Station'])) $data['To']['Station']=$data['To'][0];
			if (!isset($data['To']['Date'])) $data['To']['Date']=$data['To'][2].' '.trim($data['To'][1]);	
		}
		else {
			$data['To']['Date']=$data[7].' '.str_replace('.03.13','/03/2013',trim($data[6]));
			$data['To']['Station']=$data[5];
		}
		
		$dates=substr($data['From']['Date'],0,(substr($data['From']['Date'],-10)==substr($data['To']['Date'],-10)?5:16)).' - '.$data['To']['Date'];		
		$this->assertEquals($data['Train'].': '.$data['From']['Station'].' to '.$data['To']['Station'].' ('.$dates.')',$journey->Routes[$route]->Legs[$leg]->Description());
	}

}


?>