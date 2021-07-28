<?php

namespace Application\Controllers;

use Ascmvc\Mvc\Controller;

class DownloadController extends Controller
{
    public function indexAction($vars = null)
    {
        $this->view['bodyjs'] = 1;
        
        $this->view['templatefile'] = 'download_index';
        
        return $this->view;
    }
}
