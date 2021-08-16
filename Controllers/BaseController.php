<?php

class BaseController{
    const VIEW_FOLDER_NAME='Views';
    const MODEL_FOLDER_NAME='Models';
    protected function view($viewPath,$data=[])
    {
        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        // die;
        $viewPath= self::VIEW_FOLDER_NAME."/"
        .str_replace(".","/",$viewPath).".php";
        // die($viewPath);
        foreach($data as  $key=> $value)
        {
            $$key=$value;
        }
        // echo '<pre>';
        // print_r($categories);
        // echo '<pre>';
        // die;
        return require $viewPath;
    }
    protected function loadModel($modelPath)
    {
         require(self::MODEL_FOLDER_NAME."/".$modelPath.".php");
    }
}
?>