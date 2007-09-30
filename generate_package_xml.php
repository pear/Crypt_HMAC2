<?php
require_once('PEAR/PackageFileManager2.php');
PEAR::setErrorHandling(PEAR_ERROR_DIE);

$options = array(
    'filelistgenerator' => 'cvs',
    'changelogoldtonew' => false,
    'simpleoutput'      => true,
    'baseinstalldir'    => 'Crypt',
    'packagedirectory'  => dirname(__FILE__),
    'clearcontents'     => true,
    'ignore'            => array('generate_package_xml.php', '.svn', '.cvs*'),
    'dir_roles'         => array(
        'docs'     => 'doc',
        'examples' => 'doc',
        'tests'    => 'test',
    ),
);

$packagexml = &PEAR_PackageFileManager2::importOptions($packagefile, $options);
$packagexml->setPackageType('php');

$packagexml->setPackage('Crypt_HMAC2');
$packagexml->setSummary('Implementation of Hashed Message Authentication Code for PHP5');
$packagexml->setDescription("Implementation of Hashed Message Authentication Code for PHP5.\nThis package may use the hash or mhash extensions when enabled to\nextend the range of cryptographic hash functions beyond the natively\nimplemented MD5 and SHA1.");

$packagexml->setChannel('pear.php.net');

$notes = <<<EOT
* Fixed base directory path bug in package.xml
EOT;
$packagexml->setNotes($notes);

$packagexml->setPhpDep('5.0.0');
$packagexml->setPearinstallerDep('1.4.0b1');
$packagexml->addPackageDepWithChannel('required', 'PEAR', 'pear.php.net', '1.3.6');

$packagexml->addMaintainer('lead', 'padraic', 'Pádraic Brady', 'padraic@php.net');
$packagexml->setLicense('New BSD License', 'http://opensource.org/licenses/bsd-license.php');

$packagexml->addRelease();
$packagexml->generateContents();

$packagexml->setAPIVersion('0.2.1');
$packagexml->setReleaseVersion('0.2.1');
$packagexml->setReleaseStability('beta');
$packagexml->setAPIStability('beta');

if (isset($_GET['make']) || (isset($_SERVER['argv']) && @$_SERVER['argv'][1] == 'make')) {
    $packagexml->writePackageFile();
} else {
    $packagexml->debugPackageFile();
}