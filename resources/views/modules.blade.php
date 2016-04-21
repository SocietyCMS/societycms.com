@inject('github', 'App\GitHub')

@extends('layout.main')

@section('body-class', 'modules')

@section('content')

    <div class="ui relaxed container">

        <div class="ui centered cards">
            @foreach($modules as $modules)
                <div class="ui blue card">
                    @if($modules->image)
                        <div class="image">
                            <img src="{{$modules->image}}">
                        </div>
                    @endif
                    <div class="content">
                        <h2 class="ui header">
                            <div class="content">
                                {{$modules->name}}
                                <div class="sub header">{{$modules->vendor}}</div>
                            </div>
                        </h2>
                        <div class="description">
                            {{$modules->description}}
                        </div>
                    </div>
                    @if($repository = $github->getRepository($modules->vendor, $modules->name))
                        <div class="extra content">
                            <a href="{{$repository['html_url']}}" target="_blank" class="left floated">
                                <i class="github link icon"></i>
                                Github
                            </a>

                             <span class="right floated star">
                                 {{$github->repositoryLastUpdatedAt($modules->vendor, $modules->name)}}
                            </span>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <div class="ui hidden divider"></div>

@endsection
