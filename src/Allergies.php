<?php
    class Allergies
    {

        function start ($input){ //138
            if((($input-128)>0) && (($input/128) <2)){
            echo "cat ";
            $input = $input-128;
            $this->start($input);
            }
            elseif((($input-64)>0) && (($input/64) <2)){
            echo "pollen ";
            $input = $input-64;
            $this->start($input);
            }
            elseif((($input-32)>0) && (($input/32) <2)){
            echo "chocolate ";
            $input = $input-32;
            $this->start($input);
            }
            elseif((($input-16)>0) && (($input/16) <2)){
            echo "tomatoes ";
            $input = $input-16;
            $this->start($input);
            }
            elseif((($input-8)>0) && (($input/8) <2)){
            echo "strawberry ";
            $input = $input-8;
            $this->start($input);
            }
            elseif((($input-4)>0) && (($input/4) <2)){
            echo "shellfish ";
            $input = $input-4;
            $this->start($input);
            }
            elseif((($input-2)>0) && (($input/2) <2)){
            echo "peanuts ";
            $input = $input-2;
            $this->start($input);
            }
            elseif($input ==1){
            echo "eggs ";
            $input = $input-1;
            $this->start($input);
            }
        }
    }
?>
