<?PHP

        // $greet          = 'Hello';
        
        $greet          = array('TA'=>'வணக்கம்',
                                'HI'=>'नमस्ते'
                                );

        $greet_info     = array(['title'  =>'MCA Ist Year',
                                 'persons'=>[['name'=>'Kumar','lang'=>'TA'],
                                             ['name'=>'Ajith','lang'=>'HI']
                                        ] // end of person                                 
                                ] // end of array                        
                        );
       
        $hello  = '';
        
        # traverse
        foreach($greet_info as $greet_item){
                
                $greet_persons = '';
                
                # person
                foreach($greet_item['persons'] as $person){
                        
                        $hello.=$greet[$person['lang']]." ".$greet_item['title']." ".$person['name']."<br>";                                                
                
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