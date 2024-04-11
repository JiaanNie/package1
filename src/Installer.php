<?php
namespace VendorDemoName\Package1\Src\Installer;
class Installer {
    public static function install() {
        $projectRoot = getcwd();
        echo "installing... at $projectRoot\n";
    }
}
