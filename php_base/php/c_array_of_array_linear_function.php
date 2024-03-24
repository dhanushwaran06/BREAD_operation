<?PHP
        
        $student_data_keys = array('name','roll_no','dob');
        
        $student_info      = array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                   ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                   ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                );
        
        // table builder
        function table_builder($table_info,$data_keys){
                
                $content = '';
                
                 # traverse
                foreach($table_info as $row){
                
                        $content.='<tr>';
                         
                        // col traverse 
                        foreach($data_keys as $data_key){
                                
                                $content.="<td>$row[$data_key]</td>";
                                
                        } // col traverse
                
                        $content.='</tr>';
                
                } // end of travers
                
                return $content;
                
        } // end of table_builder
       
        //build content
        $content = table_builder($student_info,$student_data_keys);
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h2>Student Info</h2>                
                <table border="1" width="80%" cellpsdding="15px" cellspacing="0">
                        <thead>
                                <th>Name</th>
                                <th>Roll No.</th>
                                <th>DOB</th>
                        </thead>
                        <tbody>
                                <?PHP echo $content; ?>         
                        </tbody>                        
                </table>
                       
        </body>
</html>