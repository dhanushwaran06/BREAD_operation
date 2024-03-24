<?PHP
        
        #lib
        include('../lib/general.php');

        $PV = ['debug'=>0];

        $PV['student_keys'] = array('full_name'=>'Name','roll_no'=>'Roll No.','date_of_birth'=>'DoB'); 
        $PV['student_info'] = [];
        
        $PV['debug']        =  (@$_GET['debug'])?1:0;
        
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
                                date_of_birth
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
                      
                        // push into array
                        array_push($PV['student_info'],$row);
                      
                } // end of parse
                
        } // end of reult
        
        // close db
        mysqli_close($dbh);
        
        // table builder
        $PV['content'] =  table_builder($PV['student_info'],['full_name'=>'Name','roll_no'=>'Roll No.','date_of_birth'=>'DoB']);
        
?>
<!DOCTYPE html>
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <div style="width:100%;text-align:right">
                        <a href="?debug=1">Debug</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="f_db_to_table_assoc.php">Debug Off</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                </div> 
                <table border="1" width="100%">
                                <?PHP echo $PV['content']; ?>                        
                </table>
        </body>
</html>
