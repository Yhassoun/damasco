<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3ed288eeb84cec41adc6646acfa2541
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mailchimp' => 
            array (
                0 => __DIR__ . '/..' . '/mailchimp/mailchimp/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mailchimp' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp.php',
        'Mailchimp_Campaigns' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Campaigns.php',
        'Mailchimp_Conversations' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Conversations.php',
        'Mailchimp_Ecomm' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Ecomm.php',
        'Mailchimp_Folders' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Folders.php',
        'Mailchimp_Gallery' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Gallery.php',
        'Mailchimp_Goal' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Goal.php',
        'Mailchimp_Helper' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Helper.php',
        'Mailchimp_Lists' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Lists.php',
        'Mailchimp_Mobile' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Mobile.php',
        'Mailchimp_Neapolitan' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Neapolitan.php',
        'Mailchimp_Reports' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Reports.php',
        'Mailchimp_Templates' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Templates.php',
        'Mailchimp_Users' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Users.php',
        'Mailchimp_Vip' => __DIR__ . '/..' . '/mailchimp/mailchimp/src/Mailchimp/Vip.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita3ed288eeb84cec41adc6646acfa2541::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita3ed288eeb84cec41adc6646acfa2541::$classMap;

        }, null, ClassLoader::class);
    }
}
