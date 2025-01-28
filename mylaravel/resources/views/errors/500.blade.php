<section class="error500">
    <title>AdminLTE 4 | ERROR500</title>
    <body>
        <div class="error-code">500</div>
        <div class="error-message"><span style="color: #dc3545;">⚠</span> Oops! Something went wrong.</div>
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
            color: #dc3545 !important;
        }   
        .error-message {
            font-size: 25px;
            font: weight: 300;
            color: black;
        }
    </style>
</section>


