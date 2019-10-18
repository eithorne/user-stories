@extends('layout')

@section ('title')
    User Stories
@endsection

@section('content')
    <div id="inputs" class="box-container">
        <div class="box">   
            <form method="POST" action="submit" autocomplete="off">
                @csrf
                <div class="box-input-container">
                    Som en <input required name="role-input" type="text" placeholder="..."> 
                    vill jag <input required name="activity-input" type="text" placeholder="...">
                    i <input required name="context-input" type="text" placeholder="..."> 
                    för att <input required name="reason-input" type="text" placeholder="...">.    
                </div>
                <div class="box-button-container">
                    <button type="submit">
                        Skicka
                        <img src="icons/chevron-right-solid.svg">
                    </button>
                </div>
            </form>
        </div>
        <div class="to-stories">
            <a href="#stories">
                <img src="icons/chevron-right-solid.svg">
            </a>
        </div>
    </div>
    <div id="stories" class="stories-container">
        <div class="to-inputs">
            <a href="#inputs">
                <img src="icons/chevron-right-solid.svg">
            </a>
        </div>
        <div class="stories">
            @foreach($stories->reverse() as $story)
            <div class="card">
                <a href="/story/{{ $story->id }}"></a>
                <div class="card-body">
                    Som en {{ $story->role }} vill jag {{ $story->activity }} i {{ $story->context }} för att {{ $story->reason }}.
                </div>
                <div class="card-info">
                    <span>{{ $story->nickname }}</span>
                    <span>{{ $story->created_at }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection