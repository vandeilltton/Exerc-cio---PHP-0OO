<?php

require_once "Produto.php";

/**
 * Class Dvd
 */
class Dvd extends Produto{

    /**
     * @var string
     */
    private string $titulo;
    /**
     * @var int
     */
    private int $ano;

    /**
     * Dvd constructor.
     * @param int $codigo
     * @param float $preco
     * @param string $titulo
     * @param int $ano
     * @throws Exception
     */
    public function __construct(int $codigo, float $preco, string $titulo, int $ano)
    {
        $key = array_search("", ["codigo" => $codigo,"preco" => $preco,"titulo" => $titulo, "ano" => $ano]);
        if($key){
            throw new Exception("InformaçãoNulaException: O valor {$key} está vazio");
        }

        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->titulo = $titulo;
        $this->ano = $ano;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @return int
     */
    public function getAno(): int
    {
        return $this->ano;
    }

}