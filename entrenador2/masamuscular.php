<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="css/masamuscular.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>IMC Calculator</h1>
        </div>
        <div class="navigation">
            <a href="#home">Inicio</a>
            <a href="#about">Sobre nosotros</a>
            <a href="#contact">Contacto</a>
            <a href="./login.php" class="sign-in">Salir</a>
        </div>
    </div>
    
    <div class="main-container">
        <div class="text-section">
            <h1>Calcula tu IMC</h1>
            <p>Introduce tu peso, altura y selecciona tu género para calcular tu Índice de Masa Corporal (IMC).</p>
            <form id="bmi-form">
                <div>
                    <label for="weight">Peso (kg):</label>
                    <input type="number" id="weight" name="weight" required>
                </div>
                <div>
                    <label for="height">Altura (cm):</label>
                    <input type="number" id="height" name="height" required>
                </div>
                <div>
                    <label for="gender">Género:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Masculino</option>
                        <option value="female">Femenino</option>
                    </select>
                </div>
                <div class="buttons">
                    <button type="submit" class="button">Calcular IMC</button>
                    <button type="reset" class="button">Reset</button>
                </div>
            </form>
            <div id="result-container" class="result-container">
                <table id="result-table" class="result-table">
                    <thead>
                        <tr>
                            <th>Índice de Masa Corporal (IMC)</th>
                            <th>Masa Muscular</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="bmi-result">-</td>
                            <td id="muscle-mass-result">-</td>
                            <td id="status-result">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="image-container">
            <img src="./img/cosaspeso.png" alt="Fitness foto">
        </div>
    </div>
    
    <div class="footer">
        <div>© 2024 IMC Calculator</div>
        <div>Privacy Policy</div>
        <div>Terms of Service</div>
    </div>
    
    <script>
        document.getElementById('bmi-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const weight = parseFloat(document.getElementById('weight').value);
            const height = parseFloat(document.getElementById('height').value) / 100;
            const gender = document.getElementById('gender').value;
            const bmi = (weight / (height * height)).toFixed(2);

            // Ajusta la masa muscular basada en el género
            const muscleMassFactor = gender === 'female' ? 0.35 : 0.4; // Ejemplo: 35% para mujeres, 40% para hombres
            const muscleMass = (weight * muscleMassFactor).toFixed(2);

            let status = '';

            if (bmi < 18.5) {
                status = 'Bajo peso';
            } else if (bmi >= 18.5 && bmi < 25) {
                status = 'Normal';
            } else if (bmi >= 25 && bmi < 30) {
                status = 'Sobrepeso';
            } else {
                status = 'Obesidad';
            }

            // Mostrar los resultados
            document.getElementById('bmi-result').textContent = bmi;
            document.getElementById('muscle-mass-result').textContent = muscleMass + ' kg';
            document.getElementById('status-result').textContent = status;

            // Expande el recuadro de resultados
            const resultContainer = document.getElementById('result-container');
            resultContainer.style.maxHeight = '300px'; // Ajusta el tamaño según el contenido
            resultContainer.classList.add('show'); // Añadir clase para animación
        });

        // Opcional: Restablecer el tamaño del recuadro de resultados al resetear el formulario
        document.getElementById('bmi-form').addEventListener('reset', function() {
            document.getElementById('result-container').style.maxHeight = '0';
            document.getElementById('result-container').classList.remove('show'); // Remover clase de animación
        });
    </script>
</body>
</html>
