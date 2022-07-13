import { useState } from 'react'
import {BrowserRouter, Routes, Route} from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import Inscription from './pages/Inscription'
import Connexion from './pages/Connexion'
import ResetPassword from './pages/ResetPassword'
import MonCompte from './pages/MonCompte'
import Notification from './pages/Notification'
import ListeProduit from './pages/ListeProduit'
import Achat from './pages/Achat'
import ReferencementProduit from './pages/ReferencementProduit'
import Export from './pages/Export'
import ProduitAModifier from './pages/ProduitAModifier'
import GestionUtilisateur from './pages/GestionUtilisateur'
import NouveauProduit from './pages/NouveauProduit'
import Expedition from './pages/Expedition'
import ProduitExpediee from './pages/ProduitExpediee'
import ProduitNonExpediee from './pages/ProduitNonExpediee'
import FormulaireProduit from './pages/FormulaireProduit'

const App = () => {
  const [count, setCount] = useState(0)

  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Connexion />} />
          <Route path="/inscription" element={<Inscription />} />
          <Route path="/reinitialisation-motdepasse" element={<ResetPassword />} />
          <Route path="/mon-compte" element={<MonCompte />} />
          <Route path="/notification" element={<Notification />} />
          <Route path="/liste-produit" element={<ListeProduit />} />
          <Route path="/produit-a-modifier" element={<ProduitAModifier />} />
          <Route path="/achat" element={<Achat />} />
          <Route path="/referencement-produit" element={<ReferencementProduit />} />
          <Route path="/export" element={<Export />} />
          <Route path="/gestion-utilisateur" element={<GestionUtilisateur />} />
          <Route path="/nouveau-produit" element={<NouveauProduit />} />
          <Route path="/expedition" element={<Expedition />} />
          <Route path="/produit-expediee" element={<ProduitExpediee />} />
          <Route path="/produit-non-expediee" element={<ProduitNonExpediee />} />
          <Route path="/formulaire-produit" element={<FormulaireProduit />} />

        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App
