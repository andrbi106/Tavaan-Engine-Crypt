<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Crypt\Contracts\EncrypterInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * EncrypterServiceProvider — ثبت سرویس‌های موتور Encrypter.
 */
final class EncrypterServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(EncrypterInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Encrypter($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('encrypter', $this->app->get(EncrypterInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Crypt\Console\Key_generateCommand::class;
        $this->commands[] = \Tavaan\Engine\Crypt\Console\Key_rotateCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            EncrypterInterface::class,
            'encrypter',
        ];
    }
}