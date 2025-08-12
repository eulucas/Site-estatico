
<?php
$page_title = 'Contato - Lucas Almeida | Desenvolvedor Web';
$page_description = 'Entre em contato com Lucas Almeida para discutir seu próximo projeto de desenvolvimento web. Orçamento gratuito e sem compromisso.';

include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="container-custom">
        <div class="text-center max-w-3xl mx-auto space-y-6">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900">
                Vamos conversar sobre seu <span class="text-gradient">projeto</span>
            </h1>
            
            <p class="text-xl text-gray-600 leading-relaxed">
                Estou sempre disponível para discutir novas oportunidades e ajudar você 
                a transformar suas ideias em realidade digital. Entre em contato!
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <h2 class="text-3xl font-bold text-gray-900">Envie uma mensagem</h2>
                    <p class="text-gray-600">
                        Preencha o formulário abaixo e entrarei em contato o mais breve possível.
                    </p>
                </div>
                
                <div class="bg-white border border-blue-100 rounded-lg shadow-sm">
                    <div class="p-6">
                        <form id="contact-form" action="/api/contato.php" method="POST" class="space-y-6">
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="nome" class="text-sm font-medium text-gray-700">
                                        Nome Completo *
                                    </label>
                                    <div class="relative">
                                        <i data-lucide="user" class="absolute left-3 top-3 h-4 w-4 text-gray-400"></i>
                                        <input type="text" id="nome" name="nome" required 
                                               class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                               placeholder="Seu nome completo">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium text-gray-700">
                                        Email *
                                    </label>
                                    <div class="relative">
                                        <i data-lucide="mail" class="absolute left-3 top-3 h-4 w-4 text-gray-400"></i>
                                        <input type="email" id="email" name="email" required 
                                               class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                               placeholder="seu@email.com">
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="assunto" class="text-sm font-medium text-gray-700">
                                    Assunto *
                                </label>
                                <div class="relative">
                                    <i data-lucide="message-square" class="absolute left-3 top-3 h-4 w-4 text-gray-400"></i>
                                    <input type="text" id="assunto" name="assunto" required 
                                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                           placeholder="Sobre o que você gostaria de falar?">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="mensagem" class="text-sm font-medium text-gray-700">
                                    Mensagem *
                                </label>
                                <textarea id="mensagem" name="mensagem" rows="5" required 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                          placeholder="Conte-me mais sobre seu projeto, suas necessidades e objetivos..."></textarea>
                            </div>

                            <button type="submit" 
                                    class="w-full inline-flex items-center justify-center px-6 py-4 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow transition-all duration-300">
                                <i data-lucide="send" class="w-4 h-4 mr-2"></i>
                                Enviar Mensagem
                            </button>

                            <p class="text-sm text-gray-500 text-center">
                                * Campos obrigatórios. Seus dados estão seguros e não serão compartilhados.
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <h2 class="text-3xl font-bold text-gray-900">Outras formas de contato</h2>
                    <p class="text-gray-600">
                        Escolha a forma de contato que for mais conveniente para você.
                    </p>
                </div>

                <div class="space-y-6">
                    <?php
                    $contact_info = [
                        [
                            'icon' => 'mail',
                            'title' => 'Email',
                            'value' => 'contato@lucasalmeida.dev',
                            'description' => 'Resposta em até 24 horas'
                        ],
                        [
                            'icon' => 'phone',
                            'title' => 'Telefone',
                            'value' => '(11) 99999-9999',
                            'description' => 'Horário comercial: 9h às 18h'
                        ],
                        [
                            'icon' => 'message-circle',
                            'title' => 'WhatsApp',
                            'value' => '(11) 99999-9999',
                            'description' => 'Disponível 24/7'
                        ],
                        [
                            'icon' => 'map-pin',
                            'title' => 'Localização',
                            'value' => 'São Paulo, SP',
                            'description' => 'Atendo todo o Brasil'
                        ],
                        [
                            'icon' => 'clock',
                            'title' => 'Horário',
                            'value' => 'Seg - Sex: 9h às 18h',
                            'description' => 'Sábado: 9h às 12h'
                        ]
                    ];
                    
                    foreach ($contact_info as $info): ?>
                    <div class="bg-white border border-blue-100 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <div class="bg-blue-100 p-3 rounded-lg flex-shrink-0">
                                    <i data-lucide="<?php echo $info['icon']; ?>" class="w-6 h-6 text-blue-600"></i>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-semibold text-gray-900"><?php echo $info['title']; ?></h3>
                                    <p class="text-blue-600 font-medium"><?php echo $info['value']; ?></p>
                                    <p class="text-sm text-gray-600"><?php echo $info['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="bg-gradient-primary p-6 rounded-lg text-white">
                    <h3 class="text-xl font-bold mb-3">Orçamento Gratuito</h3>
                    <p class="text-blue-100 mb-4">
                        Solicite um orçamento personalizado para seu projeto sem nenhum compromisso.
                    </p>
                    <div class="text-sm text-blue-200 space-y-1">
                        <p>✓ Análise gratuita das suas necessidades</p>
                        <p>✓ Proposta detalhada em até 48 horas</p>
                        <p>✓ Consultoria técnica incluída</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Contact form submission
document.getElementById('contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;
    
    // Show loading state
    submitButton.innerHTML = '<i data-lucide="loader-2" class="w-4 h-4 mr-2 animate-spin"></i>Enviando...';
    submitButton.disabled = true;
    
    try {
        const response = await fetch('/api/contato.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        if (response.ok) {
            alert('Mensagem enviada com sucesso! Entrarei em contato em breve.');
            this.reset();
        } else {
            throw new Error(result.error || 'Erro ao enviar mensagem');
        }
    } catch (error) {
        alert('Erro ao enviar mensagem. Tente novamente.');
        console.error('Error:', error);
    } finally {
        // Restore button state
        submitButton.innerHTML = originalText;
        submitButton.disabled = false;
        lucide.createIcons();
    }
});

// Initialize icons
document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
});
</script>

<?php include_once 'includes/footer.php'; ?>
