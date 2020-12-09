@extends('base')



@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 mx-auto">
            <form action="{{route('insert')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">contact</label>
                        <input type="text" name="contact" class="form-control">
                    </div>
                   <div class="row">
                    <div class="mb-3 col">
                        <label for="">address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="mb-3 col">
                        <label for="">school</label>
                        <input type="text" name="school" class="form-control">
                    </div>
                   </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="">maths</label>
                            <input type="text" name="maths" class="form-control">
                        </div>
                        <div class="mb-3 col">
                            <label for="">sci</label>
                            <input type="text" name="sci" class="form-control">
                        </div>
                    </div>
                   <div class="row">
                    <div class="mb-3 col">
                        <label for="">sst</label>
                        <input type="text" name="sst" class="form-control">
                    </div>
                    <div class="mb-3 col">
                        <label for="">hindi</label>
                        <input type="text" name="hindi" class="form-control">
                    </div>
                   </div>
                    <div class="mb-3">
                        <label for="">eng</label>
                        <input type="text" name="eng" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-danger w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection