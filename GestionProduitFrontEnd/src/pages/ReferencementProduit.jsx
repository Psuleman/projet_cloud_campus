import Template2 from '../components/layout/Template2'
import ValueTableau from '../components/ProduitAModifier/ValueTableau'

const ReferencementProduit = () => {
	return(
			<Template2>
				<h2>Referencement produit</h2>
				<table>
					<thead>
						<tr>
							<th>SKU</th>
							<th>SAISON</th>
							<th>MARQUE</th>
							<th>UNIVERS</th>
							<th>CATEGORIE</th>
							<th>PICTURES</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<ValueTableau page="referencement" />
					</tbody>
				</table>

			</Template2>
		)
}

export default ReferencementProduit