var zo = ["ziekenhuis","apotheek","huisarts","stadhuis","school","faciliteiten","horeca","bank","supermarkt","industrie","religie","park&speelplein","bos","luchtkwaliteit","containerpark","laadpalen","bus","trein","snelheidslimiet","parkeergelegenheid","fietspaden","afstand_tot_grootsteden"];
function calculateTotalScore(nameArray)
{
	var tempValueTotaal=0;
	for(i=0;i<nameArray.length;i++)
	{
		console.log(find(nameArray[i]));
		tempValueTotaal=tempValueTotaal+find(nameArray[i]);
		console.log("tempValueTotaal".tempValueTotaal);
	}
	tempValueTotaal= tempValueTotaal/(5*nameArray.length);
	return tempValueTotaal;
}
//deze methode is een mock voor de data analyse door de json omdat, we geen json van een andere server konden opvragen in de tijdspanne
function find(name)
{
	var value=0;
	if(name=== "zorg_overheid")
	{
		value = 83;
	}
	else if(name ==="ziekenhuis")
	{
		value = 3;
	}
	else if(name=== "apotheek")
	{
		value = 5;
	}
	else if(name==="huisarts")
	{
		value = 5;
	}
	else if(name==="stadhuis")
	{
		value = 3;
	}
	else if(name==="school")
	{
		value = 5;
	}
	else if(name==="faciliteiten")
	{
		value = 4;
	}
	else if(name==="werk_economie")
	{	
		value = 84;
	}
	else if(name=== "horeca")
	{
		value = 5;
	}
	else if(name==="bank")
	{	
		value = 4;
	}
	else if(name==="supermarkt")
	{
		value = 4;
	}
	else if(name==="industrie")
	{
		value = 3;
	}
	else if(name==="religie")
	{
		value = 5;
	}
	else if(name==="milieu+natuur")
	{
		value = 64;
	}
	else if(name==="park&speelplein")
	{
		value = 5;
	}
	else if(name==="bos")
	{
		value = 3;
	}
	else if(name==="luchtkwaliteit")
	{
		value = 2;
	}
	else if(name==="containerpark")
	{
		value = 3;
	}
	else if(name==="laadpalen")
	{
		value = 3;
	}
	else if(name==="mobiliteit")
	{
		value = 76;
	}
	else if(name==="bus")
	{
		value = 5;
	}
	else if(name==="trein")
	{
		value = 4;
	}
	else if(name==="snelheidslimiet")
	{
		value = 3;
	}
	else if(name==="parkeergelegenheid")
	{
		value = 2;
	}
	else if(name==="fietspaden")
	{
		value = 2;
	}
	else if(name==="afstand_tot_grootsteden")
	{
		value = 3;
	}
	else 
	{
		value = 0;
	}
	console.log(value);
	return value;
}