
<?php
$page_title = 'Serviços - Lucas Almeida | Desenvolvedor Web';
$page_description = 'Conheça os serviços de desenvolvimento web oferecidos por Lucas Almeida. Sites responsivos, sistemas de gestão e soluções personalizadas.';

include_once 'includes/header.php';
require_once 'config/database.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="container-custom">
        <div class="text-center max-w-4xl mx-auto space-y-6">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900">
                Serviços de <span class="text-gradient">desenvolvimento web</span>
            </h1>
            
            <p class="text-xl text-gray-600 leading-relaxed">
                Soluções completas e personalizadas para transformar sua presença digital. 
                Escolha o plano ideal para seu projeto e necessidades.
            </p>
        </div>
    </div>
</section>

<!-- Plans Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <!-- Header -->
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">
                Nossos <span class="text-gradient">Planos</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Soluções flexíveis para atender desde pequenos negócios até empresas em crescimento
            </p>
        </div>

        <!-- Plans Grid -->
        <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <?php
            $database = new Database();
            $conn = $database->getConnection();
            
            $stmt = $conn->prepare("SELECT * FROM planos WHERE ativo = 1 ORDER BY preco ASC");
            $stmt->execute();
            $plans = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $icons = ['star', 'zap', 'crown'];
            $index = 0;
            
            foreach ($plans as $plan):
                $features = json_decode($plan['aspecto'], true);
                $is_popular = $plan['nome'] === 'Negocios';
                $icon = $icons[$index % 3];
                $index++;
            ?>
            <div class="relative <?php echo $is_popular ? 'transform scale-105' : ''; ?>">
                <?php if ($is_popular): ?>
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 z-10">
                    <div class="bg-gradient-primary text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                        Mais Popular
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="h-full bg-white rounded-xl <?php echo $is_popular ? 'ring-2 ring-blue-500 shadow-2xl shadow-blue-200/50' : 'shadow-lg hover:shadow-xl'; ?> transition-all duration-300 group hover:scale-105 overflow-hidden">
                    <?php if ($is_popular): ?>
                    <div class="absolute top-0 right-0 w-0 h-0 border-l-[50px] border-l-transparent border-b-[50px] border-b-blue-500"></div>
                    <?php endif; ?>
                    
                    <div class="text-center space-y-4 p-8 pb-8">
                        <div class="mx-auto w-16 h-16 rounded-full flex items-center justify-center <?php echo $is_popular ? 'bg-blue-100' : 'bg-gray-100'; ?> group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="<?php echo $icon; ?>" class="w-8 h-8 <?php echo $is_popular ? 'text-blue-600' : 'text-gray-600'; ?>"></i>
                        </div>
                        
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900"><?php echo $plan['nome']; ?></h3>
                            <p class="text-gray-600 mt-2"><?php echo $plan['descricao']; ?></p>
                        </div>
                        
                        <div class="space-y-2">
                            <div class="text-4xl font-bold text-gray-900">
                                R$ <?php echo number_format($plan['preco'], 0, ',', '.'); ?>
                            </div>
                            <div class="text-sm text-gray-500">Pagamento único</div>
                        </div>
                    </div>
                    
                    <div class="space-y-4 px-8">
                        <ul class="space-y-3">
                            <?php foreach ($features as $feature): ?>
                            <li class="flex items-start space-x-3">
                                <i data-lucide="check" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700 text-sm"><?php echo $feature; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="p-8">
                        <a href="/portfolio_php/cadastro.php?plano=<?php echo strtolower($plan['nome']); ?>" 
                           class="block w-full text-center px-6 py-3 text-sm font-medium text-white <?php echo $is_popular ? 'bg-gradient-primary shadow-glow' : 'bg-gray-900 hover:bg-gray-800'; ?> rounded-lg transition-all duration-300">
                            Escolher <?php echo $plan['nome']; ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Additional Services -->
        <div class="mt-20">
            <div class="text-center space-y-4 mb-12">
                <h3 class="text-3xl font-bold text-gray-900">Serviços Adicionais</h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Serviços complementares para garantir o sucesso do seu projeto
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $additional_services = [
                    [
                        'icon' => 'search',
                        'title' => 'Consultoria SEO',
                        'description' => 'Otimização para mecanismos de busca e análise de performance.',
                        'price' => 'A partir de R$ 500'
                    ],
                    [
                        'icon' => 'shield-check',
                        'title' => 'Manutenção e Suporte',
                        'description' => 'Suporte técnico contínuo e atualizações de segurança.',
                        'price' => 'R$ 200/mês'
                    ],
                    [
                        'icon' => 'palette',
                        'title' => 'Design Personalizado',
                        'description' => 'Criação de identidade visual e design exclusivo para sua marca.',
                        'price' => 'A partir de R$ 800'
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Migração de Dados',
                        'description' => 'Migração segura de dados de sistemas antigos.',
                        'price' => 'Sob consulta'
                    ],
                    [
                        'icon' => 'graduation-cap',
                        'title' => 'Treinamento',
                        'description' => 'Treinamento para uso e administração do seu sistema.',
                        'price' => 'R$ 300/sessão'
                    ],
                    [
                        'icon' => 'smartphone',
                        'title' => 'App Mobile',
                        'description' => 'Desenvolvimento de aplicativo móvel complementar.',
                        'price' => 'A partir de R$ 2.500'
                    ]
                ];
                
                foreach ($additional_services as $service): ?>
                <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 group">
                    <div class="space-y-4">
                        <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                            <i data-lucide="<?php echo $service['icon']; ?>" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-2"><?php echo $service['title']; ?></h4>
                            <p class="text-gray-600 text-sm mb-3"><?php echo $service['description']; ?></p>
                            <p class="text-blue-600 font-semibold"><?php echo $service['price']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-16 bg-gray-50 p-12 rounded-2xl">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Precisa de algo personalizado?</h3>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                Cada projeto é único. Vamos conversar sobre suas necessidades específicas 
                e criar uma solução sob medida para seu negócio.
            </p>
            <a href="/portfolio_php/contato.php" class="inline-flex items-center px-8 py-3 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-lg transition-all duration-300">
                <i data-lucide="message-circle" class="w-5 h-5 mr-2"></i>
                Solicitar Orçamento Personalizado
            </a>
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
