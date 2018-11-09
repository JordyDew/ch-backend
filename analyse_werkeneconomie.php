<?php
class werkIndex
{
	
	//opvragen van de werkIndex array
	public function get()
	{
		return $this->generateWerk();
	}
	
	
	private function generateWerk()
	{
		// deze waarden zijn voor de snelheid om de proof of concept te maken er vast in geprogrammeerd. In de feitelijke bedoeling is het
		$waarden = 
		"{'Werk en economie':
			{
			'Werk_economie':'84%',
			'horeca':'5',
			'bank' : '4',
			'supermarkt' :'4',
			'industrie' :'3',
			'religie' :'5'
			}
		}"	;
		return $waarden;
	}
}	
//php niet gesloten vanwege include in andere file