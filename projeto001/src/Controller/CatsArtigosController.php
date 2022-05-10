<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CatsArtigos Controller
 *
 * @property \App\Model\Table\CatsArtigosTable $CatsArtigos
 *
 * @method \App\Model\Entity\CatsArtigo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatsArtigosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $catsArtigos = $this->paginate($this->CatsArtigos);

        $this->set(compact('catsArtigos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cats Artigo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catsArtigo = $this->CatsArtigos->get($id, [
            'contain' => ['Artigos'],
        ]);

        $this->set('catsArtigo', $catsArtigo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catsArtigo = $this->CatsArtigos->newEntity();
        if ($this->request->is('post')) {
            $catsArtigo = $this->CatsArtigos->patchEntity($catsArtigo, $this->request->getData());
            if ($this->CatsArtigos->save($catsArtigo)) {
                $this->Flash->success(__('The cats artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cats artigo could not be saved. Please, try again.'));
        }
        $this->set(compact('catsArtigo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cats Artigo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catsArtigo = $this->CatsArtigos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catsArtigo = $this->CatsArtigos->patchEntity($catsArtigo, $this->request->getData());
            if ($this->CatsArtigos->save($catsArtigo)) {
                $this->Flash->success(__('The cats artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cats artigo could not be saved. Please, try again.'));
        }
        $this->set(compact('catsArtigo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cats Artigo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catsArtigo = $this->CatsArtigos->get($id);
        if ($this->CatsArtigos->delete($catsArtigo)) {
            $this->Flash->success(__('The cats artigo has been deleted.'));
        } else {
            $this->Flash->error(__('The cats artigo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
