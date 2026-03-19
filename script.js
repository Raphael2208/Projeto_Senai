const botao = document.getElementById("borao-tema"); // const = variável que não pode ter seu conteúdo alterado.
const corpo = document.body // poderia usar 'let' = variável q pode ter seu conteúdo alterado

if (localStorage.getItem("tema") === "escuro") {
    corpo.classList.add("tema-escuro");
}

botao.addEventListener("click", function() {
    corpo.classList.toggle("tema-escuro");
    
    if (corpo.classList.contains("tema-escuro")) {
        localStorage.setItem("tema", "escuro");
    } else {
        localStorage.setItem("tema", "claro");
    }
});