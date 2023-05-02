<?php

namespace Leeroy\GraphQLPlayground;

use Leeroy\GraphQLPlayground\Controllers\Playground;
use SailCMS\Collection;
use SailCMS\Templating\Engine;
use SailCMS\Types\ContainerInformation;
use SailCMS\Contracts\AppContainer;

class Container extends AppContainer
{
    public function info(): ContainerInformation
    {
        Engine::addTemplatePath(__DIR__ . '/templates');
        return new ContainerInformation(
            'GraphQLPlayground', 
            'GraphQL Playground UI', 
            1.0, 
            '1.0.2',
            'LeeroyLabs', 
            'https://github.com/orgs/LeeroyLabs/repositories'
        );
    }

    public function routes(): void
    {
        $usePlayground = env('GRAPHQL_PLAYGROUND', 'false');

        if ($usePlayground === 'true') {
            $this->router->get('/graphql', 'en', Playground::class, 'loadPlayground');
        }
    }

    public function configureSearch(): void
    {
        // Anything to configure search
    }

    public function graphql(): void
    {

    }

    public function middleware(): void
    {
        // Register your middlewares
    }

    public function events(): void
    {
        // register for events
    }

    public function fields(): Collection
    {
        return Collection::init();
    }

    public function cli(): Collection
    {
        return Collection::init();
    }

    public function permissions(): Collection
    {
        return Collection::init();
    }
}
