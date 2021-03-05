<?php


class Copier
{
    public function operation($lines, $offset, $length)
    {
        $copiedLines = array_slice($lines, $offset, $length);
        foreach ($copiedLines as $line){
            file_put_contents('buffer.txt', $line);
        }

    }
}