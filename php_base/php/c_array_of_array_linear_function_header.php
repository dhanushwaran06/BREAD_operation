<?PHP
        
        $student_data_key_labels = array('name'=>'Name','roll_no'=>'Roll No.','dob'=>'DOB');
        
        $student_info            = array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                         ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                        ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                   );
        
        // table builder
        function table_builder($table_info,$data_key_labels){
                
                $content = '';
                
                $table_headings  = array_values($data_key_labels);
                $table_data_keys = array_keys($data_key_labels);
                
                
                $content = '<thead>';
                // build head
                foreach($table_headings as $heading){
                        
                        $content.="<th>$heading</th>";                
                }
                
                $content.='<thead>';
                
                
                $content.='<tbody>';
                # traverse
                foreach($table_info as $row){
                
                        $content.='<tr>';
                         
                        // col traverse 
                        foreach($table_data_keys as $data_key){
                                
                                $content.="<td>$row[$data_key]</td>";
                                
                        } // col traverse
                
                        $content.='</tr>';
                
                } // end of travers
                
                $content.='</tbody>';
                
                return $content;
                
        } // end of table_builder
       
        //build content
        $content = table_builder($student_info,$student_data_key_labels);
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h2>Student Info</h2>                
                <table border="1" width="80%" cellpsdding="15px" cellspacing="0">
                        <?PHP echo $content; ?>                         
                </table>
                       
        </body>
</html>