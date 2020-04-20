<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="crisDevMM">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Candidates | aurasjobs.ro</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/vendor/bootstrap/css/bootstrap3.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="public/css/candidates.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="topPage">
    @include ('candidates.layouts.header')

<!-- MAIN CONTENT -->
<div class="candidatesIndex" id="candidates">
<div class="row" id="wrapper">
    <div class="col-md-12">
    <p class="lead text-center">Total candidates <b class="text-primary">
    {{ count($candidates) }}</b> <small class="text-muted">(last added: {{$candidates->first()->created_at->format('d.m.Y') }})</small></p></div>
</div>
<div class="row">
    @include ('candidates.layouts.sidenav')
    @include ('candidates.layouts.candidates')



<!-- jQuery -->
<script src="public/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="public/vendor/bootstrap/js/bootstrap3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- Contact form JavaScript -->
<script src="public/js/jqBootstrapValidation.js"></script>
<!-- Theme JavaScript -->
<script>
$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
    var candidatesActionUrl = '{{ route('candidatesAction') }}';
</script>
<script src="public/js/master.js"></script>
<script src="public/js/candidates.js"></script>
</body>
</html>
