<?php  
 $connect = mysqli_connect("localhost", "root", "", "tmibd");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM country_info WHERE country_desc LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["country_desc"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  