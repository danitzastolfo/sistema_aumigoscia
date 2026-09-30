<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>saída</title>
</head>
<body style="background-color: #F5EBE0; font-family: sans-serif; padding: 20px; color: #4A3E3D;">
    <h1 style="text-align: center;">Ficha Geral</h1>
    <main style="background-color: #FAF4EE; max-width: 450px; margin: 0 auto; padding: 20px; border-radius: 12px; text-align: center; box-shadow: 0 4px 10px rgba(74, 52, 36, 0.1);">
        <section style="margin-bottom: 20px; background-color: #E3D5CA; padding: 12px; border-radius: 8px;">
            <p style="font-weight: bold; color: #4A3224; margin: 0 0 10px 0;">🐾 Nossos AUmigos:</p>
            <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=200" alt="Cão" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid #8C5E4A; margin: 0 4px;">
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=200" alt="Gato" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid #8C5E4A; margin: 0 4px;">
            <img src="https://images.unsplash.com/photo-1552728089-57bdde30beb3?w=200" alt="Ave" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid #8C5E4A; margin: 0 4px;">
        </section>
        <?php
        foreach ($tutores as $tutor){ ?>
        <section style="text-align: left; margin-top: 15px;">
            <h3 style="color: #6B4E3D; border-bottom: 2px solid #D5C5B5; padding-bottom: 5px;">👤 Dados do Tutor</h3> <!-- usar foreach -->
            <p><strong>🌟 Nome:</strong> <?= $tutor["nometu"] ?></p>
            <p><strong>📞 Telefone:</strong> <?= $tutor["telefone"] ?></p>
            <p><strong>✉️ E-mail:</strong> <?= $tutor["email"] ?></p>
        </section><?php } ?>
        <?php
        foreach ($aumigos as $aumigo){ ?>
        <section style="text-align: left; margin-top: 20px;">
            <h3 style="color: #6B4E3D; border-bottom: 2px solid #D5C5B5; padding-bottom: 5px;">🐾 Dados do Pet</h3>
            <p><strong>🏷️ Nome do Pet:</strong> <?= $aumigo["nomepet"] ?></p>
            <p><strong>🐱 Espécie:</strong> <?= $aumigo["especie"] ?></p>
            <p><strong>🐕 Raça:</strong> <?= $aumigo["raca"] ?></p>
            <p><strong>⚖️ Peso:</strong> <?= $aumigo["peso"] ?> kg</p>
            <p><strong>⭐ Condição:</strong> <?= $aumigo["condicao"] ?></p>
            <p><strong>🎂 Idade:</strong> <?= $aumigo["idade"] ?> anos</p>
        </section><?php } ?>

        <section style="text-align: left; margin-top: 20px;">
            <h3 style="color: #6B4E3D; border-bottom: 2px solid #D5C5B5; padding-bottom: 5px;">📋 Ficha Médica/Observações</h3>
            <p><strong>⚠️ Alergias ou Restrições:</strong></p>
            <p style="background-color: #E3D5CA; padding: 10px; border-radius: 6px; color: #3A2A20; word-break: break-word;">
                <?php
                if (empty($_POST["rest"])){
                    echo "Não há restrições ou alergias.";
                }else {
                    echo $_POST["rest"];
                }
                ?>
            </p>

            <p><strong>🩺 Cuidados especiais/Histórico de Saúde:</strong></p>
            <p style="background-color: #E3D5CA; padding: 10px; border-radius: 6px; color: #3A2A20; word-break: break-word;">
                <?php
                if (empty($_POST["cuid"])){
                    echo "Não há cuidados especiais.";
                }else {
                    echo $_POST["cuid"];
                }
                ?>
            </p>

            <p><strong>💉 Vacinação:</strong></p>
            <p style="background-color: #E3D5CA; padding: 10px; border-radius: 6px; color: #3A2A20; word-break: break-word;">
                <?php
                if (empty($_POST["vacinacao"])){
                    echo "Não há detalhes.";
                }else {
                    echo $_POST["vacinacao"];
                }
                ?>
            </p>
            <p><b>Observações:</b></p>
            <p style="background-color: #E3D5CA; padding: 10px; border-radius: 6px; color: #3A2A20; word-break: break-word;">
                <?php
                $classificacao = verificarid($idade);
                echo "Classificação: ".$classificacao;
                $recomendacao = verificaran($idade);
                echo $recomendacao;
                ?>
            </p>
        </section>
        <a href="view entrada.php" style="display: block; background-color: #6B4E3D; color: #FAF4EE; text-decoration: none; padding: 12px; border-radius: 6px; font-weight: bold; margin-top: 25px;">
            Voltar ao Formulário
        </a>
    </main>
</body>
</html>