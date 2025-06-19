@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center">
        <h1 class="my-4 text-3xl font-bold">Listado de Productos</h1>
        <a href="{{ route('products.create') }}" class="bg-amber-400 text-black">Crear Producto</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Id</th>
                    <th class="px-3 py-2 whitespace-nowrap">Nombre</th>
                    <th class="px-3 py-2 whitespace-nowrap">Descripcion</th>
                    <th class="px-3 py-2 whitespace-nowrap">Precio</th>
                    <th class="px-3 py-2 whitespace-nowrap">Imagen</th>
                    <th class="px-3 py-2 whitespace-nowrap">Creado</th>
                    <th class="px-3 py-2 whitespace-nowrap">Actualizado</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 *:even:bg-gray-50">
                @foreach ($products as $product)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $product->id }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $product->name }}</td>
                        <td class="px-3 py-2 break-words">{{ $product->description }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $product->price }}</td>
                        <td class="px-3 py-2 whitespace-nowrap"><img src="{{ $product->image_url }}" /></td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $product->created_at }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $product->updated_at }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection

@section('message')
    <h6> Por favor suscribirse</h6>
@endsection
