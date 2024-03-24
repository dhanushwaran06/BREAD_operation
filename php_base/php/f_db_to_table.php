<?PHP

        $PV = ['debug'=>0];

        $PV['content'] = '';
        
        $PV['debug']   =  (@$_GET['debug'])?1:0;
        
        // connect
        $dbh = mysqli_connect("localhost", # host
                              "root",      # user 
                              "",          # password
                              "workshop"   # db 
                        );
                
        // check connection
        if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: ".mysqli_connect_error();
                exit();
        }
        
        // query
        $PV['query']   = "SELECT
                                full_name,
                                roll_no,
                                date_of_birth,
                                gender
                          FROM
                                student_info";   
        
        // Perform query
        $PV['query_result'] = mysqli_query($dbh,"$PV[query]");
        
        if(!$PV['query_result']){
                die("Database access failed: " . mysqli_error($dbh));                 
        }else{
                
                // parse each row
                while($row=mysqli_fetch_assoc($PV['query_result'])){
                      
                        if($PV['debug']){ var_dump($row); }
                      
                        $PV['content'].='<tr>'.
                                             "<td>$row[full_name]</td>".
                                             "<td>$row[roll_no]</td>".
                                             "<td>$row[date_of_birth]</td>".
                                             "<td>$row[gender]</td>".
                                        '</tr>';
                            
                      
                } // end of parse
                
        } // end of reult
        
        
        mysqli_close($dbh);
        
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <table border="1" width="80%">
                        <thead>
                                <th>Name</th>
                                <th>Roll No.</th>
                                <th>Date of Birth</th>
                                 <th>Gender</th>
                        </thead>
                        <tbody>
                                <?PHP echo $PV['content']; ?>
                        </tbody>
                </table>
        </body>
</html>
