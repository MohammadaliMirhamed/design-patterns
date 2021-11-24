<?php

abstract class Book
{
    protected $title;
    protected $content;

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}


class PaperBook extends Book {
    public function printBook()
    {
        return "The Book '{$this->title}' was printed";
    }

}

class EBook extends Book {
    public function generatePDF()
    {
        return "A PDF was generated for the ebook '{$this->title}'";
    }

}

$paperBook = new PaperBook();

$paperBook->setTitle("this is book");
$paperBook->printBook();