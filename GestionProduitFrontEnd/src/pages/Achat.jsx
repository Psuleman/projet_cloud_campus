import Template2 from '../components/layout/Template2'

const Achat = () => {
	return(
			<Template2>
				<h2>Achat </h2>
				<section className="form">
					<form>
						<div>
							<label>SKU</label>
							<input type="number" required />
						</div>				
						<div>
							<label>Taille</label>
							<input type="text" required />
						</div>
						<div>
							<label>Quantité</label>
							<input type="number" required />
						</div>				
						<div>
							<label>Type achat</label>
							<select>
								<option>Achat en ligne</option>
								<option>Achat en magasin</option>
							</select>
						</div>

						<h5>OU</h5>
						<div>
							<label>Importer les achat en ligne (.csv)</label>
							<input type="file" required />
						</div>

						<button className="btn">Terminer</button>					
					</form>
				</section>
			</Template2>
		)
}

export default Achat


