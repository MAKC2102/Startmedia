<?php

class IndexController extends Controller
{

    private $pageTpl = '/views/main.tpl.php';

    public function __construct() {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = "Тестовое задание";

        $this->pageData += $this->getDB();

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function getDB() {
            return $this->model->get();
    }

}