<?php

class mobiliteit
{

    public function get()
    {
        // The values of the environment parameters (hard-coded)
        $waarden = "{'mobiliteit':{
            'mobiliteit': '76%', 
            'bus': 5,
            'trein': 4,
            'snelheidslimiet': 3,
            'afstand_tot_grootsteden': 3,
            'laadpalen': 3}}"

        return $waarden;
    }
}
