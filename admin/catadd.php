﻿<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php include '../classes/Category.php'; ?>
<?php 
$cat = new Category();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['catName'];
    
    $insertCat= $cat->catInsert($catName);
}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">
               <?php 
               if (isset($insertCat)) {
                   echo $insertCat;
               }
                ?> 
                <a href="catlist.php" class="btn btn-success pull-right">All Categories</a>
                 <form action="" method="post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                <button class="btn btn-primary" type="submit" name="submit" Value="Save" >Save</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>