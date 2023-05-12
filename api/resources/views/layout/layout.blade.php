<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout._meta')
</head>

<body>
    <div id="wrapper">
        @include('layout._aside')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layout._header')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('layout._footer')
        </div>
    </div>

    @include('layout.components.logout')

    @include('layout._scripts')
</body>

</html>
