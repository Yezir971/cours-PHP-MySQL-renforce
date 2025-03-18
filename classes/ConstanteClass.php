<?php

class ConstanteClass
{
    private const MA_CONSTANT_PRIVATE = "salut !";
    protected const MA_CONSTANT_PROTECTED = 42;
    public const MA_CONSTANT_PUBLIC = "ma constante public";
    // quelque soit sa visibilité une constante est manipulable depuis l'intérieur de la classse en utilisant l'oppérateur de résolution de porter self::
    // une constante private n'est pas manipulable depuis le code extérieur ou depuis une classe fille 
    
    // une constante protected n'est manipulable que : dans la zone de code de l'intérieur de la classe avec self::
    // la zone de code de la classe fille avec self:: ou parent::
    // parent:: envoie la const originel stocker depuis la classe mère 
    // self:: envoie la copie de la const envoyer a la fille 

    // une const public est manipulable depuis la zonne de code de l'intérieur de la calsse avec self::, 
    // -la zone de code de la classe fille avec self:: ou parrent::
    // -depuis le code principal avec [nom de la classe]:: ou
    // -depuis le code principale avec [nom de l'objet]::
    
    /**
     * Function for show all constant
     *
     * @return void
     */
    public function showConstante(): void
    {
        echo "depuis le code interne de la classe: <br>";
        echo '- const 1 private : ' . SELF::MA_CONSTANT_PRIVATE;
        echo '- const 1 protected : ' . SELF::MA_CONSTANT_PROTECTED;
        echo '- const 1 public : ' . SELF::MA_CONSTANT_PUBLIC;
    }
    public function getConstPrivate(): string
    {
        return self::MA_CONSTANT_PRIVATE;
    }
    public function getConstProtected(): int
    {
        return self::MA_CONSTANT_PROTECTED;
    }
}