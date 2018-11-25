<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $user = Users::find();
        $this->view->users = $user;
        $this->view->pick("page/index/index");
    }

    public function createAction()
    {
        $this->view->pick("page/index/create");
    }

    public function storeAction()
    {
        $data = $this->request->getPost();
        $user = new Users(); # untuk memanggil model users
        $user->assign($data); # untuk memasukkan data 

        if ($user->create()) {
            $this->response->redirect('');
        } else {
            $this->response->redirect('index/create');
        }
    }

    public function editAction($id)
    {
        $user = Users::findFirst($id);
        $this->view->user = $user;
        $this->view->pick('page/index/edit');
    }

    public function updateAction($id)
    {
        $data = $this->request->getPost();
        $user = Users::findFirst($id);
        $user->assign($data);

        if ($user->update()) {
            $this->response->redirect('');
        } else {
            $this->response->redirect('index/edit/' . $id);
        }
    }

    public function deleteAction()
    {
        $user = Users::findFirst($id);
        $user->delete();
        $this->response->redirect('');
    }
}

