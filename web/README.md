# vite.config.js

Arquivo responsável pela configuração do Vite.

## Funcionalidades

- Configuração do ambiente React
- Integração com Tailwind CSS
- Otimização do build
- Configuração de plugins

---

# index.css

Arquivo responsável pela estilização global da aplicação.

## Funcionalidades

- Configuração global de estilos
- Integração com Tailwind CSS
- Definição de cores padrão
- Configuração de fontes
- Responsividade base da aplicação

---

# App.jsx

Componente principal da aplicação.

## Funcionalidades

- Inicialização da aplicação
- Integração com AppRoutes
- Organização da estrutura principal
- Renderização das rotas do sistema

---

# Sidebar

Componente responsável pela navegação lateral da aplicação.

## Funcionalidades

- Navegação entre páginas
- Uso do React Router
- Exibição da logo do sistema
- Destaque da rota ativa
- Organização visual do painel

---

# Topbar

Componente responsável pelo topo do dashboard.

## Funcionalidades

- Exibição do título da página
- Informações do painel
- Exibição do perfil do usuário
- Organização visual do cabeçalho

---

# StatCard

Componente reutilizável para exibição de indicadores.

## Funcionalidades

- Exibição de métricas
- Exibição de títulos e subtítulos
- Suporte para ícones
- Reutilização em múltiplas páginas

---

# DashboardGestaoPage

Página responsável pelo dashboard da gestão escolar.

## Funcionalidades

- Consumo da API de gestão
- Exibição de métricas principais
- Listagem de dificuldades pedagógicas
- Exibição de perfis de aprendizagem
- Controle de loading e erro

---

# api.js

Serviço base responsável pela comunicação com a API.

## Funcionalidades

- Configuração da URL base
- Requisições HTTP com fetch
- Tratamento de erros
- Retorno de dados JSON

---

# dashboardService

Serviço responsável pelos dados do dashboard de gestão.

## Funcionalidades

- Consumo do endpoint de gestão
- Integração com fetchApi
- Organização dos serviços
- Retorno de dados da API

---

# psicoService

Serviço responsável pelos dados psicopedagógicos.

## Funcionalidades

- Consumo do endpoint psicopedagógico
- Integração com fetchApi
- Organização dos serviços
- Retorno de dados da API

---

# DashboardPsicoPage

Página responsável pela exibição do painel psicopedagógico da aplicação.

## Funcionalidades

- Carregamento de dados da API
- Controle de loading e erros
- Exibição de métricas psicopedagógicas
- Visualização de motivos recorrentes
- Status de acompanhamento dos alunos
- Integração com Sidebar e StatCard

---

# AppRoutes

Componente responsável pelo gerenciamento das rotas da aplicação.

## Funcionalidades

- Configuração de navegação com React Router
- Redirecionamento da página inicial
- Rotas para dashboard de gestão
- Rotas para painel psicopedagógico
- Navegação entre páginas da aplicação

---

# AlunosSinalizadosPage

Página responsável pela visualização detalhada dos alunos sinalizados no painel psicopedagógico.

## Funcionalidades

- Carregamento de dados da API
- Controle de loading e erros
- Exibição de métricas dos alunos
- Listagem detalhada de acompanhamento
- Visualização de níveis de atenção e status
- Integração com Sidebar