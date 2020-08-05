@extends('layouts/app')
@section('content')
    <div class="container-fluid row p-4 m-0">
        @foreach ($fournisseurs as $fournisseur)
        <div class="col-12 border rounded my-2 py-2">
            <div>
                <span>Nom :    </span>{{$fournisseur->name}}<br/>
                <span>Email :  </span>{{$fournisseur->email}}<br/>
                <span>Numero : </span>{{$fournisseur->numero}}<br/>
                <a href="fournisseur/{{$fournisseur->id}}" class="text-dark font-weight-bold">
                    <span>Page   </span>
                    {{-- <svg class="" width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg> --}}
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('css')
    <style>
        a.text-dark
        {
            text-decoration: underline;
        }
    </style>
@endsection