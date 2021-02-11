<?php

require_once "Produto.php";
require_once "Perecivel.php";

/**
 * Class Leite
 */
class Leite extends Produto implements Perecivel{

    /**
     * @var string
     */
    private string $marca;
    /**
     * @var float
     */
    private float $volume;
    /**
     * @var string
     */
    private string $dataValidade;

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @return string
     */
    public function getDataValidade(bool $format): string
    {
        if($format){
            return date("d/m/Y", strtotime($this->dataValidade));
        }

        return $this->dataValidade;
    }

    /**
     * Leite constructor.
     * @param int $codigo
     * @param float $preco
     * @param string $marca
     * @param float $volume
     * @param string $dataValidade
     * @throws Exception
     */
    public function __construct(int $codigo, float $preco, string $marca, float $volume, string $dataValidade)
    {
        $key = array_search("", ["codigo" => $codigo,"preco" => $preco,"marca" => $marca, "volume" => $volume,"data" => $dataValidade]);
        if($key){
            throw new Exception("InformaçãoNulaException: O valor {$key} está vazio");
        }

        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
    }

    /**
     * @return bool
     */
    public function estaVencido(): bool
    {
        return (strtotime(date("Y-m-d")) > strtotime($this->dataValidade));
    }
}