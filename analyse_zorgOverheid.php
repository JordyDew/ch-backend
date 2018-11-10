<?php

class zorgIndex
{

    // opvragen van de zorgIndex array
    public function get()
    {
        return $this->generateZorg();
    }

    // Deze functie berekent de zorg index. De waarden die berekent moet worden
    private function generateZorg()
    {
        $waarden = [
            "Zorg_overheid" => 83,
            "ziekenhuis" => 3,
            "apotheek" => 5,
            "huisarts" => 5,
            "stadhuis" => 3,
            "school" => 5,
            "faciliteiten" => 4
        ];
        return $waarden;
    }
}	//php niet gesloten vanwege include in andere file