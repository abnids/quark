@extends('layouts.app2')
@section('content')

<div class="container col-md-12">
 @include('alerts.success')
 @include('alerts.errors')
</div>

<div class="container col-md-12">

    <div class="row">
      
        @include('parts.new')
        
         <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Materia Prima</span>
                                        <span> > <a class="btn btn-outline dark" data-toggle="modal" href="#responsive"> Registrar Materia Prima </a> </span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>

					<tr>
							<th> #DEPARTE</th>
							<th> DESCRIPCION</th>
							<th> DESCRIPTION</th>
							<th> COST</th>
							<th> PESO</th>
							<th> PESO BRUTO</th>
							<th> ACTUALIZADO</th>	
							<th> OPCIONES</th>
					</tr>
				


				</thead>
				<tbody>

				@foreach($parts as $part)
				@can('read-part', $part)
					<tr>
							<th>{{ $part->partNumber }}</th>
							<th>{{ $part->esDescription }}</th>
							<th>{{ $part->enDescription }}</th>
							<th>{{ $part->cost }}</th>
							<th>{{ $part->weight }}</th>
							<th>{{ $part->grossWeight }}</th>
							<th>{{ $part->updated_at }}</th>



							<th align="center"  width="13%">

							<div class="btn-group btn-group-horizontal">

							{{ link_to_route('parts.edit',$title ='editar',$parameter = $part,['class'=>'btn btn-primary btn-xs']) }}


							@include('parts.delete')
							</div>

							</th>
					</tr>

					@endcan
				@endforeach
				</tbody>
				</table>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
        </div>
      </div>
       </div>
       </div>
       </div>
    
	

@endsection






