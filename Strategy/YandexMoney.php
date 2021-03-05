<?php


class YandexMoney implements IPayWay
{

    public function payWay($shop)
    {
        echo "тип оплаты Yandex на общую сумму " . $shop->getTotalCost();
    }
}