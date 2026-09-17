$(document).ready(function () {

    $("#ativa_todos").change(function () {
        if ($("#ativa_todos").is(":checked")) {

            $(".ativa_dia").prop("checked", true);
        } else {
            $(".ativa_dia").prop("checked", false);
        }
    });

    // $("#proibido_menores").val("nao");

    $("#btn_cadastrar").click(function () {

        let data = [];
        let nome = $("#nome_produto").val();
        // alert(nome);
       

        if (nome == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'O campo nome do produto não pode estar vazio!',
            });
            return;

        }


        data["nome"] = nome;


        let preco = $("#preco_produto").val();

        if (preco == '' || preco < 0 || $.isNumeric(preco) == false) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'O campo preço do produto não pode estar vazio, menor que zero ou não numérico!',
            });
            return;
        }

        preco = preco + ',00';
        // alert(preco);

        data["preco"] = preco;

        let estoque = $("#estoque").val();
       

        if (estoque == '' || estoque < 0 || $.isNumeric(estoque) == false) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'O campo estoque do produto não pode estar vazio, menor que zero ou não numérico!',
            });
            return;
        }

         data["estoque"] = estoque;

        let proibido = $("#proibido_menores").val();
        data["proibido"] = proibido;

        let descricao = $("#descricao").val();

        if(descricao == ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'O campo descrição do produto não pode estar vazio!',
            });
            return;
        }

        data["descricao"] = descricao;

        let dias_semana = '';
        if ($("#ativa_domingo").is(":checked")) {
            dias_semana = dias_semana + 'Domingo, ';
        }

        if ($("#ativa_segunda").is(":checked")) {
            dias_semana = dias_semana + 'Segunda, ';
        }

        if ($("#ativa_terca").is(":checked")) {
            dias_semana = dias_semana + 'Terça, ';
        }

        if ($("#ativa_quarta").is(":checked")) {
            dias_semana = dias_semana + 'Quarta, ';
        }

        if ($("#ativa_quinta").is(":checked")) {
            dias_semana = dias_semana + 'Quinta, ';
        }

        if ($("#ativa_sexta").is(":checked")) {
            dias_semana = dias_semana + 'Sexta, ';
        }

        if ($("#ativa_sabado").is(":checked")) {
            dias_semana = dias_semana + 'Sábado ';
        }

         if(dias_semana == ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Nenhum dia da semana foi selecionado!',
            });
            return;
        }
        data["dias_semana"] = dias_semana;


        // alert(dias_semana);

        let temperatura = $("#temperatura").val();
        data["temperatura"] = temperatura;
        //alert(temperatura);


        let horas_reposicao = $("#horas_reposicao").val();
        data["horas_reposicao"] = horas_reposicao;
        // alert(horas_reposicao);

        //  alert(estoque);


        let nacionalidade = $("input[name='origem_produto']:checked").val();
        data["nacionalidade"] = nacionalidade;
        //alert(nacionalidade);

        let file = $("#img")[0].files[0];
       // alert(file.name);
        //alert(file.size);
        //alert(file.type);

        if(file.type != 'image/jpeg' && file.type != 'image/png' && file.type != 'image/jpg'){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'O arquivo selecionado não é uma imagem válida! Por favor, selecione um arquivo JPEG ou PNG.',
            });
            return;
        }

        data["img"] = file;




        Swal.fire({
            icon: 'success',
            title: 'Produto cadastrado com sucesso!',
            text: 'O produto ' + nome + ' foi cadastrado com sucesso!',
        });

        alert(JSON.stringify(data));


    });

});