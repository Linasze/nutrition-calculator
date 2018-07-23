<?php
 switch (count($proteinDinner)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0dinner = $this->productModel->getProductById($proteinDinner[0]);
        $proteinsperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0dinner = $this->productModel->getProductById($proteinDinner[0]);
        $get_product1dinner = $this->productModel->getProductById($proteinDinner[1]);
    if(!empty($get_product1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1dinner->use_id;
        $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1dinner->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0dinner = $this->productModel->getProductById($proteinDinner[0]);
    $get_product1dinner = $this->productModel->getProductById($proteinDinner[1]);
    $get_product2dinner = $this->productModel->getProductById($proteinDinner[2]);
    if(!empty($get_product1dinner->use_id)){
        if(empty($get_product2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0dinner = $this->productModel->getProductById($proteinDinner[0]);
    $get_product1dinner = $this->productModel->getProductById($proteinDinner[1]);
    $get_product2dinner = $this->productModel->getProductById($proteinDinner[2]);
    $get_product3dinner = $this->productModel->getProductById($proteinDinner[3]);
    if(empty($get_product0dinner->use_id)){
        if(empty($get_product1dinner->use_id) && !empty($get_product2dinner->use_id)){
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1dinner->use_id) && empty($get_product2dinner->use_id) && empty($get_product3dinner->use_id)){ 
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1dinner->use_id) && empty($get_product2dinner->use_id)){                       
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2dinner->use_id) && !empty($get_product3dinner->use_id)){                     
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;                      
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2dinner->use_id) && empty($get_product3dinner->use_id)){                        
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;                      
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3dinner->use_id)){                     
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1dinner->use_id)){
          if(empty($get_product2dinner->use_id) && !empty($get_product3dinner->use_id)){
                        
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2dinner->use_id) && empty($get_product3dinner->use_id)){ 
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2dinner->use_id)){ 
                       
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2dinner->use_id)){
         if(empty($get_product3dinner->use_id)){                         
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;               
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1 ;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;                     
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3dinner->use_id)){
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;               
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;               
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0dinner = $this->productModel->getProductById($proteinDinner[0]);
    $get_product1dinner = $this->productModel->getProductById($proteinDinner[1]);
    $get_product2dinner = $this->productModel->getProductById($proteinDinner[2]);
    $get_product3dinner = $this->productModel->getProductById($proteinDinner[3]);
    $get_product4dinner = $this->productModel->getProductById($proteinDinner[4]);
if(empty($get_product0dinner->use_id)){
        if(empty($get_product1dinner->use_id) && !empty($get_product2dinner->use_id) && !empty($get_product3dinner->use_id) && !empty($get_product4dinner->use_id)){
            
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3 +$proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1dinner->use_id) && empty($get_product2dinner->use_id) && empty($get_product3dinner->use_id)&& empty($get_product4dinner->use_id)){         
          
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1dinner->use_id) && empty($get_product2dinner->use_id) && empty($get_product3dinner->use_id)){                      
           
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4dinner->use_id;
            $minus = $proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1dinner->use_id) && empty($get_product2dinner->use_id)){  
            if(!empty($get_product3dinner->use_id)){
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;                       
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4dinner->use_id;                
            $minus =  $proteinsperservingdinner3 + $proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;                       
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4dinner->use_id;                
            $minus =  $proteinsperservingdinner3 + $proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2dinner->use_id) && !empty($get_product3dinner->use_id)){     
            
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;                      
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2dinner->use_id) && empty($get_product3dinner->use_id)){   
            if(!empty($get_product1dinner->use_id)){ 
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;                      
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;                      
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3dinner->use_id)){   
            if(!empty($get_product2dinner->use_id)){
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4dinner->use_id)){   
             
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;                       
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4dinner->use_id;
            $minus =  $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3 + $proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1dinner->use_id)){
          if(empty($get_product2dinner->use_id) && !empty($get_product3dinner->use_id) && !empty($get_product4dinner->use_id)){
            
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4dinner->use_id;
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner3 + $proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3dinner->use_id) ){   
            
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $minus =  $proteinsperservingdinner0;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4dinner->use_id) ){
            if(!empty($get_product3dinner->use_id)){
               
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4dinner->use_id;
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner2 + $proteinsperservingdinner3 + $proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2dinner->use_id)){
         if(empty($get_product3dinner->use_id)){   
            
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;               
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1 ;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;                     
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;                     
            $proteinsperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id;                     
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1 + $proteinsperservingdinner3 + $proteinsperservingdinner4;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3dinner->use_id)){
        if(empty($get_product4dinner->use_id)){
           
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;               
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;               
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;               
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id;               
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1 + $proteinsperservingdinner2;
            $proteinsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0dinner->use_id;
            $proteinsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1dinner->use_id;               
            $proteinsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2dinner->use_id; 
            $proteinsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3dinner->use_id; 
            $minus =  $proteinsperservingdinner0 + $proteinsperservingdinner1 + $proteinsperservingdinner2 + $proteinsperservingdinner3;
            $proteinsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}