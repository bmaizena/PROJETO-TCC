<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body{
            text-align: center;
            background-color:'red';
            font-family: "Montserrat", sans-serif;
        }
        table {
            border-collapse: collapse;
            margin: auto;
            box-shadow: 3px 3px 3px 5px rgb(0,0,0,4%);
            font-size:14px;
            width:90%;
            
        }
        td{
            border: 1px solid black;
            padding: 8px;
        
        }

        tr:nth-child(even) {
            background-color: rgb(192,192,192, 0.433);
        }

        .titulo{
            font-weight: bold;
            font-size:15px;
           
        }

    
       

        
    </style>
</head>
<body>


        
        <h2 class="text-2xl font-bold p-2 m-2">Lista de Usuarios</h2>
        <table >
        
            <tr>
                <td class="titulo" style="background-color: #4169E1;">ID</td>
                <td class="titulo" style="background-color: #FA8072;">NOME</td>
                <td class="titulo" style="background-color: #D2691E;">TEL</td>
                <td class="titulo" style="background-color: #F08080;" id="data">NASC</td>
                <td class="titulo" style="background-color: #9FE2BF;">EMAIL</td>
                <td class="titulo" style="background-color: #40E0D0;">CPF</td>
                <td class="titulo" style="background-color: #CCCCFF;">ENDEREÇO</td>
                <td class="titulo"style="background-color: #e5e619;" id="acoes">AÇÕES</td>
        
            </tr>

            @foreach ($clientes as $cliente)
           <tr> 
            <td>{{ $cliente['id'] }}</td>
            <td>{{ $cliente['nome'] }}</td> 
            <td>{{ $cliente['telefone'] }}</td> 
            <td>{{ $cliente['dt_nasc'] }}</td> 
            <td>{{ $cliente['email'] }}</td> 
            <td>{{ $cliente['cpf'] }}</td> 
            <td>{{ $cliente['endereco'] }}</td> 

            <td class="justify-center border border-none flex ">
                <a href="{{route('cadastros.edit', $cliente->id)}}" >
                    <x-eva-edit-2-outline class=" w-7 m-1 text-ambar-500 hover:text-red-400"/>
                </a>
                
                <a href="#" onclick="deleteId( {{$cliente-> id}} )">
                    <x-heroicon-o-trash class="w-7 m-1  text-red-500 hover:text-red-400"/>
                </a>
                <form class="d-none" id="form-destroy-{{$cliente->id}}" action="{{ route('cadastros.destroy', $cliente->id ) }}" method="POST">
                    @csrf
                    @method('delete')
                </form>

            </td>
            </tr>
           @endforeach
           
        </table>
        <br>
        <a href="/cadastros/login" class = "text-center rounded-md bg-blue-600 p-2 text-red-50 shadow-md shadow-blue-700/50 hover:bg-blue-500 ">Voltar</a>

        <br>

        @include('components.flashmessages')
    
    
</body>
</html>


<script>
    function deleteId(id){
        if(confirm("Tem certeza que deseja EXCLUIR o registro?")){
            document.getElementById('form-destroy-'+id).submit();
        }
    }
</script>

<script>
    const target = document.getElementById("alertDiv");
    function hide(){
        target.style.opacity = '0'
        target.style.display = 'none';
    }
    window.onload = setInterval(() => hide(), 3000)
</script>