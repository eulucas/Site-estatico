
<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container-custom">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    <i data-lucide="code-2" class="h-6 w-6 text-blue-400"></i>
                    <span class="text-xl font-bold">
                        Lucas <span class="text-blue-400">Almeida</span>
                    </span>
                </div>
                <p class="text-gray-400 max-w-md">
                    Desenvolvedor especializado em criar soluções digitais que fazem a diferença no seu negócio.
                    Site de demonstração nao operavel.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Links Rápidos</h3>
                <nav class="flex flex-col space-y-2">
                    <a href="/portfolio_php/index.php" class="text-gray-400 hover:text-white transition-colors">Home</a>
                    <a href="/portfolio_php/sobre.php" class="text-gray-400 hover:text-white transition-colors">Sobre</a>
                    <a href="/portfolio_php/servicos.php" class="text-gray-400 hover:text-white transition-colors">Serviços</a>
                    <a href="/portfolio_php/contato.php" class="text-gray-400 hover:text-white transition-colors">Contato</a>
                </nav>
            </div>

            <!-- Contact Info -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Contato</h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <i data-lucide="mail" class="w-5 h-5 text-blue-400"></i>
                        <span class="text-gray-400">contato@lucasalmeida.dev</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i data-lucide="phone" class="w-5 h-5 text-blue-400"></i>
                        <span class="text-gray-400">(11) 99999-9999</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-blue-400"></i>
                        <span class="text-gray-400">Arceburgo, MG</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-8 border-gray-800">
        
        <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
            <p class="text-gray-400 text-sm">
                &copy; <?php echo date('Y'); ?> Lucas Almeida. Todos os direitos reservados.
            </p>
            <div class="text-gray-400 text-sm">
                <span>Desenvolvido com</span>
                <i data-lucide="heart" class="w-4 h-4 text-red-500 inline mx-1"></i>
                <span>e PHP</span>
            </div>
        </div>
    </div>
</footer>

<script>
// Initialize Lucide icons in footer
document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
});
</script>

</body>
</html>
