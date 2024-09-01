@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">Produtos</div>
            <div class="card-body">
                <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2">
                    <i class="bi bi-plus-circle"> </i>Novo Produto</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cód.</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>R$ {{ $product->price }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-eye"></i>
                                            <!-- Ver -->
                                        </a>

                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                            <!-- Editar -->
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Remover {{ $product->name }} da base de dados?');"><i
                                                class="bi bi-trash"></i>
                                            <!-- Remover -->
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Product Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                </table>

                {{ $products->links() }}

            </div>
        </div>
    </div>
</div>

@endsection
