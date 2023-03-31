import axios from "axios";
import { useEffect, useState } from "react";
import { useNavigate, Link } from "react-router-dom";
import Swal from "sweetalert2";

const endpoint = "http://localhost:8000/api";

const CreateCalle = () => {
  // Variables de estado
  const [ciudades, setCiudades] = useState([]);
  const [nombre, setNombre] = useState("");
  const [ciudadId, setCiudadId] = useState("");
  const [filteredCiudades, setFilteredCiudades] = useState([]);
  const [regiones, setRegiones] = useState([]);
  const [provincias, setProvincias] = useState([]);
  const [filteredProvincias, setFilteredProvincias] = useState([]);
  const [isFilteredRegiones, setIsFilteredRegiones] = useState(false);
  const [isFilteredProvincias, setIsFilteredProvincias] = useState(false);
  const [error, setError] = useState("");
  const navigate = useNavigate();

  // Funciones de efecto
  useEffect(() => {
    getAllCiudades();
    getAllProvincias();
    getAllRegiones();
  }, []);

  // Funciones de endpoint
  const getAllRegiones = async () => {
    const response = await axios.get(`${endpoint}/regiones`);
    setRegiones(response.data);
  };

  const getAllProvincias = async () => {
    const response = await axios.get(`${endpoint}/provincias`);
    setProvincias(response.data);
  };

  const getAllCiudades = async () => {
    const response = await axios.get(`${endpoint}/ciudades`);
    setCiudades(response.data);
  };

  // Funciones de filtrado
  const regionFilter = (event) => {
    const provincias_regionFilter = [];
    const id = parseInt(event);
    provincias.forEach((provincia) => {
      const provinciaRegion_id = parseInt(provincia.region_id);
      if (provinciaRegion_id === id) {
        provincias_regionFilter.push({
          id: provincia.id,
          nombre: provincia.nombre,
        });
      }
    });
    setIsFilteredRegiones(true);
    setFilteredProvincias(provincias_regionFilter);

    provinciaFilter(provincias_regionFilter[0].id);
    setIsFilteredProvincias(false);
  };

  const provinciaFilter = (event) => {
    const ciudad_ProvinciaFilter = [];
    const id = parseInt(event);
    ciudades.forEach((ciudad) => {
      const ciudadProvincia_id = parseInt(ciudad.provincia_id);
      if (ciudadProvincia_id === id) {
        ciudad_ProvinciaFilter.push({
          id: ciudad.id,
          nombre: ciudad.nombre,
        });
      }
    });
    setIsFilteredProvincias(true);
    setFilteredCiudades(ciudad_ProvinciaFilter);
  };

  // Función de envío de formulario
  const handleSubmit = async (event) => {
    event.preventDefault();
    try {
      if (nombre !== "" && ciudadId !== "") {
        await axios.post(`${endpoint}/calle`, {
          nombre: nombre,
          ciudad_id: ciudadId,
        });
        navigate("/");
      } else if (
        (nombre === "" && ciudadId !== "") ||
        (nombre !== "" && ciudadId === "")
      ) {
        setError("No pueden haber campos vacios");
      }
    } catch (error) {
      Swal.fire("Error", "Algo ha salido mal", "error");
    }
  };

  return (
    <div>
      <div className="bg-gray-700 py-2 mb-20">
        <Link
          to="/"
          className="pl-5 flex items-center text-white text-xl font-bold"
        >
          Test Programador Inicial
        </Link>
      </div>
      <div className="flex justify-center">
        <form onSubmit={handleSubmit}>
          <div className="bg-gray-100 py-5 px-5 rounded-lg">
            <div>
              <p className="font-black text-2xl flex justify-center">
                Crear Nueva Calle
              </p>
            </div>
            <div className="my-5">
              <div className="flex justify-center text-lg font-semibold">
                Nombre Calle:
              </div>
              <div className="flex justify-center ">
                <input
                  name="nombre"
                  onChange={(event) => setNombre(event.target.value)}
                  className="p-1.5 rounded-md border-2 border-black border-opacity-30 focus:border-blue-500  hover:border-blue-500 active:border-blue-500"
                />
              </div>
            </div>
            <div>
              <div className="text-lg font-semibold flex justify-center">
                Región
              </div>
              <div className="flex justify-center ">
                <select
                  id="region_select"
                  name="region_id"
                  defaultValue=""
                  onChange={(event) => regionFilter(event.target.value)}
                  className="p-1.5 rounded-md border-2 border-black border-opacity-30 focus:border-blue-500  hover:border-blue-500 active:border-blue-500"
                >
                  <option value="" disabled>
                    Filtrar Regiones
                  </option>
                  {regiones.map((region) => (
                    <option key={region.id} value={region.id}>
                      {region.nombre}
                    </option>
                  ))}
                </select>
              </div>
            </div>

            {isFilteredRegiones ? (
              <div className="mt-2">
                <div className="text-lg font-semibold flex justify-center">
                  Provincia
                </div>
                <div className="flex justify-center">
                  <select
                    id="provincia_select"
                    name="provincia_id"
                    defaultValue=""
                    onChange={(event) => provinciaFilter(event.target.value)}
                    className="p-1.5 rounded-md border-2 border-black border-opacity-30 focus:border-blue-500  hover:border-blue-500 active:border-blue-500"
                  >
                    <option value="" disabled>
                      Filtrar Provincias
                    </option>
                    {filteredProvincias.map((filteredProvincia) => (
                      <option
                        key={filteredProvincia.id}
                        value={filteredProvincia.id}
                      >
                        {filteredProvincia.nombre}
                      </option>
                    ))}
                  </select>
                </div>
              </div>
            ) : (
              <div></div>
            )}

            {isFilteredProvincias ? (
              <div className="mt-2">
                <div className="text-lg font-semibold flex justify-center">
                  Ciudad
                </div>
                <div className="flex justify-center">
                  <select
                    id="ciudad_select"
                    name="ciudad_id"
                    defaultValue=""
                    onChange={(event) => setCiudadId(event.target.value)}
                    className="p-1.5 rounded-md border-2 border-black border-opacity-30 focus:border-blue-500  hover:border-blue-500 active:border-blue-500"
                  >
                    <option value="" disabled>
                      Filtrar Ciudades
                    </option>
                    {filteredCiudades.map((filteredCiudad) => (
                      <option key={filteredCiudad.id} value={filteredCiudad.id}>
                        {filteredCiudad.nombre}
                      </option>
                    ))}
                  </select>
                </div>
              </div>
            ) : (
              <div></div>
            )}
            <div className="flex justify-center mt-10">
              <p className="text-red-500">{error}</p>
            </div>
            <div className="flex justify-center mt-5">
              <button className="btn btn-primary">Crear Calle</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  );
};

export default CreateCalle;
