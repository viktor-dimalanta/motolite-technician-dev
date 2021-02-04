@extends('layouts.master')

@section('content')

			<section id="welcome">
				@foreach ($sliders as $slider)
				<article> 
					<header>
						<h2>{{ $slider->title }}</h2>
						<p>{{ $slider->description }}</p>
					</header>
					<figure><img src="{{ Voyager::image( $slider->image ) }}" alt="{{ $slider->title }}" width="1300" height="auto"></figure> 
				</article> 
				@endforeach
				{{--
				<article> 
					<header>
						<h2>Curabitur Posuere Nibh vel Quam</h2>
						<p>Sed et feugiat dui, sed mattis tellus. Fusce condimentum risus quam, vel malesuada purus porta efficitur. Maecenas mattis nisi vel fringilla condimentum. Pellentesque id finibus orci, eget pharetra velit. Donec sed magna ut turpis dignissim finibus venenatis ornare nunc.</p>
					</header>
					<figure><img src="/images/dummy/cake-2.jpg" alt="Placeholder" width="1300" height="780"></figure> 
				</article> 
				<article> 
					<header>
						<h2>Curabitur Posuere Nibh vel Quam</h2>
						<p>Sed et feugiat dui, sed mattis tellus. Fusce condimentum risus quam, vel malesuada purus porta efficitur. Maecenas mattis nisi vel fringilla condimentum. Pellentesque id finibus orci, eget pharetra velit. Donec sed magna ut turpis dignissim finibus venenatis ornare nunc.</p>
					</header>
					<figure><img src="/images/dummy/cake-3.jpg" alt="Placeholder" width="1300" height="780"></figure> 
				</article> 
				--}}
			</section>  

           
			<article id="content">
				<div class="double-a c">
					<div>
						<h2 class="header-a a"><span class="scheme-b">Cake Tasting</span></h2>
						<p class="scheme-c">Suspendisse leo odio, scelerisque id ullamcorper vitae, iaculis bibendum magna. Etiam convallis porttitor diam at rutrum. Suspendisse potenti. In commodo sapien ac congue luctus. Vivamus leo lacus, mattis a ante id, ultrices semper odio. Maecenas gravida ac mauris a vestibulum. Ut ac tristique nisl, vel porta nisi.</p>
						<p class="link-a"><a href="./">et accumsan mi tincidunt vel</a></p>
					</div>
					<ul class="gallery-d">
						<li class="a"><img src="/images/dummy/213x213(1).gif" alt="Placeholder" width="213" height="213"></li>
						<li class="b"><img src="/images/dummy/213x213(2).gif" alt="Placeholder" width="213" height="213"></li>
						<li class="c"><img src="/images/dummy/213x213(3).gif" alt="Placeholder" width="213" height="213"></li>
						<li class="d"><img src="/images/dummy/213x213(4).gif" alt="Placeholder" width="213" height="213"></li>
					</ul>
				</div>

				<style type="text/css">
					.scheme-custom-a { background: url(../images/dummy/cake-2.jpg) fixed center center no-repeat #000; }
				</style>
				<div class="scheme-custom-a">
					<h1>Our Services</h1>
					<p>Vivamus leo lacus, mattis a ante id, ultrices semper odio. Maecenas gravida ac mauris a vestibulum. Ut ac tristique nisl, vel porta nisi. Vivamus leo lacus, mattis a ante id, ultrices semper odio. Maecenas gravida ac mauris a vestibulum. Ut ac tristique nisl, vel porta nisi.</p>
					<a href="./">let`s work together</a>
				</div>

				<h2 class="header-a a"><span class="scheme-b">Our</span> Services</h2>
				<ul class="list-i">
					<li><img src="images/services/a.png" alt="Icon" width="52" height="48"> <span class="title">Sed et feugiat</span> Morbi augue nunc, lobortis vel tempor vel, facilisis quis tortor. Donec facilisis vitae ligula sed vestibulum.</li>
					<li><img src="images/services/b.png" alt="Icon" width="52" height="48"> <span class="title">Sed et feugiat</span> Morbi augue nunc, lobortis vel tempor vel, facilisis quis tortor. Donec facilisis vitae ligula sed vestibulum.</li>
					<li><img src="images/services/c.png" alt="Icon" width="52" height="48"> <span class="title">Sed et feugiat</span> Morbi augue nunc, lobortis vel tempor vel, facilisis quis tortor. Donec facilisis vitae ligula sed vestibulum.</li>
					<li><img src="images/services/d.png" alt="Icon" width="52" height="48"> <span class="title">Sed et feugiat</span> Morbi augue nunc, lobortis vel tempor vel, facilisis quis tortor. Donec facilisis vitae ligula sed vestibulum.</li>
					<li><img src="images/services/e.png" alt="Icon" width="52" height="48"> <span class="title">Sed et feugiat</span> Morbi augue nunc, lobortis vel tempor vel, facilisis quis tortor. Donec facilisis vitae ligula sed vestibulum.</li>
					<li><img src="images/services/f.png" alt="Icon" width="52" height="48"> <span class="title">Sed et feugiat</span> Morbi augue nunc, lobortis vel tempor vel, facilisis quis tortor. Donec facilisis vitae ligula sed vestibulum.</li>
				</ul>




			</article>
		
@endsection		