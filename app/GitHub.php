<?php

namespace App;

use Github\HttpClient\Message\ResponseMediator;
use GrahamCampbell\GitHub\Facades\GitHub as GitHubAPI;
use Illuminate\Support\Facades\Cache;

class GitHub {

    public function latestOrganisationCommits()
    {
        return Cache::remember('latestOrganisationCommits', 1, function() {
            $response = GitHubAPI::connection('main')->getHttpClient()->get('orgs/societycms/events');
            return collect(ResponseMediator::getContent($response))->where('type', 'PushEvent')->take(3);
        });
    }

}
