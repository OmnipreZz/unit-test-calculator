<?php

class Calculator {

    public function calculate($param) {
        if($param == null || $param == "") {
            return '0';
        } else {
            $res = 0;
            $n = explode("+", $param);
            foreach ($n as $value) {
                $res += $value;
            }
            return $res;
        }
    }
}