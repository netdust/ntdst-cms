<!DOCTYPE html>
<html class="js" lang="en" >
<head>

    <!--

    Copyright (c) Stefan Vandermeulen | http://netdust.be/

    -->

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="{{csrf_key}}" content="{{csrf_token}}">
    <meta charset="utf-8" />
    <title></title>

    {% if production==false %}
    <link rel="stylesheet" href="{{__to( '../bower_components/normalize.css/normalize.css' )}}" />
    <link rel="stylesheet" href="{{__to( '../bower_components/foundation/css/foundation.css' )}}" />
    <link rel="stylesheet" href="{{__to( '../bower_components/components-font-awesome/css/font-awesome.css' )}}" />
    <link rel="stylesheet" href="{{__to( '../bower_components/dropzone/dist/dropzone.css' )}}" />
    {% endif %}

    <link rel="stylesheet" href="{{ __to( 'admin/front/css/build.css' )}}" />
    <script data-main="{{__to( 'admin/front/js/admin' )}}" src="{{__to('admin/front/js/lib/require.js')}}"></script>

</head>
<body>
<div class="container">

</div>
<div id="bootstrap" role="data-bootstrap" >
    <script>
        base='{{base}}';
        define('app-bootstrap', function(){
            return {
                settings:{{settings|raw};},
                {
                    {
                        modules | raw
                    }
                }
            }
        })
    </script>
</div>
</body>
</html>
