import "../assets/scss/security.scss";
import { Link } from "react-router-dom";

import TemplateSecurity from '../components/layout/TemplateSecurity'

const Connexion = () => {
	return (
		<TemplateSecurity>
			<header>
				<div><Link className="link" to="/inscription">Inscription</Link></div>
				<div className="link-security-active"><Link className="link" to="/">Connexion</Link></div>
			</header>
			<form>
			<small>Tous les champs sont obligatoires.</small>
				<div>
					<label>Email</label>
					<input type="email" required />
				</div>
				<div>
					<label>Mot de passe</label>
					<input type="password" required />
				</div>
				<button className="btn">Se connecter</button>					
			</form>
			<footer>
				<p><Link className="link" to="/reinitialisation-motdepasse">Mot de passe oublié?</Link></p>
				<p>Vous n'avez pas de compte? <Link className="link" to="/inscription">S'inscrire</Link></p>

			</footer>
		</TemplateSecurity>
		)
}

export default Connexion;
