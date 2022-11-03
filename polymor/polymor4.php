<?php
abstract class User
{
    abstract protected function showName();

    abstract public function showGreeting($greeting);

    public function showBio(){
        echo "This is my Bio <br/>";
        echo "My name is " . $this->showName();
    }
}

class Admin extends User
{
    public function showName(){
        return "JM Admin";
    }

    public function showGreeting($greeting, $address = 'Banjar'){
        return $greeting . ", my name is " . $this->showName() . " from " . $address;
    }
}

class Editor extends User
{
    public function showName(){
        return "Acep Editor";
    }

    public function showGreeting($greeting, $address = 'Banjar'){
        return $greeting . ", my name is " . $this->showName() . " from " . $address;
    }

    public function showBio(){
        echo "This is Bio from " . $this->showName();
    }
}

class Reporter extends User
{
    public function showName(){
        return "Novica Reporter";
    }

    public function showGreeting($greeting, $address = 'Banjar'){
        return $greeting . ", my name is " . $this->showName() . " from " . $address;
    }
}

$admin = new Admin;
$editor = new Editor;
$reporter = new Reporter;

echo $admin->showGreeting("Good morning", "Bandung") . "<br/>";
echo $admin->showBio() . "<br/><br/>";

echo $editor->showGreeting("Good night", "Jayapura") . "<br/>";
echo $editor->showBio() . "<br/><br/>";

echo $reporter->showGreeting("Good evening", "Maluku") . "<br/>";
echo $reporter->showBio();
?>