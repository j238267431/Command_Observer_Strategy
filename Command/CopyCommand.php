<?php


class CopyCommand extends Command
{
    private $lines;
    private $offset;
    private $length;
    private Copier $copier;

    public function __construct($lines, $offset, $length, $copier)
    {
        $this->lines = $lines;
        $this->offset = $offset;
        $this->length = $length;
        $this->copier = $copier;
    }

    public function execute()
    {
        $this->copier->operation($this->lines, $this->offset, $this->length);
    }

    public function unExecute()
    {
        // TODO: Implement unExecute() method.
    }
}