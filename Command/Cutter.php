<?php


class Cutter
{
    public function operation($lines, $offset, $length)
    {
        $cutLines = array_slice($lines, $offset, $length);
        file_put_contents('buffer.txt', '');
        foreach ($cutLines as $line){
            $contents = file_get_contents('buffer.txt');
            $contents .= $line;
            file_put_contents('buffer.txt', $contents);
          unset($lines[$offset]);
          $offset++;
        }
        file_put_contents('text.txt', $lines);
    }
}