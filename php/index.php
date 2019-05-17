   <?php
    require('../sections/header.php');
        
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            if(file_exists("$page.php")){
                include("$page.php");
            }
            else {
                echo "<h1>404: Page Doesn't Exist!</h1>";
            }
        } else {
    include("home.php");
}

  
require('../sections/footer.php');

?>