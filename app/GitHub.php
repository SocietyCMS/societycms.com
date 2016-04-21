<?php

namespace App;

use Carbon\Carbon;
use Github\HttpClient\Message\ResponseMediator;
use GrahamCampbell\GitHub\Facades\GitHub as GitHubAPI;
use Illuminate\Support\Facades\Cache;

/**
 * Class GitHub
 * @package App
 */
class GitHub
{
    /**
     * @return array
     */
    public function latestOrganisationCommits()
    {
        if (!$this->githubIsConfigured()) {
            return [];
        }

        return Cache::remember('latestOrganisationCommits', 60, function () {
            $response = GitHubAPI::connection('main')->getHttpClient()->get('orgs/societycms/events');
            return collect(ResponseMediator::getContent($response))->where('type', 'PushEvent')->take(3);
        });
    }

    /**
     * @param $vendor
     * @param $repository
     * @return array
     */
    public function getRepository($vendor, $repository)
    {
        if (!$this->githubIsConfigured()) {
            return [];
        }

        return Cache::remember("repositoryLastUpdated.{$vendor}/{$repository}", 60, function () use($vendor, $repository) {
            return  GitHubAPI::connection('main')->repo()->show($vendor, $repository);
        });
    }

    public function repositoryLastUpdatedAt($vendor, $repository)
    {
        $repository = $this->getRepository($vendor,$repository);
        return Carbon::parse($repository['pushed_at'])->diffForHumans();
    }

    /**
     * @return bool
     */
    private function githubIsConfigured()
    {
        if (empty(config('github.connections.main.token'))) {
            return false;
        }
        return true;
    }
}
