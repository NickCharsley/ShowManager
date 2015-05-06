<?php

include_once('ons_common.php');

abstract class SkiRoutesDataBase extends ONS_Tests_DatabaseTestCase
{
	public $tables=array("Route","Leg","Station","Journey");	
	
/**/	
	
	public function getDataSet()
    {   	
    	//Now load Dataset
    	global $test_path;    	
    	$file=$this->tables[0];
    	
        return $this->createXMLDataSet($this->xmlData($file));
    }
    
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
		//we cheat and create the data from Legs here;
		SkiData::writeData($this->FileName());
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
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsStationsSaved($route,$leg,$data,$journey){
		$journey->Routes[$route]->Legs[$leg]->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Station_{$route}_{$leg}", 'SELECT * FROM Station order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Station_{$route}_{$leg}");
        $this->assertTablesEqual($expectedTable, $queryTable);				
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testLegProviderNotEmpty
	 * @dataProvider LegProvider
	 */
	function testRoutesLegsLegSaved($route,$leg,$data,$journey){
		$journey->Routes[$route]->Legs[$leg]->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Leg_{$route}_{$leg}", 'SELECT * FROM Leg order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Leg_{$route}_{$leg}");
        $this->assertTablesEqual($expectedTable, $queryTable);				
	}	

	/**
	 * @depends testClassIsJourney
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider	 
	 */
	function testRoutesStationsAreSaved($route,$data,$journey){
		$journey->Routes[$route]->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Station_{$route}", 'SELECT * FROM Station order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Station_{$route}");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}

	/**
	 * @depends testClassIsJourney
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider	 
	 */
	function testRoutesLegsAreSaved($route,$data,$journey){
		$journey->Routes[$route]->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Leg_{$route}", 'SELECT * FROM Leg order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Leg_{$route}");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}

	/**
	 * @depends testClassIsJourney
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider	 
	 */
	function testRoutesRouteIsSaved($route,$data,$journey){
		$journey->Routes[$route]->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Route_{$route}", 'SELECT * FROM Route order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Route_{$route}");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}
	
	/**
	 * @depends testClassIsJourney
	 * @depends testRouteProviderNotEmpty
	 * @dataProvider RouteProvider	 
	 */
	function testRoutesJourneyIsSaved($route,$data,$journey){
		$journey->Routes[$route]->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Journey_{$route}", 'SELECT * FROM Journey order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Journey_{$route}");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}	
	
	/**
	 * @depends testClassIsJourney
	 */
	function testStationsAreSaved($journey){
		$journey->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Station", 'SELECT * FROM Station order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Station");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}

	/**
	 * @depends testClassIsJourney
	 */
	function testLegsAreSaved($journey){
		$journey->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Leg", 'SELECT * FROM Leg order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Leg");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}

	/**
	 * @depends testClassIsJourney
	 */
	function testRoutesAreSaved($journey){
		$journey->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Route", 'SELECT * FROM Route order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Route");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}

	/**
	 * @depends testClassIsJourney
	 */
	function testJourneyIsSaved($journey){
		$journey->Save();					
		//Now do 'Database' check;				
		$queryTable = $this->getConnection()->createQueryTable("Journey", 'SELECT * FROM Journey order by ID');
        $expectedTable = $this->createXmlDataSet($this->xmlData($this->FileName()))->getTable("Journey");
        $this->assertTablesEqual($expectedTable, $queryTable);
	}
	
/**/
}

?>