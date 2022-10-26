@extends('plantilla')

@section('contenido')
<div class="container mt-5 col-md-5" >
        

    <div class="card text-center mb-5">

        <div class="card-body">
            <form class="m-4" method="POST" action="guardarRecordatorio">
           
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Recordar es bello, pero lo importante es 
                        saber en tiempo y forma el como no olvidar.
                      </p>
                    </div>
                  </div>
        </div>



        

        <div class="card-footer">
        </div>

    </div>
</div>

@endsection