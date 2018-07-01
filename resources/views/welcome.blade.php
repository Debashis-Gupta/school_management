<!-- আমি হেডার এ এইচটি এম এল এর হেড আর বডি রাখছি আর ফুটার এ বডি আর এইচ টি এম এল এর ট্যাগ ক্লোজ করছি ।  -->
<!-- আমি এখন যেটা করতে চাচ্ছি সেটা হল হেডার এক্সটেন্ড করবো এটা করলে আমার এইচ টি এম এল এর ট্যাগ আর হেডার আর বডি চলে আসবে  -->
<!-- তারপর এটার সাথে মিলে যাওয়া উচিত তারপর ফুটার এক্সিকিঊট হলে ট্যাগ গুলো ক্লোজ হয়ে যাবে  -->
<!-- এখন প্রশ্ন হল আমি কিভাবে এটা করবো ?????? :(  -->
<!-- এক্সটেন্ড ইউজ করা যায় - সেজন ইউজ করতে হবে - ইয়েল্ড ইউজ করতে হবে  -->
<!-- চলো করে ফেলি তাহলে :) :) :)  -->


<!-- Here will be extended header  -->


@extends('layout.footer')
@section('content')
@endsection
<!-- Close of extender work  -->

@extends('layout.body')
@section('content')
@endsection

@extends('layout.header')
@section('content')
@endsection


<!-- Here should be extended footer  -->
