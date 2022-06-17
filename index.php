<?php
$conn=mysqli_connect("localhost","root","","movies_database");
if($conn){
    echo"";

}else{
    echo "error";
}

$query="select * from movie";
$connect=mysqli_query($conn,$query);
$num=mysqli_num_rows($connect);

?>




<!DOCTYPE html>
<head>
    <title>MOVIE TABLE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <table>
        <tr>
           <th>MOVIE NAME</th>
           <th>MOVIEID</th>
           <th>ACTOR</th>
           <th>ACTRESS</th>

           <th>DIRECTOR</th>
           <th>YEAR OF RELEASE</th>
        </tr>
        <?php

        if($num>0)
        {
            while($data=mysqli_fetch_assoc($connect))
            {
                echo"
                <tr>
                <td>".$data['movie_name']."</td>
                <td>".$data['movie_id']."</td>
                <td>".$data['actor_name']."</td>
                <td>".$data['actress_name']."</td>

                <td>".$data['director']."</td>
                <td>".$data['release_year']."</td>
                </tr>
                ";
            }
        }
        ?>
    </table>
</div>
</body>
