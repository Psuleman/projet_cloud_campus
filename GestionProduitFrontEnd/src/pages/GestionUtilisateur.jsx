import Template2 from '../components/layout/Template2'
import ValueTableau from '../components/GestionUtilisateur/ValueTableau'
import Option from '../components/GestionUtilisateur/Option'


const GestionUtilisateur = () => {
	return(
			<Template2>
				<h2>Gestion des utilisateurs</h2>
				<Option />
				<table>
					<thead>
						<tr>
							<th></th>
							<th>EMAIL</th>
							<th>INITIALISER LE MOT DE PASSE</th>
							<th>ROLE</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<ValueTableau />
					</tbody>
				</table>	

				<button className="btn">Terminer</button>
		
			</Template2>
		)
}

export default GestionUtilisateur