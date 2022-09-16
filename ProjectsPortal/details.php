<html>
    <head>
        <style>
            table,th,td{
                border:2px solid black;
                text-align:center;
            }
            table{
                margin:auto;
                width:80%;
                border-collapse:collapse;
            }
            h1{
                text-align:center;
            }
        </style>
        <title>Display records</title>
    </head>
    <body>
        <h1>
            Project Records
        </h1>
        <br>
        <br>
        <table>
            <tr>
            
               <th>Group Number</th>
                <th>Project Name</th>
                <th>Leader Name</th>
             </tr>
             <?php
             require_once "config.php";
             $query="select * from students";
             $data=mysqli_query($link,$query);
             $total=mysqli_num_rows($data);
             if($total!=0){
                while($result=mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['group_num']."</td>
                    <td>".$result['project_name']."</td>
                    <td>".$result['leader_name']."</td>
                    </tr>
                    ";
                }
             }
             else{
                echo "No record found";
             }
             ?>
 
        </table>
    </body>
</html>