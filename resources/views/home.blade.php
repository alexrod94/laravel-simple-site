@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sit id dicta magnam nobis commodi possimus omnis accusamus labore. Aut hic molestiae rerum adipisci esse praesentium quia autem magni iste.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
