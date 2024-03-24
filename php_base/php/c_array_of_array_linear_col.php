<?PHP
        // content variable 
        $content           = '';
        
        // data keys
        $student_data_keys = array('name','roll_no','dob');
        
        // data info
        $student_info      = array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                   ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                   ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                );
       
        # row traverse
        foreach($student_info as $student){
                
                // content building
                $content.='<tr>';
                 
                // col traverse 
                foreach($student_data_keys as $data_key){
                        
                        $content.="<td>$student[$data_key]</td>";
                        
                } // col traverse
                
                $content.='</tr>';
                
        } // end of traverse
        
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
                                <th>DoB</th>
                        </thead>
                        <tbody>
                                <?PHP echo $content; ?>         
                        </tbody>                        
                </table>
                       
        </body>
</html>