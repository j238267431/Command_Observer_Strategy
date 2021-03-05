<?php


class Qiwi implements IPayWay
{

    public function payWay($shop)
    {
        echo "тип оплаты QIWI на общую сумму " . $shop->getTotalCost();
    }
}