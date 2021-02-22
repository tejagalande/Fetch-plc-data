<?php
    require_once 'Connection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        global $conn;

        $data = array();
        $data["Data"] = array();
        

        $select = $conn->prepare("SELECT * FROM plcdemo");
        $select->execute();

        $result = $select->get_result();

        if($result->num_rows > 0){

            //print(json_encode($result->fetch_assoc()));

            for ($i=0; $i < $result->num_rows; $i++) { 
                # code...
                $row = mysqli_fetch_row($result);
                array_push($data["Data"],$row);
                
            }
            print(json_encode($data));
           
            // while($row = mysqli_fetch_array($result)){

            //     echo $row['sensor1'];
            //     echo $row['sensor2'];
            //     echo $row['sensor3'];
            //     echo "\n";
            // }

        }
        else {
            $result->close();
            echo "Data not Recorded";
        }

    }
    else{

        $conn->close();
        
    }