// Exibe ou oculta os campos do "Outro captador" com base na seleção do <select>
document.getElementById('captador-select').addEventListener('change', function() {
    var outroFields = document.getElementById('outro-captador-fields');
    if (this.value === 'outro') {
      outroFields.classList.remove('hidden');
    } else {
      outroFields.classList.add('hidden');
    }
  });

  // Adiciona novo captador ao clicar no botão "Adicionar Captador"
  document.getElementById('btn-add-captador').addEventListener('click', function() {
    const nome = document.getElementById('captador_outro_nome').value.trim();
    const tel = document.getElementById('captador_outro_tel').value.trim();
    if (nome === "" || tel === "") {
      alert("Preencha os campos de Nome e Telefone do outro captador.");
      return;
    }
    const select = document.getElementById('captador-select');
    const newOption = document.createElement('option');
    newOption.value = nome; // ajuste o valor conforme necessário
    newOption.textContent = `${nome} (${tel})`;
    // Insere a nova opção no início da lista
    select.insertBefore(newOption, select.firstChild);
    // Define o novo captador como selecionado
    select.value = nome;
    // Opcional: oculta os campos e limpa os inputs
    document.getElementById('outro-captador-fields').classList.add('hidden');
    document.getElementById('captador_outro_nome').value = "";
    document.getElementById('captador_outro_tel').value = "";
  });

  // Resto dos scripts já existentes para funcionamento do CEP e autocomplete
  function resetInputs(containerId) {
    const container = document.getElementById(containerId);
    if (container) {
      container.querySelectorAll("input").forEach(input => {
        input.value = "";
      });
      container.querySelectorAll("ul.suggestions-list").forEach(ul => {
        ul.innerHTML = "";
        ul.classList.add("hidden");
      });
    }
  }

  function resetAutoFillFields() {
    const autoFillContainer = document.getElementById("auto_fill_fields");
    if (autoFillContainer) {
      autoFillContainer.querySelectorAll("input").forEach(input => {
        input.value = "";
      });
    }
  }

  function toggleBusca() {
    const radioCEP = document.getElementById("radio_cep");
    const grupoCEP = document.getElementById("grupo_cep");
    const grupoEndereco = document.getElementById("grupo_endereco");
    const remove_cep = document.getElementById("remove_cep");

    if (radioCEP.checked) {
      grupoCEP.style.display = "block";
      grupoEndereco.style.display = "none";
      remove_cep.style.display = "none";
      resetInputs("grupo_endereco");
      resetAutoFillFields();
    } else {
      grupoCEP.style.display = "none";
      grupoEndereco.style.display = "block";
      remove_cep.style.display = "inline-block";
      resetInputs("grupo_cep");
      resetAutoFillFields();
    }
  }

  document.getElementById("radio_cep").addEventListener("change", toggleBusca);
  document.getElementById("radio_endereco").addEventListener("change", toggleBusca);
  window.addEventListener("DOMContentLoaded", () => {
    toggleBusca();
    loadStates();
  });

  function debounce(func, delay) {
    let timeout;
    return function(...args) {
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(this, args), delay);
    }
  }

  function buscarPorCEP() {
    const cep = document.getElementById("cep_busca").value.trim().replace("-", "");
    if (cep.length !== 8) return;

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
      .then(response => response.json())
      .then(data => {
        if (data.erro) {
          console.error("CEP não encontrado.");
          return;
        }
        preencherCamposEndereco(data);
      })
      .catch(error => console.error("Erro ao buscar CEP:", error));
  }

  function preencherCamposEndereco(data) {
    document.getElementById("logradouro").value = data.logradouro || "";
    document.getElementById("bairro").value = data.bairro || "";
    document.getElementById("cidade").value = data.localidade || "";
    document.getElementById("estado").value = data.uf || "";
    document.getElementById("complemento").value = data.complemento || "";
    document.getElementById("cep_result").value = data.cep || "";

    document.getElementById("logradouro_input").value = data.logradouro || "";
    document.getElementById("suggestions").innerHTML = "";
    document.getElementById("suggestions").classList.add("hidden");
  }

  const cepInput = document.getElementById("cep_busca");
  cepInput.addEventListener("input", debounce(() => {
    const cep = cepInput.value.trim().replace("-", "");
    if (cep.length === 8) {
      buscarPorCEP();
    }
  }, 500));

  let states = [];
  let selectedState = null;

  function loadStates() {
    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome")
      .then(response => response.json())
      .then(data => {
        states = data;
      })
      .catch(error => console.error("Erro ao carregar estados:", error));
  }

  const stateInput = document.getElementById("state_input");
  const stateSuggestions = document.getElementById("state_suggestions");

  stateInput.addEventListener("input", debounce(() => {
    const term = stateInput.value.trim().toLowerCase();
    stateSuggestions.innerHTML = "";
    if (term.length > 0) {
      const filteredStates = states.filter(s =>
        s.nome.toLowerCase().includes(term) || s.sigla.toLowerCase().includes(term)
      );
      if (filteredStates.length > 0) {
        filteredStates.forEach(s => {
          const li = document.createElement("li");
          li.textContent = `${s.nome} (${s.sigla})`;
          li.classList.add("cursor-pointer", "p-2", "hover:bg-gray-200");
          li.addEventListener("click", () => {
            stateInput.value = `${s.nome} (${s.sigla})`;
            selectedState = s;
            stateSuggestions.innerHTML = "";
            stateSuggestions.classList.add("hidden");
            const cityInput = document.getElementById("city_input");
            cityInput.disabled = false;
            loadCities(s.sigla);
          });
          stateSuggestions.appendChild(li);
        });
        stateSuggestions.classList.remove("hidden");
      } else {
        stateSuggestions.classList.add("hidden");
      }
    } else {
      stateSuggestions.classList.add("hidden");
    }
  }, 300));

  let cities = [];

  function loadCities(uf) {
    fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${uf}/municipios`)
      .then(response => response.json())
      .then(data => {
        cities = data;
      })
      .catch(error => console.error("Erro ao carregar cidades:", error));
  }

  const cityInput = document.getElementById("city_input");
  const citySuggestions = document.getElementById("city_suggestions");

  cityInput.addEventListener("input", debounce(() => {
    const term = cityInput.value.trim().toLowerCase();
    citySuggestions.innerHTML = "";
    if (term.length > 0 && cities.length > 0) {
      const filteredCities = cities.filter(c => c.nome.toLowerCase().includes(term));
      if (filteredCities.length > 0) {
        filteredCities.forEach(c => {
          const li = document.createElement("li");
          li.textContent = c.nome;
          li.classList.add("cursor-pointer", "p-2", "hover:bg-gray-200");
          li.addEventListener("click", () => {
            cityInput.value = c.nome;
            citySuggestions.innerHTML = "";
            citySuggestions.classList.add("hidden");
          });
          citySuggestions.appendChild(li);
        });
        citySuggestions.classList.remove("hidden");
      } else {
        citySuggestions.classList.add("hidden");
      }
    } else {
      citySuggestions.classList.add("hidden");
    }
  }, 300));

  const logradouroInput = document.getElementById("logradouro_input");
  const suggestionsList = document.getElementById("suggestions");

  logradouroInput.addEventListener("input", debounce(() => {
    const uf = selectedState ? selectedState.sigla : "";
    const cidade = cityInput.value.trim();
    const termo = logradouroInput.value.trim();

    if (uf && cidade && termo.length >= 2) {
      fetch(`https://viacep.com.br/ws/${uf}/${encodeURIComponent(cidade)}/${encodeURIComponent(termo)}/json/`)
        .then(response => response.json())
        .then(data => {
          suggestionsList.innerHTML = "";
          if (data && !data.erro && data.length > 0) {
            data.forEach(item => {
              const li = document.createElement("li");
              li.textContent = `${item.logradouro} - ${item.bairro}`;
              li.classList.add("cursor-pointer", "p-2", "hover:bg-gray-200");
              li.addEventListener("click", () => {
                preencherCamposEndereco(item);
              });
              suggestionsList.appendChild(li);
            });
            suggestionsList.classList.remove("hidden");
          } else {
            suggestionsList.classList.add("hidden");
          }
        })
        .catch(error => console.error("Erro ao buscar logradouro:", error));
    } else {
      suggestionsList.innerHTML = "";
      suggestionsList.classList.add("hidden");
    }
  }, 500));