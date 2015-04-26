<?php


class Home extends Controller
{

    public function index()
    {
        $user = $this->model("User");
        $user->name = "Roger";

        $this->view('home/index', ['name'=> $user->name]);
    }

    public function teste()
    {
        echo "teste";
    }

}