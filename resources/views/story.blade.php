@extends('layout')

@section ('title')
    Story # {{ $story->id }}
@endsection

@section('content')
    <a href="../" class="back"><img src="icons/chevron-right-solid.svg">Tillbaka</a>
    <div class="box-container">
        <div class="card">
            <div class="card-body">
                Som en {{ $story->role }} vill jag {{ $story->activity }} i {{ $story->context }} för att {{ $story->reason }}.
            </div>
            <div class="card-info">
                <span>{{ $story->nickname }}</span>
                <span>{{ $story->created_at }}</span>
            </div>
        </div>
    </div>
@endsection