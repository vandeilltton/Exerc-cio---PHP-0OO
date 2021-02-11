<?php

/**
 * Class Produto
 */
abstract class Produto{

    /**
     * @var int
     */
    protected int $codigo;
    /**
     * @var float
     */
    protected float $preco;

    /**
     * @return int
     */
    public function getCodigo(): int
    {
        return $this->codigo;
    }

    /**
     * @return float
     */
    public function getPreco(): float
    {
        return $this->preco;
    }
}