const ValueTableau = () => {
	return (
			<tr>
				<td><input type="checkbox" /></td>
				<td>exemple@gmail.com</td>
				<td><input type="password" /></td>
				<td>
					<select>
						<option value="">A définir</option>
						<option value="gestionnaireStock">Gestionnaire de stock</option>
						<option value="admin">Admin</option>
					</select>
				</td>
				<td>
					<button>Retirer l'utilisateur</button>
					<button>Modifier</button>
				</td>
			</tr>
		)
}

export default ValueTableau;