<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Photo Controller
 *
 * @property \App\Model\Table\PhotoTable $Photo
 */
class PhotoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Photo->find();
        $photo = $this->paginate($query);

        $this->set(compact('photo'));
    }

    /**
     * View method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photo = $this->Photo->get($id, contain: []);
        $this->set(compact('photo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photo = $this->Photo->newEmptyEntity();
        if ($this->request->is('post')) {
            $files =($this->request->is('post')){
            $files['gambar']->getStream();
            $files['gambar']->getSize();
            $files['gambar']->getClientFileName();
        
            $myname = $this->request->getData()['gambar']->getClientFileName();

            $myext = substr(strchr($myname,"."), 1);
            $mypath = "upload/".$myname.".".$myext;
          
            $photo->gambar = $myname.".".$myext;

            $files['gambar']->moveTo(WWW_ROOT.$mypath);

            $photo = $this->Photo->patchEntity($photo, $this->request->getData());
            photo->gambar = $myname.".".$myext;

            $files['gambar']->moveTo(WWW_ROOT.$mypath);

            }
            
            if ($this->Photo->save($photo)) {
                $this->Flash->success(__('The photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo could not be saved. Please, try again.'));

            $users = $this->photo->Users->find('list', limit: 200)->all();
            $album = $this->Users->photo->find('list', ['limit'=>200])->all();
    
        $this->set(compact('photo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photo = $this->Photo->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photo = $this->Photo->patchEntity($photo, $this->request->getData());
            if ($this->Photo->save($photo)) {
                $this->Flash->success(__('The photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo could not be saved. Please, try again.'));
        }
        $this->set(compact('photo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photo = $this->Photo->get($id);
        if ($this->Photo->delete($photo)) {
            $this->Flash->success(__('The photo has been deleted.'));
        } else {
            $this->Flash->error(__('The photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
