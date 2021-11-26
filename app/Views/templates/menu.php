<?php
switch (session()->get('role')) {
    case "user":
        echo $this->include('templates/menu_user');
        break;
    case "admin":
        echo $this->include('templates/menu_admin');
        break;
    default:
        break;
}
