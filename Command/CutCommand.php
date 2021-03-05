<?php


class CutCommand extends Command
{
    private array $lines;
    private int $offset;
    private int $length;
    private Cutter $cutter;

    public function __construct(array $lines, int $offset, int $length, $cutter)
    {
        $this->lines = $lines;
        $this->offset = $offset;
        $this->length = $length;
        $this->cutter = $cutter;
    }

    public function execute()
    {
        $this->cutter->operation($this->lines, $this->offset, $this->length);
    }

    public function unExecute()
    {
        // TODO: Implement unExecute() method.
    }
}