// BARRA DE PESQUISA
const suggestionToUrlMap = {
    "Artigos": "artigo.php",
    "Notícias": "noticias.php",
    "Jogos": "jogos.php",
    "Produtos": "produtos.php",
  };
  
  const searchInput = document.getElementById('search-input');
  const suggestionsList = document.getElementById('suggestions');
  
  searchInput.addEventListener('input', function () {
    const inputValue = searchInput.value.toLowerCase();
    const filteredSuggestions = Object.keys(suggestionToUrlMap).filter(suggestion => suggestion.toLowerCase().includes(inputValue));
  
    displaySuggestions(filteredSuggestions);
  
    // Verifique se o valor do campo de entrada está vazio
    if (inputValue === '') {
        suggestionsList.style.display = 'none';
    }
  });
  
  function displaySuggestions(suggestionsArray) {
    suggestionsList.innerHTML = '';
  
    if (suggestionsArray.length === 0) {
        suggestionsList.style.display = 'none';
        return;
    }
  
    suggestionsArray.forEach(suggestion => {
        const listItem = document.createElement('li');
        listItem.textContent = suggestion;
        listItem.addEventListener('click', function () {
            redirectToPage(suggestion);
        });
        suggestionsList.appendChild(listItem);
    });
  
    suggestionsList.style.display = 'block';
  }
  
  function redirectToPage(query) {
    const url = suggestionToUrlMap[query];
    if (url) {
        window.location.href = url;
    } else {
        alert("URL não encontrada para esta sugestão.");
    }
  }