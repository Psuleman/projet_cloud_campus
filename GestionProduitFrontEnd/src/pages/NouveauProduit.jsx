import '../assets/scss/NouveauProduit.scss'
import {useState} from 'react'
import Template from '../components/layout/Template'
import Information from '../components/NouveauProduit/Information'
import Description from '../components/NouveauProduit/Description'
import {NouveauProduitContext} from '../components/NouveauProduit/Context/NouveauProduitContext'


const NouveauProduit = () => {
	const [classInformtion, setClassInformtion] = useState("showForm")
	const [classDescription, setClassDescription] = useState("hideForm")

	return(
			<Template>
				<h2>Nouveau produit</h2>
				<section className="form">
					<form>
						<small>Tous les champs sont obligatoires.</small>
						<div>
							<label>SKU</label>
							<input type="number"  />
						</div>
						<NouveauProduitContext.Provider
							value={{

							}}
						>
							<Information className={classInformtion} />
							<Description className={classDescription} />								
						</NouveauProduitContext.Provider>

					</form>
				</section>				
			</Template>
		)
}

export default NouveauProduit