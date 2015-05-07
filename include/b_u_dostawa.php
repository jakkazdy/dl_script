<?php
if(($U->status==2) AND ($U->level==2)){
    include('include/class/postcode_b2b.php');
    $B2B=new Postcode_b2b($U->id);
    include('templates/view_postcode.php');
}
?>