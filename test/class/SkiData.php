<?php

include_once('ons_common.php');

class SkiData
{
	public static function RouteCountProvider($route){				
		return array(array(count(self::RouteProvider($route))));
	}


	public static function Destination($route){
				
		$data['Routes/Aime-la-Plagne']='Aime la Plagne';
		$data['Routes/Annecy']='Annecy';
        $data['Routes/Argentiere']= 'Argentiere';
		$data['Routes/Bardonecchia']="Bardonecchia";
		$data['Routes/BourgStMaurice']="Bourg-St.Maurice";
		$data['Routes/Briancon']="Briancon";			
		$data['Routes/Brig']="Brig";
		$data['Routes/Chamonix']="Chamonix-Mont-Blanc";
		$data['Routes/Chur']="Chur";
		$data['Routes/Cluses']="Cluses(Haute-Savoie)";
		$data['Routes/Gap']="Gap(F)";
		$data['Routes/Grenoble']="Grenoble";
		
		return isset($data[$route])?$data[$route]:"Empty";		
	}

			
	public static function  RouteProvider($route){
		$data['Routes/Aime-la-Plagne']=array(
          array( 0, array('From'=>'20:31 29/03/2013','To'=>'06:07 30/03/2013','Legs'=>1,'Valid'=>0)),
          array( 1, array('From'=>'06:18 30/03/2013','To'=>'16:42 30/03/2013','Legs'=>2,'Valid'=>1)),
          array( 2, array('From'=>'07:31 30/03/2013','To'=>'16:42 30/03/2013','Legs'=>2,'Valid'=>1)),
          array( 3, array('From'=>'07:31 30/03/2013','To'=>'16:52 30/03/2013','Legs'=>2,'Valid'=>1)),
          array( 4, array('From'=>'08:25 30/03/2013','To'=>'17:03 30/03/2013','Legs'=>2,'Valid'=>1)),
          array( 5, array('From'=>'10:00 30/03/2013','To'=>'18:30 30/03/2013','Legs'=>1,'Valid'=>1)),
          array( 6, array('From'=>'10:17 30/03/2013','To'=>'19:39 30/03/2013','Legs'=>3,'Valid'=>1)),
		  array( 7, array('From'=>'11:25 30/03/2013','To'=>'21:27 30/03/2013','Legs'=>3,'Valid'=>1)),
		  array( 8, array('From'=>'12:25 30/03/2013','To'=>'21:27 30/03/2013','Legs'=>3,'Valid'=>1)),
		  array( 9, array('From'=>'17:31 30/03/2013','To'=>'07:28 31/03/2013','Legs'=>2,'Valid'=>0)),
		  array(10, array('From'=>'19:01 30/03/2013','To'=>'07:28 31/03/2013','Legs'=>2,'Valid'=>0))		  
        );
		
		$data['Routes/Annecy']=array(
          array( 0, array('From'=>'18:31 29/03/2013','To'=>'06:51 30/03/2013','Legs'=>2,'Valid'=>1)),
          array( 1, array('From'=>'19:01 29/03/2013','To'=>'06:51 30/03/2013','Legs'=>2,'Valid'=>1)),
          array( 2, array('From'=>'20:01 29/03/2013','To'=>'10:30 30/03/2013','Legs'=>2,'Valid'=>0)),
          array( 3, array('From'=>'20:31 29/03/2013','To'=>'09:17 30/03/2013','Legs'=>3,'Valid'=>0)),
          array( 4, array('From'=>'06:18 30/03/2013','To'=>'14:30 30/03/2013','Legs'=>2,'Valid'=>1)),
          array( 5, array('From'=>'07:31 30/03/2013','To'=>'16:06 30/03/2013','Legs'=>3,'Valid'=>1)),
          array( 6, array('From'=>'07:31 30/03/2013','To'=>'16:30 30/03/2013','Legs'=>2,'Valid'=>1)),
		  array( 7, array('From'=>'08:25 30/03/2013','To'=>'16:30 30/03/2013','Legs'=>2,'Valid'=>1)),
		  array( 8, array('From'=>'08:54 30/03/2013','To'=>'18:07 30/03/2013','Legs'=>3,'Valid'=>1)),
		  array( 9, array('From'=>'09:31 30/03/2013','To'=>'18:07 30/03/2013','Legs'=>3,'Valid'=>1)),
		  array(10, array('From'=>'10:17 30/03/2013','To'=>'19:06 30/03/2013','Legs'=>3,'Valid'=>1)),		  
		  array(11, array('From'=>'11:25 30/03/2013','To'=>'20:30 30/03/2013','Legs'=>2,'Valid'=>1)),		  
		  array(12, array('From'=>'12:25 30/03/2013','To'=>'20:30 30/03/2013','Legs'=>2,'Valid'=>1)),		  
        );

        $data['Routes/Argentiere']= array(
          array( 0, array('From'=>'18:31 29/03/2013','To'=>'10:18 30/03/2013','Legs'=>4,'Valid'=>1)),
          array( 1, array('From'=>'19:01 29/03/2013','To'=>'10:18 30/03/2013','Legs'=>4,'Valid'=>1)),
          array( 2, array('From'=>'20:01 29/03/2013','To'=>'13:18 30/03/2013','Legs'=>4,'Valid'=>0)),
          array( 3, array('From'=>'20:31 29/03/2013','To'=>'13:18 30/03/2013','Legs'=>6,'Valid'=>0)),
          array( 4, array('From'=>'06:18 30/03/2013','To'=>'18:18 30/03/2013','Legs'=>5,'Valid'=>1)),
          array( 5, array('From'=>'06:57 30/03/2013','To'=>'18:24 30/03/2013','Legs'=>4,'Valid'=>1)),
		  array( 6, array('From'=>'07:31 30/03/2013','To'=>'18:24 30/03/2013','Legs'=>5,'Valid'=>1)),
		  array( 7, array('From'=>'08:25 30/03/2013','To'=>'20:18 30/03/2013','Legs'=>5,'Valid'=>1)),
		  array( 8, array('From'=>'10:17 30/03/2013','To'=>'07:18 31/03/2013','Legs'=>5,'Valid'=>0)),
		  array( 9, array('From'=>'11:01 30/03/2013','To'=>'07:18 31/03/2013','Legs'=>5,'Valid'=>0)),
        );

		$data['Routes/Bardonecchia']=array(
		  array( 0, array('From'=>'20:01 29/03/2013','To'=>'12:20 30/03/2013','Legs'=>2,'Valid'=>0)),        
		  array( 1, array('From'=>'20:31 29/03/2013','To'=>'12:20 30/03/2013','Legs'=>3,'Valid'=>0)),        
		  array( 2, array('From'=>'06:18 30/03/2013','To'=>'15:16 30/03/2013','Legs'=>2,'Valid'=>1)),        
		  array( 3, array('From'=>'09:31 30/03/2013','To'=>'19:11 30/03/2013','Legs'=>2,'Valid'=>1)),        
		  array( 4, array('From'=>'10:17 30/03/2013','To'=>'07:10 31/03/2013','Legs'=>5,'Valid'=>0)),
		  array( 5, array('From'=>'11:01 30/03/2013','To'=>'07:10 31/03/2013','Legs'=>5,'Valid'=>0)),
		);
		
		$data['Routes/BourgStMaurice']=array(
			array( 0, array('From'=>'20:31 29/03/2013','To'=>'06:28 30/03/2013','Legs'=>1,'Valid'=>0)),
			array( 1, array('From'=>'06:18 30/03/2013','To'=>'17:02 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 2, array('From'=>'07:31 30/03/2013','To'=>'17:02 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 3, array('From'=>'07:31 30/03/2013','To'=>'17:20 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 4, array('From'=>'08:25 30/03/2013','To'=>'17:28 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 5, array('From'=>'10:00 30/03/2013','To'=>'18:51 30/03/2013','Legs'=>1,'Valid'=>1)),
			array( 6, array('From'=>'10:17 30/03/2013','To'=>'19:59 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 7, array('From'=>'11:25 30/03/2013','To'=>'21:43 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 8, array('From'=>'12:25 30/03/2013','To'=>'21:43 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 9, array('From'=>'17:31 30/03/2013','To'=>'07:49 31/03/2013','Legs'=>2,'Valid'=>0)),
			array(10, array('From'=>'19:01 30/03/2013','To'=>'07:49 31/03/2013','Legs'=>2,'Valid'=>0)),			
		);
		
		$data['Routes/Briancon']=array(
			array( 0, array('From'=>'18:31 29/03/2013','To'=>'12:44 30/03/2013','Legs'=>5,'Valid'=>1)),
			array( 1, array('From'=>'19:01 29/03/2013','To'=>'12:44 30/03/2013','Legs'=>5,'Valid'=>1)),
			array( 2, array('From'=>'20:01 29/03/2013','To'=>'15:05 30/03/2013','Legs'=>3,'Valid'=>0)),
			array( 3, array('From'=>'20:31 29/03/2013','To'=>'15:05 30/03/2013','Legs'=>5,'Valid'=>0)),
			array( 4, array('From'=>'07:31 30/03/2013','To'=>'19:58 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 5, array('From'=>'08:25 30/03/2013','To'=>'19:58 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 6, array('From'=>'12:25 30/03/2013','To'=>'00:05 31/03/2013','Legs'=>3,'Valid'=>0)),
		);

		$data['Routes/Brig']=array(
			array( 0, array('From'=>'17:31 29/03/2013','To'=>'10:40 30/03/2013','Legs'=>4,'Valid'=>0)),
			array( 1, array('From'=>'18:31 29/03/2013','To'=>'12:02 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 2, array('From'=>'19:01 29/03/2013','To'=>'12:02 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 3, array('From'=>'20:01 29/03/2013','To'=>'12:11 30/03/2013','Legs'=>4,'Valid'=>0)),
			array( 4, array('From'=>'20:01 29/03/2013','To'=>'12:40 30/03/2013','Legs'=>3,'Valid'=>0)),
			array( 5, array('From'=>'20:01 29/03/2013','To'=>'14:15 30/03/2013','Legs'=>2,'Valid'=>0)),
			array( 6, array('From'=>'20:31 29/03/2013','To'=>'13:02 30/03/2013','Legs'=>4,'Valid'=>0)),
			array( 7, array('From'=>'06:57 30/03/2013','To'=>'17:02 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 8, array('From'=>'06:57 30/03/2013','To'=>'17:08 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 9, array('From'=>'07:31 30/03/2013','To'=>'17:31 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(10, array('From'=>'09:31 30/03/2013','To'=>'19:40 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(11, array('From'=>'10:17 30/03/2013','To'=>'20:40 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(12, array('From'=>'11:01 30/03/2013','To'=>'20:40 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(13, array('From'=>'11:01 30/03/2013','To'=>'21:31 30/03/2013','Legs'=>3,'Valid'=>1)),
		);
		
		$data['Routes/Chamonix']=array(
			array( 0, array('From'=>'18:31 29/03/2013','To'=>'09:50 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 1, array('From'=>'19:01 29/03/2013','To'=>'09:50 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 2, array('From'=>'20:01 29/03/2013','To'=>'12:50 30/03/2013','Legs'=>3,'Valid'=>0)),
			array( 3, array('From'=>'20:31 29/03/2013','To'=>'12:50 30/03/2013','Legs'=>5,'Valid'=>0)),
			array( 4, array('From'=>'06:18 30/03/2013','To'=>'17:50 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 5, array('From'=>'06:57 30/03/2013','To'=>'18:50 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 6, array('From'=>'07:31 30/03/2013','To'=>'18:50 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 7, array('From'=>'07:31 30/03/2013','To'=>'19:50 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 8, array('From'=>'08:25 30/03/2013','To'=>'19:50 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 9, array('From'=>'10:17 30/03/2013','To'=>'20:50 30/03/2013','Legs'=>4,'Valid'=>1)),
			array(10, array('From'=>'11:01 30/03/2013','To'=>'20:50 30/03/2013','Legs'=>4,'Valid'=>1)),
			array(11, array('From'=>'17:31 30/03/2013','To'=>'09:50 31/03/2013','Legs'=>3,'Valid'=>0)),
			array(12, array('From'=>'19:01 30/03/2013','To'=>'09:50 31/03/2013','Legs'=>3,'Valid'=>0)),
			array(13, array('From'=>'20:01 30/03/2013','To'=>'14:50 31/03/2013','Legs'=>4,'Valid'=>0)),
		);

		$data['Routes/Chur']=array(
			array( 0, array('From'=>'17:31 29/03/2013','To'=>'10:43 30/03/2013','Legs'=>6,'Valid'=>0)),
			array( 1, array('From'=>'17:31 29/03/2013','To'=>'10:52 30/03/2013','Legs'=>4,'Valid'=>0)),
			array( 2, array('From'=>'20:01 29/03/2013','To'=>'11:52 30/03/2013','Legs'=>3,'Valid'=>0)),
			array( 3, array('From'=>'20:31 29/03/2013','To'=>'14:43 30/03/2013','Legs'=>5,'Valid'=>0)),
			array( 4, array('From'=>'06:18 30/03/2013','To'=>'18:38 30/03/2013','Legs'=>7,'Valid'=>1)),
			array( 5, array('From'=>'06:18 30/03/2013','To'=>'18:43 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 6, array('From'=>'06:57 30/03/2013','To'=>'18:52 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 7, array('From'=>'07:31 30/03/2013','To'=>'18:43 30/03/2013','Legs'=>5,'Valid'=>1)),
			array( 8, array('From'=>'07:31 30/03/2013','To'=>'19:43 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 9, array('From'=>'09:31 30/03/2013','To'=>'19:52 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(10, array('From'=>'11:25 30/03/2013','To'=>'21:52 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(11, array('From'=>'14:01 30/03/2013','To'=>'00:03 31/03/2013','Legs'=>4,'Valid'=>0)),			
			array(12, array('From'=>'14:01 30/03/2013','To'=>'00:49 31/03/2013','Legs'=>3,'Valid'=>0)),
		);

		$data['Routes/Cluses']=array(
			array( 0, array('From'=>'18:31 29/03/2013','To'=>'08:16 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 1, array('From'=>'19:01 29/03/2013','To'=>'08:16 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 2, array('From'=>'20:01 29/03/2013','To'=>'11:07 30/03/2013','Legs'=>2,'Valid'=>0)),
			array( 3, array('From'=>'20:31 29/03/2013','To'=>'10:36 30/03/2013','Legs'=>4,'Valid'=>0)),
			array( 4, array('From'=>'06:18 30/03/2013','To'=>'16:35 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 5, array('From'=>'06:57 30/03/2013','To'=>'17:35 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 6, array('From'=>'07:31 30/03/2013','To'=>'17:35 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 7, array('From'=>'07:31 30/03/2013','To'=>'18:35 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 8, array('From'=>'08:25 30/03/2013','To'=>'18:35 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 9, array('From'=>'10:17 30/03/2013','To'=>'19:35 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(10, array('From'=>'11:01 30/03/2013','To'=>'19:35 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(11, array('From'=>'17:31 30/03/2013','To'=>'08:16 31/03/2013','Legs'=>2,'Valid'=>0)),
			array(12, array('From'=>'19:01 30/03/2013','To'=>'08:16 31/03/2013','Legs'=>2,'Valid'=>0)),
			array(13, array('From'=>'20:01 30/03/2013','To'=>'13:35 31/03/2013','Legs'=>3,'Valid'=>0)),
			array(14, array('From'=>'20:01 30/03/2013','To'=>'13:50 31/03/2013','Legs'=>2,'Valid'=>0)),						
		);
		
		$data['Routes/Gap']=array(
			array( 0, array('From'=>'18:31 29/03/2013','To'=>'10:25 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 1, array('From'=>'19:01 29/03/2013','To'=>'10:25 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 2, array('From'=>'20:01 29/03/2013','To'=>'13:12 30/03/2013','Legs'=>3,'Valid'=>0)),
			array( 3, array('From'=>'20:31 29/03/2013','To'=>'12:25 30/03/2013','Legs'=>4,'Valid'=>0)),
			array( 4, array('From'=>'07:31 30/03/2013','To'=>'18:26 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 5, array('From'=>'08:25 30/03/2013','To'=>'18:26 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 6, array('From'=>'10:17 30/03/2013','To'=>'20:25 30/03/2013','Legs'=>4,'Valid'=>1)),
			array( 7, array('From'=>'12:25 30/03/2013','To'=>'22:49 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 8, array('From'=>'14:01 30/03/2013','To'=>'06:48 31/03/2013','Legs'=>2,'Valid'=>0)),
			array( 9, array('From'=>'17:31 30/03/2013','To'=>'12:25 31/03/2013','Legs'=>4,'Valid'=>0)),			
			array(10, array('From'=>'19:01 30/03/2013','To'=>'12:25 31/03/2013','Legs'=>4,'Valid'=>0)),
		);

		$data['Routes/Grenoble']=array(
			array( 0, array('From'=>'18:31 29/03/2013','To'=>'06:27 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 1, array('From'=>'19:01 29/03/2013','To'=>'06:27 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 2, array('From'=>'20:01 29/03/2013','To'=>'10:40 30/03/2013','Legs'=>2,'Valid'=>0)),
			array( 3, array('From'=>'20:31 29/03/2013','To'=>'09:05 30/03/2013','Legs'=>3,'Valid'=>0)),
			array( 4, array('From'=>'06:18 30/03/2013','To'=>'14:37 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 5, array('From'=>'06:57 30/03/2013','To'=>'15:33 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 6, array('From'=>'07:31 30/03/2013','To'=>'15:33 30/03/2013','Legs'=>3,'Valid'=>1)),
			array( 7, array('From'=>'07:31 30/03/2013','To'=>'15:37 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 8, array('From'=>'08:25 30/03/2013','To'=>'15:37 30/03/2013','Legs'=>2,'Valid'=>1)),
			array( 9, array('From'=>'09:31 30/03/2013','To'=>'18:40 30/03/2013','Legs'=>2,'Valid'=>1)),
			array(10, array('From'=>'10:17 30/03/2013','To'=>'17:33 30/03/2013','Legs'=>3,'Valid'=>1)),
			array(11, array('From'=>'11:01 30/03/2013','To'=>'18:40 30/03/2013','Legs'=>2,'Valid'=>1)),			
			array(12, array('From'=>'11:25 30/03/2013','To'=>'18:40 30/03/2013','Legs'=>2,'Valid'=>1)),
			array(13, array('From'=>'11:25 30/03/2013','To'=>'19:37 30/03/2013','Legs'=>2,'Valid'=>1)),
			
		);
				
		return isset($data[$route])?$data[$route]:array(array(0, array('From'=>'Empty','To'=>'Empty','Legs'=>0,'Valid'=>0)));
    }			

	public static function LegProvider($route){
		$data['Routes/Aime-la-Plagne']=array(
			array( 0,0,array('Valid'=>0,'Train'=>'EST 9096','From'=>array('Station'=>'London St. Pancras International','Date'=>'20:31 29/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'06:07 30/03/2013'))),
			          
			array( 1,0,array('Valid'=>1,'Train'=>'EST 9002','From'=>array('Station'=>'London St. Pancras International','Date'=>'06:18 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'09:53 30/03/2013'))),
			array( 1,1,array('Valid'=>1,'Train'=>'TGV 6437','From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'11:41 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'16:42 30/03/2013'))),
			
			array( 2,0,array('Valid'=>1,'Train'=>'EST 9006','From'=>array('Station'=>'London St. Pancras International','Date'=>'07:31 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'10:53 30/03/2013'))),
			array( 2,1,array('Valid'=>1,'Train'=>'TGV 6437','From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'11:41 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'16:42 30/03/2013'))),
			
			array( 3,0,array('Valid'=>1,'Train'=>'EST 9006','From'=>array('Station'=>'London St. Pancras International','Date'=>'07:31 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'10:53 30/03/2013'))),
			array( 3,1,array('Valid'=>1,'Train'=>'TGV 6439','From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'12:17 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'16:52 30/03/2013'))),
			
			array( 4,0,array('Valid'=>1,'Train'=>'EST 9010','From'=>array('Station'=>'London St. Pancras International','Date'=>'08:25 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'11:56 30/03/2013'))),
			array( 4,1,array('Valid'=>1,'Train'=>'TGV 6443','From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'12:45 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'17:03 30/03/2013'))),
			
			array( 5,0,array('Valid'=>1,'Train'=>'EST 9092','From'=>array('Station'=>'London St. Pancras International','Date'=>'10:00 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'18:30 30/03/2013'))),
			
			array( 6,0,array('Valid'=>1,'Train'=>'EST 9074','From'=>array('Station'=>'London St. Pancras International','Date'=>'10:17 30/03/2013'),'To'  =>array('Station'=>'Marne la Vallee Eurostar','Date'=>'13:57 30/03/2013'))),
			array( 6,1,array('Valid'=>1,'Train'=>'TGV 9828','From'=>array('Station'=>'Marne la Vallee-Chessy','Date'=>'14:11 30/03/2013'),'To'  =>array('Station'=>'Lyon Part Dieu','Date'=>'16:00 30/03/2013'))),
			array( 6,2,array('Valid'=>1,'Train'=>'RE 83241','From'=>array('Station'=>'Lyon Part Dieu','Date'=>'16:40 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'19:39 30/03/2013'))),
			
			array( 7,0,array('Valid'=>1,'Train'=>'EST 9022','From'=>array('Station'=>'London St. Pancras International','Date'=>'11:25 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'14:56 30/03/2013'))),
			array( 7,1,array('Valid'=>1,'Train'=>'TGV 6947','From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'16:45 30/03/2013'),'To'  =>array('Station'=>'Chambery-Challes-E','Date'=>'19:35 30/03/2013'))),
			array( 7,2,array('Valid'=>1,'Train'=>'RE 83233','From'=>array('Station'=>'Chambery-Challes-E','Date'=>'20:05 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'21:27 30/03/2013'))),
			
			array( 8,0,array('Valid'=>1,'Train'=>'EST 9024','From'=>array('Station'=>'London St. Pancras International','Date'=>'12:25 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'15:53 30/03/2013'))),
			array( 8,1,array('Valid'=>1,'Train'=>'TGV 6947','From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'16:45 30/03/2013'),'To'  =>array('Station'=>'Chambery-Challes-E','Date'=>'19:35 30/03/2013'))),
			array( 8,2,array('Valid'=>1,'Train'=>'RE 83233','From'=>array('Station'=>'Chambery-Challes-E','Date'=>'20:05 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'21:27 30/03/2013'))),
			
			array( 9,0,array('Valid'=>1,'Train'=>'EST 9044','From'=>array('Station'=>'London St. Pancras International','Date'=>'17:31 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'20:56 30/03/2013'))),
			array( 9,1,array('Valid'=>1,'Train'=>'NZ 5705','From'=>array('Station'=>'Paris Austerlitz','Date'=>'23:12 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'07:28 31/03/2013'))),
			
			array(10,0,array('Valid'=>1,'Train'=>'EST 9050','From'=>array('Station'=>'London St. Pancras International','Date'=>'19:01 30/03/2013'),'To'  =>array('Station'=>'Paris Nord Eurostar','Date'=>'22:23 30/03/2013'))),
			array(10,1,array('Valid'=>1,'Train'=>'NZ 5705','From'=>array('Station'=>'Paris Austerlitz','Date'=>'23:12 30/03/2013'),'To'  =>array('Station'=>'Aime la Plagne','Date'=>'07:28 31/03/2013'))),
		);
		
		$data['Routes/Annecy']=array(
			array( 0,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'18:31 29/03/2013'),'Train'=>'EST 9048','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'21:56 29/03/2013'))),
		    array( 0,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Austerlitz','Date'=>'23:12 29/03/2013'),'Train'=>'NZ 5595','To'=>array('Station'=>'Annecy','Date'=>'06:51 30/03/2013'))),

		    array( 1,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'19:01 29/03/2013'),'Train'=>'EST 9050','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'22:23 29/03/2013'))),  
		    array( 1,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Austerlitz','Date'=>'23:12 29/03/2013'),'Train'=>'NZ 5595','To'=>array('Station'=>'Annecy','Date'=>'06:51 30/03/2013'))),			

		    array( 2,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'20:01 29/03/2013'),'Train'=>'EST 9054','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'23:23 29/03/2013'))),  
		    array( 2,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'06:45 30/03/2013'),'Train'=>'TGV 6931','To'=>array('Station'=>'Annecy','Date'=>'10:30 30/03/2013'))),
				
			array( 3,0,array('Valid'=>0,'From'=>array('Station'=>'London St. Pancras International','Date'=>'20:31 29/03/2013'),'Train'=>'EST 9096','To'=>array('Station'=>'Moutiers-Salins-Brides-les-Bains','Date'=>'05:51 30/03/2013'))),  
			array( 3,1,array('Valid'=>1,'From'=>array('Station'=>'Moutiers-Salins-Brides-les-Bains','Date'=>'06:48 30/03/2013'),'Train'=>'RE 83254','To'=>array('Station'=>'Chambery-Challes-E','Date'=>'07:58 30/03/2013'))),  
			array( 3,2,array('Valid'=>1,'From'=>array('Station'=>'Chambery-Challes-E','Date'=>'08:24 30/03/2013'),'Train'=>'RE 17554','To'=>array('Station'=>'Annecy','Date'=>'09:17 30/03/2013'))),
				
			array( 4,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'06:18 30/03/2013'),'Train'=>'EST 9002','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'09:53 30/03/2013'))),  
			array( 4,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'10:41 30/03/2013'),'Train'=>'TGV 6939','To'=>array('Station'=>'Annecy','Date'=>'14:30 30/03/2013'))),

			array( 5,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'07:31 30/03/2013'),'Train'=>'EST 9006','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'10:53 30/03/2013'))),  
			array( 5,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'11:53 30/03/2013'),'Train'=>'TGV 6613','To'=>array('Station'=>'Lyon Part Dieu','Date'=>'13:56 30/03/2013'))),  
			array( 5,2,array('Valid'=>1,'From'=>array('Station'=>'Lyon Part Dieu','Date'=>'14:08 30/03/2013'),'Train'=>'RE 17982','To'=>array('Station'=>'Annecy','Date'=>'16:06 30/03/2013'))),

			array( 6,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'07:31 30/03/2013'),'Train'=>'EST 9006','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'10:53 30/03/2013'))),  
			array( 6,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'12:45 30/03/2013'),'Train'=>'TGV 6941','To'=>array('Station'=>'Annecy','Date'=>'16:30 30/03/2013'))),

			array( 7,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'08:25 30/03/2013'),'Train'=>'EST 9010','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'11:56 30/03/2013'))),  
			array( 7,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'12:45 30/03/2013'),'Train'=>'TGV 6941','To'=>array('Station'=>'Annecy','Date'=>'16:30 30/03/2013'))),

			array( 8,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'08:54 30/03/2013'),'Train'=>'EST 9012','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'12:26 30/03/2013'))),  
			array( 8,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'13:53 30/03/2013'),'Train'=>'TGV 6617','To'=>array('Station'=>'Lyon Part Dieu','Date'=>'15:56 30/03/2013'))),  
			array( 8,2,array('Valid'=>1,'From'=>array('Station'=>'Lyon Part Dieu','Date'=>'16:08 30/03/2013'),'Train'=>'RE 17984','To'=>array('Station'=>'Annecy','Date'=>'18:07 30/03/2013'))),
				
			array( 9,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'09:31 30/03/2013'),'Train'=>'EST 9014','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'12:59 30/03/2013'))),  
			array( 9,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'13:53 30/03/2013'),'Train'=>'TGV 6617','To'=>array('Station'=>'Lyon Part Dieu','Date'=>'15:56 30/03/2013'))),  
			array( 9,2,array('Valid'=>1,'From'=>array('Station'=>'Lyon Part Dieu','Date'=>'16:08 30/03/2013'),'Train'=>'RE 17984','To'=>array('Station'=>'Annecy','Date'=>'18:07 30/03/2013'))),
				
			array(10,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'10:17 30/03/2013'),'Train'=>'EST 9074','To'=>array('Station'=>'Marne la Vallee Eurostar','Date'=>'13:57 30/03/2013'))),  
			array(10,1,array('Valid'=>1,'From'=>array('Station'=>'Marne la Vallee-Chessy','Date'=>'14:11 30/03/2013'),'Train'=>'TGV 5028','To'=>array('Station'=>'Lyon Part Dieu','Date'=>'16:00 30/03/2013'))),  
			array(10,2,array('Valid'=>1,'From'=>array('Station'=>'Lyon Part Dieu','Date'=>'17:08 30/03/2013'),'Train'=>'RE 17988','To'=>array('Station'=>'Annecy','Date'=>'19:06 30/03/2013'))),

			array(11,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'11:25 30/03/2013'),'Train'=>'EST 9022','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'14:56 30/03/2013'))),  
			array(11,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'16:45 30/03/2013'),'Train'=>'TGV 6947','To'=>array('Station'=>'Annecy','Date'=>'20:30 30/03/2013'))),
				
			array(12,0,array('Valid'=>1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'12:25 30/03/2013'),'Train'=>'EST 9024','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'15:53 30/03/2013'))),	  
			array(12,1,array('Valid'=>1,'From'=>array('Station'=>'Paris Gare de Lyon','Date'=>'16:45 30/03/2013'),'Train'=>'TGV 6947','To'=>array('Station'=>'Annecy','Date'=>'20:30 30/03/2013'))),
		);          		

		$data['Routes/Argentiere']=array(
			array( 0,0,array(1,'From'=>array('Station'=>'London St. Pancras International','Date'=>'18:31 29/03/2013'),'Train'=>'EST 9048','To'=>array('Station'=>'Paris Nord Eurostar','Date'=>'21:56 29/03/2013'))),
			array( 0,1,array(1,'From'=>array('Station'=>'Paris Austerlitz','Date'=>'23:12 29/03/2013'),'Train'=>'NZ 5595','To'=>array('Station'=>'St-Gervais-les-Bains','Date'=>'08:44 30/03/2013'))),
			array( 0,2,array(1,'From'=>array('St-Gervais-les-Bains','30/03/2013','09:06'),'Train'=>'RE 18907','To'=>array('Chamonix-Mont-Blanc','30/03/2013','09:50'))),
			array( 0,3,array(1,'Chamonix-Mont-Blanc',' 30/03/2013','10:00','Bus18992','Argentiere',' 30/03/2013','10:18')),

			array( 1,0,array(1,'London St. Pancras International',' 29/03/2013','19:01','EST 9050','Paris Nord Eurostar',' 29/03/2013','22:23')),	  
			array( 1,1,array(1,'Paris Austerlitz',' 29/03/2013','23:12','NZ 5595','St-Gervais-les-Bains',' 30/03/2013','08:44')),	  
			array( 1,2,array(1,'St-Gervais-les-Bains',' 30/03/2013','09:06','RE 18907','Chamonix-Mont-Blanc',' 30/03/2013','09:50')),	  
			array( 1,3,array(1,'Chamonix-Mont-Blanc',' 30/03/2013','10:00','Bus18992','Argentiere',' 30/03/2013','10:18')),				
			
			array( 2,0,array(1,'London St. Pancras International',' 29/03/2013','20:01','EST 9054','Paris Nord Eurostar',' 29/03/2013','23:23')),
			array( 2,1,array(1,'Paris Gare de Lyon',' 30/03/2013','07:11','TGV 6467','St-Gervais-les-Bains',' 30/03/2013','11:44')),
			array( 2,2,array(1,'St-Gervais-les-Bains',' 30/03/2013','12:06','RE 18913','Chamonix-Mont-Blanc',' 30/03/2013','12:50')),
			array( 2,3,array(1,'Chamonix-Mont-Blanc',' 30/03/2013','13:00','Bus18992','Argentiere',' 30/03/2013','13:18')),
			
			array( 3,0,array(0,'London St. Pancras International',' 29/03/2013','20:31','EST 9096','Moutiers-Salins-Brides-les-Bains',' 30/03/2013','05:51')),
			array( 3,1,array(1,'Moutiers-Salins-Brides-les-Bains',' 30/03/2013','06:48','RE 83254','Chambery-Challes-E',' 30/03/2013','07:58')),	  
			array( 3,2,array(1,'Chambery-Challes-E',' 30/03/2013','08:24','RE 17554','Annecy',' 30/03/2013','09:17')),	  
			array( 3,3,array(1,'Annecy',' 30/03/2013','09:32','RE 84105','St-Gervais-les-Bains',' 30/03/2013','10:57')),	  
			array( 3,4,array(1,'St-Gervais-les-Bains',' 30/03/2013','12:06','RE 18913','Chamonix-Mont-Blanc',' 30/03/2013','12:50')),	  
			array( 3,5,array(1,'Chamonix-Mont-Blanc',' 30/03/2013','13:00','Bus18992','Argentiere',' 30/03/2013','13:18')),

			array( 4,0,array(1,'London St. Pancras International',' 30/03/2013','06:18','EST 9002','Paris Nord Eurostar',' 30/03/2013','09:53')),	  
			array( 4,1,array(1,'Paris Gare de Lyon',' 30/03/2013','10:58','TGV 6611','Lyon Part Dieu',' 30/03/2013','12:56')),	  
			array( 4,2,array(1,'Lyon Part Dieu',' 30/03/2013','13:38','RE 96542','St-Gervais-les-Bains',' 30/03/2013','16:53')),	  
			array( 4,3,array(1,'St-Gervais-les-Bains',' 30/03/2013','17:06','RE 18923','Chamonix-Mont-Blanc',' 30/03/2013','17:50')),	  
			array( 4,4,array(1,'Chamonix-Mont-Blanc',' 30/03/2013','18:00','Bus18993','Argentiere',' 30/03/2013','18:18')),

			array( 5,0,array(1,'London St. Pancras International',' 30/03/2013','06:57','EST 9110','Lille Europe Eurostar',' 30/03/2013','09:26')),	  
			array( 5,1,array(1,'Lille Europe',' 30/03/2013','09:57','TGV 9797','Martigny',' 30/03/2013','16:13')),
			array( 5,2,array(1,'Martigny',' 30/03/2013','16:43','R 26226','Vallorcine',' 30/03/2013','17:32')),	  
			array( 5,3,array(1,'Vallorcine',' 30/03/2013','18:05','Bus18990','Argentiere',' 30/03/2013','18:24')),	
			
			array( 6,0,array(1,'London St. Pancras International',' 30/03/2013','07:31','EST 9006','Paris Nord Eurostar',' 30/03/2013','10:53')),	  
			array( 6,1,array(1,'Paris Gare de Lyon',' 30/03/2013','11:58','TGV 9269','Lausanne',' 30/03/2013','15:37')),	  
			array( 6,2,array(1,'Lausanne',' 30/03/2013','15:46','IR 1423','Martigny',' 30/03/2013','16:38')),
			array( 6,3,array(1,'Martigny',' 30/03/2013','16:43','R 26226','Vallorcine',' 30/03/2013','17:32')),	  
			array( 6,4,array(1,'Vallorcine',' 30/03/2013','18:05','Bus18990','Argentiere',' 30/03/2013','18:24')),

			array( 7,0,array(1,'London St. Pancras International',' 30/03/2013','08:25','EST 9010','Paris Nord Eurostar',' 30/03/2013','11:56')),	  
			array( 7,1,array(1,'Paris Gare de Lyon',' 30/03/2013','12:45','TGV 6941','Annecy',' 30/03/2013','16:30')),	  
			array( 7,2,array(1,'Annecy',' 30/03/2013','17:32','RE 84121','St-Gervais-les-Bains',' 30/03/2013','18:57')),	  
			array( 7,3,array(1,'St-Gervais-les-Bains',' 30/03/2013','19:06','RE 18929','Chamonix-Mont-Blanc',' 30/03/2013','19:50')),	  
			array( 7,4,array(1,'Chamonix-Mont-Blanc',' 30/03/2013','20:00','Bus18993','Argentiere',' 30/03/2013','20:18')),
			
			array( 8,0,array(1,'London St. Pancras International',' 30.03.13','10:17','EST 9074','Marne la Vallee Eurostar',' 30.03.13','13:57')),
			array( 8,1,array(1,'Marne la Vallee-Chessy',' 30.03.13','14:11','TGV 5028','Lyon Part Dieu',' 30.03.13','16:00')),
			array( 8,2,array(1,'Lyon Part Dieu',' 30.03.13','16:38','RE 84830','St-Gervais-les-Bains',' 30.03.13','19:53')),	  
			array( 8,3,array(1,'St-Gervais-les-Bains',' 30.03.13','21:06','RE 18933','Chamonix-Mont-Blanc',' 30.03.13','21:50')),
			array( 8,4,array(1,'Chamonix-Mont-Blanc',' 31.03.13','07:00','Bus18992','Argentiere',' 31.03.13','07:18')),

			array( 9,0,array(1,'London St. Pancras International',' 30.03.13','11:01','EST 9020','Paris Nord Eurostar',' 30.03.13','14:26')),	  
			array( 9,1,array(1,'Paris Gare de Lyon',' 30.03.13','15:11','TGV 9775','Bellegarde(Ain)',' 30.03.13','17:48')),	  
			array( 9,2,array(1,'Bellegarde(Ain)',' 30.03.13','18:11','RE 84831','St-Gervais-les-Bains',' 30.03.13','19:53')),	  
			array( 9,3,array(1,'St-Gervais-les-Bains',' 30.03.13','21:06','RE 18933','Chamonix-Mont-Blanc',' 30.03.13','21:50')),	  
			array( 9,4,array(1,'Chamonix-Mont-Blanc',' 31.03.13','07:00','Bus18992','Argentiere',' 31.03.13','07:18')),			
		);          
	
		$data['Routes/Bardonecchia']=array(
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','20:01','EST 9054','Paris Nord Eurostar',' 29.03.13','23:23')),	  
			array( 0,1,array(1,'Paris Gare de Lyon',' 30.03.13','07:49','TGV 9241','Bardonecchia',' 30.03.13','12:20')),			
			
			array( 1,0,array(0,'London St. Pancras International',' 29.03.13','20:31','EST 9096','Moutiers-Salins-Brides-les-Bains',' 30.03.13','05:51')),	  
			array( 1,1,array(1,'Moutiers-Salins-Brides-les-Bains',' 30.03.13','06:48','RE 83254','Chambery-Challes-E',' 30.03.13','07:58')),	  
			array( 1,2,array(1,'Chambery-Challes-E',' 30.03.13','10:56','TGV 9241','Bardonecchia','30.03.13','12:20')),

			array( 2,0,array(1,'London St. Pancras International',' 30.03.13','06:18','EST 9002','Paris Nord Eurostar',' 30.03.13','09:53')),	  
			array( 2,1,array(1,'Paris Gare de Lyon',' 30.03.13','10:41','TGV 9245','Bardonecchia',' 30.03.13','15:16')),

			array( 3,0,array(1,'London St. Pancras International',' 30.03.13','09:31','EST 9014','Paris Nord Eurostar',' 30.03.13','12:59')),	  
			array( 3,1,array(1,'Paris Gare de Lyon',' 30.03.13','14:41','TGV 9249','Bardonecchia',' 30.03.13','19:11')),

			array( 4,0,array(1,'London St. Pancras International',' 30.03.13','10:17','EST 9074','Marne la Vallee Eurostar',' 30.03.13','13:57')),	  
			array( 4,1,array(1,'Paris Gare de Lyon',' 30.03.13','15:11','TGV 9775','Geneve',' 30.03.13','18:16')),	  
			array( 4,2,array(1,'Geneve',' 30.03.13','18:42','EC 41','Milano Centrale',' 30.03.13','22:35')),	  
			array( 4,3,array(0,'Milano Centrale',' 30.03.13','23:18','R 2042','Torino Porta Nuova',' 31.03.13','01:10')),	  
			array( 4,4,array(1,'Torino Porta Nuova',' 31.03.13','05:45','R 10034','Bardonecchia',' 31.03.13','07:10')),
			
			array( 5,0,array(1,'London St. Pancras International',' 30.03.13','11:01','EST 9020','Paris Nord Eurostar',' 30.03.13','14:26')),	  
			array( 5,1,array(1,'Paris Gare de Lyon',' 30.03.13','15:11','TGV 9775','Geneve',' 30.03.13','18:16')),	  
			array( 5,2,array(1,'Geneve',' 30.03.13','18:42','EC 41','Milano Centrale',' 30.03.13','22:35')),	  
			array( 5,3,array(0,'Milano Centrale',' 30.03.13','23:18','R 2042','Torino Porta Nuova',' 31.03.13','01:10')),	  
			array( 5,4,array(1,'Torino Porta Nuova',' 31.03.13','05:45','R 10034','Bardonecchia',' 31.03.13','07:10')),
			
		);

		$data['Routes/BourgStMaurice']=array(
			array( 0,0,array(0,'London St. Pancras International',' 29.03.13','20:31','EST 9096','Bourg-St.Maurice',' 30.03.13','06:28')),

			array( 1,0,array(1,'London St. Pancras International',' 30.03.13','06:18','EST 9002','Paris Nord Eurostar',' 30.03.13','09:53')),	  
			array( 1,1,array(1,'Paris Gare de Lyon',' 30.03.13','11:41','TGV 6437','Bourg-St.Maurice',' 30.03.13','17:02')),
			
			array( 2,0,array(1,'London St. Pancras International',' 30.03.13','07:31','EST 9006','Paris Nord Eurostar',' 30.03.13','10:53')),	  
			array( 2,1,array(1,'Paris Gare de Lyon',' 30.03.13','11:41','TGV 6437','Bourg-St.Maurice',' 30.03.13','17:02')),

			array( 3,0,array(1,'London St. Pancras International',' 30.03.13','07:31','EST 9006','Paris Nord Eurostar',' 30.03.13','10:53')),	  
			array( 3,1,array(1,'Paris Gare de Lyon',' 30.03.13','12:17','TGV 6439','Bourg-St.Maurice',' 30.03.13','17:20')),

			array( 4,0,array(1,'London St. Pancras International','30.03.13','08:25','EST 9010','Paris Nord Eurostar',' 30.03.13','11:56')),	  
			array( 4,1,array(1,'Paris Gare de Lyon',' 30.03.13','12:45','TGV 6443','Bourg-St.Maurice',' 30.03.13','17:28')),					
			
			array( 5,0,array(1,'London St. Pancras International',' 30.03.13','10:00','EST 9092','Bourg-St.Maurice',' 30.03.13','18:51')),
			
			array( 6,0,array(1,'London St. Pancras International',' 30.03.13','10:17','EST 9074','Marne la Vallee Eurostar',' 30.03.13','13:57')),
			array( 6,1,array(1,'Marne la Vallee-Chessy',' 30.03.13','14:11','TGV 5028','Lyon Part Dieu',' 30.03.13','16:00')),
			array( 6,2,array(1,'Lyon Part Dieu',' 30.03.13','16:40','RE 83241','Bourg-St.Maurice',' 30.03.13','19:59')),
			
			array( 7,0,array(1,'London St. Pancras International',' 30.03.13','11:25','EST 9022','Paris Nord Eurostar',' 30.03.13','14:56')),	  
			array( 7,1,array(1,'Paris Gare de Lyon',' 30.03.13','16:45','TGV 6947','Chambery-Challes-E',' 30.03.13','19:35')),
			array( 7,2,array(1,'Chambery-Challes-E',' 30.03.13','20:05','RE 83233','Bourg-St.Maurice',' 30.03.13','21:43')),

			array( 8,0,array(1,'London St. Pancras International',' 30.03.13','12:25','EST 9024','Paris Nord Eurostar',' 30.03.13','15:53')),	  
			array( 8,1,array(1,'Paris Gare de Lyon',' 30.03.13','16:45','TGV 6947','Chambery-Challes-E',' 30.03.13','19:35')),
			array( 8,2,array(1,'Chambery-Challes-E',' 30.03.13','20:05','RE 83233','Bourg-St.Maurice',' 30.03.13','21:43')),
		
			array( 9,0,array(1,'London St. Pancras International',' 30.03.13','17:31','EST 9044','Paris Nord Eurostar',' 30.03.13','20:56')),
			array( 9,1,array(1,'Paris Austerlitz',' 30.03.13','23:12','NZ 5705','Bourg-St.Maurice',' 31.03.13','07:49')),	
			
			array(10,0,array(1,'London St. Pancras International',' 30.03.13','19:01','EST 9050','Paris Nord Eurostar',' 30.03.13','22:23')),
			array(10,1,array(1,'Paris Austerlitz',' 30.03.13','23:12','NZ 5705','Bourg-St.Maurice',' 31.03.13','07:49')),	
		
		);
	
		$data['Routes/Briancon']=array(
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','18:31','EST 9048','Paris Nord Eurostar',' 29.03.13','21:56')),
			array( 0,1,array(1,'Paris Austerlitz',' 29.03.13','23:12','NZ 5595','Aix-les-Bains-le-Revard',' 30.03.13','05:53')),
			array( 0,2,array(1,'Aix-les-Bains-le-Revard',' 30.03.13','06:22','RE 17507','Grenoble',' 30.03.13','07:27')),
			array( 0,3,array(1,'Grenoble',' 30.03.13','08:10','RE 85601','Veynes-Devoluy',' 30.03.13','10:02')),
			array( 0,4,array(1,'Veynes-Devoluy',' 30.03.13','11:08','RE 17403','Briancon',' 30.03.13','12:44')),
					
			array( 1,0,array(1,'London St. Pancras International',' 29.03.13','19:01','EST 9050','Paris Nord Eurostar',' 29.03.13','22:23')),	  
			array( 1,1,array(1,'Paris Austerlitz',' 29.03.13','23:12','NZ 5595','Aix-les-Bains-le-Revard',' 30.03.13','05:53')),
			array( 1,2,array(1,'Aix-les-Bains-le-Revard',' 30.03.13','06:22','RE 17507','Grenoble',' 30.03.13','07:27')),
			array( 1,3,array(1,'Grenoble',' 30.03.13','08:10','RE 85601','Veynes-Devoluy',' 30.03.13','10:02')),
			array( 1,4,array(1,'Veynes-Devoluy',' 30.03.13','11:08','RE 17403','Briancon',' 30.03.13','12:44')),
			
			array( 2,0,array(1,'London St. Pancras International',' 29.03.13','20:01','EST 9054','Paris Nord Eurostar',' 29.03.13','23:23')),
			array( 2,1,array(1,'Paris Gare de Lyon',' 30.03.13','07:37','TGV 6191','Valence Ville',' 30.03.13','10:09')),
			array( 2,2,array(1,'Valence Ville',' 30.03.13','10:42','RE 17367','Briancon',' 30.03.13','15:05')),
			
			array( 3,0,array(0,'London St. Pancras International',' 29.03.13','20:31','EST 9096','Moutiers-Salins-Brides-les-Bains',' 30.03.13','05:51')),	  
			array( 3,1,array(1,'Moutiers-Salins-Brides-les-Bains',' 30.03.13','06:48','RE 83254','Chambery-Challes-E',' 30.03.13','07:58')),	  
			array( 3,2,array(1,'Chambery-Challes-E',' 30.03.13','08:38','RE 17513','Grenoble',' 30.03.13','09:27')),
			array( 3,3,array(1,'Grenoble',' 30.03.13','10:10','RE 85605','Veynes-Devoluy',' 30.03.13','12:02')),
			array( 3,4,array(1,'Veynes-Devoluy',' 30.03.13','12:51','RE 17367','Briancon',' 30.03.13','15:05')),
			
			array( 4,0,array(1,'London St. Pancras International',' 30.03.13','07:31','EST 9006','Paris Nord Eurostar',' 30.03.13','10:53')),
			array( 4,1,array(1,'Paris Gare de Lyon',' 30.03.13','12:41','TGV 6917','Grenoble',' 30.03.13','15:37')),
			array( 4,2,array(1,'Grenoble',' 30.03.13','16:10','RE 85615','Briancon',' 30.03.13','19:58')),
			
			array( 5,0,array(1,'London St. Pancras International',' 30.03.13','08:25','EST 9010','Paris Nord Eurostar',' 30.03.13','11:56')),
			array( 5,1,array(1,'Paris Gare de Lyon',' 30.03.13','12:41','TGV 6917','Grenoble',' 30.03.13','15:37')),
			array( 5,2,array(1,'Grenoble',' 30.03.13','16:10','RE 85615','Briancon',' 30.03.13','19:58')),
			
			array( 6,0,array(1,'London St. Pancras International',' 30.03.13','12:25','EST 9024','Paris Nord Eurostar',' 30.03.13','15:53')),
			array( 6,1,array(1,'Paris Gare de Lyon',' 30.03.13','17:19','TGV 6195','Valence Ville',' 30.03.13','19:56')),
			array( 6,2,array(0,'Valence Ville',' 30.03.13','20:15','RE 17369','Briancon',' 31.03.13','00:05')),
		);	

		$data['Routes/Brig']=array(
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','17:31','EST 9044','Paris Nord Eurostar',' 29.03.13','20:56')),	  
			array( 0,1,array(0,'Paris Est',' 29.03.13','21:55','TGV 2471','Strasbourg',' 30.03.13','00:14')),
			array( 0,2,array(1,'Strasbourg',' 30.03.13','06:51','RE 96151','Basel SBB Gl.30-35',' 30.03.13','08:20')),
			array( 0,3,array(1,'Basel SBB',' 30.03.13','08:31','IC 1063','Brig',' 30.03.13','10:40')),

		);

		$data['Routes/Chamonix']=array(
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','18:31','EST 9048','Paris Nord Eurostar',' 29.03.13','21:56')),
			array( 0,1,array(1,'Paris Austerlitz',' 29.03.13','23:12','NZ 5595','St-Gervais-les-Bains',' 30.03.13','08:44')),	  
			array( 0,2,array(1,'St-Gervais-les-Bains',' 30.03.13','09:06','RE 18907','Chamonix-Mont-Blanc',' 30.03.13','09:50')),	
		);
	
	
		$data['Routes/Chur']=array(		
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','17:31','EST 9044','Paris Nord Eurostar',' 29.03.13','20:56')),	  
			array( 0,1,array(0,'Paris Est',' 29.03.13','21:55','TGV 2471','Strasbourg',' 30.03.13','00:14')),	  
			array( 0,2,array(1,'Strasbourg',' 30.03.13','06:05','TGV 6833','Mulhouse Ville',' 30.03.13','06:52')),	  
			array( 0,3,array(1,'Mulhouse Ville',' 30.03.13','07:19','RE 96109','Basel SBB Gl.30-35',' 30.03.13','07:50')),	  
			array( 0,4,array(1,'Basel SBB',' 30.03.13','08:07','ICE 3','Zurich HB',' 30.03.13','09:00')),
			array( 0,5,array(1,'Zurich HB',' 30.03.13','09:12','IR 1765','Chur',' 30.03.13','10:43')),
					
		);
		
		$data['Routes/Cluses']=array(
			
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','18:31','EST 9048','Paris Nord Eurostar',' 29.03.13','21:56')),	  
			array( 0,1,array(1,'Paris Austerlitz',' 29.03.13','23:12','NZ 5595','Cluses(Haute-Savoie)',' 30.03.13','08:16')),
			
		);		
		
		$data['Routes/Gap']=array(
			
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','18:31','EST 9048','Paris Nord Eurostar',' 29.03.13','21:56')),	  
			array( 0,1,array(1,'Paris Austerlitz',' 29.03.13','23:12','NZ 5595','Aix-les-Bains-le-Revard',' 30.03.13','05:53')),	  
			array( 0,2,array(1,'Aix-les-Bains-le-Revard',' 30.03.13','06:22','RE 17507','Grenoble',' 30.03.13','07:27')),
			array( 0,3,array(1,'Grenoble',' 30.03.13','08:10','RE 85601','Gap(F)',' 30.03.13','10:25')),
					
		);
		
		$data['Routes/Grenoble']=array(
			array( 0,0,array(1,'London St. Pancras International',' 29.03.13','18:31','EST 9048','Paris Nord Eurostar',' 29.03.13','21:56')),
			array( 0,1,array(1,'Paris Austerlitz',' 29.03.13','23:12','NZ 5705','Chambery-Challes-E',' 30.03.13','05:09')),
			array( 0,2,array(1,'Chambery-Challes-E',' 30.03.13','05:38','RE 17503','Grenoble',' 30.03.13','06:27')),
			
			array( 1,0,array(1,'London St. Pancras International',' 29.03.13','19:01','EST 9050','Paris Nord Eurostar',' 29.03.13','22:23')),	  
			array( 1,1,array(1,'Paris Austerlitz',' 29.03.13','23:12','NZ 5705','Chambery-Challes-E',' 30.03.13','05:09')),
			array( 1,2,array(1,'Chambery-Challes-E',' 30.03.13','05:38','RE 17503','Grenoble',' 30.03.13','06:27')),
			
			array( 2,0,array(1,'London St. Pancras International',' 29.03.13','20:01','EST 9054','Paris Nord Eurostar',' 29.03.13','23:23')),
			array( 2,1,array(1,'Paris Gare de Lyon',' 30.03.13','07:37','TGV 6905','Grenoble',' 30.03.13','10:40')),			

			array( 3,0,array(0,'London St. Pancras International',' 29.03.13','20:31','EST 9096','Moutiers-Salins-Brides-les-Bains',' 30.03.13','05:51')),
			array( 3,1,array(1,'Moutiers-Salins-Brides-les-Bains',' 30.03.13','06:48','RE 83254','Chambery-Challes-E',' 30.03.13','07:58')),
			array( 3,2,array(1,'Chambery-Challes-E',' 30.03.13','08:20','RE 96631','Grenoble',' 30.03.13','09:05')),

			array( 4,0,array(1,'London St. Pancras International',' 30.03.13','06:18','EST 9002','Paris Nord Eurostar',' 30.03.13','09:53')),	  
			array( 4,1,array(1,'Paris Gare de Lyon',' 30.03.13','10:58','TGV 6611','Lyon Part Dieu',' 30.03.13','12:56')),
			array( 4,2,array(1,'Lyon Part Dieu',' 30.03.13','13:14','RE 17619','Grenoble',' 30.03.13','14:37')),			

			array( 5,0,array(1,'London St. Pancras International',' 30.03.13','06:57','EST 9110','Lille Europe Eurostar',' 30.03.13','09:26')),
			array( 5,1,array(1,'Lille Europe',' 30.03.13','10:54','TGV 5121','Lyon Part Dieu',' 30.03.13','14:00')),
			array( 5,2,array(1,'Lyon Part Dieu',' 30.03.13','14:14','RE 17621','Grenoble',' 30.03.13','15:33')),

			array( 6,0,array(1,'London St. Pancras International',' 30.03.13','07:31','EST 9006','Paris Nord Eurostar',' 30.03.13','10:53')),	  
			array( 6,1,array(1,'Paris Gare de Lyon',' 30.03.13','11:53','TGV 6613','Lyon Part Dieu',' 30.03.13','13:56')),
			array( 6,2,array(1,'Lyon Part Dieu',' 30.03.13','14:14','RE 17621','Grenoble',' 30.03.13','15:33')),
			
			array( 7,0,array(1,'London St. Pancras International',' 30.03.13','07:31','EST 9006','Paris Nord Eurostar',' 30.03.13','10:53')),
			array( 7,1,array(1,'Paris Gare de Lyon',' 30.03.13','12:41','TGV 6917','Grenoble',' 30.03.13','15:37')),			

			array( 8,0,array(1,'London St. Pancras International',' 30.03.13','08:25','EST 9010','Paris Nord Eurostar',' 30.03.13','11:56')),
			array( 8,1,array(1,'Paris Gare de Lyon',' 30.03.13','12:41','TGV 6917','Grenoble',' 30.03.13','15:37')),	
			
			array( 9,0,array(1,'London St. Pancras International',' 30.03.13','09:31','EST 9014','Paris Nord Eurostar',' 30.03.13','12:59')),
			array( 9,1,array(1,'Paris Gare de Lyon',' 30.03.13','15:37','TGV 6919','Grenoble',' 30.03.13','18:40')),

			array(10,0,array(1,'London St. Pancras International',' 30.03.13','10:17','EST 9074','Marne la Vallee Eurostar',' 30.03.13','13:57')),
			array(10,1,array(1,'Marne la Vallee-Chessy',' 30.03.13','14:11','TGV 5028','Lyon Part Dieu',' 30.03.13','16:00')),
			array(10,2,array(1,'Lyon Part Dieu',' 30.03.13','16:14','RE 17625','Grenoble',' 30.03.13','17:33')),

			array(11,0,array(1,'London St. Pancras International',' 30.03.13','11:01','EST 9020','Paris Nord Eurostar',' 30.03.13','14:26')),
			array(11,1,array(1,'Paris Gare de Lyon',' 30.03.13','15:37','TGV 6919','Grenoble',' 30.03.13','18:40')),

			array(12,0,array(1,'London St. Pancras International',' 30.03.13','11:25','EST 9022','Paris Nord Eurostar',' 30.03.13','14:56')),	  
			array(12,1,array(1,'Paris Gare de Lyon',' 30.03.13','15:37','TGV 6919','Grenoble',' 30.03.13','18:40')),

			array(13,0,array(1,'London St. Pancras International',' 30.03.13','11:25','EST 9022','Paris Nord Eurostar',' 30.03.13','14:56')),	  
			array(13,1,array(1,'Paris Gare de Lyon',' 30.03.13','16:41','TGV 6921','Grenoble',' 30.03.13','19:37')),
						
		);
	
		return isset($data[$route])?$data[$route]:array(array( 0,0,array('Empty','Empty','Empty','Empty','Empty','Empty','Empty','Empty')));
	}

	static function writeData($route){
		$data="";
		$legs=array();
		foreach(self::LegProvider($route) as $leg){
			if (!isset($leg[2]['Train'])) {
				$legs[$leg[0]][$leg[1]]['Train']=$leg[2][4];			
			}
			else $legs[$leg[0]][$leg[1]]['Train']=$leg[2]['Train'];			
										
			if (isset($leg[2]['From'])){
				if (!isset($leg[2]['From']['Station'])) $leg[2]['From']['Station']=$leg[2]['From'][0];
				if (!isset($leg[2]['From']['Date'])) $leg[2]['From']['Date']=$leg[2]['From'][2].' '.trim($leg[2]['From'][1]);	
			}
			else {
				$legs[$leg[0]][$leg[1]]['From']['Station']=$leg[2][1];			
				$legs[$leg[0]][$leg[1]]['From']['Date']='2013-03-'.str_replace('.03.13','',trim($leg[2][2])).' '.$leg[2][3].':00';
			}
			if (isset($leg[2]['To'])){
				if (!isset($leg[2]['To']['Station'])) $leg[2]['To']['Station']=$leg[2]['To'][0];
				if (!isset($leg[2]['To']['Date'])) $leg[2]['To']['Date']=$leg[2]['To'][2].' '.trim($leg[2]['To'][1]);	
			}
			else {
				$legs[$leg[0]][$leg[1]]['To']['Date']='2013-03-'.str_replace('.03.13','',trim($leg[2][6])).' '.$leg[2][7].':00';
				$legs[$leg[0]][$leg[1]]['To']['Station']=$leg[2][5];
			}			
		}
		
		$data="<dataset>\n";
		
		$data_sa=array();
		$data_t=array();
			
		for ($r=0;$r<count($legs);$r++){			
			$data_s=array();		
			$data_s[$legs[$r][0]['From']['Station']]="";
			$data_s[$legs[$r][count($legs[$r])-1]['To']['Station']]="";

			$data_sa[$legs[$r][0]['From']['Station']]="";
			$data_sa[$legs[$r][count($legs[$r])-1]['To']['Station']]="";
			
			for ($l=0;$l<count($legs[$r]);$l++){
				$data.="\t<table name='Station_{$r}_{$l}'>\n";
				$data.="\t\t<column>ID</column>\n";
				$data.="\t\t<column>Name</column>\n";
				$data.="\t\t<row>\n\t\t\t<value>1</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['From']['Station']."</value>\n\t\t</row>\n";
				$data.="\t\t<row>\n\t\t\t<value>2</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['To']['Station']."</value>\n\t\t</row>\n";				
				$data.="\t</table>\n";
							
				$data_t[$legs[$r][$l]['Train']]=$legs[$r][$l];
				$data_s[$legs[$r][$l]['From']['Station']]="";
				$data_s[$legs[$r][$l]['To']['Station']]="";
				$data_sa[$legs[$r][$l]['From']['Station']]="";
				$data_sa[$legs[$r][$l]['To']['Station']]="";

				$data_l[]=$legs[$r][$l];
												
				$data.="\t<table name='Leg_{$r}_{$l}'>\n";
				$data.="\t\t<column>ID</column>\n";
				$data.="\t\t<column>Name</column>\n";
				$data.="\t\t<column>FromStationID</column>\n";
				$data.="\t\t<column>ToStationID</column>\n";
				$data.="\t\t<column>StartTime</column>\n";
				$data.="\t\t<column>EndTime</column>\n";
				$data.="\t\t<row>\n\t\t\t<value>1</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['Train']."</value>\n";
				$data.="\t\t\t<value>1</value>\n\t\t\t<value>2</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['From']['Date']."</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['To']['Date']."</value>\n\t\t</row>\n";				
				$data.="\t</table>\n";
			}
			
			$data.="\t<table name='Station_{$r}'>\n";
			$data.="\t\t<column>ID</column>\n";
			$data.="\t\t<column>Name</column>\n";					
			$i=1;
			foreach(array_keys($data_s) as $station){
				$data.="\t\t<row>\n\t\t\t<value>$i</value>\n";
				$data.="\t\t\t<value>".$station."</value>\n\t\t</row>\n";	
				$data_s[$station]=$i++;
			}
			$data.="\t</table>\n";			

			$data.="\t<table name='Leg_{$r}'>\n";
			$data.="\t\t<column>ID</column>\n";
			$data.="\t\t<column>Name</column>\n";
			$data.="\t\t<column>FromStationID</column>\n";
			$data.="\t\t<column>ToStationID</column>\n";
			$data.="\t\t<column>StartTime</column>\n";
			$data.="\t\t<column>EndTime</column>\n";
			
			for ($l=0;$l<count($legs[$r]);$l++){
				$data.="\t\t<row>\n\t\t\t<value>".($l+1)."</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['Train']."</value>\n";
				$data.="\t\t\t<value>".$data_s[$legs[$r][$l]['From']['Station']]."</value>\n\t\t\t<value>".$data_s[$legs[$r][$l]['To']['Station']]."</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['From']['Date']."</value>\n";
				$data.="\t\t\t<value>".$legs[$r][$l]['To']['Date']."</value>\n\t\t</row>\n";
			}				
			$data.="\t</table>\n";
									
			$data.="\t<table name='Route_{$r}'>\n";
			$data.="\t\t<column>ID</column>\n";
			$data.="\t\t<column>Name</column>\n";
			$data.="\t\t<column>FromStationID</column>\n";
			$data.="\t\t<column>ToStationID</column>\n";
			
			$data.="\t\t<row>\n\t\t\t<value>1</value>\n";
			$data.="\t\t\t<value>";
			
			$from=$legs[$r][0]['From']['Date'];
			$to=$legs[$r][count($legs[$r])-1]['To']['Date'];
			
			$dates=(substr($from,0,10)==substr($to,0,10))?
			substr($from,11,5).' - '.substr($to,11,5).' '.substr($from,8,2).'/'.substr($from,5,2).'/'.substr($from,0,4)			
			:substr($from,11,5).' '.substr($from,8,2).'/'.substr($from,5,2).'/'.substr($from,0,4).
			' - '.substr($to,11,5).' '.substr($to,8,2).'/'.substr($to,5,2).'/'.substr($to,0,4);
				
			$legs[$r][0]['From']['Date'].' - '.$legs[$r][count($legs[$r])-1]['To']['Date'];
			
			$data.=$legs[$r][0]['From']['Station']." to ".$legs[$r][count($legs[$r])-1]['To']['Station']." (";
			$data.=$dates;
			$data.=")</value>\n";
			$data.="\t\t\t<value>1</value>\n\t\t\t<value>2</value>\n";
			$data.="\t\t</row>\n\t\t</table>\n";
			
			$data.="\t<table name='Journey_{$r}'>\n";
			$data.="\t\t<column>ID</column>\n";
			$data.="\t\t<column>RouteID</column>\n";
			$data.="\t\t<column>LegID</column>\n";
//			$data.="\t\t<column>sequence</column>\n";
						
			for ($l=0;$l<count($legs[$r]);$l++){
				$data.="\t\t<row>\n\t\t\t<value>".($l+1)."</value>\n";
				$data.="\t\t\t<value>1</value>\n";
				$data.="\t\t\t<value>".($l+1)."</value>\n";
//				$data.="\t\t\t<value>".($l)."</value>\n";
				$data.="\t\t</row>\n";
			}
			
			$data.="\t</table>\n";			
			
		}

		$data.="\t<table name='Station'>\n";
		$data.="\t\t<column>ID</column>\n";
		$data.="\t\t<column>Name</column>\n";					
		$i=1;
		foreach(array_keys($data_sa) as $station){
			$data.="\t\t<row>\n\t\t\t<value>$i</value>\n";
			$data.="\t\t\t<value>".$station."</value>\n\t\t</row>\n";	
			$data_sa[$station]=$i++;
		}
		$data.="\t</table>\n";			
		
		$data.="\t<table name='Leg'>\n";
		$data.="\t\t<column>ID</column>\n";
		$data.="\t\t<column>Name</column>\n";
		$data.="\t\t<column>FromStationID</column>\n";
		$data.="\t\t<column>ToStationID</column>\n";
		$data.="\t\t<column>StartTime</column>\n";
		$data.="\t\t<column>EndTime</column>\n";
		$i=1;
		foreach ($data_t as $train){						
			$data.="\t\t<row>\n\t\t\t<value>$i</value>\n";
			$data.="\t\t\t<value>".$train['Train']."</value>\n";
			$data.="\t\t\t<value>".$data_sa[$train['From']['Station']]."</value>\n\t\t\t<value>".$data_sa[$train['To']['Station']]."</value>\n";
			$data.="\t\t\t<value>".$train['From']['Date']."</value>\n";
			$data.="\t\t\t<value>".$train['To']['Date']."</value>\n\t\t</row>\n";
			$data_t[$train['Train']]=$i++;
		}				
		$data.="\t</table>\n";

		$data.="\t<table name='Route'>\n";
		$data.="\t\t<column>ID</column>\n";
		$data.="\t\t<column>Name</column>\n";
		$data.="\t\t<column>FromStationID</column>\n";
		$data.="\t\t<column>ToStationID</column>\n";
			
		for ($r=0;$r<count($legs);$r++){	
			$data.="\t\t<row>\n\t\t\t<value>".($r+1)."</value>\n";
			$data.="\t\t\t<value>";
			
			$from=$legs[$r][0]['From']['Date'];
			$to=$legs[$r][count($legs[$r])-1]['To']['Date'];
			
			$dates=(substr($from,0,10)==substr($to,0,10))?
			substr($from,11,5).' - '.substr($to,11,5).' '.substr($from,8,2).'/'.substr($from,5,2).'/'.substr($from,0,4)			
			:substr($from,11,5).' '.substr($from,8,2).'/'.substr($from,5,2).'/'.substr($from,0,4).
			' - '.substr($to,11,5).' '.substr($to,8,2).'/'.substr($to,5,2).'/'.substr($to,0,4);
				
			$legs[$r][0]['From']['Date'].' - '.$legs[$r][count($legs[$r])-1]['To']['Date'];
			
			$data.=$legs[$r][0]['From']['Station']." to ".$legs[$r][count($legs[$r])-1]['To']['Station']." (";
			$data.=$dates;
			$data.=")</value>\n";
			$data.="\t\t\t<value>1</value>\n\t\t\t<value>2</value>\n";
			$data.="\t\t</row>\n";
		}
		$data.="\t</table>\n";

			$data.="\t<table name='Journey'>\n";
			$data.="\t\t<column>ID</column>\n";
			$data.="\t\t<column>RouteID</column>\n";
			$data.="\t\t<column>LegID</column>\n";
//			$data.="\t\t<column>sequence</column>\n";
			$i=1;
			for ($r=0;$r<count($legs);$r++){					
				for ($l=0;$l<count($legs[$r]);$l++){
					$data.="\t\t<row>\n\t\t\t<value>".($i++)."</value>\n";
					$data.="\t\t\t<value>".($r+1)."</value>\n";
					$data.="\t\t\t<value>".$data_t[$legs[$r][$l]['Train']]."</value>\n";
//					$data.="\t\t\t<value>".($l)."</value>\n";
					$data.="\t\t</row>\n";
				}
			}
			$data.="\t</table>\n";			

		//Close dataset	
		$data.="</dataset>\n";			
		file_put_contents(buildPath(dirname(dirname(__FILE__)),"testData","$route.xml"), $data);
	//die;
	}

}

?>