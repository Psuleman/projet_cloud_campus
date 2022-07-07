import { useState } from 'react'
import {BrowserRouter, Routes, Route} from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import Inscription from './pages/Inscription'
import Connexion from './pages/Connexion'
import ResetPassword from './pages/ResetPassword'

const App = () => {
  const [count, setCount] = useState(0)

  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Connexion />} />
          <Route path="/inscription" element={<Inscription />} />
          <Route path="/reinitialisation-motdepasse" element={<ResetPassword />} />

        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App




