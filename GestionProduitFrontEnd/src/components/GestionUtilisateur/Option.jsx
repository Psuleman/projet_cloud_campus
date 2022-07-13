const Option = () => {
	return (
		<aside className="option">
			<div>
				<input type="checkbox" />
				<label>Tout cocher</label>
			</div>
			<div>
				<label>Rôle pour la selection</label>
				<select>
					<option value="gestionnaireStock">Gestionnaire de stock</option>
					<option value="admin">Admin</option>
				</select>				
			</div>
		</aside>
		)
}

export default Option;