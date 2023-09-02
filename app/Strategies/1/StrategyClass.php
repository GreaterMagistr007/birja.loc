<?php

class StrategyClass implements StrategyInterface
{
    private $title = 'Стратегия по дивидендам';
    private $description = "
        Стратегия находит компании, которые только объявили о выплатах дивидендов.
        Получает тикер (аббривиатуру акции, используемую для торгов)
        Затем получает информацию по этой компании:
            - Даты прошлых выплат дивидендов
        Если комания более 3 лет платит дивиденды, она нам подходит
        Для каждоой даты выплат вычисляем дату (-1 месяц) и (+1 месяц) и грузим графики
        Считаем, на какой % бумага просаживалась в эти периоды и на какой % поднималась (ДО даты выплаты дивидендов) а так же сроки эстремумов относительно даты занесения в реестр
        Находим среднее между экстремумами (и по цене и по строкам)
        выводим результат-рекомендацию (тут нужно добавить еще подсчёты)
    ";

    public function __construct()
    {
    }
}
