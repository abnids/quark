<div class="col-md-6">
{!! Form::label('partNumber','NUMERO DE PARTE',['class'=>'control-label']) !!}
{!! Form::text('partNumber',null,['id'=>'genre','class'=>'form-control','placeholder'=>'Ingresa el # de parte. ']) !!}

{!! Form::label('esDescription','DESCRIPCION EN ESPAÑOL',['class'=>'control-label']) !!}
{!! Form::text('esDescription',null,['class'=>'form-control']) !!}

{!! Form::label('enDescription','DESCRIPCION EN INGLES',['class'=>'control-label']) !!}
{!! Form::text('enDescription',null,['class'=>'form-control']) !!}
</div>
<div class="col-md-6">
{!! Form::label('cost','COSTO',['class'=>'control-label']) !!}
{!! Form::text('cost',null,['class'=>'form-control']) !!}

{!! Form::label('weight','PESO',['class'=>'control-label']) !!}
{!! Form::text('weight',null,['class'=>'form-control']) !!}



{!! Form::label('grossWeight','PESO BRUTO',['class'=>'control-label']) !!}
{!! Form::text('grossWeight',null,['class'=>'form-control']) !!}
</div>



                
               