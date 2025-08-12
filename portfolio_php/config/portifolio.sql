CREATE DATABASE IF NOT EXISTS portifolio
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE portifolio;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(160) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    role TEXT DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS planos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    descricao VARCHAR(160) NOT NULL UNIQUE,
    preco REAL NOT NULL,
    aspecto TEXT,
    ativo BOOLEAN DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(160) NOT NULL UNIQUE,
    celular VARCHAR(20) NOT NULL,
    cpf  VARCHAR(14) NOT NULL UNIQUE,
    planos_id INTEGER NOT NULL,
    status TEXT DEFAULT 'pendente',
    verificar BOOLEAN DEFAULT 0,
    FOREIGN KEY (planos_id) REFERENCES planos(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS pagamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    clientes_id INTEGER NOT NULL,
    planos_id INTEGER NOT NULL,
    valor REAL NOT NULL,
    status TEXT DEFAULT 'pendente',
    metodo TEXT DEFAULT 'pix',
    transacao TEXT UNIQUE,
    `data` DATE,
    pagou DATETIME NULL,
    FOREIGN KEY (clientes_id) REFERENCES clientes(id),
    FOREIGN KEY (planos_id) REFERENCES planos(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(160) NOT NULL UNIQUE,
    assunto TEXT NOT NULL,
    texto TEXT NOT NULL,
    clientes_id INTEGER NULL,
    status TEXT DEFAULT 'novo',
    FOREIGN KEY (clientes_id) REFERENCES clientes(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERT dos planos
INSERT INTO planos (nome, descricao, preco, aspecto) VALUES
(
    'Inicio',
    'Site institucional básico e responsivo, perfeito para quem está começando.',
    899,
    '["Site responsivo até 3 páginas","Design moderno e profissional","Formulário de contato","Otimização para SEO básico","Hospedagem por 1 ano incluída","Suporte técnico por 30 dias","Certificado SSL gratuito"]'
),
(
    'Negocios',
    'Site completo com funcionalidades avançadas para empresas em crescimento.',
    1599,
    '["Site responsivo até 7 páginas","Blog básico integrado","Formulários avançados","Integração com redes sociais","Galeria de imagens","Otimização SEO avançada","Google Analytics","Hospedagem por 1 ano incluída","Suporte técnico por 90 dias","Certificado SSL gratuito"]'
),
(
    'Premium',
    'Solução completa com sistema de gestão personalizado para empresas.',
    2999,
    '["Site responsivo ilimitado","Sistema de gestão simples","E-commerce básico","Painel administrativo","Área de clientes/membros","Integração com APIs","Backup automático","Otimização SEO premium","Hospedagem premium por 1 ano","Suporte técnico por 6 meses","Certificado SSL gratuito","Treinamento para uso do sistema"]'
);