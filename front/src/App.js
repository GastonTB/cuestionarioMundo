import "./App.css";
import ShowCalles from "./components/ShowCalles";
import EditCalle from "./components/EditCalle";
import CreateCalle from "./components/CreateCalle";
import { BrowserRouter, Routes, Route} from "react-router-dom";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<ShowCalles />} />
        <Route path="/edit/:id" element={<EditCalle />} />
        <Route path="/create" element={<CreateCalle />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
