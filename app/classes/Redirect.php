<?php


class Redirect {
    static public function to($path){
        header("location: /.$path");
    }
}