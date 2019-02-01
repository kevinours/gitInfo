<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 01/02/2019
 * Time: 16:34
 */

class gitInfo{
    public function getBranh(){
        $file = file('.git/HEAD', FILE_USE_INCLUDE_PATH)[0]; // first line
        $branchname = explode("/", $file, 3)[2]; // branch name position

        return $branchname ;
    }


    public function getHash(){
        $file = file('.git/FETCH_HEAD', FILE_USE_INCLUDE_PATH)[0]; // first line
        $hash = explode("		", $file)[0]; // last hash position

        return $hash;
    }
}

$gitInfo = new gitInfo();