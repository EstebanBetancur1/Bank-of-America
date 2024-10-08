@extends('dashboard.layouts.app')

@section('title', 'Dashboard')


@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">

@endsection

@section('contenido')
  @section('content')
  <h1 class="text-2xl font-semibold text-gray-900">
    Datos clientes existentes
  </h1>
  <div class="lg:overflow-x-visible overflow-x-auto">
    <table id="example" class="display" style="width:100%">
      <thead>
          <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Cuenta</th>
            <th>Saldo</th>
            <th>Más opciones</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($users as $cliente)
          <tr>
            <td>{{ $cliente->{'first-name'} }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->AccountNumber }}</td>
            <td>USD {{ $cliente->AccountAmount }}</td>
            <td class="flex gap-2">
              <a href="{{ route('show_cliente', $cliente->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
            <form action="{{ route('delete_cliente', $cliente->id) }}" method="POST">
              @csrf
                <button  id="confirmDelete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
            </form>
            </td>
          </tr>
        @endforeach
          
      </tbody>
      <tfoot>
          <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Cuenta</th>
            <th>Saldo</th>
            <th>Más opciones</th>
          </tr>
      </tfoot>
    </table>
  </div>
  @endsection
@endsection

  @section('scripts')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>

          const confirmDelete = document.getElementById('confirmDelete');
          confirmDelete.addEventListener('click', (e) => {
              e.preventDefault();
              if (confirm('¿Estás seguro de que quieres eliminar este cliente?')) {
                  confirmDelete.closest('form').submit();
              }
          });

            
        $(document).ready(function() {
            var table = $('#example').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json',
                    info: "Mostrando _START_ de _TOTAL_ resultados",
               
                    infoEmpty: "Mostrando 0 de 0 resultados",
                    infoFiltered: "(filtrado de _MAX_ resultados totales)",
                    search: "Buscar:",
                    lengthMenu: "Mostrar _MENU_ resultados",
                    emptyTable: "No hay resultados"
                },
                ordering: false,
                lengthChange: false,
                pagingType: 'numbers',
            });
          } );
        </script>
  @endsection

