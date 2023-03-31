import axios from "axios";
import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import Swal from "sweetalert2";

const endpoint = "http://localhost:8000/api";

const ShowCalles = () => {

  //Variables de estado
  const [ciudades, setCiudades] = useState([]);
  const [filteredCiudades, setFilteredCiudades] = useState([]);
  const [regiones, setRegiones] = useState([]);
  const [provincias, setProvincias] = useState([]);
  const [filteredProvincias, setFilteredProvincias] = useState([]);
  const [calles, setCalles] = useState([]);
  const [filteredCalles, setFilteredCalles] = useState([]);
  const [isFilteredRegiones, setIsFilteredRegiones] = useState(false);
  const [isFilteredProvincias, setIsFilteredProvincias] = useState(false);
  const [selectedProvincia, setSelectedProvincia] = useState("");
  const [selectedCiudad, setSelectedCiudad] = useState("");

  //funciones de efecto
  useEffect(() => {
    getAllCiudades();
    getAllProvincias();
    getAllRegiones();
    getAllCalles();
  }, []);

  //endpoints
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

  const getAllCalles = async () => {
    const response = await axios.get(`${endpoint}/calles`);
    setCalles(response.data);
  };


  //borrar calle
  const deleteCalle = async (id) => {
    const calleId = parseInt(id);
    const calles_borradoFilter = [];
    try {
      const confirmResult = await Swal.fire({
        title: "¿Estás seguro?",
        text: "¡No podrás revertir esto!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
      });

      if (confirmResult.isConfirmed) {
        await axios.delete(`${endpoint}/calle/${id}`);

        if (isFilteredRegiones === true) {
          filteredCalles.forEach((calle) => {
            if (calle.id !== calleId) {
              calles_borradoFilter.push({
                id: calle.id,
                nombre: calle.nombre,
                ciudad: calle.ciudad,
                provincia: calle.provincia,
                region: calle.region,
              });
            }
          });
          setFilteredCalles(calles_borradoFilter);
        }
        getAllCalles();
      }
    } catch (error) {
      Swal.fire(
        'Error',
        'Algo ha salido mal',
        'error'
      )
    }
  };

  //borrar filtros
  const deleteFilter = () => {
    window.location.reload(true);
  };

  //funciones de filtrado
  const regionFilter = (event) => {
    const provincias_regionFilter = [];
    const calles_RegionFilter = [];
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

    calles.forEach((calle) => {
      const region_id = parseInt(calle.ciudad.provincia.region.id);
      if (region_id === id) {
        calles_RegionFilter.push({
          id: calle.id,
          nombre: calle.nombre,
          ciudad: calle.ciudad.nombre,
          provincia: calle.ciudad.provincia.nombre,
          region: calle.ciudad.provincia.region.nombre,
        });
      }
    });
    provinciaFilter(provincias_regionFilter[0].id);
    setIsFilteredProvincias(false);
    setFilteredCalles(calles_RegionFilter);
    getAllCalles();
    setSelectedProvincia("");
    setSelectedCiudad("");
  };

  const provinciaFilter = (event) => {
    const ciudad_ProvinciaFilter = [];
    const calles_provinciaFilter = [];
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

    calles.forEach((calle) => {
      const provincia_id = parseInt(calle.ciudad.provincia.id);
      if (provincia_id === id) {
        calles_provinciaFilter.push({
          id: calle.id,
          nombre: calle.nombre,
          ciudad: calle.ciudad.nombre,
          provincia: calle.ciudad.provincia.nombre,
          region: calle.ciudad.provincia.region.nombre,
        });
      }
    });
    setSelectedProvincia(id);
    setFilteredCalles(calles_provinciaFilter);
    getAllCalles();
    setSelectedCiudad("");
  };

  const ciudadFilter = (event) => {
    const calle_CiudadFilter = [];
    const id = parseInt(event);
    calles.forEach((calle) => {
      const calleCiudad_id = parseInt(calle.ciudad_id);
      if (calleCiudad_id === id) {
        calle_CiudadFilter.push({
          id: calle.id,
          nombre: calle.nombre,
          ciudad: calle.ciudad.nombre,
          provincia: calle.ciudad.provincia.nombre,
          region: calle.ciudad.provincia.region.nombre,
        });
      }
    });
    setFilteredCalles(calle_CiudadFilter);
    getAllCalles();
    setSelectedCiudad(id);
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
        <Link to="/create" className="btn btn-primary">
          Crear Calle
        </Link>
      </div>

      <div className="flex justify-center mt-5">
        <select
          id="region_select"
          defaultValue=""
          onChange={(event) => regionFilter(event.target.value)}
          className="p-1.5 rounded-md border-2 border-black border-opacity-30 hover:border-blue-500 active:border-blue-500"
        >
          <option value="" disabled>
            Filtrar por Regiones
          </option>
          {regiones.map((region) => (
            <option key={region.id} value={region.id}>
              {region.nombre}
            </option>
          ))}
        </select>

        {isFilteredRegiones ? (
          <select
            id="provincia_select"
            value={selectedProvincia}
            onChange={(event) => provinciaFilter(event.target.value)}
            className="p-1.5 rounded-md border-2 border-black border-opacity-30 hover:border-blue-500 active:border-blue-500 ml-5"
          >
            <option value="" disabled>
              Filtrar por Provincias
            </option>
            {filteredProvincias.map((filteredProvincia) => (
              <option key={filteredProvincia.id} value={filteredProvincia.id}>
                {filteredProvincia.nombre}
              </option>
            ))}
          </select>
        ) : (
          <div></div>
        )}

        {isFilteredProvincias ? (
          <select
            id="ciudad_select"
            value={selectedCiudad}
            onChange={(event) => ciudadFilter(event.target.value)}
            className="p-1.5 rounded-md border-2 border-black border-opacity-30 hover:border-blue-500 active:border-blue-500 ml-5"
          >
            <option value="" disabled>
              Filtrar por Ciudad
            </option>
            {filteredCiudades.map((filteredCiudad) => (
              <option key={filteredCiudad.id} value={filteredCiudad.id}>
                {filteredCiudad.nombre}
              </option>
            ))}
          </select>
        ) : (
          <div></div>
        )}

        <button className="btn btn-danger ml-5" onClick={deleteFilter}>
          Borrar Filtros
        </button>
      </div>

      <div className="flex justify-center mt-10">
        <table>
          <thead className="bg-gray-700">
            <tr>
              <th className="py-1 px-5 text-center border-b text-white border-r-2 border-gray-500">
                ID
              </th>
              <th className="py-1 px-5 text-center border-b text-white border-r-2 border-gray-500">
                Nombre
              </th>
              <th className="py-1 px-5 text-center border-b text-white border-r-2 border-gray-500">
                Ciudad
              </th>
              <th className="py-1 px-5 text-center border-b text-white border-r-2 border-gray-500">
                Provincia
              </th>
              <th className="py-1 px-5 text-center border-b text-white border-r-2 border-gray-500">
                Region
              </th>
              <th className="py-1 px-5 text-center border-b text-white border-r-2 border-gray-500">
                Borrar
              </th>
              <th className="py-1 px-5 text-center border-b text-white border-r-2 border-gray-500">
                Editar
              </th>
            </tr>
          </thead>
          <tbody>
            {isFilteredRegiones
              ? filteredCalles.map((filteredCalle) => (
                  <tr key={filteredCalle.id} className="border-b-2">
                    <td className="py-1 px-5 text-center border-b">
                      {filteredCalle.id}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {filteredCalle.nombre}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {filteredCalle.ciudad}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {filteredCalle.provincia}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {filteredCalle.region}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      <button
                        value={filteredCalle.id}
                        className="btn btn-danger"
                        onClick={(event) => deleteCalle(event.target.value)}
                      >
                        Borrar
                      </button>
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      <Link
                        to={`/edit/${filteredCalle.id}`}
                        className="btn btn-warning"
                      >
                        Editar
                      </Link>
                    </td>
                  </tr>
                ))
              : calles.map((calle) => (
                  <tr key={calle.id}>
                    <td className="py-1 px-5 text-center border-b">
                      {calle.id}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {calle.nombre}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {calle.ciudad.nombre}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {calle.ciudad.provincia.nombre}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      {calle.ciudad.provincia.region.nombre}
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      <button
                        value={calle.id}
                        className="btn btn-danger"
                        onClick={(event) => deleteCalle(event.target.value)}
                      >
                        Borrar
                      </button>
                    </td>
                    <td className="py-1 px-5 text-center border-b">
                      <Link
                        to={`/edit/${calle.id}`}
                        className="btn btn-warning"
                      >
                        Editar
                      </Link>
                    </td>
                  </tr>
                ))}
          </tbody>
        </table>
      </div>
      {filteredCalles.length === 0 && isFilteredRegiones === true ? (
        <div className="flex justify-center text-xl font-bold mt-3">
          No se encontraron calles
        </div>
      ) : (
        <div></div>
      )}
    </div>
  );
};

export default ShowCalles;
