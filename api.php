<?php

class Api {
    public $dataJson;
    public function __construct() {
        $this->dataJson = file_get_contents('http://192.168.1.100/byc_newsstream/data.json');
    }
    public function allData()  {
        $data = $this->dataJson;
        header('Content-Type: application/json');
        echo($data);
    }

    public function getPostbyId($index) {
        $datas = json_decode($this->dataJson);
        header('Content-Type: application/json');
        $obj = json_encode($datas[$index]);
        echo($obj);
        //foreach($obj as $data) {
        //   echo $data->index;
      // }
    }
}
