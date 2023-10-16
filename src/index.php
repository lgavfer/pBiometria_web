<!DOCTYPE html>
<html>

<head>
    <title>Mostrar Mediciones</title>
    <script src="api/app/datosMediciones.js"></script>

    <!-- Mocha y Chai para las pruebas -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mocha/mocha.css" />
    <script src="https://cdn.jsdelivr.net/npm/mocha/mocha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chai/chai.js"></script>

</head>

<body>
<h1>Últimas 10 Mediciones</h1>
<div id="mediciones"></div>

<!-- Contenedor para los resultados de las pruebas -->
<div id="mocha"></div>

<script>
    mocha.setup('bdd');
    const { expect } = chai;

    async function fetchAndDisplayData() {
        const mediciones = new datosMediciones();
        const data = await mediciones.getMediciones();

        if (!data || data.length === 0) {
            document.getElementById('mediciones').innerHTML = 'Error al cargar datos';
            return;
        }

        const lastTenRecords = data.slice(-10);
        let html = '<table border="1" id="data-table">';

        for (let key in lastTenRecords[0]) {
            html += `<th>${key}</th>`;
        }

        for (let row of lastTenRecords) {
            html += '<tr>';
            for (let key in row) {
                html += `<td>${row[key]}</td>`;
            }
            html += '</tr>';
        }
        html += '</table>';
        document.getElementById('mediciones').innerHTML = html;

        runTests();
    }

    // Función que ejecuta los tests -> Realiza las pruebas automáticas de la función get
    function runTests() {
        // Inicia pruebas para la tabla "mediciones"
        describe('Pruebas tabla Mediciones: método GET', function() {

            // Primer test: Verificar que la tabla exista
            it('Debería existir la tabla: se ha creado', function() {
                // Busca el elemento de la tabla por su ID
                const table = document.getElementById('data-table');

                // Espera (expect) que la tabla no sea nula
                expect(table).to.not.be.null;
            });

            // Segundo test: Verificar que la tabla tenga más de una fila
            it('Debería tener más de una fila: tiene datos', function() {
                // Busca el elemento de la tabla por su ID
                const table = document.getElementById('data-table');

                // Obtiene el número de filas de la tabla, o 0 si la tabla es nula
                const rows = table ? table.rows.length : 0;

                // Espera (expect) que el número de filas sea mayor que 1
                expect(rows).to.be.greaterThan(1);
            });
        });

        // Ejecuta los tests
        mocha.run();
    }


    fetchAndDisplayData();
</script>
</body>
</html>
