<?php


class HandHunter
{
    private $obserevers;
    private String $vacancy;
    private static ?HandHunter $instance = null;


    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance(): ?HandHunter
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function register(Observer $observer) {
        $this->obserevers[] = $observer;
    }


    public function getNewVacancy()
    {
        return $this->vacancy;
    }


    public function setNewVacancy($vacancy): void
    {
        $this->vacancy = $vacancy;
        $this->notifyObservers();
    }

    private function notifyObservers()
    {
        foreach ($this->obserevers as $observer) {
            $observer->notify($this->vacancy);
        }
    }


}