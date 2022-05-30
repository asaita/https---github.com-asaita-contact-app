@extends('layouts.main')

@section('title', 'Add New | Contact App')

@section('content')

<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Add New Contact</strong>
            </div>           
            <div class="card-body">
              <FORM action="{{route('contact.store')}}" method="POST">
                @csrf
                @include('contact._form')

              </FORM>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
