<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'behat/transliterator' => 'v1.2.0@826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c',
  'clue/stream-filter' => 'v1.4.0@d80fdee9b3a7e0d16fc330a22f41f3ad0eeb09d0',
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.2@b9d758e831c70751155c698c2f7df4665314a1cb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.9.3@7345cd59edfa2036eb0fa4264b77ae2576842035',
  'doctrine/doctrine-bundle' => '1.10.2@1f99e6645030542079c57d4680601a4a8778a1bd',
  'doctrine/doctrine-cache-bundle' => '1.3.5@5514c90d9fb595e1095e6d66ebb98ce9ef049927',
  'doctrine/doctrine-migrations-bundle' => 'v2.0.0@4c9579e0e43df1fb3f0ca29b9c20871c824fac71',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.0.2@1febd6c3ef84253d7c815bed85fc622ad207a9f8',
  'doctrine/migrations' => 'v2.0.0@0101f5bd7f4e5043bf8630db2930f8fd7da552b6',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'gedmo/doctrine-extensions' => 'v2.4.36@87c78ff9fd4b90460386f753d95622f6fbbfcb27',
  'guzzlehttp/guzzle' => '6.3.3@407b0cb880ace85c9b63c5f9551db498cb2d50ba',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.4.2@f5b8a8512e2b58b0071a7280e39f14f72e05d87c',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'knplabs/knp-components' => 'v1.3.9@f0f830361ff0ee83ea5c5ffe49b429d2b0ff4266',
  'knplabs/knp-markdown-bundle' => '1.7.0@912796833a126df65ce54f81ca174474105665ea',
  'knplabs/knp-paginator-bundle' => 'v2.8.0@f4ece5b347121b9fe13166264f197f90252d4bd2',
  'knplabs/knp-time-bundle' => '1.8.0@dd7ed9e72e8c28edb596c13e3d3c18c29d1248b4',
  'michelf/php-markdown' => '1.8.0@01ab082b355bf188d907b9929cd99b2923053495',
  'nexylan/slack' => 'v2.0.0@884fe1db0316f042e53989cbb06f343304dec75e',
  'nexylan/slack-bundle' => 'v2.0.0@f8d0537dce96539eb94a184fa83be3070bafec2d',
  'ocramius/proxy-manager' => '2.1.1@e18ac876b2e4819c76349de8f78ccc8ef1554cd7',
  'php-http/cache-plugin' => 'v1.5.0@c573ac6ea9b4e33fad567f875b844229d18000b9',
  'php-http/client-common' => '1.7.0@9accb4a082eb06403747c0ffd444112eda41a0fd',
  'php-http/discovery' => '1.4.0@9a6cb24de552bfe1aa9d7d1569e2d49c5b169a33',
  'php-http/guzzle6-adapter' => 'v1.1.1@a56941f9dc6110409cfcddc91546ee97039277ab',
  'php-http/httplug' => 'v1.1.0@1c6381726c18579c4ca2ef1ec1498fdae8bdf018',
  'php-http/httplug-bundle' => '1.11.0@9fed9ddee92ee20cc39050749f2fb9b6cec3f83d',
  'php-http/logger-plugin' => 'v1.0.0@d6c2ac7d542bf9928a0ac7a8a249d02848b824ec',
  'php-http/message' => '1.7.0@741f2266a202d59c4ed75436671e1b8e6f475ea3',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'php-http/stopwatch-plugin' => '1.1.0@b9d4ab7a0f4ca1fc17e323e880d1235076e31dbf',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.0.2@4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sensio/framework-extra-bundle' => 'v5.2.0@50e8b7292425957b8fd66887504430c89bcbd83c',
  'stof/doctrine-extensions-bundle' => 'v1.3.0@46db71ec7ffee9122eca3cdddd4ef8d84bae269c',
  'symfony/asset' => 'v4.1.4@7bec13dad0df8146ee6ba9350203fcc832814bfe',
  'symfony/cache' => 'v4.1.4@b8440ff4635c6631aca21a09ab72e0b7e3a6cb7a',
  'symfony/config' => 'v4.1.4@76015a3cc372b14d00040ff58e18e29f69eba717',
  'symfony/console' => 'v4.1.4@ca80b8ced97cf07390078b29773dc384c39eee1f',
  'symfony/contracts' => 'v1.0.2@1aa7ab2429c3d594dd70689604b5cf7421254cdf',
  'symfony/debug' => 'v4.1.4@47ead688f1f2877f3f14219670f52e4722ee7052',
  'symfony/dependency-injection' => 'v4.1.11@ceb1eed8c3adfe2e84c6666dbe037c9d46b481fa',
  'symfony/doctrine-bridge' => 'v4.2.3@5145bb51562c15a550238c17860ca8f03a1939cb',
  'symfony/event-dispatcher' => 'v4.1.4@bfb30c2ad377615a463ebbc875eba64a99f6aa3e',
  'symfony/filesystem' => 'v4.1.4@c0f5f62db218fa72195b8b8700e4b9b9cf52eb5e',
  'symfony/finder' => 'v4.1.4@e162f1df3102d0b7472805a5a9d5db9fcf0a8068',
  'symfony/flex' => 'v1.9.10@7335ec033995aa34133e621627333368f260b626',
  'symfony/form' => 'v4.1.12@4bcc0f21abfc07c5d712c6da8922a31e75891f2c',
  'symfony/framework-bundle' => 'v4.1.4@f62dc69959253acf717c3d89cd509975daf10e02',
  'symfony/http-foundation' => 'v4.1.4@3a5c91e133b220bb882b3cd773ba91bf39989345',
  'symfony/http-kernel' => 'v4.1.4@33de0a1ff2e1720096189e3ced682d7a4e8f5e35',
  'symfony/inflector' => 'v4.4.25@fc695ab721136b27aa84427a0fa80189761266ef',
  'symfony/intl' => 'v4.4.25@1a9d799a68e7f1caad20bfb0fae5b2d44871cf71',
  'symfony/lts' => 'dev-master@c1affae45b78aee036effa1759237e7fa96d4af2',
  'symfony/options-resolver' => 'v4.1.4@1913f1962477cdbb13df951f8147d5da1fe2412c',
  'symfony/orm-pack' => 'v1.0.6@36c2a928482dc5f05c5c1c1b947242ae03ff1335',
  'symfony/polyfill-ctype' => 'v1.10.0@e3d826245268269cd66f8326bd8bc066687b4a19',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-mbstring' => 'v1.10.0@c79c051f5b3a46be09205c73b80b346e4153e494',
  'symfony/process' => 'v4.1.4@86cdb930a6a855b0ab35fb60c1504cb36184f843',
  'symfony/property-access' => 'v4.4.25@3af7c21b4128eadbace0800b51054a81bff896c6',
  'symfony/property-info' => 'v4.4.25@18f7a0e58c9196c255ca8272f2c0de0b2bd563c6',
  'symfony/routing' => 'v4.1.4@a5784c2ec4168018c87b38f0e4f39d2278499f51',
  'symfony/security' => 'v4.2.12@ee8a924b8429459185ebde56dce9583151ac894f',
  'symfony/security-bundle' => 'v4.1.12@6161cf206bf36c3994d03edbe0a73e40c9ea4700',
  'symfony/serializer' => 'v4.4.25@6db3eb4f1bb437cd3730f52353ba4b568acaddf5',
  'symfony/stopwatch' => 'v4.1.4@966c982df3cca41324253dc0c7ffe76b6076b705',
  'symfony/templating' => 'v4.1.4@411b8c324ee3e8b36e71d938e8d043d6e16582d2',
  'symfony/translation' => 'v4.1.4@fa2182669f7983b7aa5f1a770d053f79f0ef144f',
  'symfony/twig-bridge' => 'v4.1.4@550cd9cd3a106a3426bdb2bd9d2914a4937656d1',
  'symfony/twig-bundle' => 'v4.1.4@7ad77c4f669d7d5de0032b876b19e2b664003e85',
  'symfony/validator' => 'v4.1.12@a2956c89d13da760d07b438a0a0cd7045a628fd4',
  'symfony/web-server-bundle' => 'v4.1.4@448d4437e95d0884856a1e83bc51a15b5d048060',
  'symfony/yaml' => 'v4.1.4@b832cc289608b6d305f62149df91529a2ab3c314',
  'twig/extensions' => 'v1.5.2@2c1a86526d0044065220d1b51ac08348bea5ca82',
  'twig/twig' => 'v2.10.0@5240e21982885b76629552d83b4ebb6d41ccde6b',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'zendframework/zend-code' => '3.3.1@c21db169075c6ec4b342149f446e7b7b724f95eb',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => 'v1.3.1@3a1e2c3c600e615a2dffe56d4ca0875cc5233e0a',
  'doctrine/doctrine-fixtures-bundle' => '3.0.2@7fc29d2b18c61ed99826b21fbfd1ff9969cc2e7f',
  'easycorp/easy-log-handler' => 'v1.0.7@5f95717248d20684f88cfb878d8bf3d78aadcbba',
  'fzaninotto/faker' => 'v1.8.0@f72816b43e74063c8b10357394b6bba8cb1c10de',
  'monolog/monolog' => '1.23.0@fd8c787753b3a2ad11bc60c063cff1358a32a3b4',
  'nikic/php-parser' => 'v4.2.0@594bcae1fc0bccd3993d2f0d61a018e26ac2865a',
  'symfony/debug-bundle' => 'v4.1.4@018e0f393ef6d073e2bf445dfcf9aad310698a51',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/dotenv' => 'v4.1.4@22ca63c46e252b8a8f37b8f9e6da66bff5b3d3e7',
  'symfony/maker-bundle' => 'v1.31.1@4f57a44cef0b4555043160b8bf223fcde8a7a59a',
  'symfony/monolog-bridge' => 'v4.1.4@d8b57ea6afaa30888dc74936b2d414abdfee30d0',
  'symfony/monolog-bundle' => 'v3.3.0@8204f3cd7c1bd6a6e2955c0a34475243a7bd9802',
  'symfony/phpunit-bridge' => 'v4.1.4@d5f433034543bbe3b0dfa2f34e6cc85bf839846f',
  'symfony/polyfill-php72' => 'v1.9.0@95c50420b0baed23852452a7f0c7b527303ed5ae',
  'symfony/profiler-pack' => 'v1.0.3@fa2e2dad522a3bef322196abad28ffce6d0fdbc5',
  'symfony/var-dumper' => 'v4.1.4@a05426e27294bba7b0226ffc17dd01a3c6ef9777',
  'symfony/web-profiler-bundle' => 'v4.1.4@085fe3d8b7841b156cc1dc5aa7df9bdc81316edb',
  'symfony/polyfill-iconv' => '*@f1eae61dd80a80c1ed299c1784a6b3791316f2e4',
  'symfony/polyfill-php71' => '*@f1eae61dd80a80c1ed299c1784a6b3791316f2e4',
  'symfony/polyfill-php70' => '*@f1eae61dd80a80c1ed299c1784a6b3791316f2e4',
  'symfony/polyfill-php56' => '*@f1eae61dd80a80c1ed299c1784a6b3791316f2e4',
  '__root__' => 'dev-master@f1eae61dd80a80c1ed299c1784a6b3791316f2e4',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
