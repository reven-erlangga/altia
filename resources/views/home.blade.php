@extends('frontend.template.default')

@section('content')
<div class="container">
    <div class="col s12 m7">
        <h4 class="header">Congratulations</h4>
        <div class="card horizontal">
            <div class="card-stacked hoverable">
                <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
