<?php
    require_once "connect.php";

    function getNews($limit, $id = false, $cat = false){
        try{
            global $mysqli;
            connectDB();
            $where = 1;
            if($id)
                $where = "`id` = ".$id;

            if($cat == false)
                $cat = 'Новости клуба';

            $result = $mysqli->query("SELECT * FROM `dbase` WHERE $where AND `categ`='$cat' ORDER BY `id` DESC LIMIT $limit");
            if($mysqli->error){
                echo 'Ошибка ' . $mysqli->error;
            }
            closeDB();
            if(!$id)
                return resultToArray($result);
            else    
                return $result->fetch_assoc();
        }catch(Exception $a){
            echo 'Ошибка входа в базу данных';
            print_r($a);
        }
    }

    function resultToArray($result){
        $array = array();
        while(($row = $result->fetch_assoc()) != false) //fetch assoc = формировать ассоциативный массив
            $array[] = $row;
        return $array;
    }

    //функция для взятия 
    function getAchieve($limit, $categ){
        try{
            global $mysqli;
            connectDB();
            $result = $mysqli->query("SELECT * FROM `dbase` WHERE `categ` = '$categ' ORDER BY `id` DESC LIMIT $limit");
            if($mysqli->error){
                echo 'Ошибка ' . $mysqli->error;
            }
            closeDB();
            return resultToArray($result);   
        }catch(Exception $a){
            echo 'Ошибка входа в базу данных';
            print_r($a);
        }
    }

    //состав клуба
    function getAdams($limit, $id = false, $speaker = false){
        try{
            global $mysqli;
            connectDB();
            $where = 1;
            if($id)
                $where = "`id` = ".$id;
            if($speaker == false)
                $speaker = "Состав";
            $result = $mysqli->query("SELECT * FROM `speakers` WHERE 1 ORDER BY `id` ASC LIMIT $limit");
            if($mysqli->error){
                echo 'Ошибка ' . $mysqli->error;
            }
            closeDB();
            return resultToArray($result);   
        }catch(Exception $a){
            echo 'Ошибка входа в базу данных';
            print_r($a);
        }
    }

    function getOneAdam($id){
        try{
            global $mysqli;
            connectDB();
            
            $result = $mysqli->query("SELECT * FROM `speakers` WHERE `id` = '$id' ");
            if($mysqli->error){
                echo 'Ошибка ' . $mysqli->error;
            }
            closeDB();
            return $row = $result->fetch_assoc();
               
        }catch(Exception $a){
            echo 'Ошибка входа в базу данных';
            print_r($a);
        }
    }

    function getAbout_us($id){
        try{
            global $mysqli;
            connectDB();

            $result = $mysqli->query("SELECT * FROM `dbase` WHERE `id` < '$id'");
            if($mysqli->error){
                echo 'Ошибка ' . $mysqli->error;
            }
            closeDB();
            return resultToArray($result); //resultToArray -> перевести на массив и вывести

        }catch(Exception $a){
            echo 'Ошибка входа в базу данных';
            print_r($a);
        }
    }
?>