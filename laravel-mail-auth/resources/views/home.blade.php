@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('send-mail') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="textMail">Email text:</label>
                                <input type="text" class="form-control mb-4" name="textMail" aria-describedby="emailHelp"
                                    placeholder="Enter text">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
