<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - ImobRS</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- Flowbite CSS -->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
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
        <a href="dashboard.html"
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
              class="flex items-center w-full p-2 pl-8 text-gray-300 rounded-lg hover:bg-gray-700 transition duração-75"
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

  <!-- Conteúdo Principal -->
  <div class="md:ml-64 p-5 min-h-screen">
    <div class="mb-5">
      <h2 class="text-3xl text-gray-800">
        <i class="fas fa-chart-line"></i> Dashboard Administrativo
      </h2>
      <p class="text-gray-600">Resumo das vendas do mês</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-white rounded-lg p-5 shadow hover:-translate-y-1 transition-transform">
        <h5 class="text-lg">Imóveis Vendidos</h5>
        <h2 class="text-2xl font-bold">15</h2>
        <p class="text-green-500">+5 este mês</p>
      </div>
      <div class="bg-white rounded-lg p-5 shadow hover:-translate-y-1 transition-transform">
        <h5 class="text-lg">Novos Clientes</h5>
        <h2 class="text-2xl font-bold">12</h2>
        <p class="text-green-500">+3 este mês</p>
      </div>
      <div class="bg-white rounded-lg p-5 shadow hover:-translate-y-1 transition-transform">
        <h5 class="text-lg">Imóveis Disponíveis</h5>
        <h2 class="text-2xl font-bold">32</h2>
        <p class="text-gray-500">Estável</p>
      </div>
    </div>

    <!-- Gráfico -->
    <div class="mt-6 bg-white rounded-lg p-5 shadow">
      <h5 class="text-lg mb-4">Vendas nos últimos 6 meses</h5>
      <div class="relative h-72">
        <canvas id="salesChart"></canvas>
      </div>
    </div>
  </div>

  <!-- Script do Chart.js -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const ctx = document.getElementById('salesChart').getContext('2d');
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
          datasets: [{
            label: 'Imóveis a Venda',
            data: [5, 7, 6, 8, 10, 15],
            borderColor: '#4CAF50',
            backgroundColor: 'rgba(76, 175, 80, 0.2)',
            borderWidth: 2,
            tension: 0.4,
            pointBackgroundColor: '#4CAF50'
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    });
  </script>
  <!-- Flowbite JS -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
