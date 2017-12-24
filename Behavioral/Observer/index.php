<?php
include "./Subject.php";
include "./ConcreteSubject.php";
include "./Observer.php";
include "./ConcreteObserver.php";
//主题
$subject = new ConcreteSubject();
//观察者1
$observer1 = new ConcreteObserver('Martin');
$subject->attach($observer1);
echo "The first notify:<br />";
$subject->notifyObservers();

//观察者2
$observer2 = new ConcreteObserver('phppan');
$subject->attach($observer2);
echo "The Second notify:<br />";
$subject->notifyObservers();


//观察者
$subject->detach($observer1);
echo "The third notify:<br />";
$subject->notifyObservers();