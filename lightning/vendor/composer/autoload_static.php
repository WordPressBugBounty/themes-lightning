<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7fb08d776c4d1c0dabda744133f6253e
{
    public static $files = array (
        '23cc7d20cf0e5cb79054a1631f7842e6' => __DIR__ . '/..' . '/vektor-inc/tgm-plugin-activation/class-tgm-plugin-activation.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VektorInc\\VK_Term_Color\\' => 24,
            'VektorInc\\VK_Swiper\\' => 20,
            'VektorInc\\VK_Helpers\\' => 21,
            'VektorInc\\VK_Font_Awesome_Versions\\' => 35,
            'VektorInc\\VK_Component\\' => 23,
            'VektorInc\\VK_Color_Palette_Manager\\' => 35,
            'VektorInc\\VK_CSS_Optimize\\' => 26,
            'VektorInc\\VK_Breadcrumb\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VektorInc\\VK_Term_Color\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-term-color/src',
        ),
        'VektorInc\\VK_Swiper\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-swiper/src',
        ),
        'VektorInc\\VK_Helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-helpers/src',
        ),
        'VektorInc\\VK_Font_Awesome_Versions\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/font-awesome-versions/src',
        ),
        'VektorInc\\VK_Component\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-component/src',
        ),
        'VektorInc\\VK_Color_Palette_Manager\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-color-palette-manager/src',
        ),
        'VektorInc\\VK_CSS_Optimize\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src',
        ),
        'VektorInc\\VK_Breadcrumb\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-breadcrumb/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'VektorInc\\VK_Breadcrumb\\VkBreadcrumb' => __DIR__ . '/..' . '/vektor-inc/vk-breadcrumb/src/VkBreadcrumb.php',
        'VektorInc\\VK_CSS_Optimize\\CustomHtmlControl' => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src/CustomHtmlControl.php',
        'VektorInc\\VK_CSS_Optimize\\CustomTextControl' => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src/CustomTextControl.php',
        'VektorInc\\VK_CSS_Optimize\\VkCssOptimize' => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src/VkCssOptimize.php',
        'VektorInc\\VK_Color_Palette_Manager\\VkColorPaletteManager' => __DIR__ . '/..' . '/vektor-inc/vk-color-palette-manager/src/VkColorPaletteManager.php',
        'VektorInc\\VK_Component\\VK_Component_Button' => __DIR__ . '/..' . '/vektor-inc/vk-component/src/VK_Component_Button.php',
        'VektorInc\\VK_Component\\VK_Component_Mini_Contents' => __DIR__ . '/..' . '/vektor-inc/vk-component/src/VK_Component_Mini_Contents.php',
        'VektorInc\\VK_Component\\VK_Component_Posts' => __DIR__ . '/..' . '/vektor-inc/vk-component/src/VK_Component_Posts.php',
        'VektorInc\\VK_Font_Awesome_Versions\\VkFontAwesomeVersions' => __DIR__ . '/..' . '/vektor-inc/font-awesome-versions/src/VkFontAwesomeVersions.php',
        'VektorInc\\VK_Helpers\\VkHelpers' => __DIR__ . '/..' . '/vektor-inc/vk-helpers/src/VkHelpers.php',
        'VektorInc\\VK_Swiper\\VkSwiper' => __DIR__ . '/..' . '/vektor-inc/vk-swiper/src/VkSwiper.php',
        'VektorInc\\VK_Term_Color\\VkTermColor' => __DIR__ . '/..' . '/vektor-inc/vk-term-color/src/VkTermColor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7fb08d776c4d1c0dabda744133f6253e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7fb08d776c4d1c0dabda744133f6253e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7fb08d776c4d1c0dabda744133f6253e::$classMap;

        }, null, ClassLoader::class);
    }
}
