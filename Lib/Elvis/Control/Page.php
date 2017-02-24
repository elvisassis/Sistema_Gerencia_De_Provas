<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 22/02/17
 * Time: 19:37
 */

namespace Elvis\Control;

//include_once SITE_ROOT."App/Control/ProfessorController.php";
//use App\Control\ProfessorController;


class Page{
    public function show(){
        if($_GET){
            $class = isset($_GET['class']) ? $_GET['class'] : NULL;
            $method = isset($_GET['method']) ? $_GET['method'] : NULL;
            echo "ok";
            if($class){
                $object = $class == get_class($this) ? $this : new $class;
                if(method_exists($object, $method)){
                    call_user_func(array($object, $method), $_GET);
                }
            }
        }
    }


}