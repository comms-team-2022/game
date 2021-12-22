<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents('php://input'));

    require_once("db_config.php");
    
    if ($data->type == "GAME_END") {

        $sql = "INSERT INTO scores VALUES (?, ?)";
    
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $data->user, $data->score);
            
            // Attempt to execute the prepared statement
            mysqli_stmt_execute($stmt);
    
            // Close statement
            mysqli_stmt_close($stmt);
        }

    }

    // Close connection
    mysqli_close($link);

} else {
    die('Direct access not permitted');
}
?>
