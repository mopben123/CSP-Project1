<?php
$sql = "select * from data_base_info;";
$result = $conn->query($sql)
    if ($result->num_row > 0) {
        echo "<label>Choose a team meber:</label><br>" ;
        echo "<select>"
        while($row = $result->fetch_assoc()){
            echo "<option> Ben </option>"
            echo "<option> Venk </option>"
            echo "<option> Raghu </option>"
            echo "<option> Taj </option>"
            echo "<option> Ak </option>"
            echo "<option> Phoenix </optoin>"
        }
        echo "</select>"
    }else{
        echo "No one found" ;
    }
$conn->close();
?>
