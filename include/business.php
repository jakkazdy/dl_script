<?php

if($_GET['url']=='business'){
    include('templates/business.php');
}elseif($_GET['url']=='business_curiers'){
    include('templates/business_rc.php');
}elseif($_GET['url']=='business_shop'){
    include('templates/business_rs.php');
}
