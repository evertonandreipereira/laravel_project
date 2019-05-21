@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ffln1-1.fna.fbcdn.net/vp/ff93f0e7fbb314b6be31b2e653f517d8/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.ffln1-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>24,1k</strong> followers</div>
                <div class="pr-4"><strong>217</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div class="font-weight-bold"><a href="#">www.freecodecamp.org</a></div>           
        </div>
    </div>
    
    <div class="row pt-4">
       <div class="col-4">
           <img src="https://media.istockphoto.com/photos/optimistic-adult-woman-picture-id918583512" class="w-100">
       </div>
       <div class="col-4">
           <img src="https://media.istockphoto.com/photos/positive-cheerful-young-caucasian-woman-wearing-white-casual-tshirt-picture-id968003448" class="w-100">
       </div>
       <div class="col-4">
           <img src="https://media.istockphoto.com/photos/the-engineers-thumb-up-on-the-white-wall-background-picture-id1060202638" class="w-100">
       </div>          
    </div>
</div>
@endsection
