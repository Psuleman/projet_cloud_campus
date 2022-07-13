import Description from './FormulaireProduit/Description'
import { useNavigate } from "react-router-dom";

const Formulaire = ({page}) => {
	//variable
	let navigate = useNavigate();
	let path=``
	//fonction
	const handleClickList = () => {
		if(page = "referencement")
	    	path = `/referencement-produit`;

	    if(page= "modification")
	    	path = `/produit-a-modifier`;
	    navigate(path);
	}

	//render
	return (
		<section>
			<Description />
		</section>
		)
}

export default Formulaire;