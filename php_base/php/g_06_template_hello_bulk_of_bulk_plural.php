<?PHP

        // includes
        include('../lib/template.php');
        
        // var
        $content  =  array('greet_info'=>array(['greet_item'=>[['greet'=>'नमस्कार ',    'person_name'=>'Amar'],
                                                               ['greet'=>'ہیلو',    'person_name'=>'Akbar'],
                                                               ['greet'=>'Hello',   'person_name'=>'Antony']]
                                               ],
                                               
                                               ['greet_item'=>[['greet'=>'வணக்கம் ', 'person_name'=>'Shankar'],
                                                               ['greet'=>'ہیلو',     'person_name'=>'Salim'],
                                                               ['greet'=>'Hello',    'person_name'=>'Simon']]
                                               ],
                                               
                                               ['greet_item'=>[['greet'=>'హలో ',       'person_name'=>'Ram'],
                                                               ['greet'=>'ہیلو',     'person_name'=>'Robert'],
                                                               ['greet'=>'Hello',    'person_name'=>'Rahim']]
                                               ],
                                               
                                                ['greet_item'=>[['greet'=>'Hello',      'person_name'=>'John'],
                                                               ['greet'=>'ہیلو',     'person_name'=>'Jaffer'],
                                                               ['greet'=>'ഹലോ',    'person_name'=>'Janardhanan']]
                                               ],
                                        ),
                           
                           'page_title'=>'Template Bulk'      
                           
                        );
        
        
        
        // Load Template
        $T =new Template("../template/hello_bulk_of_bulk.html");
        
        // Params
        $T->AddParam($content);
                
        // producing the content
        $T->EchoOutput();        
        
?>        

