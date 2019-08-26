<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
use Api\Service\ListManager;

class IndexController extends AbstractRestfulController
{
    public function getList()
    {
        $listManager = new ListManager();

        return new JsonModel([
            'status' => 'SUCCESS',
            'message'=>'This is GET List to get all item',
            'data' => [
                'full_name' => 'John Doe',
                'address' => '51 Middle st.'
            ]
        ]);
    }

    public function get($id)
    {
        return new JsonModel([
            'status' => 'SUCCESS',
            'message'=>'This is GET id to get single item',
            'data' => [
                'id' => $id
            ]
        ]);
    }

    public function create($data)
    {
        return new JsonModel([
            'status' => 'SUCCESS',
            'message'=>'This is POST state to create item',
            'data' => [
                'data' => $data
            ]
        ]);
    }

    public function update($id,$data)
    {
        return new JsonModel([
            'status' => 'SUCCESS',
            'message'=>'This is PUT state to update item',
            'data' => [
                'id' => $id,
                'data' => $data
            ]
        ]);
    }

    public function delete($id)
    {
        return new JsonModel([
            'status' => 'SUCCESS',
            'message'=>'This is DELETE state to delete item',
            'data' => [
                'id' => $id
            ]
        ]);
    }
}
