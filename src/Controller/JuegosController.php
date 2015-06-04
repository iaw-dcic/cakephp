<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Http\Client;
use Cake\Utility\Xml;

/**
 * Juegos Controller
 *
 * @property \App\Model\Table\JuegosTable $Juegos
 */
class JuegosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('juegos', $this->paginate($this->Juegos));
        $this->set('_serialize', ['juegos']);
    }

    /**
     * View method
     *
     * @param string|null $id Juego id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $juego = $this->Juegos->get($id, [
            'contain' => []
        ]);
		$http = new Client();
		$response = $http->get('http://www.boardgamegeek.com/xmlapi/boardgame/' . $juego->objectid);
		$data = Xml::toArray(Xml::build($response->body()));
		$juego['detalle'] = $data['boardgames']['boardgame'];
		
        $this->set('juego', $juego);
		$this->set('_serialize', ['juego']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $juego = $this->Juegos->newEntity();
        if ($this->request->is('post')) {
            $juego = $this->Juegos->patchEntity($juego, $this->request->data);
            if ($this->Juegos->save($juego)) {
                $this->Flash->success(__('The juego has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The juego could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('juego'));
		
		$this->set('_serialize', ['juego']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Juego id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $juego = $this->Juegos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $juego = $this->Juegos->patchEntity($juego, $this->request->data);
            if ($this->Juegos->save($juego)) {
                $this->Flash->success(__('The juego has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The juego could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('juego'));
        $this->set('_serialize', ['juego']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Juego id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $juego = $this->Juegos->get($id);
        if ($this->Juegos->delete($juego)) {
            $this->Flash->success(__('The juego has been deleted.'));
        } else {
            $this->Flash->error(__('The juego could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
