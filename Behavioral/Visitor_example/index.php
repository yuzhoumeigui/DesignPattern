<?php
header('Content-type:text/html;charset=utf-8');
include "./visitor.php";
include "./ServiceRequestVisitor.php";
include "./Customer.php";
include "./EnterpriseCustomer.php";
include "./PersonalCustomer.php";

include "./ObjectStructure.php";

$os = new ObjectStructure();

$ele1 = new EnterpriseCustomer();

$ele1->name = "淘宝";

$os->addElement($ele1);

$ele2 = new EnterpriseCustomer();

$ele2->name = "天猫";

$os->addElement($ele2);

$ele3 = new PersonalCustomer();

$ele3->name = "王先生";

$os->addElement($ele3);


//客户提出服务请求

$serviceVisitor = new ServiceRequestVisitor();

$os->handleRequest($serviceVisitor);