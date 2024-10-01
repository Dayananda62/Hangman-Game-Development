<?php
    session_start();
    include('./config.php');

    $res = mysqli_query($con,"SELECT * FROM tbl_history WHERE id = " . $_SESSION["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>History</title>
</head>
<body>    
<?php
    if(mysqli_num_rows($res)){
        $rows = mysqli_fetch_all($res);
        echo '<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Score</th>
            <th scope="col">Date time</th>
          </tr>
        </thead>
        <tbody>';
        $count = 1;
        foreach($rows as $row){
            echo '
              <tr>
                <th scope="row">' . $count++ .'</th>
                <td>' . $row[1] . '</td>
                <td>'. $row[2] .'</td>
              </tr>
              ';
            }
            echo '</tbody>
          </table>';
    }
    else{
        echo 'No record found';
    }
?>
</body>
</html>