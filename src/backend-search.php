<?php
$link = mysqli_connect("localhost", "root", "", "project-db");
 
if($link === false){
    die("KLAIDA: nepavyko prisijungti. " . mysqli_connect_error());
}
 
if(isset($_REQUEST['term'])){
    $sql = "SELECT * FROM glossaryItems WHERE term LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        $param_term = $_REQUEST['term'] . '%';
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '<div class="term">' . $row["term"] . "</div>";
                    echo '<div class="def">' . $row["def"] . "</div>";
                }
            } else{
                echo "<p>Tokio termino nėra</p>";
            }
        } else{
            echo "KLAIDA: nepavyko įvykdyti $sql. " . mysqli_error($link);
        }
    }
     
    mysqli_stmt_close($stmt);
}
 
mysqli_close($link);
