<!DOCTYPE html>
<html lang="en">
<head>
    @include ('layouts.partials._head')
</head>
<body>
		@include ('layouts.partials._login_header')



		@yield ('content')

		@include ('layouts.partials._footer')

</body>
</html>
