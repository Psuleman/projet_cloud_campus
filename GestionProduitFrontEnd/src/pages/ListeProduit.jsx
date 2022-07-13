import Template from '../components/layout/Template'
import { Link } from "react-router-dom";
import '../assets/scss/tableau.scss'
import ValueTableau from '../components/ListeProduit/ValueTableau'

const ListeProduit = () => {
	return (
		<Template>
			<h2>ListeProduit</h2>
			<table>
				<thead>
					<tr>
						<th>SKU</th>
						<th>SAISON</th>
						<th>MARQUE</th>
						<th>UNIVERS</th>
						<th>CATEGORIE</th>
						<th>COULEUR</th>
						<th>PRIX</th>
						<th>PICTURES</th>
					</tr>
				</thead>
				<tbody>
					<ValueTableau />
				</tbody>

				<tfoot>
					<Link to="">1</Link>
					<Link to="">2</Link>
					<Link to="">3</Link>
					<Link to="">4</Link>
				</tfoot>
			</table>
		</Template>
		)
}

export default ListeProduit;