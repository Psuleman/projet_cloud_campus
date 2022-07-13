const Description = ({handleClickList}) => {
	return (
		<section>
			<div>
				<label>Nom produit FR</label>
				<input type="text"  />
			</div>
			<div>
				<label>Nom produit EN</label>
				<input type="text"  />
			</div>				
			<div>
				<label>Description produit FR</label>
				<input type="text"  />
			</div>
			<div>
				<label>Description produit EN</label>
				<input type="text"  />
			</div>			

			<div>
				<button className="btn" onClick={handleClickList}>Voir la liste</button>
				<button className="btn">Suivant</button>
			</div>					
						
		</section>
		)
}

export default Description;