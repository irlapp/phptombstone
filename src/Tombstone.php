<?php
namespace Scheb\Tombstone;

class Tombstone
{
    /**
     * @var string
     */
    protected $tombstoneDate;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $file;

    /**
     * @var int
     */
    protected $line;

    /**
     * @var string
     */
    protected $method;

    /**
     * @param string $tombstoneDate
     * @param string $author
     * @param string $file
     * @param int $line
     * @param string $method
     */
    public function __construct($tombstoneDate, $author, $file, $line, $method)
    {
        $this->tombstoneDate = $tombstoneDate;
        $this->author = $author;
        $this->file = $file;
        $this->line = $line;
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTombstoneDate()
    {
        return $this->tombstoneDate;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->file.':'.$this->line;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
}