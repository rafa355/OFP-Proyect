<!DOCTYPE html>

<html lang="en-US">

<!--header-->
@include('template.header')

<!--body-->
<body class="has-loading-screen links-hover-effect" data-spy="scroll" data-target=".navigation">

    @yield('content')

    @include('template.scripts')

</body>
