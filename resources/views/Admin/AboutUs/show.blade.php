@extends('Admin.includes.main')
@section('content')
<div style="display: flex;justify-content: space-between;align-items: center;flex-wrap: wrap;margin-bottom: 1.5rem;">
    <h3>
        About Us
    </h3>
    <div>
        <a href="{{ route('admin.about-us.edit') }}" class="btn btn-success">
            <i class="fa fa-edit"></i>&nbsp;
            <span>Edit</span>
        </a>
    </div>
</div>
<section style="border: 1px solid rgb(230, 230, 230);padding:1.4rem;">
    {!! $about->description !!}
</section>
@endsection