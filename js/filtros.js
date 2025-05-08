document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('filtroImoveis');
    const imoveis = document.querySelectorAll('.property-card');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const tipoSelecionado = document.getElementById('tipoImovel').value;
        const faixaPrecoSelecionada = document.getElementById('faixaPreco').value;
        const quartosSelecionados = document.getElementById('quartos').value;
        const areaSelecionada = document.getElementById('area').value;

        imoveis.forEach(imovel => {
            let mostrar = true;

            // Filtro por tipo
            if (tipoSelecionado && imovel.dataset.tipo !== tipoSelecionado) {
                mostrar = false;
            }

            // Filtro por preço
            if (faixaPrecoSelecionada && mostrar) {
                const preco = parseInt(imovel.dataset.preco);
                const [min, max] = faixaPrecoSelecionada.split('-').map(Number);
                if (preco < min || preco > max) {
                    mostrar = false;
                }
            }

            // Filtro por quartos
            if (quartosSelecionados && mostrar) {
                const quartos = parseInt(imovel.dataset.quartos);
                if (quartos < parseInt(quartosSelecionados)) {
                    mostrar = false;
                }
            }

            // Filtro por área
            if (areaSelecionada && mostrar) {
                const area = parseInt(imovel.dataset.area);
                const [min, max] = areaSelecionada.split('-').map(Number);
                if (area < min || area > max) {
                    mostrar = false;
                }
            }

            // Mostrar ou esconder o imóvel
            imovel.closest('.col-md-4').style.display = mostrar ? 'block' : 'none';
        });
    });
}); 