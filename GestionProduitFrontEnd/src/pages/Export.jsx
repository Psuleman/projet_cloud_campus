import Template2 from '../components/layout/Template2'
import ValueTableau from '../components/Export/ValueTableau'
const Export = () => {
	return(
			<Template2>
				<h2>Export </h2>
				<button className="btn">Exporter</button>
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
						<ValueTableau />
					</tbody>
				</table>
			</Template2>
		)
}

export default Export