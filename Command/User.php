<?php

class User
{
    private Calculator $calculator;
    private array $commands;
    private int $currentCommandNumber;
    private Copier $copier;
    private Cutter $cutter;
    private Inserter $Inserter;

    public function __construct()
    {
        $this->calculator = new Calculator();
        $this->copier = new Copier();
        $this->cutter = new Cutter();
        $this->Inserter = new Inserter();
    }

    public function action($lines, $action, $offset, $length) {
        $command = new CalcCommand($lines, $action, $offset, $length, $this->calculator);
        $command->execute();

        $this->commands[] = $command;
        $this->currentCommandNumber++;
    }
    public function copy($lines, $offset, $length)
    {
        $command = new CopyCommand($lines, $offset, $length, $this->copier);
        $command->execute();
    }

    public function cut($lines, $offset, $length)
    {
        $command = new CutCommand($lines, $offset, $length, $this->cutter);
        $command->execute();
    }
    public function paste($lines, $placeToPaste)
    {
        $command = new InsertCommand($lines, $placeToPaste, $this->Inserter);
        $command->execute();
    }


    public function down(int $levels) {
        echo "Отменить $levels операций".PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->currentCommandNumber > 0){
                $this->commands[--$this->currentCommandNumber]->unExecute();
            }
        }
    }

    public function up(int $levels) {
        echo "Вернуть $levels операций".PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->currentCommandNumber < count($this->commands)){
                $this->commands[$this->currentCommandNumber++]->execute();
            }
        }
    }



}