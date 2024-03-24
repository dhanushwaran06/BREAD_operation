<?PHP

        // includes
        include('../lib/db.php');
        include('../lib/general.php');
        include('../data/student.php');

        // page variables
        $PV = ['debug'=>0];

        $PV['db_table_data'] = [];
        
        $PV['debug']   =  (@$_GET['debug'])?1:0;
        
        // connect db
        $dbh = db_connect();
      
      
        // query
        $PV['query']   = "SELECT
                                full_name as name,
                                roll_no,
                                date_of_birth as dob
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
        
                        array_push($PV['db_table_data'],$row);                    
                      
                } // end of parse
                
        } // end of reult
        
        
        if($PV['debug']){ var_dump($PV['db_table_data']); }
                
        // close db
        mysqli_close($dbh);
        
        // db to array
        $DESK_DATA['data'] = $PV['db_table_data'];
        
        // table fetch
        $PV['content']     = table_builder_v2($DESK_DATA);
        
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h2>DB to Array of Array</h2>
                <?PHP echo $PV['content']; ?>              
        </body>
</html>
