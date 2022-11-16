
<?php
    $json=file_get_contents("abc.json");
    $data =  json_decode($json);

        // Open the table
        echo "<style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        </style>";
        echo "<table>";

        // Cycle through the array
        foreach ($data as $idx => $value) 
        {
            echo '<tr>';
            echo "<td>".$value->name."</td>";
            echo "<td>".$value->team."</td>";
            echo "<td>".$value->points."</td>";
            echo "</tr>";
        }
        // Close the table
        echo "</table>";
    
?>