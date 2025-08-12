
<?php
$page_title = 'Cadastro - Lucas Almeida | Desenvolvedor Web';
$page_description = 'Cadastre-se e contrate o plano ideal para seu projeto de desenvolvimento web.';

// Get selected plan from URL parameter
$selected_plan = $_GET['plano'] ?? '';

include_once 'includes/header.php';
require_once 'config/database.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-12 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="container-custom">
        <div class="text-center max-w-3xl mx-auto space-y-6">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900">
                Finalize seu <span class="text-gradient">cadastro</span>
            </h1>
            
            <p class="text-xl text-gray-600 leading-relaxed">
                Estamos quase lá! Preencha os dados abaixo para finalizar a contratação do seu plano.
            </p>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-12 bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Dados Pessoais</h2>
                        
                        <form id="registration-form" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="nome" class="text-sm font-medium text-gray-700">Nome Completo *</label>
                                    <input type="text" id="nome" name="nome" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                           placeholder="Seu nome completo">
                                </div>

                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium text-gray-700">Email *</label>
                                    <input type="email" id="email" name="email" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                           placeholder="seu@email.com">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="telefone" class="text-sm font-medium text-gray-700">Telefone *</label>
                                    <input type="tel" id="telefone" name="telefone" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                           placeholder="(11) 99999-9999">
                                </div>

                                <div class="space-y-2">
                                    <label for="cpf_cnpj" class="text-sm font-medium text-gray-700">CPF/CNPJ *</label>
                                    <input type="text" id="cpf_cnpj" name="cpf_cnpj" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                           placeholder="000.000.000-00">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="plano" class="text-sm font-medium text-gray-700">Plano Selecionado *</label>
                                <select id="plano" name="plano" required 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Selecione um plano</option>
                                    <?php
                                    $database = new Database();
                                    $conn = $database->getConnection();
                                    
                                    $stmt = $conn->prepare("SELECT * FROM planos WHERE ativo = 1 ORDER BY preco ASC");
                                    $stmt->execute();
                                    $plans = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    
                                    foreach ($plans as $plan):
                                        $is_selected = (strtolower($plan['nome']) === strtolower($selected_plan)) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $plan['id']; ?>" <?php echo $is_selected; ?>>
                                        <?php echo $plan['nome']; ?> - R$ <?php echo number_format($plan['preco'], 0, ',', '.'); ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">Informações do Projeto</h3>
                                
                                <div class="space-y-2">
                                    <label for="descricao_projeto" class="text-sm font-medium text-gray-700">Descrição do Projeto</label>
                                    <textarea id="descricao_projeto" name="descricao_projeto" rows="4" 
                                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                              placeholder="Descreva brevemente seu projeto, objetivos e necessidades específicas..."></textarea>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <input type="checkbox" id="termos" name="termos" required 
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                <label for="termos" class="text-sm text-gray-700">
                                    Eu aceito os termos de serviço e política de privacidade *
                                </label>
                            </div>

                            <button type="submit" 
                                    class="w-full inline-flex items-center justify-center px-6 py-4 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-lg transition-all duration-300">
                                <i data-lucide="credit-card" class="w-5 h-5 mr-2"></i>
                                Finalizar Cadastro
                            </button>

                            <p class="text-sm text-gray-500 text-center">
                                * Campos obrigatórios. Após o cadastro, você será redirecionado para o pagamento.
                            </p>
                        </form>
                    </div>
                </div>

                <!-- Summary -->
                <div class="space-y-6">
                    <!-- Selected Plan -->
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Resumo do Pedido</h3>
                        
                        <div id="plan-summary" class="space-y-4">
                            <p class="text-gray-600">Selecione um plano para ver o resumo</p>
                        </div>
                    </div>

                    <!-- Security Info -->
                    <div class="bg-green-50 border border-green-200 rounded-xl p-6">
                        <div class="flex items-start space-x-3">
                            <i data-lucide="shield-check" class="w-6 h-6 text-green-600 flex-shrink-0 mt-1"></i>
                            <div>
                                <h4 class="text-lg font-semibold text-green-900 mb-2">Pagamento Seguro</h4>
                                <ul class="text-sm text-green-700 space-y-1">
                                    <li>✓ Dados protegidos por SSL</li>
                                    <li>✓ Pagamento via PIX ou cartão</li>
                                    <li>✓ Garantia de 7 dias</li>
                                    <li>✓ Suporte técnico incluído</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                        <div class="flex items-start space-x-3">
                            <i data-lucide="headphones" class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1"></i>
                            <div>
                                <h4 class="text-lg font-semibold text-blue-900 mb-2">Precisa de ajuda?</h4>
                                <p class="text-sm text-blue-700 mb-3">
                                    Entre em contato conosco para esclarecimentos
                                </p>
                                <a href="/contato.php" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                                    Falar com especialista →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Plan summary data
const planData = {
    <?php foreach ($plans as $plan): ?>
    '<?php echo $plan['id']; ?>': {
        name: '<?php echo $plan['nome']; ?>',
        description: '<?php echo addslashes($plan['descricao']); ?>',
        price: <?php echo $plan['preco']; ?>,
        features: <?php echo $plan['aspecto']; ?>
    },
    <?php endforeach; ?>
};

// Update plan summary when plan is selected
document.getElementById('plano').addEventListener('change', function() {
    const planId = this.value;
    const summaryDiv = document.getElementById('plan-summary');
    
    if (planId && planData[planId]) {
        const plan = planData[planId];
        summaryDiv.innerHTML = `
            <div class="border-b border-gray-200 pb-4 mb-4">
                <h4 class="font-semibold text-gray-900">Plano ${plan.name}</h4>
                <p class="text-sm text-gray-600 mt-1">${plan.description}</p>
            </div>
            
            <div class="space-y-2 mb-4">
                <h5 class="text-sm font-medium text-gray-900">Recursos incluídos:</h5>
                <ul class="text-sm text-gray-600 space-y-1">
                    ${plan.features.map(feature => `<li class="flex items-start"><span class="text-green-500 mr-2">✓</span>${feature}</li>`).join('')}
                </ul>
            </div>
            
            <div class="border-t border-gray-200 pt-4">
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold text-gray-900">Total:</span>
                    <span class="text-2xl font-bold text-blue-600">R$ ${plan.price.toLocaleString('pt-BR')}</span>
                </div>
                <p class="text-sm text-gray-500 mt-1">Pagamento único</p>
            </div>
        `;
    } else {
        summaryDiv.innerHTML = '<p class="text-gray-600">Selecione um plano para ver o resumo</p>';
    }
});

// Form submission
document.getElementById('registration-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;
    
    // Show loading state
    submitButton.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 mr-2 animate-spin"></i>Processando...';
    submitButton.disabled = true;
    
    // Simulate form submission (in real implementation, this would go to a PHP endpoint)
    setTimeout(function() {
        alert('Cadastro realizado com sucesso! Você será redirecionado para o pagamento.');
        window.location.href = '/portfolio_php/sucesso.php';
    }, 2000);
//     setTimeout(function() {
//     alert('Cadastro realizado com sucesso! Você será redirecionado para o pagamento.');
//     document.getElementById('registration-form').submit();
// }, 2000);
});

// Initialize plan selection if URL parameter is present
document.addEventListener('DOMContentLoaded', function() {
    const planSelect = document.getElementById('plano');
    if (planSelect.value) {
        planSelect.dispatchEvent(new Event('change'));
    }
    
    lucide.createIcons();
});

// Format CPF/CNPJ input
document.getElementById('cpf_cnpj').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    
    if (value.length <= 11) {
        // CPF format
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    } else {
        // CNPJ format
        value = value.replace(/^(\d{2})(\d)/, '$1.$2');
        value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
        value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
        value = value.replace(/(\d{4})(\d)/, '$1-$2');
    }
    
    e.target.value = value;
});

// Format phone input
document.getElementById('telefone').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    
    if (value.length >= 11) {
        value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
    } else if (value.length >= 7) {
        value = value.replace(/^(\d{2})(\d{4})(\d)/, '($1) $2-$3');
    } else if (value.length >= 3) {
        value = value.replace(/^(\d{2})(\d)/, '($1) $2');
    }
    
    e.target.value = value;
});
</script>

<?php include_once 'includes/footer.php'; ?>
