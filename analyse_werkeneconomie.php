<?php
class werkIndex
{
	
	//opvragen van de werkIndex array
<<<<<<< HEAD
	function get()
{
    return generateWerk();
}
=======
	public function get()
	{
		return generateWerk();
	}
>>>>>>> b3396719b55dad1ecb8145f3687a81eef3a270c5
	
	
	private function generateWerk()
	{
		$waarden = array('gentpoort');
		$waarden['gentpoort']=array('Werk_economie');
		$waarden['gentpoort']['Werk_economie'] = array
		(// deze waarden zijn voor de snelheid om de proof of concept te maken er vast in geprogrammeerd. In de feitelijke bedoeling is het
		'Werk_economie'=>"84%",
		'horeca' =>"5",
		'bank' => "4",
		'supermarkt' =>"4",
		'industrie' =>"3",
		'religie' =>"5"
		);	
		return $waarden;
	}
}	
//php niet gesloten vanwege include in andere file