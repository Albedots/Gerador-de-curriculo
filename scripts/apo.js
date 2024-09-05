$(document).ready(function(){   //comando iniciado somenta apos a página ser carregada
    $("#btImpressao").click(function(){             
        window.print();             //função para botão de printar a tela e gerar o pdf
    })


    $("#btVoltar").click(function(){
        history.back();             //função para meu botão voltar na aba anterior
    })

    $("#btNovoCampo").click(function(){                 //função do botão para criar um novo campo de textarea
        var contador = $(".novo-textarea").length + 1;
        var textarea = $("<textarea>", {
            id: "textarea-" + contador,
            class: "novo-textarea",
            placeholder: "texto" + contador,
            name: "campo_Novo",
            cols: "60"
        });
        $("#container").append(textarea);
    })
})