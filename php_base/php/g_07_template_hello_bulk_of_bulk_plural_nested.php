<?PHP

        // includes
        include('../lib/template.php');
        
        // var
        $content  =  array('greet_info'=>array( ['greet_item'=>[['greet'=>'नमस्कार ',    'person_name'=>'Amar'],
                                                               ['greet'=>'ہیلو',    'person_name'=>'Akbar'],
                                                               ['greet'=>'Hello',   'person_name'=>'Antony']],
                                                
                                                 'version'  => 'Hindi'
                                                ],
                                               
                                                ['greet_item'=>[['greet'=>'வணக்கம் ', 'person_name'=>'Shankar'],
                                                               ['greet'=>'ہیلو',     'person_name'=>'Salim'],
                                                               ['greet'=>'Hello',    'person_name'=>'Simon']],
                                                 'version'  => 'Tamil'
                                                ],
                                               
                                                ['greet_item'=>[['greet'=>'హలో ',       'person_name'=>'Ram'],
                                                               ['greet'=>'ہیلو',     'person_name'=>'Robert'],
                                                               ['greet'=>'Hello',    'person_name'=>'Rahim']],
                                                 'version'  => 'Telgu'
                                                ],
                                               
                                                ['greet_item'=>[['greet'=>'Hello',      'person_name'=>'John'],
                                                               ['greet'=>'ہیلو',     'person_name'=>'Jaffer'],
                                                               ['greet'=>'ഹലോ',    'person_name'=>'Janardhanan']],
                                                 'version'  => 'Malayalam'
                                               ],
                                        ),
                           
                           'page_title'=>'Template Bulk'      
                           
                        );
        
        
        
        // Load Template
        $T =new Template(['filename'         =>'../template/hello_bulk_of_bulk_nested.html',
                          'loop_context_vars'=>1
                        ]);
        
        // Params
        $T->AddParam($content);
                
        // producing the content
        $T->EchoOutput();        
        
?>        

