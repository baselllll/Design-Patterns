<?php

/**
 * Prototype.
 */
class Page
{
    private $title;
    private $author;
    public function __construct(string $title, Author $author)
    {
        $this->title = $title;
        $this->author = $author;
        $this->author->addToPage($this);
    }

    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
    }
}

class Author
{
    private $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}

function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", $author);
    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
    print_r($draft);
}

clientCode();
