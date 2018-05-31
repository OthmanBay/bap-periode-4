<?php

function homepage_action($smarty){
    $emailadres = get_mailadresses();
    $smarty->assign('emailadres',$emailadres);
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');

}
function page_not_found_action($smarty){
 $smarty->display('notfound.tpl');
}

