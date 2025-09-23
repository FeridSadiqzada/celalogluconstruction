<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Package;
use App\Models\Service;
use App\Models\Project;
use App\Models\Partner;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sitemap()
    {
        $sitemap = Sitemap::create();

        // Add static pages
        $sitemap->add(Url::create(route('home'))
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(1.0));

        $sitemap->add(Url::create(route('services.index'))
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.9));

        $sitemap->add(Url::create(route('projects.index'))
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.9));

        $sitemap->add(Url::create(route('partners.index'))
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.7));

        $sitemap->add(Url::create(route('about'))
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.8));

        $sitemap->add(Url::create(route('contact'))
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.8));

        $sitemap->add(Url::create(route('blog.index'))
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.8));

        // Add services
        Service::all()->each(function ($service) use ($sitemap) {
            $sitemap->add(Url::create(route('services.show', $service))
                ->setLastModificationDate($service->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8));
        });

        // Add projects
        Project::all()->each(function ($project) use ($sitemap) {
            $sitemap->add(Url::create(route('projects.show', $project))
                ->setLastModificationDate($project->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.7));
        });

        // Add blog posts
        Post::published()->each(function ($post) use ($sitemap) {
            $sitemap->add(Url::create(route('blog.show', $post))
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.6));
        });

        return $sitemap->toResponse(request());
    }
}