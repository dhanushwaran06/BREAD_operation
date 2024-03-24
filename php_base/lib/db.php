<?PHP
        // db connect 
        function db_connect(){
                
                // connect
                $dbh = mysqli_connect("db177.pair.com", # host
                                      "o2d3_2",      # user 
                                      "WZym8FwQnaawUCEn",          # password
                                      "o2d3_pg"   # db 
                                );
                        
                // check connection
                if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL: ".mysqli_connect_error();
                        exit();
                }else{
                        return $dbh;
                }
                
        } // end      
        
        
        // db close
        function db_close($dbh){
                mysqli_close($dbh);
        }
        
        // fetch array
        function fetch_assoc_array($param){
        
                // local variable
                $lv = ['debug'=>0];
                $lv['db_table_data'] = [];
                
                $lv['fields']  = implode(',',$param['fields']);
                
                // query
                $lv['query']   = "SELECT
                                        $lv[fields]
                                  FROM
                                        $param[table]";   
                
                // Perform query
                $lv['query_result'] = mysqli_query($param['dbh'],"$lv[query]");
                
                if(!$lv['query_result']){
                        die("Database access failed: " . mysqli_error($param['dbh']));                 
                }else{
                        
                        // parse each row
                        while($row=mysqli_fetch_assoc($lv['query_result'])){
                              
                                if($lv['debug']){ var_dump($row); }
                
                                array_push($lv['db_table_data'],$row);                    
                              
                        } // end of parse
                        
                } // end of reult
                
                return $lv['db_table_data'];
        }

?>