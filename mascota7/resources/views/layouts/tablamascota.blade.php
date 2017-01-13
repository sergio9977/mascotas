

<div class="table-responsive">
    <table class="table product-table">
        <!--Table head-->
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Tamaño</th>
                <th>Sexo</th>
                <th>Edad</th>

            </tr>
        </thead>
        <!--/Table head-->

        <!--Table body-->
        <tbody>
          {{$conta=0}}
  @foreach ($mascota as $dat)
            <!--First row-->
            {{$conta=$conta+1}}
            <tr>
                <th scope="row">
                    <img src="imgUser/{{$dat->Foto}}" alt="" class="img-fluid">
                </th>
                <td>

                    <h5><strong>{{$dat->Nombre}}</strong></h5>
              <!--    <p class="text-muted">by FifeSteps</p>-->
                </td>
                <td>{{$dat->Descripcion}}</td>
                <td>{{$dat->Tamano}}</td>
                <td>{{$dat->Sexo}}</td>

                <td>{{$dat->Edad}}</td>
                <td>
                    <a type="button" href='delete/{{$dat->Id_Mascota}}' class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Borrar elemento">X
                    </a>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Editar">Editar
                    </button>
                </td>
            </tr>

            <!--/First row-->

            <!--Second row-->

            <!--/Third row-->
@endforeach
            <!--Fourth row-->
            <tr>
                <td colspan="3"></td>
                <td>
                    <h4><strong>Total</strong></h4></td>
                <td>
                    <h4><strong>{{$conta}}</strong></h4></td>
            </tr>
            <!--/Fourth row-->

        </tbody>
        <!--/Table body-->
    </table>
</div>
<!--/Shopping Cart table-->
