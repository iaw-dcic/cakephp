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
		$data = Xml::toArray(Xml::build($response->body()));
		$resultados = [];
		foreach ($data['boardgames']['boardgame'] as $opcion) {
			$element = [];
			$element['value'] = $opcion['@objectid'];
			$element['label'] = $opcion['name']['@'];

			array_push($resultados, $element);
		}
		$this->set('resultado', $resultados);	
    }

    
}
