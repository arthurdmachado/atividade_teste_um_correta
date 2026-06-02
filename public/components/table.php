<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

<!-- Aqui criamos a tabela -->
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    // Puxamos do mysql as infor,ações
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    // Ele executa a query e guarda o resultado
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // o fetch assoc
        
    
    // Aqui ele mostra a tabela
        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

    


</table>