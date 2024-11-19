document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    // Verificação do e-mail e senha corretos
    if (email === "ericlindo@gmail.com" && password === "12345678") {
        // Redireciona para a página preta
        window.location.href = "black.html";
    } else {
        // Exibe mensagem de erro
        errorMessage.textContent = "E-mail ou senha incorretos";
        errorMessage.style.display = "block";
    }
});