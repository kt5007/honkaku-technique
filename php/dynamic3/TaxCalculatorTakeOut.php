<?php 

declare(strict_types=1);

require_once dirname(__FILE__) . '/AbstractTaxCalculator.php';

// テイクアウトするお弁当の税込金額計算クラス
class TaxCalculatorTakeOut extends AbstractTaxCalculator
{
    private const TAX=0.08;
    public function calculate(int $price)
    {
        return $this -> addTax($price, self::TAX);
    }
}