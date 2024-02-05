<x-layout title="" >
    
    
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
                                   <label for="exampleInputEmail1" class="form-label" >Cadastrar Tarefa</label>
                                   <input type="cadastrar" class="form-control" id="cadastrar" name="cadastrar" aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label" >Descrição</label>
                                    <input type="Text" class="form-control" id="tarefa" name="tarefa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="data_hora">Data e Hora:</label>
                                    <input type="datetime-local" id="data_hora" name="data_hora" required>
                                </div>
                                <button type="submit" class="btn btn-outline-light">Cadastrar</button> 
                                </div>
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