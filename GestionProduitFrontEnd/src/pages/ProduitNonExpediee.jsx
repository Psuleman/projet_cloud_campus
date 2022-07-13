import Template from '../components/layout/Template'
import ValueTableau from '../components/Expedition/ProduitNonExpediee/ValueTableau'
import Option from '../components/Expedition/ProduitNonExpediee/Option'

const ProduitNonExpediee = () => {
	return (
		<Template>
			<h2>Produit non expédiée</h2>
			<Option />
			<table>
				<thead>
					<tr>
						<th>SKU</th>
						<th>SAISON</th>
						<th>MARQUE</th>
						<th>MOTIF</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					<ValueTableau />
				</tbody>
			</table>			
		</Template>
		)
}

export default ProduitNonExpediee;

