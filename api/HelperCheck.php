<?php

class HelperCheck{

    function checkInputs($inputs){
        $i = 0;
        $res = TRUE;
        while ($res && ($i < sizeof($inputs))) {
            if(isset($_POST[$inputs[$i]])){
                if(empty($_POST[$inputs[$i]]))
                    $res = FALSE;
            }else
                $res = FALSE;
            $i++;
        }
        return $res;
    }
    
    function isAnImageType($inputName){
        if($_FILES[$inputName]['type'] == "image/jpg" || $_FILES[$inputName]['type'] == "image/jpeg" || $_FILES[$inputName]['type'] == "image/png" || $_FILES[$inputName]['type'] == "image/webp")
            return true;
        else
            return false;
    }
}