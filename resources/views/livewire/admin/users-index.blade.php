<div>
   <div class="card">
      <div class="card-header">
         <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de usuario">
      </div>
      @if ($users->count())
         <div class="card-body">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>NOMBRE</th>
                     <th>EMAIL</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($users as $user )
                     <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                          {{--  @can('admin.users.edit') --}}
                           <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                        </td>
                     </tr>
                     
                  @endforeach
               </tbody>
            </table>
         </div>
         <div class="car-footer">
            {{$users->links()}}
         </div>
      @else
      <div class="card-body">
         <strong>No tiene ningún registro</strong>
      </div>
      @endif
   </div>
</div>
