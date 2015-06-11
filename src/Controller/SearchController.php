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
	
		$http = new Client();
		$response = $http->get('http://www.boardgamegeek.com/xmlapi/search?search=' . $search);
		$data = Xml::build($response->body());
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
