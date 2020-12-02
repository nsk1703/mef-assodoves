<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'symfony/framework-standard-edition';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'coresphere/console-bundle' => '0.5.0@7761030372974d890bc19cee38f23a6f43c2d974',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '1.12.10@2ee4c25a847e744e93d7fc2895e059ad9ef7d10c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'friendsofsymfony/jsrouting-bundle' => '2.6.0@9deaf916760ce1d64cf46460473260b02751cee5',
  'friendsofsymfony/user-bundle' => 'v2.1.2@1049935edd24ec305cc6cfde1875372fa9600446',
  'gedmo/doctrine-extensions' => 'v2.4.41@e55a6727052f91834a968937c93b6fb193be8fb6',
  'hwi/oauth-bundle' => '0.5.3@50f4bcbe5c217cfdf0f7f40a174b87199b76d1e1',
  'imagine/imagine' => 'v0.7.1@a9a702a946073cbca166718f1b02a1e72d742daa',
  'incenteev/composer-parameter-handler' => 'v2.1.4@084befb11ec21faeadcddefb88b66132775ff59b',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/payment-core-bundle' => '1.4.1@c9052c9720203ce92584e0e57096532005cfbe1a',
  'jms/payment-paypal-bundle' => '1.2.0@7151eaf50f4cdc04273346e2327209e54c2f33de',
  'knplabs/knp-components' => 'v1.3.10@fc1755ba2b77f83a3d3c99e21f3026ba2a1429be',
  'knplabs/knp-paginator-bundle' => 'v2.8.0@f4ece5b347121b9fe13166264f197f90252d4bd2',
  'kriswallsmith/assetic' => 'v1.4.0@e911c437dbdf006a8f62c2f59b15b2d69a5e0aa1',
  'kriswallsmith/buzz' => '0.17.2@0d7e985003f074fca0ceb00bf2f650d749ae9710',
  'leafo/scssphp' => 'v0.8.4@b9cdea3e42c3bcb1a9faafd04ccce4e8ec860ad9',
  'liip/imagine-bundle' => '1.9.1@3084c77e984ec669e0d645250a3cb1077d8b92f6',
  'mobiledetect/mobiledetectlib' => '2.8.34@6f8113f57a508494ca36acbcfa2dc2d923c7ed5b',
  'monolog/monolog' => '1.25.5@1817faadd1846cd08be9a49e905dc68823bc38c0',
  'nyholm/psr7' => '1.3.0@c17f4f73985f62054a331cbc4ffdf9868c4ef256',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'paragonie/random_compat' => 'v2.0.18@0a58ef6e3146256cc3dc7cc393927bcc7d1b72db',
  'patchwork/jsqueeze' => 'v1.0.7@f90a933213534b93e4ff3c2c3026ff7458f7721b',
  'paypal/paypal-checkout-sdk' => '1.0.1@ed6a55075448308b87a8b59dcb7fedf04a048cb1',
  'paypal/paypalhttp' => '1.0.0@1ad9b846a046f09d6135cbf2cbaa7701bbc630a3',
  'php-http/httplug' => 'v1.1.0@1c6381726c18579c4ca2ef1ec1498fdae8bdf018',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '0.1.0@d4d3ec04b034120b0591ad9722a4c2be33a7dfec',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sensio/distribution-bundle' => 'v5.0.25@80a38234bde8321fb92aa0b8c27978a272bb4baf',
  'sensio/framework-extra-bundle' => 'v5.4.1@585f4b3a1c54f24d1a8431c729fc8f5acca20c8a',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'stof/doctrine-extensions-bundle' => 'v1.3.0@46db71ec7ffee9122eca3cdddd4ef8d84bae269c',
  'stripe/stripe-php' => 'v7.47.0@b51656cb398d081fcee53a76f6edb8fd5c1a5306',
  'suncat/mobile-detect-bundle' => 'v1.1.1@06007fec624587fd90e8963b796fc84fff64d4d8',
  'swiftmailer/swiftmailer' => 'v5.4.12@181b89f18a90f8925ef805f950d47a7190e9b950',
  'symfony/assetic-bundle' => 'v2.8.2@2e0a23a4874838e26de6f025e02fc63328921a4c',
  'symfony/http-client' => 'v5.1.3@050dc633a598bdadbd49449500c87e30dabe5c58',
  'symfony/http-client-contracts' => 'v2.1.3@cd88921e9add61f2064c9c6b30de4f589db42962',
  'symfony/mime' => 'v5.1.3@149fb0ad35aae3c7637b496b38478797fa6a7ea6',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/polyfill-apcu' => 'v1.18.1@f1d94a98e364f4b84252331a40cb7987b847e241',
  'symfony/polyfill-ctype' => 'v1.18.1@1c302646f6efc070cd46856e600e5e0684d6b454',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php56' => 'v1.18.1@13df84e91cd168f247c2f2ec82cc0fa24901c011',
  'symfony/polyfill-php70' => 'v1.18.1@0dd93f2c578bdc9c72697eaa5f1dd25644e618d3',
  'symfony/polyfill-php72' => 'v1.18.1@639447d008615574653fb3bc60d1986d7172eaae',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/polyfill-util' => 'v1.18.1@46b910c71e9828f8ec2aa7a0314de1130d9b295a',
  'symfony/service-contracts' => 'v2.1.3@58c7475e5457c5492c26cc740cc0ad7464be9442',
  'symfony/swiftmailer-bundle' => 'v2.6.7@c4808f5169efc05567be983909d00f00521c53ec',
  'symfony/symfony' => 'v3.4.43@21e652ffdb8c908c8606f923b903be5b8af21e01',
  'tecnickcom/tcpdf' => '6.3.5@19a535eaa7fb1c1cac499109deeb1a7a201b4549',
  'twig/twig' => 'v2.13.1@57e96259776ddcacf1814885fc3950460c8e18ef',
  'whiteoctober/tcpdf-bundle' => '1.1.2@33e57940af790c0c8ee6a200a1f0661e415d0a5c',
  'willdurand/jsonp-callback-validator' => 'v1.1.0@1a7d388bb521959e612ef50c5c7b1691b097e909',
  'sensio/generator-bundle' => 'v3.1.7@28cbaa244bd0816fd8908b93f90380bcd7b67a65',
  'symfony/phpunit-bridge' => 'v3.4.43@03f831108f7cea087be83cc6dd07d3419542a5ba',
  'symfony/framework-standard-edition' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
