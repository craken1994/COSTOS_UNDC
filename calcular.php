<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Costo de Producción</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="contenedor calcular-costo">
        <h1>COSTO DE PRODUCCIÓN</h1>
        <h2>ORDEN DE PRODUCCIÓN</h2>
        <form>
            <div class="inicial">
                <div class="form-group">
                    <label for="fecha_expedicion">FECHA DE EXPEDICIÓN:</label>
                    <input type="date" id="fecha_expedicion">
                </div>

                <div class="buscar">
                    <div class="form-group">
                        <label for="numero_orden">N° DE ORDEN:</label>
                        <input type="text" id="numero_orden" placeholder="Buscar N° de orden*">
                    </div>
                    <div class="form-group">
                        <label for="nombre_orden">NOMBRE DE LA ORDEN:</label>
                        <input type="text" id="nombre_orden" placeholder="Buscar nombre de la orden*">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="inv_inicial">INVENTARIO INICIAL DE PRODUCCIÓN EN PROCESO:</label>
                    <input type="text" id="inv_inicial" placeholder="Ingrese monto de inventario inicial de producción en proceso*">
                </div>
                <div class="form-group">
                    <label for="inv_final">INVENTARIO FINAL DE PRODUCCIÓN EN PROCESO:</label>
                    <input type="text" id="inv_final" placeholder="Ingrese monto de inventario final de producción en proceso*">
                </div>
                <div class="form-group">
                    <label for="cantidad_producir">CANTIDAD A PRODUCIR:</label>
                    <input type="text" id="cantidad_producir" placeholder="Ingrese la cantidad del producto a producir*">
                </div>
            </div>
            
            <hr><br>

            <h3>Materia Prima Directa (MPD)</h3>
            <div class="seccion">
                <div class="form-group">
                    <label for="material">MATERIAL:</label>
                    <input type="text" id="material" placeholder="Ingrese el nombre del material*">
                </div>
                <div class="form-group">
                    <label for="cantidad">CANTIDAD:</label>
                    <input type="text" id="cantidad" placeholder="Ingrese cantidad*">
                </div>
                <div class="form-group">
                    <label for="precio_unit">PRECIO UNITARIO:</label>
                    <input type="text" id="precio_unit" placeholder="Ingrese el precio unitario*">
                </div>
                <button class="btn btn-blue">AGREGAR</button>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>MATERIALES</th>
                            <th>CANT</th>
                            <th>PRECIO UNIT</th>
                            <th>VALOR TOTAL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="accion-editar"><img src="recursos/editar.svg" alt="Editar"></button>
                                <button class="accion-eliminar"><img src="recursos/eliminar.svg" alt="Eliminar"></button>
                            </td>
                            <!-- <td>
                                <button class="edit-btn">✏️</button>
                                <button class="delete-btn">🗑️</button>
                            </td> -->
                        </tr>
                        <!-- Más filas según sea necesario -->
                    </tbody>
                </table>
            </div>

            <div class="suma-total">
                SUMA: 0.00
            </div>


            <hr><br>

            <h3>Mano de Obra Directa (MOD)</h3>
                <div class="seccion">
                <div class="form-group">
                    <label for="trabajador">TRABAJADOR:</label>
                    <input type="text" id="trabajador" placeholder="Ingrese el nombre del empleado*">
                </div>
                <div class="form-group">
                    <label for="horas_trabajadas">HORAS TRABAJADAS:</label>
                    <input type="text" id="horas_trabajadas" placeholder="Ingrese las horas trabajadas*">
                </div>
                <div class="form-group">
                    <label for="costo_hora">COSTO x HORA:</label>
                    <input type="text" id="costo_hora" placeholder="Ingrese el costo por hora*">
                </div><br>
                <p>¿El trabajador tiene horas extras?</p>
                <div class="form-group">
                    <label for="horas_extras">HORAS EXTRAS:</label>
                    <input type="text" id="horas_extras" placeholder="Ingrese las horas extras*">
                </div>
                <div class="form-group">
                    <label for="minutos_extras">MINUTOS EXTRAS:</label>
                    <input type="text" id="minutos_extras" placeholder="Ingrese los minutos extras*">
                </div>
                <button class="btn btn-blue">AGREGAR</button>
            </div>


            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>TRABAJADORES</th>
                            <th>H. TRAB.</th>
                            <th>V. HORA </th>
                            <th>H. EXTRA</th>
                            <th>M. EXTRA</th>
                            <th>%</th>
                            <th>VH. EXTRA</th>
                            <th>TOTAL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="accion-editar"><img src="recursos/editar.svg" alt="Editar"></button>
                                <button class="accion-eliminar"><img src="recursos/eliminar.svg" alt="Eliminar"></button>
                            </td>
                            <!-- <td>
                                <button class="edit-btn">✏️</button>
                                <button class="delete-btn">🗑️</button>
                            </td> -->
                        </tr>
                        <!-- Más filas según sea necesario -->
                    </tbody>
                </table>
            </div>

            <div class="suma-total">
                SUMA: 0.00
            </div>

            
            <hr><br>
            
            <h3>Costos Indirectos de Fabricación (CIF)</h3>
            <div class="seccion">
                <p>Materia Prima Indirecta (MPI)</p>
                <div class="form-group">
                    <label for="material_indirecto">MATERIAL:</label>
                    <input type="text" id="material_indirecto" placeholder="Ingrese el nombre del material*">
                </div>
                <div class="form-group">
                    <label for="cantidad_indirecta">CANTIDAD:</label>
                    <input type="text" id="cantidad_indirecta" placeholder="Ingrese cantidad*">
                </div>
                <div class="form-group">
                    <label for="precio_unit_indirecto">PRECIO UNITARIO:</label>
                    <input type="text" id="precio_unit_indirecto" placeholder="Ingrese el precio unitario*">
                </div>
                <button class="btn btn-blue">AGREGAR</button>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>MATERIALES</th>
                            <th>CANT</th>
                            <th>PRECIO UNIT</th>
                            <th>VALOR TOTAL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="accion-editar"><img src="recursos/editar.svg" alt="Editar"></button>
                                <button class="accion-eliminar"><img src="recursos/eliminar.svg" alt="Eliminar"></button>
                            </td>
                            <!-- <td>
                                <button class="edit-btn">✏️</button>
                                <button class="delete-btn">🗑️</button>
                            </td> -->
                        </tr>
                        <!-- Más filas según sea necesario -->
                    </tbody>
                </table>
            </div>

            <div class="suma-total">
                SUMA: 0.00
            </div>


           
            <hr><br>

            <div class="seccion">
            <p>Materia de Obra Indirecta (MOI)</p>
                <div class="form-group">
                    <label for="trabajador_indirecto">TRABAJADOR:</label>
                    <input type="text" id="trabajador_indirecto" placeholder="Ingrese el nombre del empleado*">
                </div>
                <div class="form-group">
                    <label for="horas_trabajadas_indirecto">HORAS TRABAJADAS:</label>
                    <input type="text" id="horas_trabajadas_indirecto" placeholder="Ingrese las horas trabajadas*">
                </div>
                <div class="form-group">
                    <label for="costo_hora_indirecto">COSTO x HORA:</label>
                    <input type="text" id="costo_hora_indirecto" placeholder="Ingrese el costo por hora*">
                </div><br>
                <p>¿El trabajador tiene horas extras?</p>
                <div class="form-group">
                    <label for="horas_extras_indirecto">HORAS EXTRAS:</label>
                    <input type="text" id="horas_extras_indirecto" placeholder="Ingrese las horas extras*">
                </div>
                <div class="form-group">
                    <label for="minutos_extras_indirecto">MINUTOS EXTRAS:</label>
                    <input type="text" id="minutos_extras_indirecto" placeholder="Ingrese los minutos extras*">
                </div>
                <button class="btn btn-blue">AGREGAR</button>

            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>TRABAJADORES</th>
                            <th>H. TRAB.</th>
                            <th>V. HORA </th>
                            <th>H. EXTRA</th>
                            <th>M. EXTRA</th>
                            <th>%</th>
                            <th>VH. EXTRA</th>
                            <th>TOTAL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="accion-editar"><img src="recursos/editar.svg" alt="Editar"></button>
                                <button class="accion-eliminar"><img src="recursos/eliminar.svg" alt="Eliminar"></button>
                            </td>
                            <!-- <td>
                                <button class="edit-btn">✏️</button>
                                <button class="delete-btn">🗑️</button>
                            </td> -->
                        </tr>
                        <!-- Más filas según sea necesario -->
                    </tbody>
                </table>
            </div>

            <div class="suma-total">
                SUMA: 0.00
            </div>

            
            <hr><br>


            <div class="seccion">
                <p>Otros Costos Indirectos (OCI)</p>
                <div class="form-group">
                    <label for="nombre_servicio">NOMBRE COSTO O SERV.::</label>
                    <input type="text" id="nombre_servicio" placeholder="Ingrese el nombre del costo o servicio*">
                </div>
                <div class="form-group">
                    <label for="costo_servicio">COSTO:</label>
                    <input type="text" id="costo_servicio" placeholder="Ingrese el costo*">
                </div>
                <button class="btn btn-blue">AGREGAR</button>

            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NOMBRE DEL COSTO O SERVICIO</th>
                            <th>COSTO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="accion-editar"><img src="recursos/editar.svg" alt="Editar"></button>
                                <button class="accion-eliminar"><img src="recursos/eliminar.svg" alt="Eliminar"></button>
                            </td>
                            <!-- <td>
                                <button class="edit-btn">✏️</button>
                                <button class="delete-btn">🗑️</button>
                            </td> -->
                        </tr>
                        <!-- Más filas según sea necesario -->
                    </tbody>
                </table>
            </div>

            <div class="suma-total">
                SUMA: 0.00
            </div>

           
            <hr><br>

            <div class="resultados">
                <div>
                    <label for="total_costo_produccion">TOTAL DE COSTO DE PRODUCCIÓN:</label>
                    <span>S/ <span id="total_costo_produccion">0.00</span></span>
                </div>
                <div>
                    <label for="costo_unitario">COSTO UNITARIO:</label>
                    <span>S/ <span id="costo_unitario">0.00</span></span>
                </div>
            </div>
            <div class="bt-group">
                <button class="bt btn-black">ACTUALIZAR ORDEN</button>
                <button class="bt btn-red">MARCAR COMO COMPLETADO</button>
            </div>
        </form>
        <button class="btn btn-green" onclick="window.location.href='index.php'">REGRESAR</button>
    </div>
</body>
</html>
