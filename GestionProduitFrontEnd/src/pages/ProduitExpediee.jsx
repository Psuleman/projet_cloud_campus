import Template from '../components/layout/Template'
import ValueTableau from '../components/Expedition/ProduitExpediee/ValueTableau'

const ProduitExpediee = () => {
	return (
		<Template>
			<h2>Produit expédiée</h2>
			<table>
				<thead>
					<tr>
						<th></th>
						<th>SKU</th>
						<th>SAISON</th>
						<th>MARQUE</th>
						<th>DATE EXPEDITION</th>
						<th>MOTIF</th>
					</tr>
				</thead>
				<tbody>
					<ValueTableau />
				</tbody>
			</table>			
		</Template>
		)
}

export default ProduitExpediee;