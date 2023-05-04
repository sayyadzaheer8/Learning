   <!-- Blog Sidebar Widgets Column -->
   <div class="col-md-4">



       <!-- Blog Search Well -->
       <div class="well">
           <h4>Blog Search</h4>
           <form action="search.php" method="post">
               <div class="input-group">
                   <input name="search" type="text" class="form-control" id="search">
                   <span class="input-group-btn">
                       <button class="btn btn-default" type="submit" name="submit" id="search_button">
                           <span class="glyphicon glyphicon-search"></span>
                       </button>
                   </span>

           </form>
       </div>


       <!-- /.input-group -->
   </div>





   <!-- Blog Categories Well -->
   <div class="well">

       <?php
        $sqlQueryToBeSentToConnection = "SELECT * FROM categories";

        $select_categories_sidebar = mysqli_query($connection, $sqlQueryToBeSentToConnection);

        

        ?>


       <h4>Blog Categories</h4>
       <div class="row">
           <div class="col-lg-12">
               <ul class="list-unstyled">

              <?php  while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {

$cat_title =  $row['cat_title'];

echo "<li><a href='#'>{$cat_title}</a></li>";
}    ?>
               
               </ul>
           </div>
           <!-- /.col-lg-6 -->
       
           <!-- /.col-lg-6 -->
       </div>
       <!-- /.row -->
   </div>





   <!-- Side Widget Well -->
  

   <?php

include "includes/widget.php"
?>
    