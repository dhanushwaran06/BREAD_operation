<?PHP

        $greet          = 'Hello';

        $greet_info     = array(['title'  =>'MCA Ist Year',
                                 'persons'=>['Kumar',
                                             'Ajith','Sree','Dharani']],
                          
                                ['title'  =>'MCA 2nd Year',
                                 'persons'=>['Arun',
                                             'Bala','Mani']]                          
                                );
       
        $hello  = '';
        
        # traverse
        foreach($greet_info as $greet_item){
                
                $greet_persons = '';
                
                # person
                foreach($greet_item['persons'] as $person){
                        
                        $hello.=$greet." ".$greet_item['title']." ".$person."<br>";                                                
                
                } // end of person                
                
        } // end of travers
        
?>        
<html>
        <head>
                <title>Adaptive Web Development</title>
        </head>
        <body>
                <h1><?PHP echo $hello; ?></h1>
        </body>
</html>