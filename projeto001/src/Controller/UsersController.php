<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'limit' => 15,
            'order' => [
                'Users.id' => 'asc',
            ]
        ];
        $usuarios = $this->paginate($this->Users);
        $this->set(compact('usuarios'));
    }

    public function view($id = null)
    {
        $usuario = $this->Users->get($id);

        $this->set(['usuario' => $usuario]);
    }

    public function edit($id = null)
    {
        //Ao editar um usuario, a senha deve estar em branco
        //Ao salvar a edição, e o campo da senha estiver em branco, deve manter a mesma

        if ($id !== null) {
            $user = $this->Users->get($id);
        } else {
            $user = $this->Users->newEntity();
        }
        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->getData();
            if ($data['password'] == null) {
                unset($data['password']);
            }
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success('Usuário editado!');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao editar o usuário!');
            }
        } else {
            $user->password = null;
        }
        $this->set(compact('user'));
    }
    // $2y$10$wH9AyMREho8D7Y6xR4RuV.F5xQ70pmqTSvk3ET1frVBaDrU/PYQY.
    public function edit2($id = null)
    {
        $user = $this->Users->newEntity() || $user = $this->Users->get($id);

        if ($this->request->is('put')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Usuário editado!');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao editar o usuário!');
            }
        } elseif ($this->request->is('post')) {
            $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->success(__('Erro ao cadastrar usuário, revise os campos'));
            }
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('Usuário apagado!');
        } else {
            $this->Flash->erro('Usuário não apagado!');
        }
        return $this->redirect(['action' => 'index']);
    }
}
