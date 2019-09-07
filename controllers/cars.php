<?php
Class Controller_Cars Extends Controller_Base {

        function index() 
		{

              $this->registry['template']->show('cars');

        }

        function find($args) 
		{

           $this->registry['template']->show('find');

        }
        
}
?>