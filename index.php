<?php
$page = (isset($_GET['action']))?$_GET['action']:"home";
switch($page)
{
    case "home":
        /*(new AddCountryRequest());
        $usercontroller = new UserController();
        if($usercontroller->store() == true)
            echo "its home";
        else{
            echo "not stored";
        }*/
        break;

    case "about":
        echo "its about";
        break;

    case "contact":
        echo "its contact";
        break;

    default:
        echo 'default page';
        break;
}