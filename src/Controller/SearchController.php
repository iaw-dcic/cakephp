<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Http\Client;
use Cake\Utility\Xml;

/**
 * Search Controller
 */
class SearchController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
	
    /**
     * Index method
     *
	 * @param string|null $search busqueda
     * @return void
     */
    public function buscar($search = null)
    {
	
		$ch = curl_init();

		// set URL and other appropriate options
		$url = 'http://www.boardgamegeek.com/xmlapi/search?search='.$search;
		curl_setopt($ch, CURLOPT_URL, $url);
		if ($_SERVER['HTTP_HOST'] != 'localhost') {
			curl_setopt($ch, CURLOPT_PROXY, '10.0.2.1');
			curl_setopt($ch, CURLOPT_PROXYPORT, 1280);
	    }
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// grab URL and pass it to the browser
		$body = curl_exec($ch);
		// close cURL resource, and free up system resources
		curl_close($ch);

		$data = Xml::build($body);
		$resultados = [];
		foreach ($data->boardgame as $opcion) {
			$element = [];
			$element['value'] = $opcion->attributes()->objectid->__toString();
			$element['label'] = $opcion->name->__toString();
			array_push($resultados, $element);
		}
		$this->set('resultado', $resultados);	
    }

    
}
