<?php


class InsertCommand extends Command
{
    private int $placeToPaste;
    private Inserter $inserter;
    private array $lines;

    public function __construct(array $lines, int $placeToPaste, $inserter)
    {
        $this->lines = $lines;
        $this->placeToPaste = $placeToPaste;
        $this->inserter = $inserter;
    }

    public function execute()
    {
        $this->inserter->operation($this->lines, $this->placeToPaste);
    }

    public function unExecute()
    {
        // TODO: Implement unExecute() method.
    }
}