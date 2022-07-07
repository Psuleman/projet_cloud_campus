import Template from '../components/layout/Template'
import Notif from "../components/Notification/Notif"
const Notification = () => {

	const list = [0,1,2,3,4];
	return (
		<Template>
			<h2>Notification</h2>
			{
				list.map((item, index)=>(

					<Notif/>
					))
			}
		</Template>
		)
}
export default Notification;