-- Criação da tabela de doadores
CREATE TABLE doadores (
    id_doador SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo_sanguineo VARCHAR(3) NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    data_nascimento DATE NOT NULL,
    genero CHAR(1),
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100),
    endereco VARCHAR(200),
    cidade VARCHAR(50) NOT NULL,
    estado CHAR(2) NOT NULL,
    ultima_doacao DATE,
    status_doador VARCHAR(20) DEFAULT 'ativo',
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Criação da tabela de doações
CREATE TABLE doacoes (
    id_doacao SERIAL PRIMARY KEY,
    id_doador INT NOT NULL,
    data_doacao DATE NOT NULL,
    local_doacao VARCHAR(100) NOT NULL,
    volume_ml INT NOT NULL,
    pressao_arterial VARCHAR(10),
    hemoglobina DECIMAL(4,2),
    observacoes TEXT,
    FOREIGN KEY (id_doador) REFERENCES doadores(id_doador)
);

-- Inserção de registros na tabela de doadores
INSERT INTO doadores (nome, tipo_sanguineo, cpf, data_nascimento, genero, telefone, email, endereco, cidade, estado)
VALUES 
    ('Maria Silva', 'O+', '123.456.789-01', '1985-03-15', 'F', '(11) 98765-4321', 'maria.silva@email.com', 'Rua das Flores, 123', 'São Paulo', 'SP'),
    ('João Oliveira', 'A-', '234.567.890-12', '1990-07-22', 'M', '(11) 91234-5678', 'joao.oliveira@email.com', 'Av. Paulista, 1000', 'São Paulo', 'SP'),
    ('Ana Santos', 'AB+', '345.678.901-23', '1978-11-05', 'F', '(21) 99876-5432', 'ana.santos@email.com', 'Rua do Catete, 45', 'Rio de Janeiro', 'RJ');

-- Inserção de registros na tabela de doações
INSERT INTO doacoes (id_doador, data_doacao, local_doacao, volume_ml, pressao_arterial, hemoglobina)
VALUES 
    (1, '2024-12-10', 'Hemocentro São Paulo', 450, '120/80', 14.5),
    (2, '2025-01-15', 'Hospital das Clínicas', 400, '110/70', 15.2),
    (3, '2025-02-20', 'Campanha Corporativa', 450, '130/85', 13.8);

-- Exemplo de consulta: Listar todas as doações com nome do doador
SELECT d.nome, d.tipo_sanguineo, do.data_doacao, do.local_doacao, do.volume_ml
FROM doacoes do
JOIN doadores d ON do.id_doador = d.id_doador
ORDER BY do.data_doacao DESC;