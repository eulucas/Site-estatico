
<?php
$page_title = 'Sucesso - Lucas Almeida | Desenvolvedor Web';
$page_description = 'Cadastro realizado com sucesso! Obrigado por escolher nossos serviços.';

include_once 'includes/header.php';
?>

<!-- Success Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 via-white to-blue-50 py-20">
    <div class="container-custom">
        <div class="max-w-2xl mx-auto text-center space-y-8">
            <!-- Success Icon -->
            <div class="flex justify-center">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center">
                    <i data-lucide="check-circle" class="w-12 h-12 text-green-600"></i>
                </div>
            </div>

            <!-- Success Message -->
            <div class="space-y-4">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900">
                    <span class="text-gradient">Parabéns!</span> Cadastro realizado
                </h1>
                
                <p class="text-xl text-gray-600 leading-relaxed">
                    Seu cadastro foi realizado com sucesso! Em breve entrarei em contato 
                    para darmos início ao seu projeto.
                </p>
            </div>

            <!-- Next Steps -->
            <div class="bg-white rounded-xl shadow-lg p-8 text-left">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Próximos Passos</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-sm">1</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Confirmação por Email</h3>
                            <p class="text-gray-600 text-sm">
                                Você receberá um email de confirmação com os detalhes do seu pedido em até 30 minutos.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-sm">2</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Contato Inicial</h3>
                            <p class="text-gray-600 text-sm">
                                Entrarei em contato em até 24 horas para alinharmos os detalhes do projeto.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-sm">3</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Início do Desenvolvimento</h3>
                            <p class="text-gray-600 text-sm">
                                Após o alinhamento, começaremos imediatamente o desenvolvimento do seu projeto.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <i data-lucide="check" class="w-4 h-4 text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Entrega e Suporte</h3>
                            <p class="text-gray-600 text-sm">
                                Projeto entregue no prazo com suporte técnico incluído conforme o plano escolhido.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="bg-blue-50 rounded-xl p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Precisa falar comigo?</h3>
                
                <div class="grid md:grid-cols-3 gap-4 text-center">
                    <div class="space-y-2">
                        <div class="flex justify-center">
                            <i data-lucide="mail" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Email</p>
                            <p class="text-sm text-gray-600">contato@lucasalmeida.dev</p>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <div class="flex justify-center">
                            <i data-lucide="phone" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Telefone</p>
                            <p class="text-sm text-gray-600">(11) 99999-9999</p>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <div class="flex justify-center">
                            <i data-lucide="message-circle" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">WhatsApp</p>
                            <p class="text-sm text-gray-600">(11) 99999-9999</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/" class="inline-flex items-center px-8 py-3 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-lg transition-all duration-300">
                    <i data-lucide="home" class="w-5 h-5 mr-2"></i>
                    Voltar ao Início
                </a>
                
                <a href="/contato.php" class="inline-flex items-center px-8 py-3 text-lg font-medium text-gray-900 bg-white border-2 border-gray-300 rounded-lg hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                    <i data-lucide="message-square" class="w-5 h-5 mr-2"></i>
                    Entre em Contato
                </a>
            </div>

            <!-- Thank You Note -->
            <div class="text-center">
                <p class="text-gray-600 italic">
                    "Obrigado por confiar no meu trabalho. Vamos criar algo incrível juntos!" 
                    <br>
                    <span class="font-semibold text-blue-600">- Lucas Almeida</span>
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize icons
document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
});
</script>

<?php include_once 'includes/footer.php'; ?>
