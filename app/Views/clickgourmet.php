<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ClickGourmet — Planejamento Técnico Completo</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
<style>
:root {
  --dark:   #333333;
  --white:  #FFFFFF;
  --purple: #483DAD;
  --red:    #FF0000;
  --purple-light: #6257c4;
  --purple-bg: #f0eefa;
  --gray-100: #f7f7f7;
  --gray-200: #ebebeb;
  --gray-400: #999;
  --green:  #1a7a4a;
  --green-bg: #e8f7ee;
  --orange: #b85c00;
  --orange-bg: #fff3e0;
  --blue:   #1a4fa0;
  --blue-bg: #e8f0ff;
  --red-bg: #fff0f0;
  --badge-h: 28px;
}
* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Inter', sans-serif; background: #f4f4f6; color: #222; line-height: 1.65; font-size: 15px; }

/* HEADER */
.doc-header { background: var(--dark); color: var(--white); padding: 40px 48px 32px; border-bottom: 4px solid var(--purple); }
.doc-header .logo { font-size: 11px; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; color: #aaa; margin-bottom: 12px; }
.doc-header h1 { font-size: 32px; font-weight: 700; margin-bottom: 6px; }
.doc-header .subtitle { color: #bbb; font-size: 14px; }
.doc-header .meta { display: flex; gap: 24px; margin-top: 20px; flex-wrap: wrap; }
.doc-header .meta span { font-size: 12px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.15); border-radius: 6px; padding: 4px 12px; color: #ccc; }

/* NAV TABS */
.nav-wrapper { background: var(--white); border-bottom: 1px solid var(--gray-200); position: sticky; top: 0; z-index: 100; box-shadow: 0 2px 8px rgba(0,0,0,.06); }
.nav-tabs { display: flex; overflow-x: auto; padding: 0 32px; gap: 0; scrollbar-width: none; }
.nav-tabs::-webkit-scrollbar { display: none; }
.nav-tab { white-space: nowrap; padding: 14px 18px; font-size: 13px; font-weight: 500; color: var(--gray-400); cursor: pointer; border-bottom: 3px solid transparent; transition: all .2s; user-select: none; }
.nav-tab:hover { color: var(--dark); }
.nav-tab.active { color: var(--purple); border-bottom-color: var(--purple); }

/* SECTIONS */
.section { display: none; padding: 40px 48px; max-width: 1100px; margin: 0 auto; }
.section.active { display: block; }

/* TYPOGRAPHY */
h2 { font-size: 22px; font-weight: 700; color: var(--dark); margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid var(--gray-200); display: flex; align-items: center; gap: 10px; }
h2 .num { background: var(--purple); color: white; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 13px; font-weight: 700; flex-shrink: 0; }
h3 { font-size: 16px; font-weight: 600; color: var(--dark); margin: 28px 0 12px; }
h4 { font-size: 14px; font-weight: 600; color: #555; margin: 16px 0 8px; text-transform: uppercase; letter-spacing: .5px; }
p { margin-bottom: 12px; color: #444; }
ul, ol { padding-left: 20px; margin-bottom: 12px; }
li { margin-bottom: 6px; color: #444; }
strong { font-weight: 600; color: #222; }

/* CARDS */
.card { background: var(--white); border-radius: 12px; padding: 24px; margin-bottom: 20px; border: 1px solid var(--gray-200); }
.card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 20px; }
.card-sm { background: var(--white); border-radius: 10px; padding: 18px; border: 1px solid var(--gray-200); }

/* BADGES */
.badge { display: inline-block; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; line-height: 1.6; }
.badge-purple { background: var(--purple-bg); color: var(--purple); }
.badge-green  { background: var(--green-bg);  color: var(--green); }
.badge-orange { background: var(--orange-bg); color: var(--orange); }
.badge-red    { background: var(--red-bg);    color: #b00; }
.badge-blue   { background: var(--blue-bg);   color: var(--blue); }
.badge-gray   { background: var(--gray-200);  color: #555; }

/* CODE */
pre { background: #1e1e2e; color: #cdd6f4; border-radius: 10px; padding: 20px 24px; font-family: 'Fira Code', monospace; font-size: 13px; line-height: 1.7; overflow-x: auto; margin: 12px 0 20px; }
code { font-family: 'Fira Code', monospace; font-size: 12.5px; background: #f0eefa; color: var(--purple); padding: 1px 6px; border-radius: 4px; }
pre code { background: none; color: inherit; padding: 0; }
.sql { color: #89b4fa; }
.sql-kw { color: #cba6f7; }
.sql-str { color: #a6e3a1; }
.sql-num { color: #fab387; }
.sql-cmt { color: #6c7086; font-style: italic; }

/* TABLE */
table { width: 100%; border-collapse: collapse; font-size: 13.5px; margin-bottom: 20px; }
th { background: var(--dark); color: var(--white); padding: 10px 14px; text-align: left; font-weight: 600; font-size: 12px; }
td { padding: 9px 14px; border-bottom: 1px solid var(--gray-200); color: #444; vertical-align: top; }
tr:hover td { background: var(--gray-100); }
tr:last-child td { border-bottom: none; }

/* ALERT BOXES */
.alert { border-radius: 8px; padding: 14px 18px; margin-bottom: 16px; border-left: 4px solid; display: flex; gap: 10px; align-items: flex-start; }
.alert-info    { background: var(--blue-bg);   border-color: var(--blue);   color: var(--blue); }
.alert-purple  { background: var(--purple-bg); border-color: var(--purple); color: var(--purple); }
.alert-green   { background: var(--green-bg);  border-color: var(--green);  color: var(--green); }
.alert-orange  { background: var(--orange-bg); border-color: var(--orange); color: var(--orange); }
.alert .icon { font-size: 16px; flex-shrink: 0; margin-top: 1px; }
.alert .text { font-size: 13.5px; line-height: 1.5; }
.alert strong { color: inherit; }

/* FOLDER TREE */
.tree { font-family: 'Fira Code', monospace; font-size: 13px; background: #1e1e2e; color: #cdd6f4; border-radius: 10px; padding: 20px 24px; line-height: 2; overflow-x: auto; }
.tree .dir  { color: #89b4fa; font-weight: 600; }
.tree .file { color: #a6e3a1; }
.tree .comment { color: #6c7086; }

/* FLOW DIAGRAM */
.flow { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; margin: 16px 0; }
.flow-box { background: var(--purple); color: white; padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 500; white-space: nowrap; }
.flow-box.gray { background: var(--dark); }
.flow-box.green { background: var(--green); }
.flow-box.red { background: #b00; }
.flow-arrow { color: #999; font-size: 18px; }

/* KANBAN */
.kanban { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin-top: 8px; }
.kanban-col { background: var(--gray-100); border-radius: 12px; padding: 16px; }
.kanban-col-header { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; padding-bottom: 10px; border-bottom: 2px solid var(--gray-200); display: flex; justify-content: space-between; align-items: center; }
.kanban-count { background: var(--gray-200); color: #666; width: 22px; height: 22px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 700; }
.task-card { background: var(--white); border-radius: 8px; padding: 14px; margin-bottom: 10px; border: 1px solid var(--gray-200); border-left: 4px solid var(--purple); }
.task-card.db   { border-left-color: #1a7a4a; }
.task-card.be   { border-left-color: #483DAD; }
.task-card.fe   { border-left-color: #d4a017; }
.task-card.int  { border-left-color: #b85c00; }
.task-card.test { border-left-color: #b00; }
.task-card-title { font-size: 13px; font-weight: 600; margin-bottom: 8px; color: var(--dark); }
.task-meta { display: flex; gap: 6px; flex-wrap: wrap; }
.task-meta .badge { font-size: 10px; padding: 2px 7px; }
.task-desc { font-size: 12px; color: #666; margin: 8px 0; line-height: 1.5; }
.task-files { font-size: 11px; color: #888; font-family: 'Fira Code', monospace; margin-top: 6px; }

/* COLORS PALETTE */
.palette { display: flex; gap: 12px; flex-wrap: wrap; margin: 16px 0; }
.color-swatch { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.color-box { width: 70px; height: 70px; border-radius: 10px; border: 1px solid rgba(0,0,0,.1); }
.color-name { font-size: 11px; font-weight: 600; color: #555; }
.color-hex  { font-family: 'Fira Code', monospace; font-size: 11px; color: #888; }

/* PRIORITY indicators */
.pri-alta   { color: #b00; font-weight: 700; }
.pri-media  { color: var(--orange); font-weight: 600; }
.pri-baixa  { color: var(--green); font-weight: 600; }

/* RULE list */
.rule-list { list-style: none; padding: 0; }
.rule-list li { padding: 10px 14px; margin-bottom: 8px; background: var(--white); border-radius: 8px; border: 1px solid var(--gray-200); border-left: 4px solid var(--purple); font-size: 14px; display: flex; gap: 10px; align-items: flex-start; }
.rule-list li .ri { font-weight: 700; color: var(--purple); min-width: 28px; font-size: 12px; }

/* STEP LIST */
.steps { counter-reset: step; list-style: none; padding: 0; }
.steps li { counter-increment: step; display: flex; gap: 14px; margin-bottom: 16px; align-items: flex-start; }
.steps li::before { content: counter(step); background: var(--purple); color: white; width: 26px; height: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 700; flex-shrink: 0; margin-top: 2px; }
.steps li .step-body { flex: 1; }
.steps li .step-title { font-weight: 600; font-size: 14px; color: var(--dark); }
.steps li .step-desc { font-size: 13px; color: #666; margin-top: 4px; }

/* ER DIAGRAM box */
.er-table { display: inline-block; background: var(--white); border: 2px solid var(--purple); border-radius: 10px; overflow: hidden; margin: 8px; vertical-align: top; min-width: 180px; }
.er-table-head { background: var(--purple); color: white; padding: 8px 14px; font-weight: 700; font-size: 13px; text-align: center; }
.er-table-body { padding: 8px 0; }
.er-field { padding: 4px 14px; font-size: 12px; font-family: 'Fira Code', monospace; display: flex; justify-content: space-between; gap: 16px; }
.er-field.pk { background: #fffbea; }
.er-field.fk { background: #f0eefa; }
.er-type { color: #888; font-size: 11px; }
.er-key { font-size: 10px; font-weight: 700; color: #b85c00; }

/* Scroll to top */
.back-top { position: fixed; bottom: 28px; right: 28px; background: var(--purple); color: white; width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 4px 12px rgba(72,61,173,.35); font-size: 18px; text-decoration: none; opacity: 0; transition: opacity .3s; z-index: 200; }
.back-top.visible { opacity: 1; }

/* Responsive */
@media (max-width: 768px) {
  .doc-header { padding: 28px 20px; }
  .section { padding: 24px 20px; }
  .nav-tabs { padding: 0 12px; }
  .nav-tab { padding: 12px 12px; font-size: 12px; }
  h2 { font-size: 18px; }
  .kanban { grid-template-columns: 1fr; }
}
</style>
</head>
<body>

<header class="doc-header">
  <div class="logo">SENAI · Projeto Técnico · Informática para Internet</div>
  <h1>🍽️ ClickGourmet</h1>
  <p class="subtitle">Planejamento Técnico Completo — Sistema de Gestão e Compartilhamento de Receitas Gastronômicas</p>
  <div class="meta">
    <span>📄 Análise completa do PDF</span>
    <span>🏗️ Arquitetura SPA</span>
    <span>💾 MySQL + PHP + JS</span>
    <span>🎨 Bootstrap + Inter</span>
    <span>📋 Kanban de Tarefas</span>
  </div>
</header>

<div class="nav-wrapper">
  <div class="nav-tabs">
    <div class="nav-tab active" onclick="showSection('s1')">📋 Resumo</div>
    <div class="nav-tab" onclick="showSection('s2')">⚙️ Funcionalidades</div>
    <div class="nav-tab" onclick="showSection('s3')">📜 Regras de Negócio</div>
    <div class="nav-tab" onclick="showSection('s4')">📁 Estrutura</div>
    <div class="nav-tab" onclick="showSection('s5')">💾 Banco de Dados</div>
    <div class="nav-tab" onclick="showSection('s6')">🖥️ Páginas e Fluxo</div>
    <div class="nav-tab" onclick="showSection('s7')">⚡ Lógicas Técnicas</div>
    <div class="nav-tab" onclick="showSection('s8')">📌 Kanban</div>
  </div>
</div>

<!-- ===== SEÇÃO 1: RESUMO ===== -->
<div class="section active" id="s1">
  <h2><span class="num">1</span> Resumo Técnico do Sistema</h2>

  <div class="card">
    <h3>🎯 Contexto e Objetivo</h3>
    <p>A empresa <strong>Aço &amp; Arte Gourmet</strong> solicitou o desenvolvimento de uma plataforma web chamada <strong>ClickGourmet</strong>, onde seus clientes possam registrar, compartilhar e interagir com receitas gastronômicas. O sistema deve ser uma <strong>SPA (Single Page Application)</strong> com carregamento dinâmico via AJAX, sem refresh de página.</p>
  </div>

  <div class="card-grid">
    <div class="card-sm">
      <h4>🧰 Tecnologias</h4>
      <ul>
        <li>HTML5 + CSS3</li>
        <li>JavaScript (vanilla) + AJAX/Fetch</li>
        <li>Bootstrap 5</li>
        <li>PHP 8 (CodeIgniter básico)</li>
        <li>MySQL 8</li>
        <li>POO básica (Models/Controllers)</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>🎨 Identidade Visual</h4>
      <div class="palette">
        <div class="color-swatch"><div class="color-box" style="background:#333333"></div><span class="color-name">Dark</span><span class="color-hex">#333333</span></div>
        <div class="color-swatch"><div class="color-box" style="background:#FFFFFF;border:1px solid #ddd"></div><span class="color-name">White</span><span class="color-hex">#FFFFFF</span></div>
        <div class="color-swatch"><div class="color-box" style="background:#483DAD"></div><span class="color-name">Purple</span><span class="color-hex">#483DAD</span></div>
        <div class="color-swatch"><div class="color-box" style="background:#FF0000"></div><span class="color-name">Red</span><span class="color-hex">#FF0000</span></div>
      </div>
      <p style="font-size:13px;color:#666;">Fonte obrigatória: <strong>Inter</strong> (Google Fonts)</p>
    </div>
    <div class="card-sm">
      <h4>📐 Layout Geral</h4>
      <ul>
        <li><strong>Sidebar esquerda</strong>: logo, métricas, rodapé social</li>
        <li><strong>Main direita</strong>: header com login, filtros, cards, paginação</li>
        <li>Grid: <code>display: grid / flex</code></li>
        <li>Responsivo via Bootstrap</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>⏱️ Entregáveis SENAI</h4>
      <table>
        <tr><th>Item</th><th>Entrega</th><th>Tempo</th></tr>
        <tr><td>1</td><td>Estrutura das tabelas (.PDF)</td><td>30 min</td></tr>
        <tr><td>2</td><td>Banco de dados (.SQL)</td><td>30 min</td></tr>
        <tr><td>3</td><td>Sistema completo (pasta)</td><td>2h30min</td></tr>
      </table>
    </div>
  </div>

  <div class="alert alert-purple">
    <span class="icon">💡</span>
    <div class="text"><strong>SPA = Single Page Application:</strong> todo o sistema roda em um único arquivo HTML. As "telas" são seções que aparecem/somem via JavaScript. As requisições de dados são feitas via AJAX (Fetch API) para o backend PHP, sem recarregar a página.</div>
  </div>
</div>

<!-- ===== SEÇÃO 2: FUNCIONALIDADES ===== -->
<div class="section" id="s2">
  <h2><span class="num">2</span> Lista de Funcionalidades</h2>

  <div class="card-grid">
    <div class="card-sm">
      <h4>🔐 Autenticação</h4>
      <ul>
        <li>Modal de Login com Nome + Senha</li>
        <li>Botão Login / Logout no header</li>
        <li>Validação com bordas vermelhas</li>
        <li>Sessão PHP mantida</li>
        <li>Controle de acesso por estado</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>📋 Receitas</h4>
      <ul>
        <li>Listagem de todas as receitas</li>
        <li>Ordenação: mais recentes primeiro</li>
        <li>Paginação: 4 por página</li>
        <li>Card com todos os dados</li>
        <li>Formulário de criação (logado)</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>💬 Interações</h4>
      <ul>
        <li>Curtida com toggle (like/unlike)</li>
        <li>Ícone coração vermelho = curtido</li>
        <li>Contador de curtidas em tempo real</li>
        <li>Ícone balão + contador comentários</li>
        <li>Sistema de comentários</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>🔍 Filtros e Busca</h4>
      <ul>
        <li>Filtro por categoria: Doce, Salgada, Vegana</li>
        <li>Carregamento dinâmico via AJAX</li>
        <li>Filtro só para usuários logados</li>
        <li>Botão "Todas" para resetar filtro</li>
        <li>Paginação mantém filtro ativo</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>📊 Sidebar / Métricas</h4>
      <ul>
        <li>Logo da empresa (do banco de dados)</li>
        <li>Nome da empresa (do banco de dados)</li>
        <li>Contador "Qtd. Receitas"</li>
        <li>Contador "Total de Ingredientes"</li>
        <li>Rodapé com redes sociais</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>📝 Criar Receita</h4>
      <ul>
        <li>Acessível apenas logado</li>
        <li>Campos: Título, Tipo, Qtd. Ingredientes</li>
        <li>Tempo de Preparo, Dificuldade</li>
        <li>Ingredientes (textarea)</li>
        <li>Modo de Preparo (textarea)</li>
        <li>Nova receita aparece primeiro</li>
      </ul>
    </div>
  </div>
</div>

<!-- ===== SEÇÃO 3: REGRAS DE NEGÓCIO ===== -->
<div class="section" id="s3">
  <h2><span class="num">3</span> Regras de Negócio</h2>

  <ul class="rule-list">
    <li><span class="ri">RN01</span> O sistema é uma <strong>SPA</strong>: não pode haver reload de página. Toda navegação é via JavaScript + AJAX.</li>
    <li><span class="ri">RN02</span> O usuário só pode <strong>curtir, comentar, filtrar e paginar</strong> se estiver logado. Caso contrário, o modal de login deve abrir automaticamente.</li>
    <li><span class="ri">RN03</span> A <strong>curtida é um toggle</strong>: clique 1 = curte (coração vermelho, +1); clique 2 = descurte (coração branco, -1). Um usuário só pode curtir uma receita uma vez.</li>
    <li><span class="ri">RN04</span> A <strong>paginação é de 4 receitas por página</strong>. Os botões "Anterior" e "Próxima" devem ser desabilitados quando não há mais páginas.</li>
    <li><span class="ri">RN05</span> As receitas são exibidas em <strong>ordem decrescente de data de criação</strong> (mais novas primeiro). Nova receita recém-criada aparece no topo.</li>
    <li><span class="ri">RN06</span> O formulário de criação de receita é <strong>habilitado somente após login</strong>. O botão "Receita" na sidebar só funciona logado.</li>
    <li><span class="ri">RN07</span> O campo <strong>Tipo</strong> aceita apenas: <code>Doce</code>, <code>Salgada</code> ou <code>Vegana</code>.</li>
    <li><span class="ri">RN08</span> O campo <strong>Qtd. Ingredientes</strong> é numérico inteiro positivo.</li>
    <li><span class="ri">RN09</span> O modal de login exibe mensagem de erro com borda vermelha quando: campos vazios ou credenciais incorretas.</li>
    <li><span class="ri">RN10</span> O <strong>logo e nome da empresa</strong> são carregados do banco de dados, não hard-codados no HTML.</li>
    <li><span class="ri">RN11</span> O contador "Qtd. Receitas" e "Total de Ingredientes" na sidebar <strong>refletem dados reais do banco</strong> e são atualizados após nova receita criada.</li>
    <li><span class="ri">RN12</span> A <strong>data</strong> nas receitas é exibida no formato <code>HH:MM - DD/MM/AA</code>.</li>
    <li><span class="ri">RN13</span> O Dificuldade aceita: <code>Fácil</code>, <code>Médio</code>, <code>Avançado</code>.</li>
    <li><span class="ri">RN14</span> Todos os campos do formulário de receita são <strong>obrigatórios</strong>.</li>
    <li><span class="ri">RN15</span> Senhas devem ser armazenadas com <strong>hash</strong> (<code>password_hash</code> / <code>md5</code>) no banco de dados.</li>
  </ul>
</div>

<!-- ===== SEÇÃO 4: ESTRUTURA ===== -->
<div class="section" id="s4">
  <h2><span class="num">4</span> Estrutura de Pastas e Arquitetura</h2>

  <h3>📁 Estrutura de Pastas Recomendada</h3>
  <div class="tree">
<span class="dir">clickgourmet/</span>
├── <span class="dir">application/</span>                   <span class="comment"># CodeIgniter</span>
│   ├── <span class="dir">controllers/</span>
│   │   ├── <span class="file">Auth.php</span>              <span class="comment"># Login, logout, sessão</span>
│   │   ├── <span class="file">Receitas.php</span>          <span class="comment"># CRUD de receitas</span>
│   │   ├── <span class="file">Curtidas.php</span>          <span class="comment"># Toggle de curtidas</span>
│   │   ├── <span class="file">Comentarios.php</span>       <span class="comment"># Sistema de comentários</span>
│   │   └── <span class="file">Empresa.php</span>           <span class="comment"># Dados da sidebar</span>
│   ├── <span class="dir">models/</span>
│   │   ├── <span class="file">Usuario_model.php</span>     <span class="comment"># Operações de usuário</span>
│   │   ├── <span class="file">Receita_model.php</span>     <span class="comment"># CRUD receitas + filtros</span>
│   │   ├── <span class="file">Curtida_model.php</span>     <span class="comment"># Toggle curtida</span>
│   │   ├── <span class="file">Comentario_model.php</span>  <span class="comment"># CRUD comentários</span>
│   │   └── <span class="file">Empresa_model.php</span>     <span class="comment"># Dados empresa/métricas</span>
│   └── <span class="dir">views/</span>
│       └── <span class="file">index.php</span>             <span class="comment"># Único arquivo de view (SPA)</span>
├── <span class="dir">assets/</span>
│   ├── <span class="dir">css/</span>
│   │   └── <span class="file">style.css</span>             <span class="comment"># Estilos customizados</span>
│   ├── <span class="dir">js/</span>
│   │   ├── <span class="file">app.js</span>                <span class="comment"># Inicialização e roteamento SPA</span>
│   │   ├── <span class="file">api.js</span>                <span class="comment"># Funções de fetch/AJAX</span>
│   │   ├── <span class="file">auth.js</span>               <span class="comment"># Lógica de login/logout</span>
│   │   ├── <span class="file">receitas.js</span>           <span class="comment"># Listagem, filtros, paginação</span>
│   │   └── <span class="file">ui.js</span>                 <span class="comment"># Renderização de componentes</span>
│   └── <span class="dir">img/</span>
│       ├── <span class="file">SAEPGourmet.png</span>       <span class="comment"># Logo da empresa</span>
│       └── <span class="file">default_avatar.png</span>    <span class="comment"># Foto padrão de usuário</span>
├── <span class="dir">system/</span>                        <span class="comment"># Core do CodeIgniter (não editar)</span>
└── <span class="file">index.php</span>                      <span class="comment"># Entry point do CI</span>
  </div>

  <h3>🏗️ Arquitetura do Sistema</h3>
  <div class="card">
    <div class="flow">
      <div class="flow-box gray">🌐 Browser (SPA)</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box">📡 Fetch/AJAX</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box gray">index.php (CI)</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box">🎮 Controller</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box">🗂️ Model</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box green">💾 MySQL</div>
    </div>
    <div class="flow">
      <div class="flow-box green">💾 MySQL</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box">🗂️ Model</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box">🎮 Controller</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box">📦 JSON Response</div>
      <span class="flow-arrow">⟶</span>
      <div class="flow-box gray">🖥️ JS renderiza HTML</div>
    </div>
  </div>

  <div class="card-grid">
    <div class="card-sm">
      <h4>Frontend (JS)</h4>
      <ul>
        <li><code>app.js</code> — inicializa a SPA e carrega a view inicial</li>
        <li><code>api.js</code> — todas as chamadas fetch centralizadas</li>
        <li><code>auth.js</code> — controla login/logout, modal, sessão local</li>
        <li><code>receitas.js</code> — listagem, filtros, paginação, curtidas</li>
        <li><code>ui.js</code> — renderiza cards HTML dinamicamente</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>Backend (PHP/CI)</h4>
      <ul>
        <li>Controllers retornam <strong>JSON</strong> (não HTML)</li>
        <li>Models fazem queries no banco</li>
        <li>Sessão PHP controla usuário logado</li>
        <li>Todas as rotas protegidas verificam sessão</li>
        <li>Respostas padronizadas: <code>{"status":"ok","data":[...]}</code></li>
      </ul>
    </div>
  </div>
</div>

<!-- ===== SEÇÃO 5: BANCO DE DADOS ===== -->
<div class="section" id="s5">
  <h2><span class="num">5-10</span> Banco de Dados Completo</h2>

  <h3>📊 Diagrama das Tabelas (ER)</h3>
  <div class="card" style="overflow-x:auto;">
    <div style="display:flex;gap:8px;flex-wrap:wrap;padding:8px 0;">
      <div class="er-table">
        <div class="er-table-head">🏢 empresa</div>
        <div class="er-table-body">
          <div class="er-field pk"><span>id</span><span class="er-type">INT PK <span class="er-key">PK</span></span></div>
          <div class="er-field"><span>nome</span><span class="er-type">VARCHAR(100)</span></div>
          <div class="er-field"><span>logo</span><span class="er-type">VARCHAR(255)</span></div>
          <div class="er-field"><span>instagram</span><span class="er-type">VARCHAR(100)</span></div>
          <div class="er-field"><span>twitter</span><span class="er-type">VARCHAR(100)</span></div>
          <div class="er-field"><span>tiktok</span><span class="er-type">VARCHAR(100)</span></div>
          <div class="er-field"><span>created_at</span><span class="er-type">TIMESTAMP</span></div>
        </div>
      </div>
      <div class="er-table">
        <div class="er-table-head">👤 usuarios</div>
        <div class="er-table-body">
          <div class="er-field pk"><span>id</span><span class="er-type">INT PK <span class="er-key">PK</span></span></div>
          <div class="er-field"><span>nome</span><span class="er-type">VARCHAR(100)</span></div>
          <div class="er-field"><span>senha</span><span class="er-type">VARCHAR(255)</span></div>
          <div class="er-field"><span>foto</span><span class="er-type">VARCHAR(255)</span></div>
          <div class="er-field"><span>created_at</span><span class="er-type">TIMESTAMP</span></div>
        </div>
      </div>
      <div class="er-table">
        <div class="er-table-head">🍽️ receitas</div>
        <div class="er-table-body">
          <div class="er-field pk"><span>id</span><span class="er-type">INT PK <span class="er-key">PK</span></span></div>
          <div class="er-field fk"><span>usuario_id</span><span class="er-type">INT <span class="er-key">FK</span></span></div>
          <div class="er-field"><span>titulo</span><span class="er-type">VARCHAR(120)</span></div>
          <div class="er-field"><span>tipo</span><span class="er-type">ENUM</span></div>
          <div class="er-field"><span>qtd_ingredientes</span><span class="er-type">INT</span></div>
          <div class="er-field"><span>tempo_preparo</span><span class="er-type">INT</span></div>
          <div class="er-field"><span>dificuldade</span><span class="er-type">ENUM</span></div>
          <div class="er-field"><span>ingredientes</span><span class="er-type">TEXT</span></div>
          <div class="er-field"><span>modo_preparo</span><span class="er-type">TEXT</span></div>
          <div class="er-field"><span>created_at</span><span class="er-type">TIMESTAMP</span></div>
        </div>
      </div>
      <div class="er-table">
        <div class="er-table-head">❤️ curtidas</div>
        <div class="er-table-body">
          <div class="er-field pk"><span>id</span><span class="er-type">INT PK <span class="er-key">PK</span></span></div>
          <div class="er-field fk"><span>usuario_id</span><span class="er-type">INT <span class="er-key">FK</span></span></div>
          <div class="er-field fk"><span>receita_id</span><span class="er-type">INT <span class="er-key">FK</span></span></div>
          <div class="er-field"><span>created_at</span><span class="er-type">TIMESTAMP</span></div>
          <div class="er-field"><span>⚠️ UNIQUE(usuario_id, receita_id)</span><span></span></div>
        </div>
      </div>
      <div class="er-table">
        <div class="er-table-head">💬 comentarios</div>
        <div class="er-table-body">
          <div class="er-field pk"><span>id</span><span class="er-type">INT PK <span class="er-key">PK</span></span></div>
          <div class="er-field fk"><span>usuario_id</span><span class="er-type">INT <span class="er-key">FK</span></span></div>
          <div class="er-field fk"><span>receita_id</span><span class="er-type">INT <span class="er-key">FK</span></span></div>
          <div class="er-field"><span>texto</span><span class="er-type">TEXT</span></div>
          <div class="er-field"><span>created_at</span><span class="er-type">TIMESTAMP</span></div>
        </div>
      </div>
    </div>
    <div style="margin-top:12px;font-size:12px;color:#888;display:flex;gap:16px;flex-wrap:wrap;">
      <span>🟡 Fundo amarelo = Chave Primária (PK)</span>
      <span>🟣 Fundo roxo = Chave Estrangeira (FK)</span>
    </div>
  </div>

  <h3>🔗 Relacionamentos</h3>
  <table>
    <tr><th>Tabela</th><th>Relacionamento</th><th>Tabela</th><th>Tipo</th></tr>
    <tr><td><code>usuarios</code></td><td>possui muitas</td><td><code>receitas</code></td><td><span class="badge badge-blue">1 : N</span></td></tr>
    <tr><td><code>receitas</code></td><td>possui muitas</td><td><code>curtidas</code></td><td><span class="badge badge-blue">1 : N</span></td></tr>
    <tr><td><code>usuarios</code></td><td>possui muitas</td><td><code>curtidas</code></td><td><span class="badge badge-blue">1 : N</span></td></tr>
    <tr><td><code>receitas</code></td><td>possui muitos</td><td><code>comentarios</code></td><td><span class="badge badge-blue">1 : N</span></td></tr>
    <tr><td><code>usuarios</code></td><td>possui muitos</td><td><code>comentarios</code></td><td><span class="badge badge-blue">1 : N</span></td></tr>
    <tr><td><code>usuario + receita</code></td><td>curtida única</td><td><code>curtidas</code></td><td><span class="badge badge-orange">UNIQUE</span></td></tr>
  </table>

  <h3>🗄️ Script SQL Completo</h3>
  <pre><code><span class="sql-cmt">-- ============================================
-- CLICKGOURMET - Script de Criação do Banco
-- ============================================</span>

<span class="sql-kw">CREATE DATABASE IF NOT EXISTS</span> clickgourmet
    <span class="sql-kw">CHARACTER SET</span> utf8mb4
    <span class="sql-kw">COLLATE</span> utf8mb4_unicode_ci;

<span class="sql-kw">USE</span> clickgourmet;

<span class="sql-cmt">-- Tabela: empresa (dados da sidebar)</span>
<span class="sql-kw">CREATE TABLE</span> empresa (
    id          <span class="sql-kw">INT</span> <span class="sql-kw">AUTO_INCREMENT PRIMARY KEY</span>,
    nome        <span class="sql-kw">VARCHAR</span>(<span class="sql-num">100</span>) <span class="sql-kw">NOT NULL</span>,
    logo        <span class="sql-kw">VARCHAR</span>(<span class="sql-num">255</span>) <span class="sql-kw">DEFAULT</span> <span class="sql-str">'SAEPGourmet.png'</span>,
    instagram   <span class="sql-kw">VARCHAR</span>(<span class="sql-num">100</span>) <span class="sql-kw">DEFAULT</span> <span class="sql-kw">NULL</span>,
    twitter     <span class="sql-kw">VARCHAR</span>(<span class="sql-num">100</span>) <span class="sql-kw">DEFAULT</span> <span class="sql-kw">NULL</span>,
    tiktok      <span class="sql-kw">VARCHAR</span>(<span class="sql-num">100</span>) <span class="sql-kw">DEFAULT</span> <span class="sql-kw">NULL</span>,
    created_at  <span class="sql-kw">TIMESTAMP DEFAULT</span> <span class="sql-kw">CURRENT_TIMESTAMP</span>
);

<span class="sql-cmt">-- Tabela: usuarios</span>
<span class="sql-kw">CREATE TABLE</span> usuarios (
    id          <span class="sql-kw">INT</span> <span class="sql-kw">AUTO_INCREMENT PRIMARY KEY</span>,
    nome        <span class="sql-kw">VARCHAR</span>(<span class="sql-num">100</span>) <span class="sql-kw">NOT NULL UNIQUE</span>,
    senha       <span class="sql-kw">VARCHAR</span>(<span class="sql-num">255</span>) <span class="sql-kw">NOT NULL</span>,
    foto        <span class="sql-kw">VARCHAR</span>(<span class="sql-num">255</span>) <span class="sql-kw">DEFAULT</span> <span class="sql-str">'default_avatar.png'</span>,
    created_at  <span class="sql-kw">TIMESTAMP DEFAULT</span> <span class="sql-kw">CURRENT_TIMESTAMP</span>
);

<span class="sql-cmt">-- Tabela: receitas</span>
<span class="sql-kw">CREATE TABLE</span> receitas (
    id               <span class="sql-kw">INT</span> <span class="sql-kw">AUTO_INCREMENT PRIMARY KEY</span>,
    usuario_id       <span class="sql-kw">INT NOT NULL</span>,
    titulo           <span class="sql-kw">VARCHAR</span>(<span class="sql-num">120</span>) <span class="sql-kw">NOT NULL</span>,
    tipo             <span class="sql-kw">ENUM</span>(<span class="sql-str">'Doce'</span>,<span class="sql-str">'Salgada'</span>,<span class="sql-str">'Vegana'</span>) <span class="sql-kw">NOT NULL</span>,
    qtd_ingredientes <span class="sql-kw">INT NOT NULL</span>,
    tempo_preparo    <span class="sql-kw">INT NOT NULL</span>,   <span class="sql-cmt">-- em minutos</span>
    dificuldade      <span class="sql-kw">ENUM</span>(<span class="sql-str">'Fácil'</span>,<span class="sql-str">'Médio'</span>,<span class="sql-str">'Avançado'</span>) <span class="sql-kw">NOT NULL</span>,
    ingredientes     <span class="sql-kw">TEXT NOT NULL</span>,
    modo_preparo     <span class="sql-kw">TEXT NOT NULL</span>,
    created_at       <span class="sql-kw">TIMESTAMP DEFAULT</span> <span class="sql-kw">CURRENT_TIMESTAMP</span>,
    <span class="sql-kw">FOREIGN KEY</span> (usuario_id) <span class="sql-kw">REFERENCES</span> usuarios(id) <span class="sql-kw">ON DELETE CASCADE</span>
);

<span class="sql-cmt">-- Tabela: curtidas (toggle, unique por usuário+receita)</span>
<span class="sql-kw">CREATE TABLE</span> curtidas (
    id          <span class="sql-kw">INT</span> <span class="sql-kw">AUTO_INCREMENT PRIMARY KEY</span>,
    usuario_id  <span class="sql-kw">INT NOT NULL</span>,
    receita_id  <span class="sql-kw">INT NOT NULL</span>,
    created_at  <span class="sql-kw">TIMESTAMP DEFAULT</span> <span class="sql-kw">CURRENT_TIMESTAMP</span>,
    <span class="sql-kw">UNIQUE KEY</span> unique_curtida (usuario_id, receita_id),
    <span class="sql-kw">FOREIGN KEY</span> (usuario_id) <span class="sql-kw">REFERENCES</span> usuarios(id) <span class="sql-kw">ON DELETE CASCADE</span>,
    <span class="sql-kw">FOREIGN KEY</span> (receita_id) <span class="sql-kw">REFERENCES</span> receitas(id) <span class="sql-kw">ON DELETE CASCADE</span>
);

<span class="sql-cmt">-- Tabela: comentarios</span>
<span class="sql-kw">CREATE TABLE</span> comentarios (
    id          <span class="sql-kw">INT</span> <span class="sql-kw">AUTO_INCREMENT PRIMARY KEY</span>,
    usuario_id  <span class="sql-kw">INT NOT NULL</span>,
    receita_id  <span class="sql-kw">INT NOT NULL</span>,
    texto       <span class="sql-kw">TEXT NOT NULL</span>,
    created_at  <span class="sql-kw">TIMESTAMP DEFAULT</span> <span class="sql-kw">CURRENT_TIMESTAMP</span>,
    <span class="sql-kw">FOREIGN KEY</span> (usuario_id) <span class="sql-kw">REFERENCES</span> usuarios(id) <span class="sql-kw">ON DELETE CASCADE</span>,
    <span class="sql-kw">FOREIGN KEY</span> (receita_id) <span class="sql-kw">REFERENCES</span> receitas(id) <span class="sql-kw">ON DELETE CASCADE</span>
);

<span class="sql-cmt">-- ============================================
-- DADOS INICIAIS
-- ============================================</span>

<span class="sql-kw">INSERT INTO</span> empresa (nome, logo, instagram, twitter, tiktok)
<span class="sql-kw">VALUES</span> (<span class="sql-str">'Aço &amp; Arte Gourmet'</span>, <span class="sql-str">'SAEPGourmet.png'</span>, <span class="sql-str">'@acoearte'</span>, <span class="sql-str">'@acoearte'</span>, <span class="sql-str">'@acoearte'</span>);

<span class="sql-kw">INSERT INTO</span> usuarios (nome, senha, foto)
<span class="sql-kw">VALUES</span>
  (<span class="sql-str">'admin'</span>, MD5(<span class="sql-str">'admin123'</span>), <span class="sql-str">'default_avatar.png'</span>),
  (<span class="sql-str">'Chef Ana Silva'</span>, MD5(<span class="sql-str">'senha123'</span>), <span class="sql-str">'default_avatar.png'</span>),
  (<span class="sql-str">'João Pereira'</span>, MD5(<span class="sql-str">'senha123'</span>), <span class="sql-str">'default_avatar.png'</span>);

<span class="sql-kw">INSERT INTO</span> receitas (usuario_id, titulo, tipo, qtd_ingredientes, tempo_preparo, dificuldade, ingredientes, modo_preparo)
<span class="sql-kw">VALUES</span>
  (<span class="sql-num">2</span>, <span class="sql-str">'Salmão Grelhado com Aspargos'</span>, <span class="sql-str">'Salgada'</span>, <span class="sql-num">6</span>, <span class="sql-num">30</span>, <span class="sql-str">'Médio'</span>, <span class="sql-str">'Salmão, aspargos, azeite, limão, alho, sal'</span>, <span class="sql-str">'Grelhe o salmão...'</span>),
  (<span class="sql-num">3</span>, <span class="sql-str">'Risoto de Cogumelos Trufado'</span>, <span class="sql-str">'Vegana'</span>, <span class="sql-num">8</span>, <span class="sql-num">45</span>, <span class="sql-str">'Avançado'</span>, <span class="sql-str">'Arroz arbóreo, cogumelos, trufa, caldo vegetal...'</span>, <span class="sql-str">'Em uma panela...'</span>),
  (<span class="sql-num">2</span>, <span class="sql-str">'Bolo de Chocolate Sem Farinha'</span>, <span class="sql-str">'Doce'</span>, <span class="sql-num">5</span>, <span class="sql-num">60</span>, <span class="sql-str">'Fácil'</span>, <span class="sql-str">'Chocolate, ovos, manteiga, açúcar, cacau'</span>, <span class="sql-str">'Derreta o chocolate...'</span>),
  (<span class="sql-num">3</span>, <span class="sql-str">'Salada Caesar Clássica'</span>, <span class="sql-str">'Salgada'</span>, <span class="sql-num">7</span>, <span class="sql-num">20</span>, <span class="sql-str">'Fácil'</span>, <span class="sql-str">'Alface, frango, parmesão, croutons, molho caesar...'</span>, <span class="sql-str">'Misture todos...'</span>);
</code></pre>

  <h3>📝 Queries Principais</h3>
  <h4>Listagem de receitas com contagem de curtidas e comentários:</h4>
  <pre><code><span class="sql-kw">SELECT</span>
    r.*,
    u.nome <span class="sql-kw">AS</span> autor_nome,
    u.foto <span class="sql-kw">AS</span> autor_foto,
    <span class="sql-kw">COUNT</span>(<span class="sql-kw">DISTINCT</span> c.id) <span class="sql-kw">AS</span> total_curtidas,
    <span class="sql-kw">COUNT</span>(<span class="sql-kw">DISTINCT</span> cm.id) <span class="sql-kw">AS</span> total_comentarios
<span class="sql-kw">FROM</span> receitas r
<span class="sql-kw">JOIN</span> usuarios u <span class="sql-kw">ON</span> r.usuario_id = u.id
<span class="sql-kw">LEFT JOIN</span> curtidas c <span class="sql-kw">ON</span> c.receita_id = r.id
<span class="sql-kw">LEFT JOIN</span> comentarios cm <span class="sql-kw">ON</span> cm.receita_id = r.id
<span class="sql-kw">WHERE</span> (<span class="sql-str">'$tipo'</span> = <span class="sql-str">''</span> <span class="sql-kw">OR</span> r.tipo = <span class="sql-str">'$tipo'</span>)
<span class="sql-kw">GROUP BY</span> r.id
<span class="sql-kw">ORDER BY</span> r.created_at <span class="sql-kw">DESC</span>
<span class="sql-kw">LIMIT</span> <span class="sql-num">4</span> <span class="sql-kw">OFFSET</span> <span class="sql-str">$offset</span>;</code></pre>

  <h4>Verificar se usuário curtiu (para pintar o coração):</h4>
  <pre><code><span class="sql-kw">SELECT</span> id <span class="sql-kw">FROM</span> curtidas
<span class="sql-kw">WHERE</span> usuario_id = <span class="sql-str">$usuario_id</span> <span class="sql-kw">AND</span> receita_id = <span class="sql-str">$receita_id</span>
<span class="sql-kw">LIMIT</span> <span class="sql-num">1</span>;</code></pre>

  <h4>Métricas da sidebar:</h4>
  <pre><code><span class="sql-kw">SELECT</span>
    <span class="sql-kw">COUNT</span>(*) <span class="sql-kw">AS</span> qtd_receitas,
    <span class="sql-kw">SUM</span>(qtd_ingredientes) <span class="sql-kw">AS</span> total_ingredientes
<span class="sql-kw">FROM</span> receitas;</code></pre>
</div>

<!-- ===== SEÇÃO 6: PÁGINAS E FLUXO ===== -->
<div class="section" id="s6">
  <h2><span class="num">11-13</span> Páginas, Componentes e Fluxo</h2>

  <h3>🖥️ Estrutura das Páginas (Views da SPA)</h3>
  <div class="alert alert-info">
    <span class="icon">ℹ️</span>
    <div class="text">Na SPA, não existem páginas separadas. Existem <strong>seções/views</strong> dentro do único HTML que são exibidas/ocultadas via JavaScript. O backend PHP retorna apenas JSON.</div>
  </div>

  <div class="card-grid">
    <div class="card-sm">
      <h4>View: #home (principal)</h4>
      <ul>
        <li>Sidebar com logo, métricas, botão Receita, footer</li>
        <li>Header com botão Login/Logout</li>
        <li>Filtros: Todas | Doce | Salgada | Vegana</li>
        <li>Grid de cards de receitas (2 colunas)</li>
        <li>Paginação: Anterior / 1 2 3 / Próxima</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>Modal: #modal-login</h4>
      <ul>
        <li>Overlay escurecido no fundo</li>
        <li>Caixa centralizada</li>
        <li>Campo: Nome (text)</li>
        <li>Campo: Senha (password)</li>
        <li>Botões: Cancelar | Login</li>
        <li>Ícone X para fechar</li>
        <li>Mensagem de erro em vermelho</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>View: #criar-receita</h4>
      <ul>
        <li>Sidebar igual à home</li>
        <li>Formulário "Crie sua receita"</li>
        <li>Select: Tipo (Doce/Salgada/Vegana)</li>
        <li>Input: Tempo (min), Dificuldade</li>
        <li>Textarea: Ingredientes, Modo de Preparo</li>
        <li>Botão: Criar Receita</li>
        <li>Seção: Suas Receitas (listagem)</li>
      </ul>
    </div>
    <div class="card-sm">
      <h4>Componente: Card de Receita</h4>
      <ul>
        <li>Foto do autor (avatar circular)</li>
        <li>Nome do autor</li>
        <li>Título do prato</li>
        <li>Tempo de preparo (⏱ Xmin)</li>
        <li>Qtd. Ingredientes</li>
        <li>Dificuldade (Fácil/Médio/Avançado)</li>
        <li>Data (HH:MM - DD/MM/AA)</li>
        <li>❤️ N curtidas | 💬 N comentários</li>
      </ul>
    </div>
  </div>

  <h3>🔄 Fluxo Completo do Sistema</h3>
  <ol class="steps">
    <li>
      <div class="step-body">
        <div class="step-title">Carregamento Inicial</div>
        <div class="step-desc">Browser carrega <code>index.php</code> → JS inicializa → chama API para dados da sidebar (empresa, métricas) → chama API de receitas página 1 → renderiza tudo sem refresh.</div>
      </div>
    </li>
    <li>
      <div class="step-body">
        <div class="step-title">Usuário tenta curtir sem login</div>
        <div class="step-desc">Clica no ❤️ → JS verifica sessão → usuário não logado → abre modal de login automaticamente → usuário faz login → curtida é aplicada.</div>
      </div>
    </li>
    <li>
      <div class="step-body">
        <div class="step-title">Login</div>
        <div class="step-desc">Preenche Nome + Senha → fetch POST para <code>/auth/login</code> → PHP valida → retorna JSON com dados do usuário → JS armazena sessão local → atualiza UI (botão vira Logout, botão Receita ativo).</div>
      </div>
    </li>
    <li>
      <div class="step-body">
        <div class="step-title">Filtrar receitas</div>
        <div class="step-desc">Clica em "Doce" → JS verifica login → fetch GET <code>/receitas/listar?tipo=Doce&amp;pagina=1</code> → renderiza novos cards → reset paginação para página 1.</div>
      </div>
    </li>
    <li>
      <div class="step-body">
        <div class="step-title">Criar receita</div>
        <div class="step-desc">Clica em "Receita" → JS exibe view #criar-receita → preenche formulário → fetch POST <code>/receitas/criar</code> → PHP salva no banco → JS redireciona para #home e atualiza lista (nova receita no topo) + métricas da sidebar.</div>
      </div>
    </li>
    <li>
      <div class="step-body">
        <div class="step-title">Paginação</div>
        <div class="step-desc">Clica "Próxima" → JS incrementa página atual → fetch com novo offset → renderiza novos 4 cards → atualiza estado dos botões (desabilita "Anterior" na p.1, desabilita "Próxima" na última).</div>
      </div>
    </li>
  </ol>
</div>

<!-- ===== SEÇÃO 7: LÓGICAS TÉCNICAS ===== -->
<div class="section" id="s7">
  <h2><span class="num">14-19</span> Lógicas Técnicas Detalhadas</h2>

  <!-- LOGIN -->
  <h3>🔐 14. Lógica do Login</h3>
  <div class="card-grid">
    <div class="card-sm">
      <h4>Frontend (auth.js)</h4>
      <pre style="font-size:12px;padding:14px;"><code>async function fazerLogin() {
  const nome = document.getElementById('input-nome').value;
  const senha = document.getElementById('input-senha').value;

  if (!nome || !senha) {
    mostrarErro('nome ou senha obrigatório');
    return;
  }

  const res = await fetch('/auth/login', {
    method: 'POST',
    headers: {'Content-Type':'application/json'},
    body: JSON.stringify({ nome, senha })
  });

  const data = await res.json();

  if (data.status === 'ok') {
    sessionStorage.setItem('usuario', JSON.stringify(data.usuario));
    fecharModal();
    atualizarUI();  // troca botão Login → Logout
  } else {
    mostrarErro(data.mensagem);
  }
}</code></pre>
    </div>
    <div class="card-sm">
      <h4>Backend (Auth.php)</h4>
      <pre style="font-size:12px;padding:14px;"><code>public function login() {
  $dados = json_decode(
    file_get_contents('php://input'), true
  );

  $usuario = $this->Usuario_model
    ->buscarPorNome($dados['nome']);

  if (!$usuario || 
      md5($dados['senha']) !== $usuario->senha) {
    echo json_encode([
      'status' => 'erro',
      'mensagem' => 'Nome ou senha incorretos'
    ]);
    return;
  }

  $this->session->set_userdata('usuario_id', 
    $usuario->id);
  $this->session->set_userdata('usuario_nome',
    $usuario->nome);

  echo json_encode([
    'status' => 'ok',
    'usuario' => [
      'id'   => $usuario->id,
      'nome' => $usuario->nome,
      'foto' => $usuario->foto
    ]
  ]);
}</code></pre>
    </div>
  </div>

  <!-- CURTIDAS -->
  <h3>❤️ 15. Sistema de Curtidas (Toggle)</h3>
  <div class="card-grid">
    <div class="card-sm">
      <h4>Frontend (receitas.js)</h4>
      <pre style="font-size:12px;padding:14px;"><code>async function toggleCurtida(receitaId, btn) {
  // Verificar login
  if (!estaLogado()) {
    abrirModalLogin();
    return;
  }

  const res = await fetch('/curtidas/toggle', {
    method: 'POST',
    headers: {'Content-Type':'application/json'},
    body: JSON.stringify({ receita_id: receitaId })
  });

  const data = await res.json();
  const counter = btn.querySelector('.like-count');

  if (data.acao === 'curtiu') {
    btn.classList.add('curtido');  // CSS: color: #FF0000
    counter.textContent = data.total;
  } else {
    btn.classList.remove('curtido');
    counter.textContent = data.total;
  }
}</code></pre>
    </div>
    <div class="card-sm">
      <h4>Backend (Curtidas.php)</h4>
      <pre style="font-size:12px;padding:14px;"><code>public function toggle() {
  if (!$this->session->userdata('usuario_id')) {
    echo json_encode(['status'=>'sem_login']);
    return;
  }

  $uid = $this->session->userdata('usuario_id');
  $dados = json_decode(
    file_get_contents('php://input'), true
  );
  $rid = $dados['receita_id'];

  $jaExiste = $this->Curtida_model
    ->buscar($uid, $rid);

  if ($jaExiste) {
    $this->Curtida_model->remover($uid, $rid);
    $acao = 'descurtiu';
  } else {
    $this->Curtida_model->adicionar($uid, $rid);
    $acao = 'curtiu';
  }

  $total = $this->Curtida_model->contar($rid);

  echo json_encode([
    'acao'  => $acao,
    'total' => $total
  ]);
}</code></pre>
    </div>
  </div>

  <!-- FILTROS -->
  <h3>🔍 17. Sistema de Filtros</h3>
  <pre style="font-size:12px;"><code>// Frontend: receitas.js
let filtroAtivo = '';
let paginaAtual = 1;

function aplicarFiltro(tipo) {
  if (!estaLogado()) { abrirModalLogin(); return; }

  filtroAtivo = tipo;  // '' = todas
  paginaAtual = 1;     // reset paginação

  // Atualizar visual dos botões
  document.querySelectorAll('.btn-filtro').forEach(b => b.classList.remove('ativo'));
  event.target.classList.add('ativo');

  carregarReceitas();
}

async function carregarReceitas() {
  const url = `/receitas/listar?tipo=${filtroAtivo}&pagina=${paginaAtual}`;
  const res = await fetch(url);
  const data = await res.json();
  renderizarCards(data.receitas);
  atualizarPaginacao(data.total_paginas);
}

// Backend: Receitas.php
public function listar() {
  $tipo   = $this->input->get('tipo');
  $pagina = (int)($this->input->get('pagina') ?? 1);
  $limit  = 4;
  $offset = ($pagina - 1) * $limit;

  $receitas = $this->Receita_model->listar($tipo, $limit, $offset);
  $total    = $this->Receita_model->contar($tipo);

  echo json_encode([
    'status'        => 'ok',
    'receitas'      => $receitas,
    'total_paginas' => ceil($total / $limit),
    'pagina_atual'  => $pagina
  ]);
}</code></pre>

  <!-- PAGINAÇÃO -->
  <h3>📄 18. Sistema de Paginação</h3>
  <pre style="font-size:12px;"><code>// Frontend
function atualizarPaginacao(totalPaginas) {
  const btnAnterior = document.getElementById('btn-anterior');
  const btnProxima  = document.getElementById('btn-proxima');
  const info        = document.getElementById('info-pagina');

  info.textContent = `Página ${paginaAtual} de ${totalPaginas}`;

  btnAnterior.disabled = (paginaAtual === 1);
  btnProxima.disabled  = (paginaAtual >= totalPaginas);
}

function paginaAnterior() {
  if (paginaAtual > 1) {
    paginaAtual--;
    carregarReceitas();
  }
}

function proximaPagina() {
  paginaAtual++;
  carregarReceitas();
}

// HTML dos botões
// &lt;button onclick="paginaAnterior()" id="btn-anterior"&gt;← Anterior&lt;/button&gt;
// &lt;span id="info-pagina"&gt;&lt;/span&gt;
// &lt;button onclick="proximaPagina()" id="btn-proxima"&gt;Próxima →&lt;/button&gt;</code></pre>

  <!-- SPA JS -->
  <h3>🏗️ 19. Estrutura SPA com JavaScript Simples</h3>
  <pre style="font-size:12px;"><code>// app.js — roteamento simples de SPA
const views = {
  'home':          document.getElementById('view-home'),
  'criar-receita': document.getElementById('view-criar'),
};

function mostrarView(nome) {
  Object.values(views).forEach(v => v.style.display = 'none');
  views[nome].style.display = 'block';

  if (nome === 'home') carregarReceitas();
  if (nome === 'criar-receita') carregarMinhasReceitas();
}

// Inicialização
document.addEventListener('DOMContentLoaded', () => {
  carregarSidebar();    // logo, nome, métricas
  mostrarView('home');  // começa na home
  verificarSessao();    // checa se já está logado
});

// ui.js — Renderização dos cards
function renderizarCards(receitas) {
  const container = document.getElementById('lista-receitas');
  container.innerHTML = '';  // limpa antes de renderizar

  receitas.forEach(r => {
    container.innerHTML += `
      &lt;div class="receita-card"&gt;
        &lt;div class="card-header"&gt;
          &lt;img src="assets/img/${r.autor_foto}" class="avatar"&gt;
          &lt;span class="autor-nome"&gt;${r.autor_nome}&lt;/span&gt;
        &lt;/div&gt;
        &lt;h3 class="card-titulo"&gt;${r.titulo}&lt;/h3&gt;
        &lt;div class="card-info"&gt;
          &lt;span&gt;⏱ ${r.tempo_preparo}min&lt;/span&gt;
          &lt;span&gt;🥕 ${r.qtd_ingredientes} ingredientes&lt;/span&gt;
          &lt;span&gt;📊 ${r.dificuldade}&lt;/span&gt;
          &lt;span class="data"&gt;${formatarData(r.created_at)}&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="card-acoes"&gt;
          &lt;button class="btn-like ${r.eu_curti ? 'curtido' : ''}"
                  onclick="toggleCurtida(${r.id}, this)"&gt;
            ❤️ &lt;span class="like-count"&gt;${r.total_curtidas}&lt;/span&gt;
          &lt;/button&gt;
          &lt;button class="btn-comentar"
                  onclick="abrirComentarios(${r.id})"&gt;
            💬 &lt;span&gt;${r.total_comentarios}&lt;/span&gt;
          &lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;`;
  });
}

function formatarData(dt) {
  const d = new Date(dt);
  const hh = String(d.getHours()).padStart(2,'0');
  const mm = String(d.getMinutes()).padStart(2,'0');
  const dd = String(d.getDate()).padStart(2,'0');
  const mo = String(d.getMonth()+1).padStart(2,'0');
  const aa = String(d.getFullYear()).slice(-2);
  return `${hh}:${mm} - ${dd}/${mo}/${aa}`;
}</code></pre>

  <!-- ORDEM DE DESENVOLVIMENTO -->
  <h3>📋 20. Melhor Ordem de Desenvolvimento</h3>
  <ol class="steps">
    <li><div class="step-body"><div class="step-title">Banco de Dados</div><div class="step-desc">Criar o banco MySQL, todas as tabelas, FKs e dados iniciais. Testar no phpMyAdmin.</div></div></li>
    <li><div class="step-body"><div class="step-title">Estrutura do Projeto</div><div class="step-desc">Configurar CodeIgniter, criar Controllers e Models vazios, testar rota <code>/</code> funcionando.</div></div></li>
    <li><div class="step-body"><div class="step-title">HTML + CSS base</div><div class="step-desc">Montar o layout da SPA: sidebar + main + modal. Só estrutura, sem dados dinâmicos ainda.</div></div></li>
    <li><div class="step-body"><div class="step-title">Backend: Empresa (sidebar)</div><div class="step-desc">Endpoint <code>/empresa/dados</code> → retorna logo, nome, métricas. Testar no navegador.</div></div></li>
    <li><div class="step-body"><div class="step-title">Frontend: Sidebar dinâmica</div><div class="step-desc">JS faz fetch do endpoint e preenche logo, nome, Qtd. Receitas e Total Ingredientes.</div></div></li>
    <li><div class="step-body"><div class="step-title">Backend: Listar receitas</div><div class="step-desc">Endpoint <code>/receitas/listar</code> com paginação e filtro. Query com JOINs.</div></div></li>
    <li><div class="step-body"><div class="step-title">Frontend: Renderizar cards</div><div class="step-desc">JS busca receitas e renderiza os cards com todos os dados. Sem interação ainda.</div></div></li>
    <li><div class="step-body"><div class="step-title">Backend + Frontend: Login</div><div class="step-desc">Modal de login, endpoint <code>/auth/login</code>, sessão PHP, atualização da UI.</div></div></li>
    <li><div class="step-body"><div class="step-title">Frontend: Filtros + Paginação</div><div class="step-desc">Botões de filtro chamam API, paginação com estado (página, filtro ativo).</div></div></li>
    <li><div class="step-body"><div class="step-title">Backend + Frontend: Curtidas</div><div class="step-desc">Endpoint toggle curtida, JS atualiza contador e cor do coração.</div></div></li>
    <li><div class="step-body"><div class="step-title">Backend + Frontend: Criar receita</div><div class="step-desc">Formulário, endpoint <code>/receitas/criar</code>, redirect para home com nova receita no topo.</div></div></li>
    <li><div class="step-body"><div class="step-title">Comentários</div><div class="step-desc">Backend endpoint + modal de comentários no frontend.</div></div></li>
    <li><div class="step-body"><div class="step-title">Responsividade</div><div class="step-desc">Ajustar layout para mobile com Bootstrap, testar em diferentes tamanhos de tela.</div></div></li>
    <li><div class="step-body"><div class="step-title">Testes e ajustes finais</div><div class="step-desc">Testar todos os fluxos, validações, erros, ajustar estilos e gerar o PDF de entrega.</div></div></li>
  </ol>
</div>

<!-- ===== SEÇÃO 8: KANBAN ===== -->
<div class="section" id="s8">
  <h2><span class="num">📌</span> Kanban / Scrum — Planejamento de Tarefas</h2>

  <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:20px;">
    <span>🔵 <strong>Legenda das bordas:</strong></span>
    <span class="badge badge-green">● DB</span>
    <span class="badge badge-purple">● Backend</span>
    <span class="badge badge-orange">● Frontend</span>
    <span class="badge badge-red">● Integração</span>
    <span class="badge badge-gray">● Testes</span>
  </div>

  <!-- BACKLOG -->
  <h3>📦 Backlog Completo</h3>
  <div class="kanban">

    <!-- DB -->
    <div class="kanban-col">
      <div class="kanban-col-header" style="color:#1a7a4a;">🗄️ Banco de Dados <span class="kanban-count">5</span></div>

      <div class="task-card db">
        <div class="task-card-title">DB-01 — Criar banco de dados</div>
        <div class="task-desc">Criar database clickgourmet, configurar charset utf8mb4.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Database</span>
        </div>
        <div class="task-files">📄 clickgourmet.sql</div>
      </div>

      <div class="task-card db">
        <div class="task-card-title">DB-02 — Criar tabelas e FKs</div>
        <div class="task-desc">empresa, usuarios, receitas, curtidas, comentarios com chaves primárias e estrangeiras.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Database</span>
        </div>
        <div class="task-files">📄 clickgourmet.sql · depende: DB-01</div>
      </div>

      <div class="task-card db">
        <div class="task-card-title">DB-03 — Inserir dados iniciais</div>
        <div class="task-desc">Dados da empresa, usuários de teste e receitas de exemplo para testes.</div>
        <div class="task-meta">
          <span class="badge badge-orange">Média</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Database</span>
        </div>
        <div class="task-files">📄 clickgourmet.sql · depende: DB-02</div>
      </div>

      <div class="task-card db">
        <div class="task-card-title">DB-04 — Query listagem de receitas</div>
        <div class="task-desc">SELECT com JOINs, COUNT curtidas/comentários, ORDER BY created_at DESC, LIMIT/OFFSET, filtro por tipo.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Database</span>
        </div>
        <div class="task-files">📄 Receita_model.php · depende: DB-02</div>
      </div>

      <div class="task-card db">
        <div class="task-card-title">DB-05 — Query métricas sidebar</div>
        <div class="task-desc">SELECT COUNT(*) receitas e SUM(qtd_ingredientes) para exibir na sidebar.</div>
        <div class="task-meta">
          <span class="badge badge-orange">Média</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Database</span>
        </div>
        <div class="task-files">📄 Empresa_model.php · depende: DB-02</div>
      </div>
    </div>

    <!-- BACKEND -->
    <div class="kanban-col">
      <div class="kanban-col-header" style="color:#483DAD;">⚙️ Backend <span class="kanban-count">8</span></div>

      <div class="task-card be">
        <div class="task-card-title">BE-01 — Configurar CodeIgniter</div>
        <div class="task-desc">Configurar database.php, base_url, autoload models. Testar conexão com MySQL.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 config/database.php · config/autoload.php</div>
      </div>

      <div class="task-card be">
        <div class="task-card-title">BE-02 — Endpoint: dados empresa</div>
        <div class="task-desc">GET /empresa/dados → retorna nome, logo, instagram, twitter, tiktok, qtd_receitas, total_ingredientes em JSON.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 Empresa.php · Empresa_model.php · depende: BE-01, DB-05</div>
      </div>

      <div class="task-card be">
        <div class="task-card-title">BE-03 — Endpoint: listar receitas</div>
        <div class="task-desc">GET /receitas/listar?tipo=&pagina= → retorna array de receitas com dados do autor, curtidas e comentários.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-red">Difícil</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 Receitas.php · Receita_model.php · depende: DB-04</div>
      </div>

      <div class="task-card be">
        <div class="task-card-title">BE-04 — Endpoint: login</div>
        <div class="task-desc">POST /auth/login → recebe nome+senha, valida, inicia sessão PHP, retorna JSON do usuário ou erro.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 Auth.php · Usuario_model.php · depende: BE-01</div>
      </div>

      <div class="task-card be">
        <div class="task-card-title">BE-05 — Endpoint: logout</div>
        <div class="task-desc">POST /auth/logout → destruir sessão PHP, retornar confirmação JSON.</div>
        <div class="task-meta">
          <span class="badge badge-orange">Média</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 Auth.php · depende: BE-04</div>
      </div>

      <div class="task-card be">
        <div class="task-card-title">BE-06 — Endpoint: toggle curtida</div>
        <div class="task-desc">POST /curtidas/toggle → verificar sessão, INSERT ou DELETE na tabela curtidas, retornar ação e total.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 Curtidas.php · Curtida_model.php · depende: BE-04</div>
      </div>

      <div class="task-card be">
        <div class="task-card-title">BE-07 — Endpoint: criar receita</div>
        <div class="task-desc">POST /receitas/criar → verificar sessão, validar campos, INSERT na tabela receitas, retornar nova receita.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 Receitas.php · Receita_model.php · depende: BE-04</div>
      </div>

      <div class="task-card be">
        <div class="task-card-title">BE-08 — Endpoint: comentários</div>
        <div class="task-desc">GET /comentarios/listar?receita_id= e POST /comentarios/criar → CRUD de comentários com validação de sessão.</div>
        <div class="task-meta">
          <span class="badge badge-orange">Média</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Backend</span>
        </div>
        <div class="task-files">📄 Comentarios.php · Comentario_model.php · depende: BE-04</div>
      </div>
    </div>

    <!-- FRONTEND -->
    <div class="kanban-col">
      <div class="kanban-col-header" style="color:#b85c00;">🎨 Frontend <span class="kanban-count">9</span></div>

      <div class="task-card fe">
        <div class="task-card-title">FE-01 — HTML/CSS: Layout base SPA</div>
        <div class="task-desc">Estrutura sidebar + main. Cores, fontes Inter, variáveis CSS. Sem dados dinâmicos ainda.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 views/index.php · assets/css/style.css</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-02 — JS: Estrutura SPA (app.js)</div>
        <div class="task-desc">Lógica de trocar views sem reload. Função mostrarView(), inicialização do DOMContentLoaded.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 assets/js/app.js · depende: FE-01</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-03 — JS: Centralizar chamadas API (api.js)</div>
        <div class="task-desc">Funções reutilizáveis: fetchGet(), fetchPost(). Tratamento de erros centralizado.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 assets/js/api.js · depende: FE-02</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-04 — JS: Modal de login (auth.js)</div>
        <div class="task-desc">Abrir/fechar modal, validação de campos vazios, bordas vermelhas de erro, mensagem de erro.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 assets/js/auth.js · depende: FE-01, FE-03</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-05 — JS: Sidebar dinâmica</div>
        <div class="task-desc">Carregar logo, nome da empresa, Qtd. Receitas e Total de Ingredientes via fetch.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-green">Fácil</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 assets/js/app.js · depende: FE-03, BE-02</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-06 — JS: Renderizar cards (ui.js)</div>
        <div class="task-desc">Função renderizarCards() que gera HTML dos cards com todos os dados, avatar, ícones de interação.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 assets/js/ui.js · assets/js/receitas.js · depende: FE-03, BE-03</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-07 — JS: Filtros e Paginação</div>
        <div class="task-desc">Botões de filtro (Todas/Doce/Salgada/Vegana), controle de página atual, botões Anterior/Próxima com disable.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 assets/js/receitas.js · depende: FE-06</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-08 — JS: Toggle curtida</div>
        <div class="task-desc">Clique no coração → verificar login → fetch toggle → atualizar contador e cor (#FF0000 / #FFFFFF).</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 assets/js/receitas.js · depende: FE-04, BE-06</div>
      </div>

      <div class="task-card fe">
        <div class="task-card-title">FE-09 — JS + HTML: Formulário criar receita</div>
        <div class="task-desc">View "Crie sua receita" com campos, validação, fetch POST, e listagem "Suas Receitas" abaixo.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Frontend</span>
        </div>
        <div class="task-files">📄 views/index.php · assets/js/receitas.js · depende: FE-02, BE-07</div>
      </div>
    </div>

    <!-- INTEGRAÇÃO + TESTES -->
    <div class="kanban-col">
      <div class="kanban-col-header" style="color:#b00;">🔗 Integração &amp; Testes <span class="kanban-count">6</span></div>

      <div class="task-card int">
        <div class="task-card-title">INT-01 — Integração: Login completo</div>
        <div class="task-desc">Testar fluxo completo: abrir modal → preencher → enviar → sessão → UI atualiza. Testar erro de credencial.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-red">Integração</span>
        </div>
        <div class="task-files">depende: FE-04, BE-04</div>
      </div>

      <div class="task-card int">
        <div class="task-card-title">INT-02 — Integração: Receitas + filtros + paginação</div>
        <div class="task-desc">Testar carregamento, filtrar por tipo, navegar páginas, verificar ordem (mais recente primeiro).</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-red">Integração</span>
        </div>
        <div class="task-files">depende: FE-07, BE-03</div>
      </div>

      <div class="task-card int">
        <div class="task-card-title">INT-03 — Integração: Curtidas toggle</div>
        <div class="task-desc">Testar curtir/descurtir, verificar que duplicata é impossível (UNIQUE), testar sem login (abre modal).</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-red">Integração</span>
        </div>
        <div class="task-files">depende: FE-08, BE-06</div>
      </div>

      <div class="task-card int">
        <div class="task-card-title">INT-04 — Integração: Criar receita</div>
        <div class="task-desc">Testar criação → nova receita aparece primeiro na lista → métricas da sidebar atualizam.</div>
        <div class="task-meta">
          <span class="badge badge-red">Alta</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-red">Integração</span>
        </div>
        <div class="task-files">depende: FE-09, BE-07</div>
      </div>

      <div class="task-card test">
        <div class="task-card-title">TEST-01 — Responsividade mobile</div>
        <div class="task-desc">Testar em telas < 768px. Sidebar colapsável, cards empilhados, modal se ajusta, botões clicáveis.</div>
        <div class="task-meta">
          <span class="badge badge-orange">Média</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Testes</span>
        </div>
        <div class="task-files">📄 style.css (media queries) · depende: FE-01</div>
      </div>

      <div class="task-card test">
        <div class="task-card-title">TEST-02 — Validações e segurança</div>
        <div class="task-desc">Testar campos obrigatórios, tipo ENUM válido, tempo positivo, XSS básico nos inputs, acesso sem login.</div>
        <div class="task-meta">
          <span class="badge badge-orange">Média</span>
          <span class="badge badge-orange">Médio</span>
          <span class="badge badge-gray">Testes</span>
        </div>
        <div class="task-files">📄 Todos os controllers · depende: INT-01 ao INT-04</div>
      </div>
    </div>
  </div>

  <!-- STATUS KANBAN -->
  <h3 style="margin-top:32px;">📊 Board de Status</h3>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px;">
    <div class="card" style="border-top:4px solid #888;">
      <h4 style="color:#888;">📦 BACKLOG</h4>
      <p style="font-size:13px;color:#666;">DB-01 ao DB-05<br>BE-01 ao BE-08<br>FE-01 ao FE-09<br>INT-01 ao INT-04<br>TEST-01, TEST-02</p>
      <p><strong style="font-size:24px;color:#888;">28</strong> <span style="font-size:12px;color:#888;">tarefas</span></p>
    </div>
    <div class="card" style="border-top:4px solid var(--blue);">
      <h4 style="color:var(--blue);">📋 TO DO</h4>
      <p style="font-size:13px;color:#666;">Prioridade: DB-01, DB-02, BE-01, FE-01, FE-02</p>
      <p><strong style="font-size:24px;color:var(--blue);">5</strong> <span style="font-size:12px;color:#888;">iniciais</span></p>
    </div>
    <div class="card" style="border-top:4px solid var(--purple);">
      <h4 style="color:var(--purple);">⚙️ EM DEV</h4>
      <p style="font-size:13px;color:#666;">Máximo 2-3 tarefas simultâneas para não travar o desenvolvimento.</p>
      <p><strong style="font-size:24px;color:var(--purple);">0</strong> <span style="font-size:12px;color:#888;">agora</span></p>
    </div>
    <div class="card" style="border-top:4px solid var(--orange);">
      <h4 style="color:var(--orange);">🧪 TESTES</h4>
      <p style="font-size:13px;color:#666;">Após finalizar cada integração, mover para testes antes de marcar como pronto.</p>
      <p><strong style="font-size:24px;color:var(--orange);">0</strong> <span style="font-size:12px;color:#888;">aguardando</span></p>
    </div>
    <div class="card" style="border-top:4px solid var(--green);">
      <h4 style="color:var(--green);">✅ FINALIZADO</h4>
      <p style="font-size:13px;color:#666;">Tarefas completamente testadas e integradas ao sistema.</p>
      <p><strong style="font-size:24px;color:var(--green);">0</strong> <span style="font-size:12px;color:#888;">prontas</span></p>
    </div>
  </div>

  <!-- RESUMO PRIORIDADES -->
  <h3 style="margin-top:24px;">🎯 Resumo por Prioridade</h3>
  <table>
    <tr><th>Tarefa</th><th>Título</th><th>Prioridade</th><th>Dificuldade</th><th>Área</th></tr>
    <tr><td><code>DB-01/02</code></td><td>Criar banco e tabelas</td><td><span class="pri-alta">🔴 Alta</span></td><td>Fácil</td><td>Database</td></tr>
    <tr><td><code>BE-01</code></td><td>Configurar CodeIgniter</td><td><span class="pri-alta">🔴 Alta</span></td><td>Médio</td><td>Backend</td></tr>
    <tr><td><code>FE-01/02</code></td><td>Layout base SPA</td><td><span class="pri-alta">🔴 Alta</span></td><td>Médio</td><td>Frontend</td></tr>
    <tr><td><code>BE-03/04</code></td><td>Endpoints receitas + login</td><td><span class="pri-alta">🔴 Alta</span></td><td>Médio/Difícil</td><td>Backend</td></tr>
    <tr><td><code>FE-04/06</code></td><td>Modal login + renderizar cards</td><td><span class="pri-alta">🔴 Alta</span></td><td>Médio</td><td>Frontend</td></tr>
    <tr><td><code>BE-06</code></td><td>Toggle curtida</td><td><span class="pri-alta">🔴 Alta</span></td><td>Médio</td><td>Backend</td></tr>
    <tr><td><code>FE-07/08</code></td><td>Filtros + paginação + curtida</td><td><span class="pri-alta">🔴 Alta</span></td><td>Médio</td><td>Frontend</td></tr>
    <tr><td><code>INT-01 a 04</code></td><td>Integrações completas</td><td><span class="pri-alta">🔴 Alta</span></td><td>Médio</td><td>Integração</td></tr>
    <tr><td><code>BE-08</code></td><td>Comentários</td><td><span class="pri-media">🟡 Média</span></td><td>Médio</td><td>Backend</td></tr>
    <tr><td><code>TEST-01</code></td><td>Responsividade mobile</td><td><span class="pri-media">🟡 Média</span></td><td>Médio</td><td>Testes</td></tr>
    <tr><td><code>TEST-02</code></td><td>Validações e segurança</td><td><span class="pri-media">🟡 Média</span></td><td>Médio</td><td>Testes</td></tr>
    <tr><td><code>DB-03</code></td><td>Dados iniciais</td><td><span class="pri-baixa">🟢 Baixa</span></td><td>Fácil</td><td>Database</td></tr>
  </table>
</div>

<a class="back-top" id="back-top" href="#" title="Voltar ao topo">↑</a>

<script>
function showSection(id) {
  document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
  document.getElementById(id).classList.add('active');
  event.target.classList.add('active');
  window.scrollTo({top: 0, behavior: 'smooth'});
}

const backTop = document.getElementById('back-top');
window.addEventListener('scroll', () => {
  backTop.classList.toggle('visible', window.scrollY > 400);
});
</script>
</body>
</html>