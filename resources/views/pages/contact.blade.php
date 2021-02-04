@extends('layouts.master')

@section('content')


<article id="featured">
	<figure><img src="/images/dummy/happy-bday.jpg" alt="Placeholder" width="1300" height="450"></figure>   
</article> 
<article id="content">
	<h2 class="header-a a"><span class="scheme-b">Contact</span> Us</h2>
	<p class="scheme-c">Vivamus leo lacus, mattis a ante id, ultrices semper odio. Maecenas gravida ac mauris a vestibulum. Ut ac tristique nisl, vel porta nisi.</p>

	<section class="content">
            <div class="container">
<div class="row">
<div class="col-sm-4">
<address>
<strong>PH address:</strong> Lorem ipsum dolor ,<br>
<strong>Phone:</strong> +6-399-123-4567
</address>

</div>
    
<div class="col-sm-8 contact-form">
<form id="contact" method="post" class="form" role="form">
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
</div>
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
</div>
</div>
<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-primary pull-right" type="submit">Submit</button>
</form>
</div>
</div>
        </section>


	
</article>	

@endsection