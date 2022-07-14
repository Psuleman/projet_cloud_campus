import { useState } from "react";
import { useNavigate } from "react-router-dom";
import Description from './FormulaireProduit/Description'
import Caracteristique from './FormulaireProduit/Caracteristique'

const Formulaire = ({page}) => {
	//variable
	const [currentSection, setCurrentSection] = useState("Description")
	const [precedantSection, setprecedantSection] = useState("Description")

	let navigate = useNavigate();
	let path=``

	//fonction
	const handleClickList = () => {
		if(page = "referencement")
	    	path = `/referencement-produit`;

	    else if(page= "modification")
	    	path = `/produit-a-modifier`;

	    else if(page= "export")
	    	path = `/export`;

	    navigate(path);
	}

	const handleClick = (action) => {
		//sauvegarde des données

		//
		if(action == "save"){
			//retour à la liste 
			handleClickList()
		}

		if(action == "prec"){
			//afficher la section précédant			
			if(currentSection == "Description"){
				setCurrentSection("Description")
			}		

			if(currentSection == "Caracteristique"){
				setCurrentSection("Description")
			}



		}

		if(action == "suiv"){
			//afficher la section suivante
			if(currentSection == "Description"){
				setprecedantSection(currentSection)
				setCurrentSection("Caracteristique")
			}		

			if(currentSection == "Caracteristique"){

			}


		}


		//passer à la page suivante


	}

	//render
	return (
		<section className="form">
		<form>
			{
				(currentSection == "Description") && <Description />
			}
			{
				(currentSection == "Caracteristique") && 	<Caracteristique />
			}
			<div className="contenaireBtn">
				<div><button className="btn" onClick={handleClickList}>Voir la liste</button></div>
				{
					(currentSection != "Description" && currentSection != "Caracteristique") && 
					<div>
						<button className="btn" onClick={()=>{handleClick("save")}}>Enregistrer et quitter</button>
						<button className="btn" onClick={()=>{handleClick("prec")}}>Précédant</button>
						<button className="btn" onClick={()=>{handleClick("suiv")}}>Suivant</button>
					</div>
				}
				{
					(currentSection == "Description") && 
					<div>
						<button className="btn" onClick={()=>{handleClick("save")}}>Enregistrer et quitter</button>
						<button className="btn" onClick={()=>{handleClick("suiv")}}>Suivant</button>
					</div>
				}
				{
					(currentSection == "Caracteristique") && 
					<div>
						<button className="btn" onClick={()=>{handleClick("prec")}}>Précédant</button>
						<button className="btn" onClick={()=>{handleClick("save")}}>Terminer</button>
					</div>
				}				
			</div>	
		</form>
		</section>
		)
}

export default Formulaire;