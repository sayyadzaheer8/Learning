<?php

function insert_categories()  {
   
    if(isset($_POST['submit'])) {

        $cat_title =  $_POST['cat_title'];
     
        if($cat_title == "" || empty($cat_title))  {
     
         echo  "This field should not be empty";
        }   else  {
     
         $query  = "INSERT INTO categories (cat_title) " ;
         $query .= "VALUE ('{$cat_title}')"  ;
     
         $creat_category_query = mysqli_query($connection, $query);
     
         if(!$creat_category_query)  {
             die('QUERY FAILED' . mysqli_error($connection));
         }
        }
     
     }
     
}


?>