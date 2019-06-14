@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height:130px;" src="https://instagram.ftpe10-1.fna.fbcdn.net/vp/72231d07f84fee744f2110e042532762/5D79BFC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.ftpe10-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1> {{ $user->username }} </h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>352</strong> posts</div>
                <div class="pr-5"><strong>637k</strong> followers</div>
                <div class="pr-5"><strong>380</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold"> {{ $user->profile->title }} </div>
            <div> {{ $user->profile->description }} </div>
            <div><a href="#"> {{ $user->profile->url ?? '' }} </a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://instagram.ftpe10-1.fna.fbcdn.net/vp/d208172a3a62064f711d85097cb800b1/5D8B454B/t51.2885-15/sh0.08/e35/c0.74.877.877a/s640x640/61129659_484895502256050_2457635576497186056_n.jpg?_nc_ht=instagram.ftpe10-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.ftpe10-1.fna.fbcdn.net/vp/171abd36f664985b9f1418d3af058b3b/5D93E39D/t51.2885-15/sh0.08/e35/s640x640/46113827_2143101105742339_7901500110750255475_n.jpg?_nc_ht=instagram.ftpe10-1.fna.fbcdn.net" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.ftpe10-1.fna.fbcdn.net/vp/131cb757a10e2e8545229610b784690a/5D80F8D9/t51.2885-15/e35/c94.0.561.561a/41166694_287344818539343_4615446525717021691_n.jpg?_nc_ht=instagram.ftpe10-1.fna.fbcdn.net" alt="">
        </div>
    </div>
</div>
@endsection
