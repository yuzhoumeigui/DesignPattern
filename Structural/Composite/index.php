<?php
include "./MenuComponent.php";
include "./Menu.php";
include "./Item.php";
include "./Client.php";
//创建menu

$subMenu1 = new Menu("sub ment1");
$subMenu2 = new Menu("sub ment2");
$subMenu3 = new Menu("sub ment3");
$item1 = new Item('163',"www.163.com");
$item2 = new Item('sina',"www.sina.com");
$subMenu1->add($item1);
$subMenu1->add($item2);
$item3 = new Item('baidu',"www.baidu.com");
$item4 = new Item('google',"www.google.com");
$subMenu2->add($item3);
$subMenu2->add($item4);
$allMenu = new Menu("All Menu");
$allMenu->add($subMenu1);
$allMenu->add($subMenu2);
$allMenu->add($subMenu3);
$objClient = new Client($allMenu);
$objClient->displayMenu();
$objClient->setMenu($subMenu2);
$objClient->displayMenu();