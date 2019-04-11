<?php


class ArrayList
{
    public $arrayList;

    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    public function get($index)
    {
        if (is_int($index) && $index >= 0 && $index < count($this->arrayList) ) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}