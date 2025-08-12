
<?php
$page_title = 'Lucas Almeida - Desenvolvedor Web Especialista';
$page_description = 'Desenvolvimento de sites responsivos e sistemas de gestão personalizados. Transforme sua ideia em realidade digital.';

include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, #3B82F6 1px, transparent 1px); background-size: 20px 20px;"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-blue-600/10 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl animate-float"></div>
    
    <div class="container-custom relative z-10 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="space-y-8 opacity-0 animate-fade-in-left" style="animation-delay: 0.2s;">
                <!-- Badge -->
                <div class="flex items-center space-x-2">
                    <div class="flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium">
                        <i data-lucide="star" class="w-4 h-4 mr-2 text-yellow-500"></i>
                        Desenvolvedor Especialista
                    </div>
                </div>

                <!-- Title -->
                <div class="space-y-4">
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Transforme sua
                        <span class="block text-gradient">presença digital</span>
                    </h1>
                    
                    <p class="text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Desenvolvedor especializado em criar sites responsivos e sistemas de gestão 
                        personalizados que fazem a diferença no seu negócio.
                    </p>
                </div>

                <!-- Stats -->
                <div class="flex items-center space-x-8 text-sm text-gray-600">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                        <span>+50 Projetos Entregues</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                        <span>100% Responsivo</span>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/portfolio_php/servicos.php" class="inline-flex items-center px-8 py-4 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-xl transition-all duration-300">
                        <i data-lucide="rocket" class="w-5 h-5 mr-2"></i>
                        Ver Planos
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                    </a>
                    
                    <a href="/portfolio_php/contato.php" class="inline-flex items-center px-8 py-4 text-lg font-medium text-gray-900 bg-white border-2 border-blue-200 rounded-lg hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                        <i data-lucide="code-2" class="w-5 h-5 mr-2"></i>
                        Falar Comigo
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="relative opacity-0 animate-fade-in-right" style="animation-delay: 0.4s;">
                <div class="relative w-full max-w-lg mx-auto">
                    <!-- Decorative elements -->
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-blue-100 rounded-2xl -rotate-6 opacity-60"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-blue-200 rounded-2xl rotate-6 opacity-40"></div>
                    
                    <!-- Profile Image -->
                    <div class="relative bg-white p-4 rounded-2xl shadow-2xl shadow-blue-200/50 border border-blue-100">
                        <div class="relative aspect-square rounded-xl overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">
                            <img src="https://cdn.abacus.ai/images/b12710f2-c12f-4a85-b549-21c5081c2a4f.png" 
                                 alt="Lucas Almeida - Desenvolvedor Web Especialista" 
                                 class="w-full h-full object-cover" />
                        </div>
                        
                        <!-- Badge on image -->
                        <div class="absolute -bottom-2 -right-2 bg-white p-3 rounded-full shadow-lg border border-blue-100">
                            <i data-lucide="code-2" class="w-6 h-6 text-blue-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <div class="text-blue-600 font-semibold text-lg">
                        Sobre Mim
                    </div>
                    
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">
                        Especialista em <span class="text-gradient">desenvolvimento web</span>
                    </h2>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Com mais de 5 anos de experiência, ajudo empresas e empreendedores a 
                        transformarem suas ideias em soluções digitais eficientes. Especializado 
                        em tecnologias modernas como React, Next.js e Node.js.
                    </p>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Minha missão é entregar projetos que não apenas atendam às expectativas, 
                        mas as superem, garantindo qualidade, performance e uma experiência 
                        excepcional para seus usuários.
                    </p>
                </div>

                <!-- Achievements -->
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Principais Conquistas</h3>
                    <div class="grid sm:grid-cols-2 gap-3">
                        <?php
                        $achievements = [
                            '5+ anos de experiência',
                            'Mais de 50 projetos entregues',
                            'Especialização em React e Next.js',
                            'Foco em performance e SEO',
                            'Suporte técnico completo',
                            'Metodologia ágil'
                        ];
                        
                        foreach ($achievements as $achievement): ?>
                        <div class="flex items-center space-x-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-green-500 flex-shrink-0"></i>
                            <span class="text-gray-700"><?php echo $achievement; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="space-y-8">
                <div class="text-center lg:text-left">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Especializações</h3>
                </div>
                
                <div class="space-y-6">
                    <?php
                    $skills = [
                        [
                            'icon' => 'monitor',
                            'title' => 'Sites Responsivos',
                            'description' => 'Desenvolvimento de sites que funcionam perfeitamente em todos os dispositivos.'
                        ],
                        [
                            'icon' => 'code',
                            'title' => 'Sistemas de Gestão',
                            'description' => 'Criação de sistemas personalizados para otimizar processos empresariais.'
                        ],
                        [
                            'icon' => 'smartphone',
                            'title' => 'Mobile First',
                            'description' => 'Design focado em dispositivos móveis com experiência superior.'
                        ]
                    ];
                    
                    foreach ($skills as $skill): ?>
                    <div class="bg-gradient-to-r from-blue-50 to-white p-6 rounded-2xl border border-blue-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl group-hover:bg-blue-200 transition-colors">
                                <i data-lucide="<?php echo $skill['icon']; ?>" class="w-6 h-6 text-blue-600"></i>
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-xl font-semibold text-gray-900"><?php echo $skill['title']; ?></h4>
                                <p class="text-gray-600"><?php echo $skill['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plans Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="container-custom">
        <!-- Header -->
        <div class="text-center space-y-4 mb-16">
            <div class="text-blue-600 font-semibold text-lg">
                Planos e Preços
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">
                Escolha o plano <span class="text-gradient">ideal para você</span>
            </h2>
            
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Soluções flexíveis para atender desde pequenos negócios até empresas em crescimento
            </p>
        </div>

        <!-- Plans Grid -->
        <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <?php
            require_once 'config/database.php';
            $database = new Database();
            $conn = $database->getConnection();
            
            $stmt = $conn->prepare("SELECT * FROM planos WHERE ativo = 1 ORDER BY preco ASC");
            $stmt->execute();
            $plans = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $icons = ['star', 'zap', 'crown'];
            $index = 0;
            
            foreach ($plans as $plan):
                $features = json_decode($plan['aspecto'], true);
                $is_popular = $plan['nome'] === 'Negocio';
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

        <!-- CTA -->
        <div class="text-center mt-16">
            <p class="text-gray-600 mb-6">
                Não tem certeza de qual plano escolher? Fale comigo!
            </p>
            <a href="/portfolio_php/contato.php" class="inline-flex items-center px-8 py-3 text-lg font-medium text-gray-900 bg-white border-2 border-gray-300 rounded-lg hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                Falar com Especialista
            </a>
        </div>
    </div>
</section>

<!-- Tech Section -->
<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <div class="text-blue-600 font-semibold text-lg">
                Tecnologias
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">
                Trabalhando com as <span class="text-gradient">melhores tecnologias</span>
            </h2>
            
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Utilizando as ferramentas mais modernas e eficientes do mercado para garantir 
                qualidade, performance e escalabilidade em todos os projetos
            </p>
        </div>

     

        <div class="text-center mt-12">
            <p class="text-gray-600 max-w-2xl mx-auto">
                Sempre em constante aprendizado e atualização para oferecer as soluções 
                mais inovadoras e eficientes para seus projetos.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <div class="text-blue-600 font-semibold text-lg">
                Contato
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">
                Vamos conversar sobre <span class="text-gradient">seu projeto</span>
            </h2>
            
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Estou sempre disponível para discutir novas oportunidades. Entre em contato e vamos 
                transformar sua ideia em realidade digital!
            </p>
        </div>

        <div class="max-w-2xl mx-auto">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <form id="contact-form" action="/api/contato.php" method="POST" class="space-y-6">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label for="nome" class="text-sm font-medium text-gray-700">Nome Completo *</label>
                            <div class="relative">
                                <i data-lucide="user" class="absolute left-3 top-3 h-4 w-4 text-gray-400"></i>
                                <input type="text" id="nome" name="nome" required 
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                       placeholder="Seu nome completo">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-gray-700">Email *</label>
                            <div class="relative">
                                <i data-lucide="mail" class="absolute left-3 top-3 h-4 w-4 text-gray-400"></i>
                                <input type="email" id="email" name="email" required 
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                       placeholder="seu@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="assunto" class="text-sm font-medium text-gray-700">Assunto *</label>
                        <div class="relative">
                            <i data-lucide="message-square" class="absolute left-3 top-3 h-4 w-4 text-gray-400"></i>
                            <input type="text" id="assunto" name="assunto" required 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                   placeholder="Sobre o que você gostaria de falar?">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="mensagem" class="text-sm font-medium text-gray-700">Mensagem *</label>
                        <textarea id="mensagem" name="mensagem" rows="5" required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                  placeholder="Conte-me mais sobre seu projeto, suas necessidades e objetivos..."></textarea>
                    </div>

                    <button type="submit" 
                            class="w-full inline-flex items-center justify-center px-6 py-4 text-lg font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-lg transition-all duration-300">
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
</section>

<style>
/* Animation styles */
@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-fade-in-left {
    animation: fadeInLeft 0.8s ease-out forwards;
}

.animate-fade-in-right {
    animation: fadeInRight 0.8s ease-out forwards;
}
</style>

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
