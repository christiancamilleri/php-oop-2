<?php

trait Durability
{
    public $duration_years;

    public function setDuration_years(int $years)
    {
        if ($years <= 15 && $years >= 1) {
            $this->duration_years = $years;
        } else {
            throw new Exception("Inserisci un valore tra 1 e 15");
        }
    }

    public function getDurability()
    {
        return $this->duration_years . " anni";
    }
}
