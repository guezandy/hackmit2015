@extends('app')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Responsive Embed <small>Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device.</small></h2>
    </div>
    
    <div class="card-body card-padding">
        <div class="row">
        	<div class="col-sm-2">
        	</div>
            <div class="col-sm-8">
                <p class="f-500 c-black m-b-20">Title of the movie</p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/aaZXDm3RXuo"></iframe>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-12">
				<div id="owl-demo" class="owl-carousel"></div>
            </div>
        </div>
    </div>
</div>

@endsection