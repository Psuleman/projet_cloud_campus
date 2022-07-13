import { useNavigate } from "react-router-dom";

const ValueTableau = ({page}) => {
	//variable
	let navigate = useNavigate();

	//fonction
	const handleClick = () => {
		let path = `/formulaire-produit`;
    	navigate(path);
	}
	//render
	return (
			<tr>
				<td>252</td>
				<td>SS22</td>
				<td>Zara</td>
				<td>Femme</td>
				<td>Vêtements</td>
				<td>images</td>
				{
					page == "referencement" && 
						<button onClick={handleClick}>Référencer</button>
				}
				{
					page == "modification" && 
						<td>
							<button>Retirer</button>
							<button onClick={handleClick}>Modifier</button>
						</td>				
				}

			</tr>
		)
}

export default ValueTableau;
