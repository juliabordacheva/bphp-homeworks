<?php

class Users extends JsonDataArray
{
    public function displaySortedList(){
        foreach ($this->newQuery()->orderBy('name')->getObjs() as $data){
            echo '<div>' . '<h3>'. $data->name .'</h3>' . '</div>';
            echo '<div>e-mail: ' . $data->email  . '</div>';
            echo '<div>rate: ' . $data->rate  . '</div>' . '<hr>';
        }
    }
}