<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Imoveis - ImobRS</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- Flowbite CSS -->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <style>
    input[disabled] {
      background-color: #f0f0f0;
      cursor: not-allowed;
    }

    /* Container para o input e sua lista de sugestões */
    .input-suggestion-container {
      display: inline-block;
      position: relative;
    }

    /* Lista de sugestões posicionada logo abaixo do input */
    .suggestions-list {
      border: 1px solid black;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 10;
      width: 100%;
      background-color: white;
      max-height: 200px;
      overflow-y: auto;
    }
  </style>
</head>

<body class="bg-[#f4f6f9]">
  <!-- Botão Hambúrguer (visível apenas em telas menores) -->
  <div class="fixed md:hidden z-20">
    <button data-drawer-target="mobile-sidebar" data-drawer-toggle="mobile-sidebar" aria-controls="mobile-sidebar" type="button"
      class="text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 rounded-lg p-2">
      <span class="sr-only">Abrir menu</span>
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <!-- Sidebar para Mobile (Drawer) -->
  <div id="mobile-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen p-4 transition-transform transform -translate-x-full bg-white dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-label">
    <h2 id="drawer-label" class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">
      <i class="fas fa-building"></i> ImobRS
    </h2>
    <ul class="space-y-2">
      <li>
        <a href="dashboard.html"
          class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-gray-700"><i
            class="fas fa-chart-line"></i><span> Dashboard</span></a>
      </li>
      <li>
        <button type="button"
          class="flex items-center w-full p-2 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
          aria-controls="imovel-menu-mobile" data-collapse-toggle="imovel-menu-mobile">
          <i class="fas fa-building flex-shrink-0 w-5 h-5 text-gray-400"></i>
          <span class="-ml-5 flex-1 text-left whitespace-nowrap">Imóvel</span>
          <svg class="w-3 h-3 ml-auto" aria-hidden="true" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <ul id="imovel-menu-mobile" class="hidden py-2 space-y-1">
          <li>
            <a
              href="imovel/imoveis.php?tipo=apartamento"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-home flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Apartamento</span>
            </a>
          </li>
          <li>
            <a
              href="imovel/imoveis.php?tipo=casa"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Casa</span>
            </a>
          </li>
          <li>
            <a
              href="imovel/imoveis.php?tipo=terreno"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Terreno</span>
            </a>
          </li>
          <li>
            <a
              href="imovel/imoveis.php?tipo=area"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Área</span>
            </a>
          </li>
          <li>
            <a
              href="imovel/imoveis.php?tipo=sitio"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Sítio</span>
            </a>
          </li>
          <li>
            <a
              href="imovel/imoveis.php?tipo=kitnet"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Kitnet</span>
            </a>
          </li>
          <li>
            <a
              href="imovel/imoveis.php?tipo=sobrado"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Sobrado</span>
            </a>
          </li>
          <li>
            <a
              href="imovel/imoveis.php?tipo=studio"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Studio</span>
            </a>
          </li>
        </ul>
      </li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Cliente Comprador</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Cliente Vendedor</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Corretor</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Captador</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-dollar-sign"></i><span> Vendas</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-file-alt"></i><span> Relatórios</span></a></li>
      <li><a href="login.html" class="flex items-center p-2 text-red-500 rounded-lg hover:bg-gray-700"><i
            class="fas fa-sign-out-alt"></i><span> Sair</span></a></li>
    </ul>
  </div>

  <!-- Sidebar para Desktop (visível em telas md para cima) -->
  <div
    class="hidden md:block md:fixed md:top-0 md:left-0 md:z-40 md:w-64 md:h-screen md:p-4 md:bg-gray-800">
    <h2 class="text-2xl font-bold mb-4 text-white">
      <i class="fas fa-building"></i> ImobRS
    </h2>
    <ul class="space-y-2">
      <li>
        <a href="../dashboard.php"
          class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-gray-700"><i
            class="fas fa-chart-line"></i><span> Dashboard</span></a>
      </li>
      <li>
        <button type="button"
          class="flex items-center w-full p-2 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
          aria-controls="imovel-menu-desktop" data-collapse-toggle="imovel-menu-desktop">
          <i class="fas fa-building flex-shrink-0 w-5 h-5 text-gray-400"></i>
          <span class="-ml-5 flex-1 text-left whitespace-nowrap">Imóvel</span>
          <svg class="w-3 h-3 ml-auto" aria-hidden="true" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <ul id="imovel-menu-desktop" class="hidden py-2 space-y-1">
          <li>
            <a
              href="imoveis.php?tipo=apartamento"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-home flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Apartamento</span>
            </a>
          </li>
          <li>
            <a
              href="imoveis.php?tipo=casa"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Casa</span>
            </a>
          </li>
          <li>
            <a
              href="imoveis.php?tipo=terreno"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Terreno</span>
            </a>
          </li>
          <li>
            <a
              href="imoveis.php?tipo=area"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Área</span>
            </a>
          </li>
          <li>
            <a
              href="imoveis.php?tipo=sitio"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duração-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Sítio</span>
            </a>
          </li>
          <li>
            <a
              href="imoveis.php?tipo=kitnet"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Kitnet</span>
            </a>
          </li>
          <li>
            <a
              href="imoveis.php?tipo=sobrado"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Sobrado</span>
            </a>
          </li>
          <li>
            <a
              href="imoveis.php?tipo=studio"
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duration-75"
            >
              <i class="fas fa-building flex-shrink-0 w-5 h-5"></i>
              <span class="ml-3">-Studio</span>
            </a>
          </li>
        </ul>
      </li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Cliente Comprador</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Cliente Vendedor</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Corretor</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-users"></i><span> Captador</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-dollar-sign"></i><span> Vendas</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700"><i
            class="fas fa-file-alt"></i><span> Relatórios</span></a></li>
      <li><a href="login.html" class="flex items-center p-2 text-red-500 rounded-lg hover:bg-gray-700"><i
            class="fas fa-sign-out-alt"></i><span> Sair</span></a></li>
    </ul>
  </div>

  <!-- Conteúdo Principal -->
  <div class="md:ml-64 p-5 min-h-screen relative">
    <div class="mb-5">
      <h2 class="text-3xl text-gray-800">
        <i class="fas fa-chart-line"></i> Adicionar imóvel
      </h2>
    </div>

    <!-- Promotores do imóvel -->
    <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
      <form action="#" method="post">
        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <p class="text-3xl -mt-10 mb-10 -ml-12">Promotores do imóvel:</p>
          <label for="gestor">Gestor (corretor):</label>
          <select class="border pr-8" required name="gestor">
            <option value="default">Dono</option>
          </select>

          <label for="captador">Captador:</label>
          <select class="border pr-8" required name="captador" id="captador-select">
            <option value="Jeferson">Roberto (+55 56 4654-8757)</option>
            <option value="outro">Outro captador</option>
          </select>

          <!-- Container para os campos do "Outro captador" (inicialmente oculto) -->
          <div id="outro-captador-fields" class="hidden">
            <p class="text-3xl mt-5 mb-10 -ml-12">Outro captador:</p>
            <label for="captador_outro_nome">Nome:</label>
            <input type="text" id="captador_outro_nome" name="captador_outro_nome" class="border" required>

            <label for="captador_outro_tel">Telefone:</label>
            <input type="tel" id="captador_outro_tel" name="captador_outro_tel" class="border" required>

            <button type="button" id="btn-add-captador" class="border rounded-xl p-2 bg-green-400 text-white">Adicionar Captador</button>
          </div>
        </div>

        <!-- Dados do proprietário -->
        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <p class="text-3xl -mt-10 mb-10 -ml-12">Dados do proprietário:</p>
          <label for="proprietario_nome">Nome:</label>
          <input type="text" id="proprietario_nome" name="proprietario_nome" class="border" required>

          <label for="proprietario_fone">Fone/WhatsApp:</label>
          <input type="tel" id="proprietario_fone" name="proprietario_fone" class="border" required>

          <label for="proprietario_email">E-mail:</label>
          <input type="email" id="proprietario_email" name="proprietario_email" class="border" required>
        </div>

        <!-- Endereço do imóvel -->
        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md relative">
          <p class="text-3xl -mt-10 mb-10 -ml-12">Endereço do Imóvel:</p>

          <!-- Seleção do método de busca -->
          <p class="mb-4">
            <input type="radio" name="tipo_endereco" value="cep" id="radio_cep" class="border-2 border-blue-500 rounded-full w-5 h-5" checked>
            <label for="radio_cep">Buscar por CEP</label>

            <input type="radio" name="tipo_endereco" value="endereco" id="radio_endereco" class="border-2 border-blue-500 rounded-full w-5 h-5 ml-4">
            <label for="radio_endereco">Buscar por Endereço</label>
          </p>

          <!-- Grupo para busca por CEP -->
          <div id="grupo_cep">
            <label for="cep_busca">CEP:</label>
            <input type="text" id="cep_busca" placeholder="Digite o CEP" class="border border-black">
          </div>

          <!-- Grupo para busca por Endereço com autocomplete -->
          <div id="grupo_endereco" class="inline-block">
            <div class="input-suggestion-container">
              <label for="state_input">Estado (UF):</label>
              <input type="text" id="state_input" placeholder="Digite o estado" class="border border-black">
              <ul id="state_suggestions" class="suggestions-list hidden"></ul>
            </div>

            <div class="input-suggestion-container">
              <label for="city_input">Cidade:</label>
              <input type="text" id="city_input" placeholder="Digite a cidade" class="border border-black" disabled>
              <ul id="city_suggestions" class="suggestions-list hidden"></ul>
            </div>

            <div class="input-suggestion-container">
              <label for="logradouro_input">Logradouro (rua):</label>
              <input type="text" id="logradouro_input" placeholder="Digite parte do logradouro" class="border border-black">
              <ul id="suggestions" class="suggestions-list hidden"></ul>
            </div>
          </div>

          <br>
          <hr><br>

          <!-- Campos de preenchimento automático -->
          <div id="auto_fill_fields" class="inline-block">
            <label for="logradouro">Logradouro (rua):</label>
            <input type="text" id="logradouro" name="logradouro" class="border border-black" required>

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" class="border border-black" required>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" class="border border-black" required>

            <br>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" class="border border-black" required>

            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" class="border border-black" required>

            <div id="remove_cep">
              <label for="cep_result">CEP:</label>
              <input type="text" id="cep_result" name="cep" class="border border-black" required>
            </div>
          </div>
          <br>
          <hr><br>

          <label for="complemento">Complemento:</label>
          <input type="text" id="complemento" name="complemento" class="border border-black">

          <label for="complemento_imovel">Complemento (Imóvel):</label>
          <input type="text" id="complemento_imovel" name="complemento_imovel" class="border-black border">
        </div>

        <!-- Expectativas do proprietário -->
        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <p class="text-3xl -mt-10 mb-10 -ml-12">Expectativas do proprietário:</p>
          <p>
            <input type="radio" name="regiao" class="border-2 border-blue-500 rounded-full w-5 h-5"> Mudar para cidade próxima
            <input type="radio" name="regiao" class="border-2 border-blue-500 rounded-full w-5 h-5"> Mudar de região
          </p>
          <p>
            <input type="radio" name="valor" class="border-2 border-blue-500 rounded-full w-5 h-5"> Mudar para imóvel de menor valor
            <input type="radio" name="valor" class="border-2 border-blue-500 rounded-full w-5 h-5"> Mudar para imóvel de maior valor
          </p>
          <textarea placeholder="Comentários" class="border mt-2 md:pr-72"></textarea>
        </div>

        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <!-- Situação do Imóvel (igual para todos os tipos) -->
          <p class="text-3xl -mt-10 mb-10 -ml-12">Situação do Imóvel</p>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


            <div>
              <label for="finalidade" class="block font-medium mb-1">Finalidade:</label>
              <select id="finalidade" name="finalidade" class="border w-full p-2" required>
                <option value="residencial">Residencial</option>
                <option value="comercial">Comercial</option>
                <option value="industrial">Industrial</option>
                <option value="rural">Rural</option>
              </select>
            </div>


            <div>
              <label for="status_cadastro" class="block font-medium mb-1">Status do Cadastro:</label>
              <select id="status_cadastro" name="status_cadastro" class="border w-full p-2" required>
                <option value="ativo">Ativo</option>
                <option value="suspenso">Suspenso</option>
                <option value="cancelado">Cancelado</option>
                <option value="provisorio">Provisório</option>
              </select>
            </div>
            <div>
              <label for="status_comercial" class="block font-medium mb-1">Status do Comercial:</label>
              <select id="status_comercial" name="status_comercial" class="border w-full p-2" required>
                <option value="disponivel">Disponível</option>
                <option value="em_contratacao">Em Contratação</option>
                <option value="pcv_financiamento">PCV – Em Financiamento</option>
                <option value="pcv_resolutivo">PCV – Resolutivo</option>
                <option value="pvc_financiamento">PVC – Com Financiamento</option>
                <option value="vendido">Vendido</option>
              </select>
            </div>
          </div>

          <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="md:col-span-1">
              <label for="iptu" class="block font-medium mb-1">IPTU/ITR mensal (R$):</label>
              <input type="text" id="iptu" name="iptu" class="border w-full p-2" placeholder="0,00">
            </div>


            <div>
              <label for="encontra_se" class="block font-medium mb-1">Encontra-se:</label>
              <select id="encontra_se" name="encontra_se" class="border w-full p-2" required>
                <option value="ocupado">Ocupado</option>
                <option value="desocupado">Desocupado</option>
                <option value="locado">Locado</option>
              </select>
            </div>


            <div>
              <label for="momento" class="block font-medium mb-1">Momento:</label>
              <select id="momento" name="momento" class="border w-full p-2" required>
                <option value="novo">Novo</option>
                <option value="em_construcao">Em construção</option>
                <option value="usado">Usado</option>
                <option value="lancamento">Lançamento</option>
                <option value="reformado">Reformado</option>
              </select>
            </div>


            <div>
              <label for="exclusividade" class="block font-medium mb-1">Exclusividade:</label>
              <select id="exclusividade" name="exclusividade" class="border w-full p-2" required>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
              </select>
            </div>

            <div>
              <label for="ano_construcao" class="block font-medium mb-1">Ano da construção:</label>
              <input type="number" id="ano_construcao" name="ano_construcao" class="border w-full p-2" placeholder="YYYY">
            </div>
          </div>

          <div class="mt-6">
            <label for="obs_imobiliaria" class="block font-medium mb-1">Comentários sobre a situação do imóvel:</label>
            <textarea id="obs_imobiliaria" name="obs_imobiliaria" class="border w-full p-2 h-32" placeholder="Digite aqui..."></textarea>
          </div>

        </div>

        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <!-- Início Condição Comercial -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">
            Condição Comercial
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Preço de anúncio -->
            <div>
              <label for="preco_anuncio" class="block font-medium mb-1">
                Preço de anúncio do imóvel: R$
              </label>
              <input
                type="text"
                id="preco_anuncio"
                name="preco_anuncio"
                class="border w-full p-2"
                placeholder="0,00" />
            </div>

          </div>

          <!-- Checkboxes -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
            <label class="flex items-center">
              <input type="checkbox" name="avalia_veiculo" class="mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm" />
              Avalia Veículo
            </label>
            <label class="flex items-center">
              <input type="checkbox" name="avalia_imovel_maior" class="mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm" />
              Avalia imóvel de maior valor
            </label>
            <label class="flex items-center">
              <input type="checkbox" name="financia_direto" class="mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm" />
              Financia direto
            </label>
            <label class="flex items-center">
              <input type="checkbox" name="avalia_imovel_menor" class="mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm" />
              Avalia imóvel de menor valor
            </label>
          </div>

          <!-- Comentários -->
          <div class="mt-6">
            <label for="obs_comercial" class="block font-medium mb-1">
              Comentários imóvel:
            </label>
            <textarea
              id="obs_comercial"
              name="obs_comercial"
              class="border w-full p-2 h-32"
              placeholder="Digite aqui..."></textarea>
          </div>


        </div>

        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <!-- Preço e Mercado -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">
            Preço e Mercado:
          </p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="faixa_preco_min" class="block font-medium mb-1">
                Faixa de preço de imóveis similares: de R$
              </label>
              <input
                type="text"
                id="faixa_preco_min"
                name="faixa_preco_min"
                class="border w-full p-2"
                placeholder="0,00" />
            </div>
            <div>
              <label for="faixa_preco_max" class="block font-medium mb-1">
                até R$
              </label>
              <input
                type="text"
                id="faixa_preco_max"
                name="faixa_preco_max"
                class="border w-full p-2"
                placeholder="0,00" />
            </div>
          </div>

          <div class="mt-6">
            <label for="obs_preco_mercado" class="block font-medium mb-1">
              Comentários imóvel:
            </label>
            <textarea
              id="obs_preco_mercado"
              name="obs_preco_mercado"
              class="border w-full p-2 h-24"
              placeholder="Digite aqui..."></textarea>
          </div>

          <hr class="my-8">

          <!-- Financiável -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">
            É financiável?
          </p>
          <div class="flex flex-col md:flex-row md:space-x-6 space-y-4 md:space-y-0">
            <label class="flex items-center">
              <input type="radio" name="financiavel" value="sem_ressalvas" class="border-2 border-blue-500 rounded-full w-5 h-5" />
              <span class="px-2 py-1 bg-green-400">Sim, sem ressalvas</span>
            </label>
            <label class="flex items-center">
              <input type="radio" name="financiavel" value="com_ressalvas" class="border-2 border-blue-500 rounded-full w-5 h-5" />
              <span class="px-2 py-1 bg-yellow-300">Sim, com ressalvas</span>
            </label>
            <label class="flex items-center">
              <input type="radio" name="financiavel" value="nao_financiavel" class="border-2 border-blue-500 rounded-full w-5 h-5" />
              <span class="px-2 py-1 bg-red-400 text-white">Não é financiável</span>
            </label>
          </div>

          <div class="mt-6">
            <label for="obs_financiavel" class="block font-medium mb-1">
              Comentários imóvel:
            </label>
            <textarea
              id="obs_financiavel"
              name="obs_financiavel"
              class="border w-full p-2 h-24"
              placeholder="Digite aqui..."></textarea>
          </div>

          <hr class="my-8">

          <!-- Padrão de acabamento -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">
            Padrão de acabamento:
          </p>
          <div class="flex flex-col md:flex-row md:space-x-6 space-y-4 md:space-y-0">
            <label class="flex items-center">
              <input type="radio" name="padrao_acabamento" value="baixo" class="border-2 border-blue-500 rounded-full w-5 h-5" />
              <span class="px-2 py-1 bg-red-400 text-white">Baixo</span>
            </label>
            <label class="flex items-center">
              <input type="radio" name="padrao_acabamento" value="medio" class="border-2 border-blue-500 rounded-full w-5 h-5" />
              <span class="px-2 py-1 bg-yellow-300">Médio</span>
            </label>
            <label class="flex items-center">
              <input type="radio" name="padrao_acabamento" value="alto" class="border-2 border-blue-500 rounded-full w-5 h-5" />
              <span class="px-2 py-1 bg-green-400 text-white">Alto</span>
            </label>
          </div>

          <div class="mt-6">
            <label for="obs_acabamento" class="block font-medium mb-1">
              Comentários imóvel:
            </label>
            <textarea
              id="obs_acabamento"
              name="obs_acabamento"
              class="border w-full p-2 h-24"
              placeholder="Digite aqui..."></textarea>
          </div>

        </div>

        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <!-- Controle de Chaves -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">Controle de Chaves</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <!-- Radios -->
            <div>
              <label class="block font-medium mb-2">Chaves com:</label>
              <div class="flex space-x-6">
                <label class="flex items-center">
                  <input type="radio" name="chaves_com" value="proprietario" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                  Proprietário
                </label>
                <label class="flex items-center">
                  <input type="radio" name="chaves_com" value="imobiliaria" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                  Imobiliária
                </label>
                <label class="flex items-center">
                  <input type="radio" name="chaves_com" value="outro" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                  Outro
                </label>
              </div>
            </div>
            <!-- Descrição Outro -->
            <div>
              <label for="chaves_outro" class="block font-medium mb-2">
                Outro – Descreva a outra localização das chaves:
              </label>
              <input
                type="text"
                id="chaves_outro"
                name="chaves_outro"
                class="border w-full p-2"
                placeholder="Descreva aqui..." />
            </div>
          </div>

          <hr class="my-8">

          <!-- Upload de Fotos -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">Fotos do Imóvel</p>
          <div class="flex flex-col items-center justify-center border-2 border-dashed border-gray-300 bg-white p-6 rounded-xl">
            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400"></i>
            <p class="mt-4">Arraste e solte sua imagem aqui ou</p>
            <input
              type="file"
              id="fotos_imovel"
              name="fotos_imovel[]"
              accept="image/*"
              multiple
              class="hidden" />
            <button
              type="button"
              onclick="document.getElementById('fotos_imovel').click()"
              class="mt-4 border rounded-xl px-4 py-2 bg-pink-600 text-white">
              Buscar Imagens
            </button>
          </div>

          <hr class="my-8">

          <!-- Upload de Vídeo -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">Vídeo do Imóvel</p>
          <div class="flex flex-col items-center justify-center border-2 border-dashed border-gray-300 bg-white p-6 rounded-xl">
            <i class="fas fa-video text-4xl text-gray-400"></i>
            <p class="mt-4">Arraste e solte seu vídeo aqui ou</p>
            <input
              type="file"
              id="video_imovel"
              name="video_imovel"
              accept="video/*"
              class="hidden" />
            <button
              type="button"
              onclick="document.getElementById('video_imovel').click()"
              class="mt-4 border rounded-xl px-4 py-2 bg-red-600 text-white">
              Buscar Vídeo
            </button>
          </div>

        </div>

        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <!-- Exposição -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">
            Exposição
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tipo de Sinalização -->
            <div>
              <label class="block font-medium mb-2">Tipo de sinalização:</label>
              <div class="flex flex-wrap gap-4">
                <label class="flex items-center">
                  <input type="radio" name="tipo_sinalizacao" value="nao" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                  Não
                </label>
                <label class="flex items-center">
                  <input type="radio" name="tipo_sinalizacao" value="placa" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                  Placa
                </label>
                <label class="flex items-center">
                  <input type="radio" name="tipo_sinalizacao" value="adesivo" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                  Adesivo
                </label>
                <label class="flex items-center">
                  <input type="radio" name="tipo_sinalizacao" value="banner" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                  Banner
                </label>
              </div>
            </div>

            <!-- Sinalização no local + Datas -->
            <div>
              <div class="mb-4">
                <label for="sinalizacao_local" class="block font-medium mb-1">
                  Sinalização no local:
                </label>
                <input
                  type="text"
                  id="sinalizacao_local"
                  name="sinalizacao_local"
                  class="border w-full p-2"
                  placeholder="Ex: Faixa" />
              </div>
              <div class="flex space-x-4">
                <div>
                  <label for="data_colocacao" class="block font-medium mb-1">
                    Data da colocação:
                  </label>
                  <input
                    type="date"
                    id="data_colocacao"
                    name="data_colocacao"
                    class="border p-2" />
                </div>
                <div>
                  <label for="data_retirada" class="block font-medium mb-1">
                    Data da retirada:
                  </label>
                  <input
                    type="date"
                    id="data_retirada"
                    name="data_retirada"
                    class="border p-2" />
                </div>
              </div>
            </div>
          </div>

          <div class="mt-6">
            <label class="block font-medium mb-1">Publicar no site:</label>
            <div class="flex items-center space-x-6">
              <label class="flex items-center">
                <input type="radio" name="publicar_site" value="sim" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                Sim
              </label>
              <label class="flex items-center">
                <input type="radio" name="publicar_site" value="nao" class="border-2 border-blue-500 rounded-full w-5 h-5" />
                Não
              </label>
            </div>
          </div>

          <div class="mt-6">
            <label for="desc_site" class="block font-medium mb-1">
              Descrição para o Site (chame atenção dos clientes para os benefícios oferecidos pelo imóvel):
            </label>
            <textarea
              id="desc_site"
              name="desc_site"
              class="border w-full p-2 h-32"
              placeholder="Digite aqui..."></textarea>
          </div>

          <hr class="my-8">

          <!-- Documentação do imóvel -->
          <p class="text-3xl -mt-10 mb-6 -ml-12">Documentação do imóvel</p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="matricula_num" class="block font-medium mb-1">
                Nº da matrícula:
              </label>
              <input
                type="text"
                id="matricula_num"
                name="matricula_num"
                class="border w-full p-2"
                placeholder="Digite aqui..." />
            </div>
            <div>
              <label for="economia_iptu" class="block font-medium mb-1">
                Nº economia – IPTU:
              </label>
              <input
                type="text"
                id="economia_iptu"
                name="economia_iptu"
                class="border w-full p-2"
                placeholder="Digite aqui..." />
            </div>
          </div>

          <div class="mt-6 border rounded-xl bg-white">
            <div class="bg-red-600 text-white px-4 py-2 rounded-t-xl font-medium">
              Upload de documentos: matrícula, negativas, capa carnê do IPTU, boleto do condomínio, plantas...
            </div>
            <div
              class="p-6 flex flex-col items-center justify-center border-2 border-dashed border-red-600 rounded-b-xl">
              <i class="fas fa-cloud-upload-alt text-4xl text-red-500"></i>
              <p class="mt-2">Arraste e solte aqui ou</p>
              <input
                type="file"
                id="docs_imovel"
                name="docs_imovel[]"
                accept=".pdf,.jpg,.jpeg,.png,.doc,.docx"
                multiple
                class="hidden" />
              <button
                type="button"
                onclick="document.getElementById('docs_imovel').click()"
                class="mt-4 border rounded-xl px-4 py-2 bg-red-500 text-white">
                Buscar Documentos
              </button>
            </div>
          </div>

          <div class="mt-6">
            <label for="obs_doc_imovel" class="block font-medium mb-1">
              Comentários sobre a documentação do imóvel:
            </label>
            <textarea
              id="obs_doc_imovel"
              name="obs_doc_imovel"
              class="border w-full p-2 h-24"
              placeholder="Digite aqui..."></textarea>
          </div>

        </div>

        <div class="mb-5 p-14 rounded-2xl bg-white shadow-md">
          <?php

          $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);

          $casa = "<!-- Caracterização do Imóvel -->
<p class=\"text-3xl -mt-10 mb-6 -ml-12\">CARACTERIZAÇÃO DO IMÓVEL (casa)</p>

<!-- Sobre o Terreno -->
<div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
  <div>
    <label class=\"block font-medium mb-1\">Medidas:</label>
    <div class=\"flex space-x-2\">
      <input type=\"text\" name=\"terreno_largura\" placeholder=\"______ m\" class=\"border p-2 w-1/2\" />
      <span class=\"self-center\">×</span>
      <input type=\"text\" name=\"terreno_comprimento\" placeholder=\"______ m\" class=\"border p-2 w-1/2\" />
    </div>
  </div>
  <div>
    <label for=\"area_total\" class=\"block font-medium mb-1\">Área total:</label>
    <input type=\"text\" id=\"area_total\" name=\"area_total\" placeholder=\"__________ m²\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Posição solar/face:</label>
    <div class=\"flex flex-wrap gap-4\">
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"norte\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Norte</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"sul\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Sul</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"leste\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Leste</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"oeste\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Oeste</label>
    </div>
  </div>
</div>

<div class=\"mt-6\">
  <label class=\"block font-medium mb-1\">Topografia:</label>
  <div class=\"flex flex-wrap gap-6\">
    <label class=\"flex items-center\"><input type=\"radio\" name=\"topografia\" value=\"plano\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Plano</label>
    <label class=\"flex items-center\"><input type=\"radio\" name=\"topografia\" value=\"aclive\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Aclive</label>
    <label class=\"flex items-center\"><input type=\"radio\" name=\"topografia\" value=\"declive\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Declive</label>
  </div>
</div>

<div class=\"mt-6 flex flex-wrap gap-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"horta\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Horta</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"pomar\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Pomar</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"jardim\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Jardim</label>
</div>

<hr class=\"my-8\">

<!-- Sobre a(s) Edificação(ões) -->
<p class=\"text-3xl -mt-10 mb-6 -ml-12\">Sobre a(s) Edificação(ões)</p>
<div class=\"grid grid-cols-1 md:grid-cols-4 gap-6\">
  <div><label class=\"block font-medium mb-1\">Área construída (m²):</label><input type=\"text\" name=\"area_construida\" class=\"border w-full p-2\" /></div>
  <div><label class=\"block font-medium mb-1\">Andares:</label><input type=\"number\" name=\"andares\" class=\"border w-full p-2\" /></div>
  <div><label class=\"block font-medium mb-1\">Dormitórios:</label><input type=\"number\" name=\"dormitorios\" class=\"border w-full p-2\" /></div>
  <div><label class=\"block font-medium mb-1\">Suítes:</label><input type=\"number\" name=\"suites\" class=\"border w-full p-2\" /></div>
  <div><label class=\"block font-medium mb-1\">Banheiros:</label><input type=\"number\" name=\"banheiros\" class=\"border w-full p-2\" /></div>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-3 gap-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"lavabo\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Lavabo</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"aquec_gas\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Aquecimento: Gás</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"aquec_eletrico\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Aquecimento: Elétrico</label>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-4 gap-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mezanino\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Mezanino</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"gabinete\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Gabinete</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"lareira\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Lareira</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"elevador\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Elevador</label>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-4 gap-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"deposito\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Depósito</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"espaco_gourmet\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Espaço Gourmet</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"churrasqueira\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Churrasqueira</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piscina\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Piscina</label>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-3 gap-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"quiosque\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Quiosque</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"energia_solar\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Energia Solar</label>
  <!-- outros checkboxes aqui -->
</div>

<hr class=\"my-8\">

<div class=\"grid grid-cols-1 md:grid-cols-4 gap-6\">
  <div><label class=\"block font-medium mb-1\">Vagas (cobertas):</label><input type=\"number\" name=\"vagas_cobertas\" class=\"border w-full p-2\" /></div>
  <div><label class=\"block font-medium mb-1\">Vagas (descobertas):</label><input type=\"number\" name=\"vagas_descobertas\" class=\"border w-full p-2\" /></div>
  <div><label class=\"block font-medium mb-1\">IPTU anual (R$):</label><input type=\"text\" name=\"iptu_anual\" class=\"border w-full p-2\" /></div>
  <div class=\"flex items-center\"><input type=\"checkbox\" name=\"portaria_24h\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" /><label>Portaria 24h</label></div>
</div>

<div class=\"mt-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"em_condominio\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Em condomínio</label>
</div>

<hr class=\"my-8\">

<!-- Piso -->
<p class=\"text-2xl font-medium mb-4\">Piso:</p>
<div class=\"flex flex-wrap gap-4\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_porcelanato\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Porcelanato</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_ceramico\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Cerâmico</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_tabao\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Taboão</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_taco\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Taco</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_vinilico\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Vinílico</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_laminado\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Laminado</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_cimento\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Cimento</label>
</div>

<!-- Mobiliário -->
<p class=\"text-2xl font-medium mt-8 mb-4\">Mobiliário:</p>
<div class=\"flex flex-wrap gap-4\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_dormitorios\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Dormitórios</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_estar\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Estar</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_cozinha\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Cozinha</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_jantar\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Jantar</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_escritorio\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Escritório</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_banheiro\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Banheiro</label>
</div>

<div class=\"mt-6\">
  <label for=\"obs_edificacao\" class=\"block font-medium mb-1\">
    Descreva mais características da(s) edificação(ões):
  </label>
  <textarea id=\"obs_edificacao\" name=\"obs_edificacao\" class=\"border w-full p-2 h-24\" placeholder=\"Digite aqui...\"></textarea>
</div>

<hr class=\"my-8\">
";

          $condominio = "<!-- Infraestrutura do Condomínio -->
<p class=\"text-3xl -mt-10 mb-6 -ml-12\">Infraestrutura do Condomínio</p>
<div class=\"flex flex-wrap gap-6\">
  <label class=\"flex items-center\">Nome do condominio:<input type=\"text\" id=\"area_total\" name=\"area_total\" class=\"border w-full p-2\" /></label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_portaria\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Portaria</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_piscina_adulto\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Piscina adulto</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_piscina_infantil\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Piscina infantil</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_salao_festas\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Salão de festas</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_quiosque\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Quiosque</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_playground\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Playground</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_area_esportes\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Área para esportes</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_academia\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Academia</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_area_lazer\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Área de Lazer</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"infra_comercio_interno\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Comércio Interno</label>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
  <div>
    <label for=\"condominio_mensal\" class=\"block font-medium mb-1\">Condomínio mensal (R$):</label>
    <input type=\"text\" id=\"condominio_mensal\" name=\"condominio_mensal\" class=\"border w-full p-2\" />
  </div>
</div>

<div class=\"mt-6\">
  <label for=\"obs_condominio\" class=\"block font-medium mb-1\">
    Descreva mais características do condomínio:
  </label>
  <textarea id=\"obs_condominio\" name=\"obs_condominio\" class=\"border w-full p-2 h-24\" placeholder=\"Digite aqui...\"></textarea>
</div>";

$terreno = "<!-- Caracterização do Imóvel (terreno) -->
<p class=\"text-3xl -mt-10 mb-6 -ml-12\">CARACTERIZAÇÃO DO IMÓVEL (terreno)</p>

<!-- Dimensões e Posição -->
<div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
  <div>
    <label class=\"block font-medium mb-1\">Unidade de medida:</label>
    <input type=\"text\" name=\"unidade_medida\" placeholder=\"ha\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Medidas:</label>
    <div class=\"flex space-x-2\">
      <input type=\"text\" name=\"terreno_largura\" placeholder=\"______ m\" class=\"border p-2 w-1/2\" />
      <span class=\"self-center\">×</span>
      <input type=\"text\" name=\"terreno_comprimento\" placeholder=\"______ m\" class=\"border p-2 w-1/2\" />
    </div>
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Área total:</label>
    <input type=\"text\" name=\"area_total_terreno\" placeholder=\"__________ m²/ha\" class=\"border w-full p-2\" />
  </div>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
  <div>
    <label class=\"block font-medium mb-1\">Posição Solar/Face:</label>
    <div class=\"flex flex-wrap gap-4\">
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"norte\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Norte</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"sul\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Sul</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"leste\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Leste</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"face\" value=\"oeste\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Oeste</label>
    </div>
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Topografia:</label>
    <div class=\"flex flex-wrap gap-6\">
      <label class=\"flex items-center\"><input type=\"radio\" name=\"topografia\" value=\"plano\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Plano</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"topografia\" value=\"aclive\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Aclive</label>
      <label class=\"flex items-center\"><input type=\"radio\" name=\"topografia\" value=\"declive\" class=\"border-2 border-blue-500 rounded-full w-5 h-5\" />Declive</label>
    </div>
  </div>
</div>

<hr class=\"my-8\">

<!-- Infraestrutura do Terreno -->
<p class=\"text-2xl font-medium mb-4\">Infraestrutura do Terreno:</p>
<div class=\"flex flex-wrap gap-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"agua\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Água</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"energia_eletrica\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Energia elétrica</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"esgoto\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Esgoto</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"pavimentacao\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Pavimentação</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"internet\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Internet</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"tv_cabo\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />TV a Cabo</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"em_condominio\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Em condomínio</label>
</div>
<div class=\"mt-4\">
  <label for=\"obs_infra_terreno\" class=\"block font-medium mb-1\">Comentários sobre a infraestrutura do terreno (visível somente para a imobiliária):</label>
  <textarea id=\"obs_infra_terreno\" name=\"obs_infra_terreno\" class=\"border w-full p-2 h-24\" placeholder=\"Digite aqui...\"></textarea>
</div>

<hr class=\"my-8\">
";

$apartamento = "<!-- Caracterização do Imóvel (Apartamento) -->
<p class=\"text-3xl -mt-10 mb-6 -ml-12\">CARACTERIZAÇÃO DO IMÓVEL (Apartamento)</p>

<!-- Sobre o Apartamento -->
<div class=\"grid grid-cols-1 md:grid-cols-5 gap-6\">
  <div>
    <label class=\"block font-medium mb-1\">Área privativa:</label>
    <input type=\"text\" name=\"area_privativa\" placeholder=\"______ m²\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Dormitórios:</label>
    <input type=\"number\" name=\"dormitorios\" placeholder=\"____\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Suítes:</label>
    <input type=\"number\" name=\"suites\" placeholder=\"____\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Banheiros:</label>
    <input type=\"number\" name=\"banheiros\" placeholder=\"____\" class=\"border w-full p-2\" />
  </div>
  <div class=\"flex items-center\">
    <input type=\"checkbox\" name=\"lavabo\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />
    <label>Lavabo</label>
  </div>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-6 gap-6\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"gabinete\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Gabinete</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"deposito\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Depósito</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"churrasqueira\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Churrasqueira</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"sacada\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Sacada</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"aquec_gas\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Aquecimento: Gás</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"aquec_eletrico\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Elétrico</label>
</div>

<div class=\"mt-6 grid grid-cols-1 md:grid-cols-4 gap-6\">
  <div>
    <label class=\"block font-medium mb-1\">Vagas cobertas:</label>
    <input type=\"number\" name=\"vagas_cobertas\" placeholder=\"____\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Vagas descobertas:</label>
    <input type=\"number\" name=\"vagas_descobertas\" placeholder=\"____\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">Andar:</label>
    <input type=\"text\" name=\"andar\" placeholder=\"___ de ____\" class=\"border w-full p-2\" />
  </div>
  <div>
    <label class=\"block font-medium mb-1\">IPTU anual (R$):</label>
    <input type=\"text\" name=\"iptu_anual_apto\" placeholder=\"R\$_____\" class=\"border w-full p-2\" />
  </div>
</div>

<hr class=\"my-8\" />

<!-- Piso -->
<p class=\"text-2xl font-medium mb-4\">Piso:</p>
<div class=\"flex flex-wrap gap-4\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_porcelanato\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Porcelanato</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_ceramico\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Cerâmico</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_taboao\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Taboão</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_taco\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Taco</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_vinilico\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Vinílico</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_laminado\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Laminado</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"piso_cimento\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Cimento</label>
</div>

<hr class=\"my-8\" />

<!-- Mobília -->
<p class=\"text-2xl font-medium mb-4\">Mobília:</p>
<div class=\"flex flex-wrap gap-4\">
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_dormitorios\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Dormitórios</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_estar\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Estar</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_cozinha\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Cozinha</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_jantar\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Jantar</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_escritorio\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Escritório</label>
  <label class=\"flex items-center\"><input type=\"checkbox\" name=\"mob_banheiro\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Banheiro</label>
  <label class=\"flex items-center ml-4\"><input type=\"checkbox\" name=\"em_condominio\" class=\"mr-2 w-5 h-5 border-2 border-blue-500 rounded-sm\" />Em condomínio</label>
</div>

<div class=\"mt-6\">
  <label for=\"obs_apartamento\" class=\"block font-medium mb-1\">
    Descreva mais características do apartamento (visível somente para a imobiliária):
  </label>
  <textarea id=\"obs_apartamento\" name=\"obs_apartamento\" class=\"border w-full p-2 h-24\" placeholder=\"Digite aqui...\"></textarea>
</div>
\";";


          // Exemplo de uso: apresentar diferentes conteúdos
          switch ($tipo) {
            case 'apartamento':
              echo $apartamento;
              echo $condominio;
              break;
            case 'casa':
              echo $casa;
              echo $condominio;
              break;
            case 'terreno':
              echo $terreno;
              echo $condominio;
              break;
            case 'area':
              echo "<h1>Exibindo area disponíveis</h1>";
              break;
            case 'sitio':
              echo "<h1>Exibindo sitio disponíveis</h1>";
              break;
            case 'kitnet':
              echo "<h1>Exibindo kitnet disponíveis</h1>";
              break;
            case 'sobrado':
              echo "<h1>Exibindo sobrado disponíveis</h1>";
              break;
            case 'studio':
              echo "<h1>Exibindo studio disponíveis</h1>";
              break;

            default:
              echo "<h1>Tipo de imóvel inválido: " . htmlspecialchars($tipo) . "</h1>";
              break;
          }

          ?>
        </div>

        <input type="submit" value="Próximo" class="border rounded-xl p-2 bg-blue-400 text-white">
      </form>
    </div>
  </div>

  <script src="imoveljs.js"></script>

  <!-- Flowbite JS -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>