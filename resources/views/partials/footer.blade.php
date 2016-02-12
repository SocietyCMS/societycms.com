@inject('github', 'App\GitHub')

<div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
        <div class="ui stackable inverted divided equal height stackable  grid">

            <div class="five wide right aligned column">
                <div class="ui inverted link list">
                    @include('partials.navigation.menu-items')
                </div>
            </div>

            <div class="six wide centered computer only column">
                <div class="ui basic center aligned segment">
                    <img src="/images/SocietyCMS-sign.svg" class="ui centered mini image">
                    <div class="ui horizontal inverted small divided link list">
                        <a class="item" href="https://github.com/SocietyCMS/SocietyCMS" target="_blank">Free &amp; Open Source (MIT)</a>
                    </div>
                </div>
            </div>

            <div class="five wide right floated left aligned computer only column">
                <h3>Latest commits:</h3>
                <div class="ui inverted list">
                    @foreach($github->latestOrganisationCommits() as $commit)
                        <a href="https://github.com/{{ $commit['repo']['name']}}/commit/{{$commit['payload']['head']}}" target="_blank" class="item">
                            <i class="big github icon"></i>
                            <div class="content">
                                <div class="header">{{ $commit['actor']['login']}} pushed to {{ $commit['repo']['name']}}</div>
                                <div class="description">{{ \Carbon\Carbon::parse($commit['created_at'])->diffForHumans()}}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="footer note">Designed by Ralph Huwiler</div>
    </div>
</div>
