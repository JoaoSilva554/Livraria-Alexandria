<form name="formLogin" method="post" data-parsley-validate class="login">
    <div class="card">
        <div class="card-header">
            <img src="images/logo.png" alt="Livraria Alexandria" class="w-100">
        </div>
        <div class="card-body">
            <label for="email">Digite seu e-mail:</label>
            <input type="email" name="email" id="email" required
            class="form-control"
            data-parsley-required-message="Campo obrigatório"
            data-parsley-type-message="E-mail inválido">
        
        

            <label for="senha">Digite sua senha:</label>
            <div class="input-group mb-3">
                <input type="password" name="senha" id="senha" required
               class="form-control"
               data-parsley-required-message="Senha obrigatória"
               data-parsley-errors-container="#erroSenha">
               
               //fazer botão de exibir senha
               
               <span id ="error"></span>

               //fazer botão de login



            



               
</form>
<script>
    function mostrarSenha() {
        var campo = document.getElementById("senha");
        if (campo.type == "password") {
            campo.type = "text";
        } else {
            campo.type = "password";
        }

    }
</script>    
