<?php

namespace App\Factory;

use App\Entity\Trek;
use App\Repository\TrekRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Trek>
 *
 * @method        Trek|Proxy                     create(array|callable $attributes = [])
 * @method static Trek|Proxy                     createOne(array $attributes = [])
 * @method static Trek|Proxy                     find(object|array|mixed $criteria)
 * @method static Trek|Proxy                     findOrCreate(array $attributes)
 * @method static Trek|Proxy                     first(string $sortedField = 'id')
 * @method static Trek|Proxy                     last(string $sortedField = 'id')
 * @method static Trek|Proxy                     random(array $attributes = [])
 * @method static Trek|Proxy                     randomOrCreate(array $attributes = [])
 * @method static TrekRepository|RepositoryProxy repository()
 * @method static Trek[]|Proxy[]                 all()
 * @method static Trek[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Trek[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Trek[]|Proxy[]                 findBy(array $attributes)
 * @method static Trek[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Trek[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class TrekFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->text(30),
            'slug' => self::faker()->text(10),
            'description' => self::faker()->text(255),
            'length' => self::faker()->text(10),
            'duration' => self::faker()->text(10),
            'difficulty' => self::faker()->text(10),
            'maxElevation' => self::faker()->text(10),
            'imagePath' => "/assets/img/treks/la-haute-route.png",
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Trek $trek): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Trek::class;
    }
}
