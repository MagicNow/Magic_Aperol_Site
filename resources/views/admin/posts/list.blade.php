@extends('admin.app')

@section('htmlheader_title')
    Posts instagram
@endsection
@section('contentheader_title')
    Posts instagram
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header"> </div><!-- /.box-header -->
		@if (session('sucess'))
          <div class="alert alert-success">
              {{ session('sucess') }}
          </div>
      	@endif
		<div class="box-body">
			<table id="datatables" class="table table-bordered table-striped" data-order="[[ 0, &quot;desc&quot; ]]">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Username</th>
						<th>Descrição</th>
						<th>Imagem</th>
						<th>Data</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<td>{!! $post->id !!}</td>
							<td>{!! $post->nome !!}</td>
							<td>{!! $post->username !!}</td>
							<td style="word-wrap: break-word !important;float: left;max-width: 300px;">{!! utf8_decode($post->descricao) !!}</td>
							<td><img src="{!! $post->image !!}" width="150"></td>
							<td>{!! date('d/m/Y H:i:s',strtotime($post->created_at)) !!}</td>
							<td>	
								@if($post->active == 1)		
									<a href="{{ route('admin.posts.status',array($post->id,0)) }}" class="btn btn-danger" >Reprovar</a>
								@else
									<a href="{{ route('admin.posts.status',array($post->id,1)) }}" class="btn btn-primary" >Aprovar</a>
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Username</th>
						<th>Descrição</th>
						<th>Imagem</th>
						<th>Data</th>
						<th>Ações</th>
					</tr>
				</tfoot>
			</table>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	<div class="modal fade modal-danger " id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modals-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Apagar Usuário?</h4>
                </div>
            
                <div class="modal-body">
                    <!-- <p>You are about to delete one track, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p> -->
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button id="#confirm-delete" type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>
                    <a type="button" class="btn btn-outline btn-ok">Apagar</a>
                </div>
            </div>
        </div>
    </div>
@endsection