<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("vendor/autoload.php");
require_once 'EventClient.php';
require_once 'EngineClient.php';

class Recommend {
	const PIO_RESTAURANT_TYPE = 'restaurant';
	
	private $CI;
	private $pio;
	
	public function __construct() {
		$this->CI 	= get_instance();
		$accessKey 	= '1FRkCh9s2JyGKNvSTDK2YQEh5vtI3kS5PVR4QBPRkRWaPsUgbqLql2zAd5qOXD4Z';
		$this->pio 	= new EventClient($accessKey, 'http://localhost:7070');
	}
	
	public function create_pio_user($user_id, $latlong) {
		$response = $this->pio->setUser(intval($user_id), array('latlong' => $latlong));
	}
	public function create_pio_item($restaurant_id, $latlong, $name, $rating, $address) {
		$response = $this->pio->setItem($restaurant_id, array('itypes' => 'restaurant', 
				'latlong' => $latlong, 
				'rating' => $rating));
	}
	public function record_view_item($user_id, $restaurant_id) {
		$this->pio->recordUserActionOnItem('view', intval($user_id), intval($restaurant_id));
	}
	public function record_write_review_item($user_id, $restaurant_id, $score) {
		$this->pio->recordUserActionOnItem('rate', intval($user_id), intval($restaurant_id), array('rating' => floatval($score)));
	}
	public function give_recommendation($user_id) {
		$client = new EngineClient('http://localhost:8000');
		$response = null;
		try {
			$response = $client->sendQuery(array('user'=> intval($user_id), 'num'=> 4));
			} catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
		} finally {
			return $response; 
		}
	}
}