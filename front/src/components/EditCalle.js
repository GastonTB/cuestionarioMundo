import React from 'react'
import axios from 'axios'
import { useEffect, useState } from 'react'
import {Link, useParams} from 'react-router-dom'

const endpoint = 'http://localhost:8000/api'



const EditCalle = () => {

    const [ciudadesProvincias, setCiudadesProvincias] = useState([])
    const [provinciasRegiones, setProvinciasRegiones] = useState([])
    const [regionCalle, setRegionCalle] = useState([])
    const [regiones, setRegiones] = useState([])
    const [provincias, setProvincias] = useState([])
    const [ciudades, setCiudades] = useState([])
    const {id} = useParams()
    // const [calle, setCalle] = useState({ nombre: '', ciudad_id: '' })
    const [calle, setCalle] = useState({
        nombre: '',
        ciudad: {
          id: '',
          nombre: '',
          provincia: {
            id: '',
            nombre: '',
            region: {
              id: '',
              nombre: '',
            },
          },
        },
      });

    const [isFilteredRegiones, setIsFilteredRegiones] = useState(false)
    const [isFilteredProvincias, setIsFilteredProvincias] = useState(false);
    const [filteredProvincias, setFilteredProvincias] = useState([])
    const [filteredCiudades, setFilteredCiudades] = useState([])


    useEffect( () =>
  {
    getAllCiudades()
    getAllProvincias()
    getAllRegiones()
    getCalle()
    getProvincias()
    getCiudades()
    getRegion()
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

  const getCalle = async () =>
  {
    try {
        const response = await axios.get(`${endpoint}/calle/${id}`);
        setCalle(response.data.calle);
      } catch (error) {
        console.error(error);
      }
  }

  const getProvincias = async () =>
  {
    try {
        const response = await axios.get(`${endpoint}/calle/${id}`);
        setProvinciasRegiones(response.data.provincias);
      } catch (error) {
        console.error(error);
      }
  }

  const getCiudades = async () =>
  {
    try {
        const response = await axios.get(`${endpoint}/calle/${id}`);
        setCiudadesProvincias(response.data.ciudades);
      } catch (error) {
        console.error(error);
      }
  }

  const getRegion = async () =>
  {
    try {
        const response = await axios.get(`${endpoint}/calle/${id}`);
        setRegionCalle(response.data.region);
      } catch (error) {
        console.error(error);
      }
  }

  


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
      setFilteredProvincias(provincias_regionFilter)
      setIsFilteredRegiones(true) 
      console.log(calle.ciudad.provincia.region.id)
      console.log(event)
    
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

      }

      const ciudadFilter = (event) => 
      {
        console.log(calle)
        console.log(regionCalle.id)
      }




  return (
    <div>EditCalle
        <input value={calle.nombre} onChange={event => setCalle({ ...calle, nombre: event.target.value })} />

        <select id="region_select" value={regionCalle.id} onChange={event=>regionFilter(event.target.value)}>
        {regiones.map((region)=>(
          <option key={region.id}
          value={region.id}
          >
            {region.nombre}
          </option>
        ))}
      </select>

      
        
        <select id="provincia_select" onChange={event=>provinciaFilter(event.target.value)}>
          {isFilteredRegiones?
          filteredProvincias.map((filteredProvincia)=>(
            <option key={filteredProvincia.id} value={filteredProvincia.id}>
              {filteredProvincia.nombre}
            </option>
          ))
          :
          provincias.map((provincia)=>(
            <option key={provincia.id} value={provincia.id}>
              {provincia.nombre}
            </option>
          ))

          }
          </select>

      
      

        <select id="ciudad_select" onChange={event=>ciudadFilter(event.target.value)}>
        {isFilteredProvincias?
          filteredCiudades.map((filteredCiudad)=>(
            <option key={filteredCiudad.id} value={filteredCiudad.id}>
              {filteredCiudad.nombre}
            </option>
          ))
          :
          ciudades.map((ciudad)=>(
            <option key={ciudad.id} value={ciudad.id}>
              {ciudad.nombre}
            </option>
          ))

          }
          </select>

      
    </div>

    

  )
}

export default EditCalle