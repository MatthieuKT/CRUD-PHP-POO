<?php
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// pass connection to objects
$product = new Product($db);
$category = new Category($db);

// set page headers
$page_title = "Create Product";
include_once 'layout_header.php';

echo '<div class="right-button-margin">"';
  echo '<a href="index.php" class="btn btn-default pull-right">Read Products</a>';
echo "</div>";
 ?>

<!-- 'create product' html form will be here -->

<?php// footer
include_once "layout_footer.php";
?>
