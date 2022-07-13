import { useNavigate } from "react-router-dom";

const ValueTableau = () => {
	//variable
	let navigate = useNavigate();

	//fonction
	const handleClick = () => {
		let path = `/formulaire-produit`;
    	navigate(path);
	}
	return (
			<tr>
				<td>258</td>
				<td>SS22</td>
				<td>Zara</td>
				<td>Femme</td>
				<td>Vêtements</td>
				<td>images</td>
				<td><button onClick={handleClick}>Modifier</button></td>
			</tr>
		)
}

export default ValueTableau;