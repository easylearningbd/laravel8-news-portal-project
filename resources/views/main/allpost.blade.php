@extends('main.home_master')
@section('content')


<!-- archive_page-start -->
	<section class="single_page">						
		<div class="container-fluid">											
		<div class="row">
			<div class="col-md-12">
				<div class="single_info">
					<span>
						<a href="#"><i class="fa fa-home" aria-hidden="true"></i> /
						</a>  Category 	
					</span>				    
				</div>
			</div>
			<div class="col-md-9 col-sm-8">				
				  
			@foreach($catposts as $row)
				<div class="archive_post_sec_again">
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<div class="archive_img_again">
	   <a href="#"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
							</div>
						</div>
						<div class="col-md-8 col-sm-7">
							<div class="archive_padding_again">
								<div class="archive_heading_01">
	 <a href="#">
	 	@if(session()->get('lang')== 'english')
		{{ $row->title_en }}
		@else
		{{ $row->title_hin }}
		@endif</a>
								</div>
								<div class="archive_dtails">
	   @if(session()->get('lang')== 'english')
		{!! Str::limit($row->details_en, 200) !!}
		@else
		{!! Str::limit($row->details_hin, 200) !!}
		@endif
								</div>
	 <div class="dtails_btn"><a href="{{ URL::to('view/post/'.$row->id) }}">
		  @if(session()->get('lang')== 'english')
		Read More...
		@else
		अधिक पढ़ें...
		@endif</a>
								</div>
							</div>
						</div>
					</div>
				</div>								                          
                
         @endforeach
         {{ $catposts->links() }}

			</div>
			<div class="col-md-3 col-sm-4">
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{asset('frontend/assets/img/add_01.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->

@php
$latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
$favourite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
$highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();

@endphp					
				<div class="tab-header">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
			<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
	  @if(session()->get('lang')== 'english')
		Latest
		@else
		नवीनतम
		@endif
	</a></li>
			<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
		 @if(session()->get('lang')== 'english')
		Popular
		@else
		लोकप्रिय
		@endif
	</a></li>
			<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
		 @if(session()->get('lang')== 'english')
		Highest
		@else
		उच्चतम
		@endif
	 </a></li>
		</ul>
		
						<!-- Tab panes -->
		<div class="tab-content ">
			<div role="tabpanel" class="tab-pane in active" id="tab21">
				<div class="news-titletab">
				
				@foreach($latest as $row)	
					<div class="news-title-02">
 <h4 class="heading-03"><a href="#">
@if(session()->get('lang')== 'english')
		{{ $row->title_en }}
		@else
		{{ $row->title_hin }}
		@endif

 </a> </h4>
			 </div>
					 @endforeach
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tab22">
				<div class="news-titletab">

	 @foreach($favourite as $row)	
					<div class="news-title-02">
 <h4 class="heading-03"><a href="#">
@if(session()->get('lang')== 'english')
		{{ $row->title_en }}
		@else
		{{ $row->title_hin }}
		@endif

 </a> </h4>
			 </div>
					 @endforeach
					 
				</div>                                          
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tab23">	
				<div class="news-titletab">
					
	 @foreach($highest as $row)	
					<div class="news-title-02">
 <h4 class="heading-03"><a href="#">
@if(session()->get('lang')== 'english')
		{{ $row->title_en }}
		@else
		{{ $row->title_hin }}
		@endif

 </a> </h4>
			 </div>
					 @endforeach
					 
				</div>						                                          
			</div>
		</div>
	</div>
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{asset('frontend/assets/img/add_01.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
			</div>			
		</div>
	</div>
</section>


@endsection