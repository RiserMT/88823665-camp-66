@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))

<section class="error404">
    <title>AdminLTE 4 | ERROR404</title>
    <body>
        <div class="error-code">404</div>
        <div class="error-message"><span style="color: #ffc107;">⚠</span> Oops! Page not found.</div>
        @yield('scripts')
    </body>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            flex-direction: column;
            text-align: center;
        }
        .error-code {
            font-size: 100px;
            font: weight: 300;
            color: #ffc107 !important;
        }
        .error-message {
            font-size: 25px;
            font: weight: 300;
            color: black;
        }
    </style>
</section>

