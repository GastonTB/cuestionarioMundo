import './App.css';
import ShowCalles from './components/ShowCalles';
import EditCalle from './components/EditCalle';
import { BrowserRouter, Routes, Route, Navigate } from 'react-router-dom';


function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<ShowCalles/>}/>
        <Route path="/edit/:id" element={<EditCalle/>}/>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
