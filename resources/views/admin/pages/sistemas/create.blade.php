@extends('admin.layouts.app')
@section('title', 'Casdastrar')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">Meus dados</h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cadastrar</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger text-center" style="margin: 10px;">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li style="text-align: center">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('msg'))
                                        <div class="row text-center">
                                            <div class="col-md-12" \>
                                                <div class="alert alert-success text-center"
                                                    style="color: white; margin: 10px;">
                                                    {{ session('msg') }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <form action="{{ route('sistema.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Nome projeto</label>
                                            <input type="text" name="nome" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Data início</label>
                                            <input type="date" name="local" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Data conclusão</label>
                                            <input type="date" name="local" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="">Desenvolvedor</label>
                                            <input type="text" name="" class="form-control  ">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Valor desenvolvedor</label>
                                            <input type="text" name="local" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Valor total</label>
                                            <input type="text" name="local" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Descrição</label>
                                            <textarea name="local" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Startus</label>
                                            <select name="" class="form-control">
                                                <option value="Em desenvolvimento">Em desenvolvimento</option>
                                                <option value="Concluído">Concluído</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-default">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
