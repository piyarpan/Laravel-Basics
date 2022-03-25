<?php


namespace awe;


class gameproduct extends ShopProduct
{
    private $agepegi;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $agepegi
    )
    {

        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->agepegi = $agepegi;
    }

    public function getagepegi()
    {
        return $this->agepegi;
    }
}