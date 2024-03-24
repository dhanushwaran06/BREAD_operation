<?PHP
                     
        // table builder
        function table_builder($table_info,$data_key_labels){
                
                $content = '<table border="1">';
                
                $table_headings  = array_values($data_key_labels);
                $table_data_keys = array_keys($data_key_labels);
                
                
                $content.= '<thead>';
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
                
                $content.='</tbody></table>';
                
                return $content;
                
        } // end of table_builder
        
        
        // table builder one param
        function table_builder_v2($param){
            
                $lv = [];
                
                $lv['table_attr'] = '';
                
                // table attr
                if(@$param['table_attr']){
                    
                    foreach($param['table_attr'] as $attr => $attr_val){
                        
                        $lv['table_attr'].= $attr."=".$attr_val." ";
                    }
                }
                
                $content = "<table $lv[table_attr]>";
                
                $lv['headings']  = array_values($param['key_labels']);
                $lv['data_keys'] = array_keys($param['key_labels']);
                
                // build head                
                $content.= '<thead>';
                
                foreach($lv['headings'] as $heading){
                        
                        $content.="<th>$heading</th>";                
                }
                
                $content.='<thead>';
                
                // build body
                $content.='<tbody>';
                
                # traverse
                foreach($param['data'] as $row){
                
                        $content.='<tr>';
                         
                        // col traverse 
                        foreach($lv['data_keys'] as $data_key){
                                
                                $content.="<td>$row[$data_key]</td>";
                                
                        } // col traverse
                
                        $content.='</tr>';
                
                } // end of travers
                
                $content.='</tbody></table>';
                
                return $content;
                
        } // end of table_builder
       
?>