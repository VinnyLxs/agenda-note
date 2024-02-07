<x-layout title="">
<div>  
<form action="/salvar" method="GET">

@csrf  



<div class="container text-center">

    <div class="row align-items-center">

        <div class="col">



        </div>

        <div class="col">

        <div class="card text-bg-dark p-3" style="max-width: 18rem;">

            <div class="card-header">Cadastrar Tarefa</div>

                <div class="card-body">

                <p class="card-text">

                    <div class="mb-3">

                       <label> Nome: </label>

                       <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required/><br><br>

                    </div>

                    <div class="mb-3">

                        <label> Telefone: </label>

                        <input type="text" id="telefone" name="telefone" placeholder="(11)99999-9999" required/><br><br>

                    </div>

                    <button  class="btn btn-primary" type="submit"> Cadastrar </button>
                    <a class="btn btn-primary" href="atualizar">Atualizar</a>
                    <a class="btn btn-primary" href="consultar">Consultar</a>

                </p>

            </div>

        </div>

        <div class="col">
 
                    </div>

    </div>

</div>

</div>

</form>

      
    
</div>  
</x-layout>