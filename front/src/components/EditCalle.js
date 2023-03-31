import React from "react";
import axios from "axios";
import { useEffect, useState } from "react";
import { Link, useParams } from "react-router-dom";
import Swal from "sweetalert2";

const endpoint = "http://localhost:8000/api";

const EditCalle = () => {
  const [ciudadesProvincias, setCiudadesProvincias] = useState([]);
  const [provinciasRegiones, setProvinciasRegiones] = useState([]);
  const [regiones, setRegiones] = useState([]);
  const [provincias, setProvincias] = useState([]);
  const [ciudades, setCiudades] = useState([]);
  const { id } = useParams();
  const [calle, setCalle] = useState({
    nombre: "",
    ciudad: {
      id: "",
      nombre: "",
      provincia: {
        id: "",
        nombre: "",
        region: {
          id: "",
          nombre: "",
        },
      },
    },
  });

  const [isFilteredRegiones, setIsFilteredRegiones] = useState(false);
  const [isFilteredProvincias, setIsFilteredProvincias] = useState(false);
  const [filteredProvincias, setFilteredProvincias] = useState([]);
  const [filteredCiudades, setFilteredCiudades] = useState([]);
  const [error, setError] = useState("");

  useEffect(() => {
    getAllCiudades();
    getAllProvincias();
    getAllRegiones();
    getCalle();
    getProvincias();
    getCiudades();
  }, []);

  //endpoints
  const getAllRegiones = async () => {
    try {
      const response = await axios.get(`${endpoint}/regiones`);
      setRegiones(response.data);
    } catch (error) {
      console.log(error)
    }
  };

  const getAllProvincias = async () => {
    try {
      const response = await axios.get(`${endpoint}/provincias`);
      setProvincias(response.data);
    } catch (error) {
      console.log(error)
    }
  };

  const getAllCiudades = async () => {
    try {
      const response = await axios.get(`${endpoint}/ciudades`);
      setCiudades(response.data);
    } catch (error) {
      console.log(error)
    }
  };

  const getCalle = async () => {
    try {
      const response = await axios.get(`${endpoint}/calle/${id}`);
      setCalle(response.data.calle);
    } catch (error) {
      Swal.fire(
        'Error',
        'Algo ha salido mal',
        'error'
      )
    }
  };

  const getProvincias = async () => {
    try {
      const response = await axios.get(`${endpoint}/calle/${id}`);
      setProvinciasRegiones(response.data.provincias);
    } catch (error) {
      console.log(error)
    }
  };

  const getCiudades = async () => {
    try {
      const response = await axios.get(`${endpoint}/calle/${id}`);
      setCiudadesProvincias(response.data.ciudades);
    } catch (error) {
      console.log(error)
    }
  };

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

    provinciaFilter(provincias_regionFilter[0].id);

    setFilteredProvincias(provincias_regionFilter);
    setIsFilteredRegiones(true);
    setCalle((prevCalle) => ({
      ...prevCalle,
      ciudad: {
        ...prevCalle.ciudad,
        provincia: {
          ...prevCalle.ciudad.provincia,
          region: {
            id: id,
          },
        },
      },
    }));
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

    setCalle((prevCalle) => ({
      ...prevCalle,
      ciudad: {
        ...prevCalle.ciudad,
        provincia: {
          ...prevCalle.ciudad.provincia,
          id: id,
        },
      },
    }));
  };

  const ciudadFilter = (event) => {
    const ciudadId = parseInt(event);

    setCalle((prevCalle) => ({
      ...prevCalle,
      ciudad: {
        ...prevCalle.ciudad,
        id: ciudadId,
      },
    }));
  };

  const handleSubmit = async (event) => {
    event.preventDefault();
    if (calle.nombre !== "") {
      try {
        setError("");
        await axios.put(`${endpoint}/calle/${calle.id}`, {
          nombre: calle.nombre,
          ciudad_id: calle.ciudad.id,
        });
        Swal.fire("Exito", "La calle ha sido modificada", "success");
      } catch (error) {
        Swal.fire("Error", "Algo ha salido mal", "error");
      }
    } else {
      setError("El nombre no puede quedar vacio");
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
                  value={calle.nombre}
                  onChange={(event) =>
                    setCalle({ ...calle, nombre: event.target.value })
                  }
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
                  value={calle.ciudad.provincia.region.id}
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

            <div className="mt-2">
              <div className="text-lg font-semibold flex justify-center">
                Provincia
              </div>
              <div className="flex justify-center">
                <select
                  id="provincia_select"
                  name="provincia_id"
                  value={calle.ciudad.provincia.id}
                  onChange={(event) => provinciaFilter(event.target.value)}
                  className="p-1.5 rounded-md border-2 border-black border-opacity-30 focus:border-blue-500  hover:border-blue-500 active:border-blue-500"
                >
                  {isFilteredRegiones
                    ? filteredProvincias.map((filteredProvincia) => (
                        <option
                          key={filteredProvincia.id}
                          value={filteredProvincia.id}
                        >
                          {filteredProvincia.nombre}
                        </option>
                      ))
                    : provinciasRegiones.map((provinciasRegion) => (
                        <option
                          key={provinciasRegion.id}
                          value={provinciasRegion.id}
                        >
                          {provinciasRegion.nombre}
                        </option>
                      ))}
                </select>
              </div>
            </div>

            <div className="mt-2">
              <div className="text-lg font-semibold flex justify-center">
                Ciudad
              </div>
              <div className="flex justify-center">
                <select
                  id="ciudad_select"
                  name="ciudad_id"
                  value={calle.ciudad.id}
                  onChange={(event) => ciudadFilter(event.target.value)}
                  className="p-1.5 rounded-md border-2 border-black border-opacity-30 focus:border-blue-500  hover:border-blue-500 active:border-blue-500"
                >
                  {isFilteredProvincias
                    ? filteredCiudades.map((filteredCiudad) => (
                        <option
                          key={filteredCiudad.id}
                          value={filteredCiudad.id}
                        >
                          {filteredCiudad.nombre}
                        </option>
                      ))
                    : ciudadesProvincias.map((ciudadesProvincia) => (
                        <option
                          key={ciudadesProvincia.id}
                          value={ciudadesProvincia.id}
                        >
                          {ciudadesProvincia.nombre}
                        </option>
                      ))}
                </select>
              </div>
            </div>

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

export default EditCalle;
