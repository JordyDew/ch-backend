<?php

class natuur
{

    public function get()
    {
        // The values of the environment parameters (hard-coded)
        $waarden = array(
            'gentpoort'
        );
        $waarden['gentpoort'] = array(
            'milieu'
        );
        $waarden['gentpoort']['milieu'] = array(
            'park_speelplein' => "5",
            'bos' => "3",
            'luchtkwaliteit' => "2",
            'containerpark' => "3",
            'laadpalen' => "3"
        );

        return json_encode($waarden);
    }
}
?>
