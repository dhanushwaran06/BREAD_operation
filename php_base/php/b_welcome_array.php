<?PHP

        $greet    = 'Hello';

        $persons  = array('MCA Ist Year',
                          'MCA 2nd year',
                          'MCA final year',
                          "MCA Staff's",
                          'Lab-Assitant\'s');
       
        $hello  = '';
        
        # traverse
        foreach($persons as $person){                
                $hello.=$greet." ".$person."<br>";                        
        }
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h1><?PHP echo $hello; ?></h1>
        </body>
</html>