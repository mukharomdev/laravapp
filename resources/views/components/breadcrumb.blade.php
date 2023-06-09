<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="house-door-fill" viewBox="0 0 16 16">
    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
  </symbol>
</svg>


<div class="my-2 shadow-lg">
  <div aria-label="{{$arialabel}}">
    <ol class="breadcrumb p-3 bg-body-white rounded-3">

      <li class="breadcrumb-item">
        <a class="link-body-emphasis" href="{{$hrefbreadcrumb}}">
          <svg class="bi" width="16" height="16"><use xlink:href="#house-door-fill"></use></svg>
          <span class="visually-hidden">Home</span>
        </a>
      </li>
      
      <li class="breadcrumb-item">
      	@for($i = 0; $i <= count(Request::segments()); $i++)
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{Request::segment($i)}}">{{Request::segment($i)}}</a>
        @if($i < count(Request::segments()) & $i > 0)
    		{!!'<i class="fa fa-angle-right"></i>'!!}
  		@endif
      </li>
     <!--  <li class="breadcrumb-item active" aria-current="page">
        Data
      </li> -->
      @endfor
    </ol>
  </div>
</div>


{{--

<!-- <ul class="page-breadcrumb">
<li>
  <i class="fa fa-home"></i>
  <a href="{{route('home')}}">Home</a>
  <i class="fa fa-angle-right"></i>
</li>
@for($i = 0; $i <= count(Request::segments()); $i++)
<li>
  <a href="">{{Request::segment($i)}}</a>
  @if($i < count(Request::segments()) & $i > 0)
    {!!'<i class="fa fa-angle-right"></i>'!!}
  @endif
</li>
@endfor
</ul>

 -->


--}}