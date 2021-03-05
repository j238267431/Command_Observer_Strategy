<?php


class Candidate implements Observer
{

    private String $name;
    private String $email;
    private Int $experience;

    public function __construct(String $name, String $email, Int $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
        HandHunter::getInstance()->register($this);
    }

    function notify($data)
    {
       echo " добрый день $this->name <br> 
       Вам на почту $this->email была отправлена новая вакансия $data <br>";
    }
}