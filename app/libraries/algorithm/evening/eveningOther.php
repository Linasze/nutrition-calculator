<?php
 switch (count($otherEvening)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherEvening)){
        $getPr0evening = $this->productModel->getProductById($otherEvening[0]);
        $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $othersperservingevening = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0evening = $this->productModel->getProductById($otherEvening[0]);
        $getPr1evening = $this->productModel->getProductById($otherEvening[1]);
    if(!empty($getPr1evening->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1evening->use_id;
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1evening->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0evening = $this->productModel->getProductById($otherEvening[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening[2]);
    if(!empty($getPr1evening->use_id)){
        if(empty($getPr2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0evening = $this->productModel->getProductById($otherEvening[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening[3]);
    if(!empty($getPr0evening->use_id)){
        $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
        $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
        $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
        $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
        $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingevening = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){      
                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){       
                       
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){          
                      
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3evening->use_id)){   
                          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2evening->use_id)){ 
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){     
                             
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3evening->use_id)){
        
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0evening = $this->productModel->getProductById($otherEvening[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening[3]);
    $getPr4evening = $this->productModel->getProductById($otherEvening[4]);
if(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 +$othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)&& empty($getPr4evening->use_id)){         
          
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){                      
           
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus = $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){  
            if(!empty($getPr3evening->use_id)){
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){     
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){   
            if(!empty($getPr1evening->use_id)){ 
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3evening->use_id)){   
            if(!empty($getPr2evening->use_id)){
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4evening->use_id)){   
             
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3evening->use_id) ){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $minus =  $othersperservingevening0;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4evening->use_id) ){
            if(!empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3evening->use_id)){
        if(empty($getPr4evening->use_id)){
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id; 
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id; 
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($otherEvening2day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherEvening2day)){
        $getPr0evening = $this->productModel->getProductById($otherEvening2day[0]);
        $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $othersperservingevening = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0evening = $this->productModel->getProductById($otherEvening2day[0]);
        $getPr1evening = $this->productModel->getProductById($otherEvening2day[1]);
    if(!empty($getPr1evening->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1evening->use_id;
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1evening->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0evening = $this->productModel->getProductById($otherEvening2day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening2day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening2day[2]);
    if(!empty($getPr1evening->use_id)){
        if(empty($getPr2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0evening = $this->productModel->getProductById($otherEvening2day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening2day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening2day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening2day[3]);
    if(!empty($getPr0evening->use_id)){
        $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
        $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
        $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
        $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
        $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingevening = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){      
                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){       
                       
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){          
                      
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3evening->use_id)){   
                          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2evening->use_id)){ 
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){     
                             
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3evening->use_id)){
        
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0evening = $this->productModel->getProductById($otherEvening2day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening2day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening2day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening2day[3]);
    $getPr4evening = $this->productModel->getProductById($otherEvening2day[4]);
if(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 +$othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)&& empty($getPr4evening->use_id)){         
          
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){                      
           
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus = $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){  
            if(!empty($getPr3evening->use_id)){
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){     
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){   
            if(!empty($getPr1evening->use_id)){ 
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3evening->use_id)){   
            if(!empty($getPr2evening->use_id)){
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4evening->use_id)){   
             
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3evening->use_id) ){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $minus =  $othersperservingevening0;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4evening->use_id) ){
            if(!empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3evening->use_id)){
        if(empty($getPr4evening->use_id)){
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id; 
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id; 
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherEvening3day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherEvening3day)){
        $getPr0evening = $this->productModel->getProductById($otherEvening3day[0]);
        $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $othersperservingevening = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0evening = $this->productModel->getProductById($otherEvening3day[0]);
        $getPr1evening = $this->productModel->getProductById($otherEvening3day[1]);
    if(!empty($getPr1evening->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1evening->use_id;
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1evening->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0evening = $this->productModel->getProductById($otherEvening3day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening3day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening3day[2]);
    if(!empty($getPr1evening->use_id)){
        if(empty($getPr2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0evening = $this->productModel->getProductById($otherEvening3day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening3day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening3day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening3day[3]);
    if(!empty($getPr0evening->use_id)){
        $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
        $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
        $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
        $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
        $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingevening = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){      
                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){       
                       
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){          
                      
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3evening->use_id)){   
                          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2evening->use_id)){ 
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){     
                             
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3evening->use_id)){
        
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0evening = $this->productModel->getProductById($otherEvening3day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening3day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening3day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening3day[3]);
    $getPr4evening = $this->productModel->getProductById($otherEvening3day[4]);
if(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 +$othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)&& empty($getPr4evening->use_id)){         
          
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){                      
           
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus = $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){  
            if(!empty($getPr3evening->use_id)){
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){     
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){   
            if(!empty($getPr1evening->use_id)){ 
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3evening->use_id)){   
            if(!empty($getPr2evening->use_id)){
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4evening->use_id)){   
             
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3evening->use_id) ){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $minus =  $othersperservingevening0;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4evening->use_id) ){
            if(!empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3evening->use_id)){
        if(empty($getPr4evening->use_id)){
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id; 
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id; 
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($otherEvening4day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherEvening4day)){
        $getPr0evening = $this->productModel->getProductById($otherEvening4day[0]);
        $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $othersperservingevening = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0evening = $this->productModel->getProductById($otherEvening4day[0]);
        $getPr1evening = $this->productModel->getProductById($otherEvening4day[1]);
    if(!empty($getPr1evening->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1evening->use_id;
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1evening->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0evening = $this->productModel->getProductById($otherEvening4day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening4day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening4day[2]);
    if(!empty($getPr1evening->use_id)){
        if(empty($getPr2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0evening = $this->productModel->getProductById($otherEvening4day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening4day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening4day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening4day[3]);
    if(!empty($getPr0evening->use_id)){
        $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
        $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
        $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
        $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
        $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingevening = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){      
                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){       
                       
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){          
                      
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3evening->use_id)){   
                          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2evening->use_id)){ 
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){     
                             
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3evening->use_id)){
        
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0evening = $this->productModel->getProductById($otherEvening4day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening4day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening4day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening4day[3]);
    $getPr4evening = $this->productModel->getProductById($otherEvening4day[4]);
if(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 +$othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)&& empty($getPr4evening->use_id)){         
          
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){                      
           
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus = $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){  
            if(!empty($getPr3evening->use_id)){
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){     
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){   
            if(!empty($getPr1evening->use_id)){ 
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3evening->use_id)){   
            if(!empty($getPr2evening->use_id)){
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4evening->use_id)){   
             
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3evening->use_id) ){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $minus =  $othersperservingevening0;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4evening->use_id) ){
            if(!empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3evening->use_id)){
        if(empty($getPr4evening->use_id)){
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id; 
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id; 
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherEvening5day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherEvening5day)){
        $getPr0evening = $this->productModel->getProductById($otherEvening5day[0]);
        $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $othersperservingevening = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0evening = $this->productModel->getProductById($otherEvening5day[0]);
        $getPr1evening = $this->productModel->getProductById($otherEvening5day[1]);
    if(!empty($getPr1evening->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1evening->use_id;
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1evening->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0evening = $this->productModel->getProductById($otherEvening5day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening5day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening5day[2]);
    if(!empty($getPr1evening->use_id)){
        if(empty($getPr2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0evening = $this->productModel->getProductById($otherEvening5day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening5day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening5day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening5day[3]);
    if(!empty($getPr0evening->use_id)){
        $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
        $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
        $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
        $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
        $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingevening = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){      
                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){       
                       
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){          
                      
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3evening->use_id)){   
                          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2evening->use_id)){ 
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){     
                             
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3evening->use_id)){
        
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0evening = $this->productModel->getProductById($otherEvening5day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening5day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening5day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening5day[3]);
    $getPr4evening = $this->productModel->getProductById($otherEvening5day[4]);
if(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 +$othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)&& empty($getPr4evening->use_id)){         
          
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){                      
           
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus = $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){  
            if(!empty($getPr3evening->use_id)){
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){     
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){   
            if(!empty($getPr1evening->use_id)){ 
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3evening->use_id)){   
            if(!empty($getPr2evening->use_id)){
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4evening->use_id)){   
             
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3evening->use_id) ){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $minus =  $othersperservingevening0;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4evening->use_id) ){
            if(!empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3evening->use_id)){
        if(empty($getPr4evening->use_id)){
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id; 
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id; 
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherEvening6day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherEvening6day)){
        $getPr0evening = $this->productModel->getProductById($otherEvening6day[0]);
        $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $othersperservingevening = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0evening = $this->productModel->getProductById($otherEvening6day[0]);
        $getPr1evening = $this->productModel->getProductById($otherEvening6day[1]);
    if(!empty($getPr1evening->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1evening->use_id;
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1evening->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0evening = $this->productModel->getProductById($otherEvening6day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening6day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening6day[2]);
    if(!empty($getPr1evening->use_id)){
        if(empty($getPr2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0evening = $this->productModel->getProductById($otherEvening6day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening6day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening6day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening6day[3]);
    if(!empty($getPr0evening->use_id)){
        $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
        $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
        $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
        $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
        $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingevening = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){      
                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){       
                       
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){          
                      
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3evening->use_id)){   
                          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2evening->use_id)){ 
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){     
                             
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3evening->use_id)){
        
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0evening = $this->productModel->getProductById($otherEvening6day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening6day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening6day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening6day[3]);
    $getPr4evening = $this->productModel->getProductById($otherEvening6day[4]);
if(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 +$othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)&& empty($getPr4evening->use_id)){         
          
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){                      
           
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus = $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){  
            if(!empty($getPr3evening->use_id)){
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){     
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){   
            if(!empty($getPr1evening->use_id)){ 
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3evening->use_id)){   
            if(!empty($getPr2evening->use_id)){
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4evening->use_id)){   
             
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3evening->use_id) ){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $minus =  $othersperservingevening0;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4evening->use_id) ){
            if(!empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3evening->use_id)){
        if(empty($getPr4evening->use_id)){
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id; 
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id; 
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($otherEvening7day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherEvening7day)){
        $getPr0evening = $this->productModel->getProductById($otherEvening7day[0]);
        $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $othersperservingevening = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0evening = $this->productModel->getProductById($otherEvening7day[0]);
        $getPr1evening = $this->productModel->getProductById($otherEvening7day[1]);
    if(!empty($getPr1evening->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1evening->use_id;
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1evening->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0evening = $this->productModel->getProductById($otherEvening7day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening7day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening7day[2]);
    if(!empty($getPr1evening->use_id)){
        if(empty($getPr2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0evening = $this->productModel->getProductById($otherEvening7day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening7day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening7day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening7day[3]);
    if(!empty($getPr0evening->use_id)){
        $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
        $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
        $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
        $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
        $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingevening = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){      
                        
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){       
                       
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){          
                      
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3evening->use_id)){   
                          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){ 
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2evening->use_id)){ 
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){     
                             
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3evening->use_id)){
        
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0evening = $this->productModel->getProductById($otherEvening7day[0]);
    $getPr1evening = $this->productModel->getProductById($otherEvening7day[1]);
    $getPr2evening = $this->productModel->getProductById($otherEvening7day[2]);
    $getPr3evening = $this->productModel->getProductById($otherEvening7day[3]);
    $getPr4evening = $this->productModel->getProductById($otherEvening7day[4]);
if(empty($getPr0evening->use_id)){
        if(empty($getPr1evening->use_id) && !empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 +$othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)&& empty($getPr4evening->use_id)){         
          
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){                      
           
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus = $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1evening->use_id) && empty($getPr2evening->use_id)){  
            if(!empty($getPr3evening->use_id)){
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;                
            $minus =  $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id)){     
            
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2evening->use_id) && empty($getPr3evening->use_id)){   
            if(!empty($getPr1evening->use_id)){ 
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                      
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3evening->use_id)){   
            if(!empty($getPr2evening->use_id)){
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4evening->use_id)){   
             
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                       
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1evening->use_id)){
          if(empty($getPr2evening->use_id) && !empty($getPr3evening->use_id) && !empty($getPr4evening->use_id)){
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3evening->use_id) ){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $minus =  $othersperservingevening0;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4evening->use_id) ){
            if(!empty($getPr3evening->use_id)){
               
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4evening->use_id;
            $minus =  $othersperservingevening0 + $othersperservingevening2 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2evening->use_id)){
         if(empty($getPr3evening->use_id)){   
            
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 ;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;                     
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $othersperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id;                     
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening3 + $othersperservingevening4;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3evening->use_id)){
        if(empty($getPr4evening->use_id)){
           
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id;               
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2;
            $othersperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0evening->use_id;
            $othersperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1evening->use_id;               
            $othersperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2evening->use_id; 
            $othersperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3evening->use_id; 
            $minus =  $othersperservingevening0 + $othersperservingevening1 + $othersperservingevening2 + $othersperservingevening3;
            $othersperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}