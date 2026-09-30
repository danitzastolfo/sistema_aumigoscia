<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./ícone.png">
    <title>entrada</title> 
</head>
<body style="background-color: #F5F0EB; font-family: system-ui, -apple-system, sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0;">
    <main style="background-color: #ffffff; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px; text-align: center;">
        <h1 style="color: #3D2314; font-size: 1.2rem; font-weight: 600; letter-spacing: 0.5px; margin-top: 0; margin-bottom: 1rem;">
            Bem-vindo/a ao AUmigos e Companhia!
        </h1>
<body style="background-color: #F5F0EB; font-family: sytstem-ui, -apple-system,sans-serif;display: flex; justify-content:center;align-items:center;min-height:100vh;margin:0;">
    <div style="text-align: center;">
        <img src="./ícone.png" alt="Logo" width="400">
    </div>
    <form action="lógica.php" method="post">
        <h1>Dados do Tutor</h1>
        <!-- dados do tutor -->
        <label for="nometu">Nome completo:</label>
        <input type="text" id="nometu" name="nometu" placeholder="Mamãe/Papai do Pet" required><br>

        <label for="documento">Envie um documento identificador:</label>
        <input type="file" id="documento" name="documento"><br>

        <label for="telefone">Telefone para contato:</label>
        <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com"><br>
        
        <h1>Dados do Pet</h1>
        <!-- dados do pet -->
        <label for="pet">Nome do Pet:</label>
        <input type="text" id="pet" name="pet" placeholder="Ex.: Lili" required><br>

        <label for="especie">Espécie:</label>
        <select name="especie" id="especie" required>
            <option selected disabled>Selecione...</option>
            <option value="Cão">Cão</option>
            <option value="Gato">Gato</option>
            <option value="Ave">Ave</option>
            <option value="Outro">Outro</option>
        </select><br>

        <label for="raca">Raça:</label>
        <input type="text" id="raca" name="raca" placeholder="Ex.: Poodle" required><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br>

        <label for="condicao">Condição:</label>
        <select name="condicao" id="condicao" required>
            <option selected disabled>Selecione...</option>
            <option value="Castrado">Castrado</option>
            <option value="Não castrado">Não castrado</option>
        </select><br>

        <label for="idade">Idade aproximada:</label> <!-- usar função e if/else para se menor de um ano -->
        <input type="number" id="idade" name="idade" step="0.1" placeholder="Ex.: seis meses = 0,6" required>

        <h1>Ficha Médica/Observações</h1>
        <!-- ficha médica e obs -->
        <form action="view saída.php" method="post">
            <label for="rest">O Pet possui alguma alergia ou restrição? Descreva-a:</label>
            <textarea style="width: 400px" name="rest" id="rest" placeholder="Produtos específicos, restrição de shampoo, alergias alimentares..."></textarea>

            <label for="cuid">Cuidados especiais/Histórico de Saúde:</label>
            <textarea style="width: 400px" name="cuid" id="cuid" placeholder="Problemas cardíacos, idade avançada, lesões de pele..."></textarea>

            <label for="vacinacao">Vacinação:</label>
            <textarea style="width: 400px" name="vacinacao" id="vacinacao" placeholder="Status de vacinas principais (como Raiva e V10/V8)"></textarea><br><br>

            <button type="submit">ENVIAR</button>
        </form>
    </form>
</body>
</body>
</html> 