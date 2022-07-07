import Moment from 'moment';
import '../../assets/scss/notification.scss'
const Notif = () => {
	return (
			<section className="notification">
				<header>
					{Moment().format("DD/MM/YYYY à hh:mm:ss")}
				</header>
				<div>
					<em>Nom complet</em> is aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</section>
		)
}

export default Notif;