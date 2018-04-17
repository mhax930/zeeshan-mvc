<?php
class Home extends Superb{

    function __construct(){
      parent::__construct("general");
    } 
	
    function showHome() {
          //$GET_LIST_FROM_METHOD = SOME_MODEL::SOME_METHOD();
          //$results['GET_LIST_FROM_METHOD'] = $GET_LIST_FROM_METHOD;

          //$this->set2($results);
          $this->Viewer("index");
    }
}
?>