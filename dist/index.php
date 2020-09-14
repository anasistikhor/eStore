<?php
ob_start();
// include header.php file
include('header.php');
?>

<?php
/* include banner area */
include('./template/_banner-area.php');
/* /include banner area */

/* include top-sale */
include('./template/_top-sale.php');
/* /include top-sale*/

/* include special-price */
include('./template/_special-price.php');
/* /include special-price */

/* include banner ads */
include('./template/_banner-ads.php');
/* /include banner ads */

/* include new phones */
include('./template/_new-phones.php');
/* /include new phones */

/* include blogs */
include('./template/_blogs.php');
/* /include blogs */
?>
    
<?php
// include footer.php file
include('footer.php');
?>