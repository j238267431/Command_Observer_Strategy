<?php


class Inserter
{
    public function operation($lines, $placeToPaste)
    {

        $textToBeInserted = file('buffer.txt');
        $textLength = count($lines);
        $content = file('text.txt');
        $part1 = array_slice($content, 0, $placeToPaste);
        $part2 = array_slice($content, $placeToPaste);
        $partEnd = array_merge($part1, $textToBeInserted, $part2);

        file_put_contents('text.txt', $partEnd);


    }
}