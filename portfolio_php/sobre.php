
<?php
$page_title = 'Sobre - Lucas Almeida | Desenvolvedor Web';
$page_description = 'Conheça Lucas Almeida, desenvolvedor web especialista com experiência em criar soluções digitais inovadoras.';

include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <div class="text-blue-600 font-semibold text-lg">
                        Sobre Mim
                    </div>
                    
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900">
                        Lucas <span class="text-gradient">Almeida</span>
                    </h1>
                    
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Inciando a desenvolver web
                    </p>
                </div>

                <div class="flex items-center space-x-8 text-sm text-gray-600">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                        <span> Experiência</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                        <span>Arceburgo, MG</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/portfolio_php/servicos.php" class="inline-flex items-center px-8 py-4 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-xl transition-all duration-300">
                        <i data-lucide="briefcase" class="w-5 h-5 mr-2"></i>
                        Ver Meus Serviços
                    </a>
                    
                    <a href="/portfolio_php/contato.php" class="inline-flex items-center px-8 py-4 text-lg font-medium text-gray-900 bg-white border-2 border-blue-200 rounded-lg hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                        <i data-lucide="coffee" class="w-5 h-5 mr-2"></i>
                        Vamos Conversar
                    </a>
                </div>
            </div>

            <!-- Profile Image -->
            <div class="relative">
                <div class="relative w-full max-w-lg mx-auto">
                    <!-- Decorative elements -->
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-blue-100 rounded-3xl -rotate-6 opacity-60"></div>
                    <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-blue-200 rounded-3xl rotate-6 opacity-40"></div>
                    
                    <!-- Profile Image -->
                    <div class="relative bg-white p-6 rounded-3xl shadow-2xl shadow-blue-200/50 border border-blue-100">
                        <div class="relative aspect-square rounded-2xl overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">
                            <img src="https://cdn.abacus.ai/images/b12710f2-c12f-4a85-b549-21c5081c2a4f.png" 
                                 alt="Lucas Almeida - Desenvolvedor Web Especialista" 
                                 class="w-full h-full object-cover" />
                        </div>
                        
                        <!-- Badge on image -->
                        <div class="absolute -bottom-3 -right-3 bg-white p-4 rounded-full shadow-lg border border-blue-100">
                            <i data-lucide="code-2" class="w-8 h-8 text-blue-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <!-- Introduction -->
            <div class="prose prose-lg max-w-none mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Minha História</h2>
                
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    Trabalhando como desenvolvedor web em tempo livre, mas atualmente fora da area 
                </p>
                
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    Ao longo dos meus estudos criei sites com amigos mas hoje, estou tentando sozinho
                </p>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                   A tecnologia precisa ser feita com calma, e com dediacação para assim ajudar quem precisar.
                </p>
            </div>

            <!-- Experience & Skills -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Experience -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-900">Experiência</h3>
                    
                    <div class="space-y-6">
                        <div class="border-l-4 border-blue-600 pl-6">
                            <div class="flex items-center space-x-2 mb-2">
                                <h4 class="text-lg font-semibold text-gray-900">Desenvolvedor Web Freelancer</h4>
                                <span class="text-sm text-blue-600 bg-blue-100 px-2 py-1 rounded">Atual</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-2">2020 - Presente</p>
                            <p class="text-gray-600">
                                Desenvolvimento de sites e sistemas web personalizados para empresas de diversos segmentos. 
                                Foco em PHP, JS.
                            </p>
                        </div>
                        
                        <div class="border-l-4 border-gray-300 pl-6">
                            <h4 class="text-lg font-semibold text-gray-900">Desenvolvedor WEB</h4>
                            <p class="text-gray-600 text-sm mb-2">2019 - 2021</p>
                            <p class="text-gray-600">
                                Trabalho em equipe no desenvolvimento de aplicações web complexas, 
                                participando dos estagios de Banco de Dados e back-end do desenvolvimento
                            </p>
                        </div>
                        
                        <div class="border-l-4 border-gray-300 pl-6">
                            <h4 class="text-lg font-semibold text-gray-900">Desenvolvedor Back End</h4>
            
                            <p class="text-gray-600">
                                Especialização em interfaces de usuário modernas e responsivas, 
                                trabalhando com React e ferramentas de design system.
                            </p>
                        </div>
                    </div>
                </div>


            <!-- Values -->
            <div class="space-y-8">
                <h3 class="text-3xl font-bold text-gray-900 text-center">Meus Valores</h3>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <?php
                    $values = [
                        [
                            'icon' => 'heart',
                            'title' => 'Paixão pelo que faço',
                            'description' => 'Cada projeto é tratado com dedicação e entusiasmo, buscando sempre superar expectativas.'
                        ],
                        [
                            'icon' => 'users',
                            'title' => 'Foco no cliente',
                            'description' => 'O sucesso do meu cliente é o meu sucesso. Trabalho para entender e atender suas necessidades reais.'
                        ],
                        [
                            'icon' => 'trending-up',
                            'title' => 'Melhoria contínua',
                            'description' => 'Sempre buscando aprender novas tecnologias e metodologias para entregar soluções melhores.'
                        ]
                    ];
                    
                    foreach ($values as $value): ?>
                    <div class="text-center space-y-4 p-6 bg-gray-50 rounded-xl">
                        <div class="mx-auto w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                            <i data-lucide="<?php echo $value['icon']; ?>" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900"><?php echo $value['title']; ?></h4>
                        <p class="text-gray-600"><?php echo $value['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="container-custom">
        <div class="max-w-3xl mx-auto text-center space-y-8">
            <h2 class="text-4xl font-bold text-gray-900">
                Vamos trabalhar <span class="text-gradient">juntos?</span>
            </h2>
            
            <p class="text-xl text-gray-600">
                Estou sempre aberto a novos desafios e oportunidades de criar algo incrível. 
                Entre em contato e vamos conversar sobre seu próximo projeto!
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/portfolio_php/contato.php" class="inline-flex items-center px-8 py-4 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-lg transition-all duration-300">
                    <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                    Entrar em Contato
                </a>
                
                <a href="/portfolio_php/servicos.php" class="inline-flex items-center px-8 py-4 text-lg font-medium text-gray-900 bg-white border-2 border-gray-300 rounded-lg hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                    <i data-lucide="eye" class="w-5 h-5 mr-2"></i>
                    Ver Meus Serviços
                </a>
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
