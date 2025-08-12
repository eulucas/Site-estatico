
<?php
http_response_code(404);
$page_title = 'Página não encontrada - Lucas Almeida';
$page_description = 'A página que você está procurando não foi encontrada.';

include_once 'includes/header.php';
?>

<!-- 404 Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-50 py-20">
    <div class="container-custom">
        <div class="max-w-2xl mx-auto text-center space-y-8">
            <!-- 404 Icon -->
            <div class="flex justify-center">
                <div class="text-9xl font-bold text-blue-200 select-none">404</div>
            </div>

            <!-- Error Message -->
            <div class="space-y-4">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900">
                    Página <span class="text-gradient">não encontrada</span>
                </h1>
                
                <p class="text-xl text-gray-600 leading-relaxed">
                    Ops! A página que você está procurando não existe ou foi movida para outro lugar.
                </p>
            </div>

            <!-- Suggestions -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-xl font-bold text-gray-900 mb-4">O que você pode fazer:</h2>
                
                <div class="grid md:grid-cols-2 gap-4 text-left">
                    <div class="flex items-start space-x-3">
                        <i data-lucide="home" class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0"></i>
                        <div>
                            <p class="font-medium text-gray-900">Voltar ao início</p>
                            <p class="text-sm text-gray-600">Acesse a página inicial do site</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <i data-lucide="search" class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0"></i>
                        <div>
                            <p class="font-medium text-gray-900">Verificar a URL</p>
                            <p class="text-sm text-gray-600">Certifique-se de que digitou corretamente</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <i data-lucide="briefcase" class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0"></i>
                        <div>
                            <p class="font-medium text-gray-900">Ver serviços</p>
                            <p class="text-sm text-gray-600">Conheça os planos disponíveis</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <i data-lucide="mail" class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0"></i>
                        <div>
                            <p class="font-medium text-gray-900">Entrar em contato</p>
                            <p class="text-sm text-gray-600">Fale comigo sobre seu projeto</p>
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
                    <i data-lucide="help-circle" class="w-5 h-5 mr-2"></i>
                    Preciso de Ajuda
                </a>
            </div>

            <!-- Popular Pages -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Páginas mais acessadas</h3>
                <div class="grid sm:grid-cols-2 gap-3">
                    <a href="/" class="flex items-center p-3 text-gray-700 hover:text-blue-600 hover:bg-white rounded-lg transition-all duration-200">
                        <i data-lucide="home" class="w-4 h-4 mr-3"></i>
                        Página Inicial
                    </a>
                    <a href="/sobre.php" class="flex items-center p-3 text-gray-700 hover:text-blue-600 hover:bg-white rounded-lg transition-all duration-200">
                        <i data-lucide="user" class="w-4 h-4 mr-3"></i>
                        Sobre Mim
                    </a>
                    <a href="/servicos.php" class="flex items-center p-3 text-gray-700 hover:text-blue-600 hover:bg-white rounded-lg transition-all duration-200">
                        <i data-lucide="briefcase" class="w-4 h-4 mr-3"></i>
                        Serviços
                    </a>
                    <a href="/contato.php" class="flex items-center p-3 text-gray-700 hover:text-blue-600 hover:bg-white rounded-lg transition-all duration-200">
                        <i data-lucide="mail" class="w-4 h-4 mr-3"></i>
                        Contato
                    </a>
                </div>
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
