@section('head')
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>{{ config('app.name', 'Vue Laravel SPA') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="@yield('description')">
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/mycustom/m_styles.css') }}" rel="stylesheet">
@endsection
