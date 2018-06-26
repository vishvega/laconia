<?php

use Laconia\Controller;
use Laconia\ListClass;

class Settings extends Controller
{
    public $page_title = 'Settings';
    public $editList;
    public $listTitle;
    public $message;

    public function post() {
        $list = new ListClass();

        $this->session->authenticate();
        
        // Proceed if authentication passed
        $get = filter_get();
        $post = filter_post();

        $rowsAffected = $list->editList($post, $get['list_id']);

        if ($rowsAffected > 0) {
            $this->message = LIST_UPDATE_SUCCESS;
        }

        $this->editList = $list->getListItemsByListId($get['list_id']);
        $this->listTitle = $list->getListByListId($get['list_id']);

        $this->view('settings');
    }

    public function get() {
        $list = new ListClass();

        $this->session->authenticate();
        
        // Proceed if authentication passed
        $get = filter_get();
        $this->editList = $list->getListItemsByListId($get['list_id']);
        $this->listTitle = $list->getListByListId($get['list_id']);

        $this->view('settings');
    }
}