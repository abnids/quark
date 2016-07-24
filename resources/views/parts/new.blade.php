<!-- responsive -->
    <div id="responsive" class="modal fade" tabindex="-1" data-width="760">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">REGISTRAR MATERIA PRIMA</h4>
                                            <div class="class modal-body">
                                            {!! Form::open(['route'=>'parts.store','method'=>'POST']) !!}
                                            
                                                    @include('parts.form')
                                                

                                            </div>
                                        </div>
                                       
                    <div class="modal-footer">

            <a href="{!!('/parts')!!}" class="">{!!Form::submit('Enviar',['class'=>'btn btn-outline dark'])!!}</a>
                                           
                    {!! Form::close() !!}
                    

                    </div>
    </div>



                 


        





