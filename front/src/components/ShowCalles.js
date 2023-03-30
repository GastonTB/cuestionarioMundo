import axios from 'axios'
import { useEffect, useState } from 'react'
import {Link} from 'react-router-dom'

const endpoint = 'http://localhost:8000/api'


const ShowCalles = () => {


  //NO OLVIDAR AGREGAR CALLES

  //ciudades originales
  const [ciudades, setCiudades] = useState([])
  //ciudades filtradas
  const [filteredCiudades, setFilteredCiudades] = useState([])
  //regiones
  const [regiones, setRegiones] = useState([])
  //provincias originales
  const [provincias, setProvincias] = useState([])
  //provincias filtradas
  const [filteredProvincias, setFilteredProvincias] = useState([])
  //calles
  const [calles, setCalles] = useState([])
  //calles filtradas
  const [filteredCalles, setFilteredCalles] = useState([])
  //flags
  const [isFilteredRegiones, setIsFilteredRegiones] = useState(false)
  const [isFilteredProvincias, setIsFilteredProvincias] = useState(false);



  useEffect( () =>
  {
    getAllCiudades()
    getAllProvincias()
    getAllRegiones()
    getAllCalles()
  }, [])

  //endpoints
  const getAllRegiones = async () =>
  {
    const response = await axios.get(`${endpoint}/regiones`)
    setRegiones(response.data)
  }

  const getAllProvincias = async () =>
  {
    const response = await axios.get(`${endpoint}/provincias`)
    setProvincias(response.data)
  }

  const getAllCiudades = async () =>
  {
    const response  = await axios.get(`${endpoint}/ciudades`)
    setCiudades(response.data)
  }

  const getAllCalles = async () =>
  {
    const response = await axios.get(`${endpoint}/calles`)
    setCalles(response.data)
  }

  const deleteCalle = async (id) =>
  { 
    console.log(id)
    await axios.delete(`${endpoint}/calle/${id}`)
    getAllCalles()
  }


  //opciones de filtro
  const regionFilter = (event) =>
  {
    const provincias_regionFilter = []
    const calles_RegionFilter = []
    const id = parseInt(event)
    provincias.forEach(provincia=>
      {
        const provinciaRegion_id = parseInt(provincia.region_id)
        if(provinciaRegion_id === id)
        {
          provincias_regionFilter.push(
            {
              'id': provincia.id,
              'nombre': provincia.nombre,
          })
        }
      })
      setIsFilteredRegiones(true)
      setFilteredProvincias(provincias_regionFilter) 
      
      calles.forEach(calle=>
        {
          const region_id = parseInt(calle.ciudad.provincia.region.id)
          if(region_id === id ){
            calles_RegionFilter.push(
              {
                'id': calle.id,
                'nombre': calle.nombre,
                'ciudad' : calle.ciudad.nombre,
                'provincia': calle.ciudad.provincia.nombre,
                'region': calle.ciudad.provincia.region.nombre,
            })
          }
        })
      setFilteredCalles(calles_RegionFilter)
    }

    const provinciaFilter = (event) =>
    {
      const ciudad_ProvinciaFilter = []
      const calles_provinciaFilter = []
      const id = parseInt(event)
      ciudades.forEach(ciudad=>
        {
          const ciudadProvincia_id = parseInt(ciudad.provincia_id)
          if(ciudadProvincia_id === id)
          {
            ciudad_ProvinciaFilter.push(
              {
                'id': ciudad.id,
                'nombre': ciudad.nombre,
            })
          }
        })
        setIsFilteredProvincias(true)
        setFilteredCiudades(ciudad_ProvinciaFilter) 

        calles.forEach(calle=>
          {
            const provincia_id = parseInt(calle.ciudad.provincia.id)
            if(provincia_id === id){
              calles_provinciaFilter.push(
                {
                  'id': calle.id,
                  'nombre': calle.nombre,
                  'ciudad' : calle.ciudad.nombre,
                  'provincia': calle.ciudad.provincia.nombre,
                  'region': calle.ciudad.provincia.region.nombre,
              })
            }
        })
        setFilteredCalles(calles_provinciaFilter)
      }

    const ciudadFilter = (event) =>
    {
      const calle_CiudadFilter = []
      const id = parseInt(event)
      calles.forEach(calle=>
        {
          const calleCiudad_id = parseInt(calle.ciudad_id)
          if(calleCiudad_id === id){
            calle_CiudadFilter.push(
              {
                'id': calle.id,
                'nombre': calle.nombre,
                'ciudad' : calle.ciudad.nombre,
                'provincia': calle.ciudad.provincia.nombre,
                'region': calle.ciudad.provincia.region.nombre,
            })
          }
      })
      setFilteredCalles(calle_CiudadFilter)
    }

  return (
    <div>
      <select id="region_select" defaultValue="" onChange={event=>regionFilter(event.target.value)}>
        <option value="" disabled>Filtrar por Regiones</option>
        {regiones.map((region)=>(
          <option key={region.id}
          value={region.id}>
            {region.nombre}
          </option>
        ))}
      </select>

      
        {isFilteredRegiones?
        <select id="provincia_select" defaultValue="" onChange={event=>provinciaFilter(event.target.value)}>
          <option value="" disabled>Filtrar por Provincias</option>
          {filteredProvincias.map((filteredProvincia)=>(
            <option key={filteredProvincia.id} value={filteredProvincia.id}>
              {filteredProvincia.nombre}
            </option>
          ))}
          </select>
          :
          <div></div>
        }
      
      
        {isFilteredProvincias?
        <select id="ciudad_select" defaultValue="" onChange={event=>ciudadFilter(event.target.value)}>
          <option value="" disabled>Filtrar por Ciudad</option>
          {filteredCiudades.map((filteredCiudad)=>(
            <option key={filteredCiudad.id} value={filteredCiudad.id}>
              {filteredCiudad.nombre}
            </option>
          ))}
          </select>
          :
          <div></div>
        }
      

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Provincia</th>
            <th>Region</th>
            <th>Borrar</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody>
          {isFilteredRegiones?
          
          filteredCalles.map((filteredCalle)=>(
            <tr key={filteredCalle.id}>
              <td>
                {filteredCalle.id}
              </td>
              <td>
                {filteredCalle.nombre}
              </td>
              <td>
                {filteredCalle.ciudad}
              </td>
              <td>
                {filteredCalle.provincia}
              </td>
              <td>
                {filteredCalle.region}
              </td>
              <td>
                <button value={filteredCalle.id} className='btn btn-danger' onClick={event=>deleteCalle(event.target.value)}>
                  Borrar
                </button>
              </td>
              <td>
                <Link to={`/edit/${filteredCalle.id}`} className='btn btn-warning'>
                  Editar
                </Link>
              </td>
            </tr>
          ))
            :
            calles.map((calle)=>(
              <tr key={calle.id}>
                <td>
                  {calle.id}
                </td>
                <td>
                  {calle.nombre}
                </td>
                <td>
                  {calle.ciudad.nombre}
                </td>
                <td>
                  {calle.ciudad.provincia.nombre}
                </td>
                <td>
                  {calle.ciudad.provincia.region.nombre}
                </td>
                <td>
                  <button value={calle.id} className='btn btn-danger' onClick={event=>deleteCalle(event.target.value)}>
                    Borrar
                  </button>
                </td>
                <td>
                  <Link to={`/edit/${calle.id}`}  className='btn btn-warning'>
                    Editar
                  </Link>
                </td>
              </tr>
            ))
          }
        </tbody>
      </table>
    </div>

  )
}

export default ShowCalles