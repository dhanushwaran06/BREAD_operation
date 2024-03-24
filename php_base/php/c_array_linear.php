<?PHP

        $content         = '';
        
        $student_info    = array('Arun','Anand','Bala','Chandaran');
       
        # traverse
        foreach($student_info as $student){
                
                 $content.='<li>'.$student.'</li>';
                
        } // end of travers
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h2>Student Info</h2>                
                <ol>
                       <?PHP echo $content; ?>
                </ol>
        </body>
</html>