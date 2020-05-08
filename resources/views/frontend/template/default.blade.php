<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.template.partials.head')
</head>

<body>
    @include('frontend.template.partials.navigation')
    <div class="container">
        @yield('content')
    </div>
    @include('frontend.template.partials.script')
    @include('frontend.template.partials.toast')
</body>

</html>
