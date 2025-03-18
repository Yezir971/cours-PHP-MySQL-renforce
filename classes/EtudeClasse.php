<?php
class EtudeClasse
{
    // propriétées 
    // private n'est accessible que dans le scope de la class 
    private string $prop1 = "prop1";
    protected string $prop2 = "prop2";
    public float $prop3 = 3.14;
    // Méthodes
    private function fi1():void
    {
        echo '<p>Execution de la méthode f1()</p>';
    }
    public function fi3():void
    {
        echo '<p>Execution de la méthode f1()</p>';
    }
    // foncionne exactement comme private, si notre classe a une classe fille notre classe sera accessible sur une 1 génération
    protected function fi2():void
    {
        echo '<p>Execution de la méthode f1()</p>';
    }
    

}