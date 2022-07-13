const Option = () => {
	return (
		<aside className="option">
			<div>
				<input type="checkbox" />
				<label>Tout cocher</label>
			</div>
			<div>
				<label>Expédier la selection pour</label>
				<select>
					<option value="referencement">Référencement</option>
					<option value="livraison">Livraison</option>
				</select>				
			</div>

		</aside>
		)
}

export default Option;