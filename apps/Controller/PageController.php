<?php

/**
 * NG Framework
 * Version 0.1 Beta
 * Copyright (c) 2012, Nick Gejadze
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy 
 * of this software and associated documentation files (the "Software"), 
 * to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the 
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included 
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR 
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

class PageController extends NG\Controller {
    protected $config;
    protected $cache;
    protected $session;
    protected $cookie;
    
    public function init() {
        $this->config = $this->view->config = \NG\Registry::get('config');
        $this->session = $this->view->session = new \NG\Session();
        $this->cookie = $this->view->cookie = new \NG\Cookie();
        $this->cache = $this->view->cache = new \NG\Cache();
    }
    
    public function IndexAction() {
        $requests = \NG\Route::getRequests();
        
        $session = $this->session;
        $config = $this->config;
        
        $param1 = "";
        $param2 = "";
        $param3 = "";
        $param4 = "";
        $param5 = "";
        $param6 = "";
        
        if (isset($requests['param1'])){
            $param1 = $requests['param1'];
            $param1 = urldecode($param1);
            
            if (isset($requests['param2'])){
                $param2 = $requests['param2'];
                $param2 = urldecode($param2);
                
                if (isset($requests['param3'])){
                    $param3 = $requests['param3'];
                    $param3 = urldecode($param3);
                    
                    if (isset($requests['param4'])){
                        $param4 = $requests['param4'];
                        $param4 = urldecode($param4);

                        if (isset($requests['param5'])){
                            $param5 = $requests['param5'];
                            $param5 = urldecode($param5);
                            
                            if (isset($requests['param6'])){
                                $param6 = $requests['param6'];
                                $param6 = urldecode($param6);
                            }
                        }
                    }
                }
            }
        }
        
        $viewTitle = "";
        $viewContent = "";
        $viewDescription = "";
        $viewKeywords = "";
        $viewImage = "";
        
        if ($param1 == "tentang"){
            $viewTitle = CAT_TITLE_1 . ' Tentang - ' . SITE_NAME;
            $viewKeywords = "halaman, tentang, ng framework";
            $viewDescription = "Halaman tentang NG Framework";
            $viewContent = "<p>Selamat menggunakan NG Framework. NG Framework adalah....</p>";
        }
        
        $this->view->viewImage = $viewImage;
        $this->view->viewTitle = $viewTitle;
        $this->view->viewContent = $viewContent;
        $this->view->viewKeywords = $viewKeywords;
        $this->view->viewDescription = $viewDescription;
    }
}

?>
