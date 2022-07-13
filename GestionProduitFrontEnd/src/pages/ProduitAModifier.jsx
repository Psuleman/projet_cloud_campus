import Template2 from '../components/layout/Template2'
import ValueTableau from '../components/ProduitAModifier/ValueTableau'

const ProduitAModifier = () => {
	return(
			<Template2>
				<h2>Produit à modifier </h2>
				<table>
					<thead>
						<tr>
							<th>SKU</th>
							<th>SAISON</th>
							<th>MARQUE</th>
							<th>UNIVERS</th>
							<th>CATEGORIE</th>
							<th>PICTURES</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<ValueTableau page="modification" />
					</tbody>
				</table>
			</Template2>
		)
}

export default ProduitAModifier