@extends('layout.main')

@section('body-class', 'demo')

@section('content')

    <div class="ui container">
        <div class="ui vertical stripe center aligned segment">

            <h1 class="ui header">
                Try SocietyCMS!
                <div class="sub header">Try out SocietyCMS before you install it. We're super confident that you'll like
                    what you see!
                </div>
            </h1>

            <div class="ui stackable middle aligned grid">
                <div class="eight wide column">
                    <div class="ui basic segment">
                        <div class="two ui buttons">
                            <a class="ui big button" target="_blank" href="https://demo.societycms.com">Frontend</a>
                            <a class="ui big blue button" target="_blank" href="https://demo.societycms.com/backend">Backend</a>
                        </div>
                    </div>
                    <div class="ui hidden divider"></div>
                    <table class="ui definition table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Administrator</td>
                            <td>admin@societycms.com</td>
                            <td>secret</td>
                        </tr>
                        <tr>
                            <td>Limited User</td>
                            <td>demo@societycms.com</td>
                            <td>secret</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="eight wide tablet computer only column">
                    <a href="/images/mockups/large-0f3afe74d3ac4d03a62cd0b5c13d6eb9_22_3000.jpg" data-lightbox="gallery">
                        <img class="ui rounded fluid image"
                             src="/images/mockups/small-0f3afe74d3ac4d03a62cd0b5c13d6eb9_22_3000.jpg">
                    </a>
                </div>
            </div>

        </div>

        <div class="ui info message">
            <div class="header">
                SocietyCMS Demo reset
            </div>
            <p>
                The demo will automatically reset every 12 hours!
            </p>
        </div>

        <div class="ui hidden divider"></div>

    </div>
@endsection
