<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Costo de Producción</title>
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


            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>MATERIALES</th>
                            <th>CANT</th>
                            <th>PRECIO UNIT</th>
                            <th>VALOR TOTAL</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
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
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
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

            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NOMBRE DEL COSTO O SERVICIO</th>
                            <th>COSTO</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            
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

        </form>
        <button class="btn btn-green" onclick="window.location.href='index.php'">REGRESAR</button>
    </div>
</body>
</html>
