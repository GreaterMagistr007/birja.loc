<?php

abstract class AbstractStrategyClass
{
    private $title;
    private $description;

    /**
     * Название стратегии
     * @return string
     */
    public function getTitle()
    {
        $this->title;
    }

    /**
     * Описание стратегии
     * @return string
     */
    public function getDecription()
    {
        return $this->description;
    }
}
