<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Prueba de Diego Fuentes para práctica profesional</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

		<h1 class="display-4 my-4">Prueba técnica Diego Fuentes</h1>

		<h2 class="display-6 my-2">EJERCICIOS. SOLO PHP Y HTML</h2>

		<p>
			<strong>1. ¿Qué es una API?</strong>

			<br>

			Una API es una forma estandarizada de comunicación entre aplicaciones. Entregan la información necesaria para permitir la interaccion entre aplicaciones sin tener que conocer los detalles de éstas, lo que hace posible que la comunicación sea eficaz.
		</p>
		<p>
			<strong>2. ¿Qué es DOCTYPE HTML?</strong>

			<br>

			DOCTYPE HTML es una etiqueta que se usa al principio de un documento HTML para indicar el tipo de documento que se está usando. Esta etiqueta le dice al navegador cómo debe interpretar el código HTML, para que se muestre correctamente en diferentes navegadores.
		</p>
		<p>
			<strong> 3. A partir del siguiente listado necesitamos crear una tabla que contenga la información de los empleados de los cuales su índice sea un numero impar. (opcional): Nombre y Apellido deben ir en la misma celda. </strong>
			<br>
			<code>$empleados = [
			<br>["Nombre" => "Marcelo","Apellido" => "Velez","Edad" => 25,"Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",],
			<br>["Nombre" => "Alberto","Apellido"=> "Unbertini","Edad" => 36,"Area" => "RRHH","Correo" => "albert.unbert@hotmail.com",],
			<br>["Nombre"=>"Isidora","Apellido" => "Gutierrez","Edad" => 33,"Area" => "Desarrollador","Correo" => "isi_gutie@gmail.cl",],
			<br>["Nombre" =>"Sebastian","Apellido" => "Jimenez","Edad" => 21,"Area" => "No Asignada","Correo" =>"s.jimenez@gmail.cl",],
			<br>["Nombre" => "Manuel","Apellido" => "Osorio","Edad" => 19,"Area" =>"Desarrollador","Correo" => "manu007@outlook.com",],
			<br>["Nombre" =>"Alonso","Apellido" => "Villa","Edad" => 47,"Area" => "Product Manager","Correo" =>"alvilla@hotmail.com",]
			];</code>
		</p>
		
		<?php
			$empleados = [
				["Nombre" => "Marcelo", "Apellido" => "Velez", "Edad" => 25, "Area" => "Administración", "Correo" => "marceloVelez@hotmail.com"],
				["Nombre" => "Alberto", "Apellido" => "Unbertini", "Edad" => 36, "Area" => "RRHH", "Correo" => "albert.unbert@hotmail.com"],
				["Nombre" => "Isidora", "Apellido" => "Gutierrez", "Edad" => 33, "Area" => "Desarrollador", "Correo" => "isi_gutie@gmail.cl"],
				["Nombre" => "Sebastian", "Apellido" => "Jimenez", "Edad" => 21, "Area" => "No Asignada", "Correo" => "s.jimenez@gmail.cl"],
					["Nombre" => "Manuel", "Apellido" => "Osorio", "Edad" => 19, "Area" => "Desarrollador", "Correo" => "manu007@outlook.com"],
				["Nombre" => "Alonso", "Apellido" => "Villa", "Edad" => 47, "Area" => "Product Manager", "Correo" => "alvilla@hotmail.com"]
			];

			echo "<table class='table'>";
			echo "<thead class='thead-dark'>";
			echo "<tr>";
			echo "<th>Nombre y Apellido</th>";
			echo "<th>Edad</th>";
			echo "<th>Área</th>";
			echo "<th>Correo</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";

			foreach ($empleados as $key => $empleado) {
					if ($key % 2 != 0) {
    				echo "<tr><td>{$empleado['Nombre']} {$empleado['Apellido']}</td><td>{$empleado['Edad']}</td><td>{$empleado['Area']}</td><td>{$empleado['Correo']}</td></tr>";
					}
			}
			echo "</tbody>";
			echo "</table>";
		?>

		<p>
			<strong>4. Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada.</strong>
			<br>
			<code>$personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);</code>
		</p>
		<p>
			<?php
				$personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);

				// Sacamos la edad máxima del array
				$max_edad = max($personas);

				// Buscamoos a la persona con la edad máxima
				foreach ($personas as $nombre => $edad) {
				  if ($edad == $max_edad) {
				    $persona_max_edad = $nombre;
				    break;
				  }
				}
				echo "La persona que ostenta la mayor edad en ese grupo es $persona_max_edad, con una edad de $max_edad años.";
			?>
		</p>
		<p>
			<strong>5. Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto.</strong>
		</p>
		<p>
			<?php
			// Contamos los caracteres
			function cantidad_caracteres($texto) {
		  		$num_caracteres = strlen($texto);
		  		return $num_caracteres;
			}

			// Imprimimos el resultado en el documento
			$texto = "Hola, esta es una prueba";
			$cantidad = cantidad_caracteres($texto);
			echo "Consideramos el texto a contar: " . $texto;
			echo "<br>";
			echo "El texto considerado tiene " . $cantidad . " caracteres";
			?>

		</p>

		<h2 class="display-6 my-2">EJERCICIOS. SOLO JS Y HTML</h2>

		<p>
			<strong>1. Imprimir números impares mayores a 100 y menores a 150</strong>
		</p>
		<p id="impares"></p>
		<script>
    		let impares = "";
    		for (let i = 101; i < 150; i += 2) {
        		impares += i + " ";
    		}
    		document.getElementById("impares").innerHTML = impares;
    	</script>
    	<script>
  			let impares = "";
			for (let i = 101; i < 150; i += 2) {
				impares += i + " ";
			}
			document.write("Los números impares entre 101 y 150 son: " + impares);
		</script>
		<p>
			<strong>2. Crea una función que permita sumar, restar, multiplicar y dividir. Los valores para calcular deben ser enviados mediante inputs que solo permitan números enteros, el evento se iniciará a la pulsación de un botón llamado "calcular", Imprimir resultados por pantalla.</strong>
		</p>
		<div>
			

			<script>
				document.write("<label for='input1'>Primer número:</label><input type='number' id='input1'><br><label for='input2'>Segundo número:</label><input type='number' id='input2'><br><button onclick='calcular()'>Calcular</button><p id='resultados'></p>");
    			function calcular() {
			        let num1 = parseInt(document.getElementById("input1").value);
			        let num2 = parseInt(document.getElementById("input2").value);
			        let resultados = "";
			        resultados += "Suma: " + (num1 + num2) + "<br>";
			        resultados += "Resta: " + (num1 - num2) + "<br>";
			        resultados += "Multiplicación: " + (num1 * num2) + "<br>";
			        resultados += "División: " + (num1 / num2) + "<br>";
			        document.getElementById("resultados").innerHTML = resultados;
    			}
			</script>
		</div>
		<p>
			<strong>3. ¿Qué significa HTML, y cuál es su estructura básica?</strong>
			<br>
			HTML significa "HyperText Markup Language". La estructura básica de un documento HTML consta de las siguientes etiquetas: <code>&lt;!DOCTYPE html&gt;</code>, <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, <code>&lt;title&gt;</code>, <code>&lt;/title&gt;</code>, <code>&lt;/head&gt;</code>, <code>&lt;body&gt;</code>, <code>&lt;/body&gt;</code> y <code>&lt;/html&gt;</code>. Entre las etiquetas de apertura y cierre de &lt;head&gt; se incluye información que no es visible en el contenido de la página, como el título, la descripción, las palabras clave y la codificación de caracteres.
			La etiqueta &lt;body&gt; se utiliza para englobar el contenido visible en la página web. Todos los elementos que se muestran en la pantalla del usuario se deben incluir dentro de la etiqueta &lt;body&gt;.

		</p>
		<p>
			<strong>4. A partir del siguiente listado filtre los vehículos que tengan una capacidad mayor a 10 y sean de color azul.</strong>
			<br>
			<code>let vehiculo = [
				<br>{"color": "rojo","marca": "bmw","capacidad": 11},
				<br>{"color": "azul","marca": "fiat","capacidad": 2},
				<br>{"color": "negro","marca": "hyundai","capacidad": 6},
				<br>{"color": "amarillo","marca": "jeep","capacidad": 15},
				<br>{"color": "azul","marca": "citroen","capacidad": 20},
				<br>{"color": "azul","marca": "renault","capacidad": 12},
				<br>{"color": "rojo","marca": "ford","capacidad": 4},
				<br>{"color": "gris","marca": "toyota","capacidad": 8}
			<br>];
			</code>
		</p>

		<script>
			document.write("<table class='table'><thead class='thead-dark'><tr><th>Marca</th><th>Capacidad</th><th>Color</th></tr></thead><tbody id='resultado'></tbody></table>");
			let vehiculo = [
					{"color": "rojo","marca": "bmw","capacidad": 11},
					{"color": "azul","marca": "fiat","capacidad": 2},
					{"color": "negro","marca": "hyundai","capacidad": 6},
					{"color": "amarillo","marca": "jeep","capacidad": 15},
					{"color": "azul","marca": "citroen","capacidad": 20},
					{"color": "azul","marca": "renault","capacidad": 12},
					{"color": "rojo","marca": "ford","capacidad": 4},
					{"color": "gris","marca": "toyota","capacidad": 8}
			];

			let resultado = vehiculo.filter(function(v) {
				return v.capacidad > 10 && v.color === 'azul';
			});

			let tbody = document.getElementById('resultado');
			resultado.forEach(function(v) {
				let tr = document.createElement('tr');
				let tdMarca = document.createElement('td');
				tdMarca.textContent = v.marca;
				let tdCapacidad = document.createElement('td');
				tdCapacidad.textContent = v.capacidad;
				let tdColor = document.createElement('td');
				tdColor.textContent = v.color;
				tr.appendChild(tdMarca);
				tr.appendChild(tdCapacidad);
				tr.appendChild(tdColor);
				tbody.appendChild(tr);
			});

		</script>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>