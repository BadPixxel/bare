<?php

namespace Dolibarr\Core\CoreBundle;


use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

use Symfony\Component\Yaml\Yaml;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    const CONFIG_EXTS = '.{php,xml,yaml,yml}';

    public function getCacheDir()
    {
        return $this->getProjectDir().'/var/cache/'.$this->environment;
    }

    public function getLogDir()
    {
        return $this->getProjectDir().'/var/log';
    }

    public function registerBundles()
    {
        // Enable Bundles installed by Symfony Flex
        $Bundles = require $this->getProjectDir().'/config/bundles.php';
        foreach ($Bundles as $class => $envs) {
            if (isset($envs['all']) || isset($envs[$this->environment])) {
                yield new $class();
            }
        }
        
        // Load Dolibarr Core Configuration
        $Modules = Yaml::parseFile($this->getProjectDir().'/config/modules.yml');
        // Enable Bundles Activated By User
        foreach ($Modules as $class => $envs) {
            if (isset($envs['all']) || isset($envs[$this->environment])) {
                yield new $class();
            }
        }
        
    }

    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        // Feel free to remove the "container.autowiring.strict_mode" parameter
        // if you are using symfony/dependency-injection 4.0+ as it's the default behavior
        $container->setParameter('container.autowiring.strict_mode', true);
        $container->setParameter('container.dumper.inline_class_loader', true);
        $confDir = $this->getProjectDir().'/config';

        $loader->load($confDir.'/{packages}/*'.self::CONFIG_EXTS, 'glob');
        $loader->load($confDir.'/{packages}/'.$this->environment.'/**/*'.self::CONFIG_EXTS, 'glob');
        $loader->load($confDir.'/{services}'.self::CONFIG_EXTS, 'glob');
        $loader->load($confDir.'/{services}_'.$this->environment.self::CONFIG_EXTS, 'glob');
        
        $loader->load($this->getProjectDir().'/src/**/**/services'.self::CONFIG_EXTS, 'glob');
        $loader->load($this->getProjectDir().'/mods/**/**/services'.self::CONFIG_EXTS, 'glob');
        
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $confDir = $this->getProjectDir().'/config';

        $routes->import($confDir.'/{routes}/*'.self::CONFIG_EXTS, '/', 'glob');
        $routes->import($confDir.'/{routes}/'.$this->environment.'/**/*'.self::CONFIG_EXTS, '/', 'glob');
        $routes->import($confDir.'/{routes}'.self::CONFIG_EXTS, '/', 'glob');
        
//        $routes->import($this->getProjectDir().'/src/**/routes'.self::CONFIG_EXTS, '/', 'glob');
//        $routes->import($this->getProjectDir().'/mods/**/**/routes'.self::CONFIG_EXTS, '/mods', 'glob');
        
        // Load Dolibarr Core Configuration
        $Modules = Yaml::parseFile($this->getProjectDir().'/config/modules.yml');
        // Load Bundles Routing
        foreach ($Modules as $class => $envs) {
            if ( method_exists($class, "configureRoutes")) {
                if (isset($envs['all']) || isset($envs[$this->environment])) {
                    $class::configureRoutes($routes);
                }
            }
        }        
    }
}
