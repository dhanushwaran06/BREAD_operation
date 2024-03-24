
<?PHP
        // content variable
        $content         = '';
        
        // data
        $students       = array(['name'=>'Arun', 'roll_no'=>'19MCA18','dob'=>'20-Jan-1998'],
                                 ['name'=>'Anand','roll_no'=>'19MCA19','dob'=>'22-Jun-1998'],
                                 ['name'=>'Bala', 'roll_no'=>'19MCA20','dob'=>'10-Feb-1999']
                                );
       
        # traverse
        foreach($students as $student){
                
                // content building
                $content.='<tr>'.
                                 '<td>'.$student['name'].'</td>'.
                                 '<td>'.$student['roll_no'].'</td>'.
                                 '<td>'.$student['dob'].'</td>'.
                            '</tr>';
                
        } // end of travers
        
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