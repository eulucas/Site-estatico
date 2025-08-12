
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

try {
    // Get form data
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $assunto = trim($_POST['assunto'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');
    
    // Validate required fields
    if (empty($nome) || strlen($nome) < 2) {
        throw new Exception('Nome deve ter pelo menos 2 caracteres');
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Email inválido');
    }
    
    if (empty($assunto) || strlen($assunto) < 5) {
        throw new Exception('Assunto deve ter pelo menos 5 caracteres');
    }
    
    if (empty($mensagem) || strlen($mensagem) < 10) {
        throw new Exception('Mensagem deve ter pelo menos 10 caracteres');
    }
    
    // Connect to database
    $database = new Database();
    $conn = $database->getConnection();
    
    // Insert contact
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message, status, created_at) VALUES (?, ?, ?, ?, 'novo', datetime('now'))");
    $result = $stmt->execute([$nome, $email, $assunto, $mensagem]);
    
    if ($result) {
        $contact_id = $conn->lastInsertId();
        
        http_response_code(201);
        echo json_encode([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso!',
            'id' => $contact_id
        ]);
    } else {
        throw new Exception('Erro ao salvar contato no banco de dados');
    }
    
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Erro interno do servidor'
    ]);
    
    // Log the actual error for debugging
    error_log('Database error in contato.php: ' . $e->getMessage());
}
?>
