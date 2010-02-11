<?php
  
       //    header("Content-type: image/jpeg");
         
        // read the post data
//        $data = array('3400','2570','245','473','1000','3456','780');
        $data = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
        $sum = array_sum($data);
        
//        $height = 255;
 //       $width = 320;
        $height = 80;
        $width = 160;
        
        $im = imagecreate($width,$height); // width , height px

        $white = imagecolorallocate($im,255,255,255); 
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);   


        //imageline($im, 10, 5, 10, 230, $black);
    

        $x = 0;   
        $y = 70;   
        $x_width = 10;  
        $y_ht = 0; 
       
       	$columns = count($data);
        for($i=0;$i<$columns;$i++)$maxv = max($data[$i],$maxv);
       die(print_r($maxv));
        for ($i=0;$i<count($data);$i++){
        
          $y_ht = ($data[$i]/$sum)* $height;    
          
              imagefilledrectangle($im,$x,$y,$x+$x_width,($y-$y_ht),$red);
              imagestring( $im,1,$x-1,$y+2,$data[$i],$black);
              
          $x += ($x_width+6);  
         
        }
        
                imageline($im, 0, 70, 160, 70, $black);

        
        imagejpeg($im);

?>