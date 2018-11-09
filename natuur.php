<?php

class natuur
{

    public function get()
    {
        // The values of the environment parameters (hard-coded)
        $waarden = "{'milieu':{ 
            'milieu': '64%', 
            'park_speelplein': 5,
            'bos': 3,
            'luchtkwaliteit': 2,
            'containerpark': 3,
            'laadpalen': 3}}";

        return $waarden;
    }
}
