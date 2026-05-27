💬 Comunica+ - Comunicação, Mentoria e Protagonismo Estudantil

>  Plataforma educacional voltada para aproximar estudantes, mentores e gestão escolar, facilitando o pedido de apoio, o acompanhamento pedagógico e o acesso a oportunidades. 
![Versão](https://img.shields.io/badge/vers%C3%A3o-1.0.0-blue) ![Status](https://img.shields.io/badge/status-MVP-brightgreen) ![Origem](https://img.shields.io/badge/Do%20Piau%C3%AD%20Para%20O%20Mundo-2026-orange)
## 📌 Sobre o Projeto

> O Comunica+ é uma solução educacional que conecta estudantes, gestão escolar, professores e mentores, organizando triagens, trilhas de aprendizagem, oportunidades e acompanhamentos em um único ecossistema digital voltado ao apoio pedagógico no ensino médio.

A proposta busca reduzir barreiras como timidez, falta de acompanhamento individualizado e dificuldade de comunicação entre aluno, escola e mentores
---

## 🎯 Objetivos

- ✅ Facilitar o pedido de apoio por parte dos estudantes;
- ✅ Aproximar alunos, mentores e gestão escolar;
- ✅ Organizar trilhas de apoio educacional;
- ✅ Acompanhar dificuldades por disciplina;
- ✅ Fortalecer o protagonismo estudantil;
- ✅ Apoiar a gestão escolar na visualização de dados.

---

## 🛠️ Tecnologias Utilizadas

### Backend
- Laravel
- MySQL
- API REST

### Web
- React
- Vite
- Tailwind CSS

### Mobile
- Flutter

### Ferramentas de apoio
- GitHub
- GitHub Desktop
- VS Code

---

## 📁 Estrutura do Projeto

```text
comunica-plus/
├── backend/                 # API e regras de negócio em Laravel
├── web/                     # Painéis web em React
├── mobile/                  # Aplicativo do estudante em Flutter
├── docs/                    # Documentações do projeto
└── README.md                # Documentação principal
```

---

## 🎮 Como Usar

### 1️⃣ Clonar o Projeto

Para executar o projeto, primeiro clone o repositório:

```bash
# Clone o projeto
git clone https://github.com/GrupoLmd/comunica-plus.git

# Entre na pasta do projeto
cd comunica-plus
```

---

### 2️⃣ Backend — Laravel

```bash
# Entre na pasta do backend
cd backend

# Instale as dependências do Laravel
composer install

# Copie o arquivo de ambiente
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Execute as migrations
php artisan migrate

# Inicie o servidor Laravel
php artisan serve
```

O backend ficará disponível em:

```text
http://127.0.0.1:8000
```

---

### 3️⃣ Web — React + Vite

```bash
# Volte para a raiz do projeto
cd ..

# Entre na pasta web
cd web

# Instale as dependências
npm install

# Inicie o projeto
npm run dev
```

A aplicação web ficará disponível em um endereço parecido com:

```text
http://localhost:5173
```

---

### 4️⃣ Mobile — Flutter

```bash
# Volte para a raiz do projeto
cd ..

# Entre na pasta mobile
cd mobile

# Instale as dependências do Flutter
flutter pub get

# Execute o aplicativo
flutter run
```

---

### 5️⃣ Observação

Para o funcionamento completo do MVP, é necessário manter o backend em execução enquanto utiliza os painéis web ou o aplicativo mobile.

---

## 🧩 Funcionalidades do MVP

### ✅ Implementadas ou em desenvolvimento

- Cadastro de usuários;
- Perfis de acesso para aluno, gestão, mentor e psicopedagogo(a);
- Estrutura inicial do backend;
- Painel web para acompanhamento;
- Estrutura inicial do aplicativo do estudante;
- Organização de trilhas de apoio;
- Registro de dificuldades dos alunos;
- Dashboard para gestão escolar.

### 🔮 Futuras melhorias

- Integração completa entre web, backend e mobile;
- Sistema de notificações;
- Recomendações automáticas de trilhas;
- Área de oportunidades educacionais;
- Relatórios avançados para gestão;
- Melhorias de acessibilidade;
- Deploy online do MVP.

---

## 👥 Perfis de Usuário

### Aluno

Pode solicitar apoio, visualizar trilhas recomendadas e acompanhar oportunidades.

### Mentor

Pode acompanhar alunos, visualizar dificuldades e orientar trilhas de estudo.

### Gestão Escolar

Pode acompanhar dados gerais, visualizar solicitações e apoiar decisões pedagógicas.

### Psicopedagogo(a)

Pode visualizar informações de apoio e auxiliar na análise pedagógica dos estudantes.

---

## 🔄 Fluxo de Contribuição

Este projeto utiliza GitHub para registrar a participação dos integrantes da equipe.

Fluxo adotado:

```text
Criar branch
↓
Fazer alteração
↓
Commit
↓
Push
↓
Pull Request
↓
Revisão
↓
Merge
```

Padrão de branch:

```text
feature/nome-da-tarefa
```

Exemplo:

```text
feature/backend-migration-usuarios
```

Padrão de commits:

```text
docs: adiciona documentação do backend
feat: cria tela inicial do mentor
style: ajusta layout do painel
fix: corrige texto da tela inicial
chore: organiza estrutura do projeto
```

---

## 🙏 Agradecimentos

- Governo do Estado do Piauí;
- Secretaria de Estado da Educação;
- Organização do SEDUCKATHON;
- Escola participante;
- Professores, orientadores e estudantes envolvidos no desenvolvimento do MVP.

---

## 👨‍💻 Componentes

- **Raniely Inacio de Sousa**
- **Marillia Ferreira do Vale**
- **Luana Marques de Ananias**
- **Luis Miguel Lira Do Nascimento**
- **Juciele da Silva Santos**

**Orientador:** Mayke Lombardo