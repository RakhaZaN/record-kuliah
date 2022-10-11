<?php
class Animal
{
    public $animals;

    // constructor
    public function __construct($data)
    {
        $this->animals = $data;
    }

    // Get all data
    public function index()
    {
        echo '<ul>';
        foreach ($this->animals as $animal) {
            echo "<li>{$animal}</li>";
        }
        echo '</ul>';
    }

    // Add new data
    public function store($data)
    {
        array_push($this->animals, $data);
    }

    // Change data
    public function update($index, $data)
    {
        $this->animals[$index] = $data;
    }

    // Delete data
    public function destroy($index)
    {
        unset($this->animals[$index]);
    }
}
