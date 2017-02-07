<?php
class Task
{
    private $description;

    function __construct($new_description)
    {
        $this->setDescription($new_description);
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }
}
?>
