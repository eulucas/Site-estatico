
<?php
// Setup script to initialize the application
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup - Portfolio Lucas Almeida</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-gradient-primary { background: linear-gradient(135deg, #3B82F6, #1D4ED8); }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12 px-4">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Setup da Aplicação</h1>
            <p class="text-gray-600 mt-2">Configure seu portfólio PHP</p>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Include database configuration
                require_once 'config/database.php';
                
                // Initialize database
                $database = new Database();
                $conn = $database->createDatabase();
                
                echo '<div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">';
                echo '<div class="flex items-center">';
                echo '<div class="flex-shrink-0">';
                echo '<svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">';
                echo '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />';
                echo '</svg>';
                echo '</div>';
                echo '<div class="ml-3">';
                echo '<h3 class="text-sm font-medium text-green-800">Setup Concluído!</h3>';
                echo '<div class="mt-2 text-sm text-green-700">';
                echo '<p>Database criado e configurado com sucesso!</p>';
                echo '<p class="mt-2">✓ Tabelas criadas</p>';
                echo '<p>✓ Planos de serviço inseridos</p>';
                echo '<p>✓ Configuração inicial completa</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                
                echo '<div class="text-center space-y-4">';
                echo '<a href="/" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-primary hover:opacity-90 transition-opacity">';
                echo 'Acessar Portfolio';
                echo '</a>';
                echo '<p class="text-sm text-gray-500">Você pode deletar o arquivo setup.php agora</p>';
                echo '</div>';
                
            } catch (Exception $e) {
                echo '<div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">';
                echo '<div class="flex items-center">';
                echo '<div class="flex-shrink-0">';
                echo '<svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">';
                echo '<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />';
                echo '</svg>';
                echo '</div>';
                echo '<div class="ml-3">';
                echo '<h3 class="text-sm font-medium text-red-800">Erro no Setup</h3>';
                echo '<div class="mt-2 text-sm text-red-700">';
                echo '<p>' . htmlspecialchars($e->getMessage()) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
        ?>
        
        <form method="POST" class="space-y-6">
            <div>
                <h3 class="text-lg font-medium text-gray-900 mb-4">Configurações do Banco de Dados</h3>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-sm text-gray-600 mb-2"><strong>Host:</strong> localhost</p>
                    <p class="text-sm text-gray-600 mb-2"><strong>Database:</strong> portfolio_lucas_almeida</p>
                    <p class="text-sm text-gray-600 mb-2"><strong>Usuário:</strong> root</p>
                    <p class="text-sm text-gray-600"><strong>Senha:</strong> (vazio)</p>
                </div>
                <p class="text-xs text-gray-500 mt-2">
                    Você pode alterar essas configurações no arquivo config/database.php
                </p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900 mb-4">O que será criado:</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center">
                        <svg class="h-4 w-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Banco de dados "portfolio_lucas_almeida"
                    </li>
                    <li class="flex items-center">
                        <svg class="h-4 w-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Tabelas (users, plans, clients, payments, contacts)
                    </li>
                    <li class="flex items-center">
                        <svg class="h-4 w-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Planos de serviço pré-configurados
                    </li>
                </ul>
            </div>

            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-primary hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Inicializar Aplicação
            </button>
        </form>
        
        <?php } ?>
    </div>
</body>
</html>
