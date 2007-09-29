<?php
require_once('PEAR/PackageFileManager2.php');
PEAR::setErrorHandling(PEAR_ERROR_DIE);
//require_once 'PEAR/Config.php';
//PEAR_Config::singleton('/path/to/unusualpearconfig.ini');
// use the above lines if the channel information is not validating
$packagexml = new PEAR_PackageFileManager2;
// for an existing package.xml use
// $packagexml = {@link importOptions()} instead
$e = $packagexml->setOptions(
    array('baseinstalldir' => 'Crypt',
     'packagedirectory' => 'D:/xampp/htdocs/projects/pear/trunk/Crypt_HMAC2/',
     'filelistgenerator' => 'file',
     'dir_roles' => array('docs' => 'doc', 'tests' => 'test'),
     'ignore' => array('generate_package_xml.php', '.svn')
    )
);
$packagexml->setPackage('Crypt_HMAC2');
$packagexml->setSummary('Implementation of Hashed Message Authentication Code for PHP5');
$packagexml->setDescription("Implementation of Hashed Message Authentication Code for PHP5.\nThis package may use the hash or mhash extensions when enabled to\nextend the range of cryptographic hash functions beyond the natively\nimplemented MD5 and SHA1.");
$packagexml->setChannel('pear.php.net');
$packagexml->setAPIVersion('0.1.0');
$packagexml->setReleaseVersion('0.1.0a3');
$packagexml->setReleaseStability('alpha');
$packagexml->setAPIStability('alpha');
$packagexml->setNotes("* This is the proposal version...");
$packagexml->setPackageType('php');
$packagexml->setPhpDep('5.0.0');
$packagexml->setPearinstallerDep('1.4.0');
$packagexml->addMaintainer('lead', 'padraic', 'Pádraic Brady', 'padraic@php.net');
$packagexml->setLicense('New BSD License', 'http://opensource.org/licenses/bsd-license.php');
$packagexml->generateContents();

//$pkg = &$packagexml->exportCompatiblePackageFile1(); // get a PEAR_PackageFile object

if (isset($_GET['make']) || (isset($_SERVER['argv']) && @$_SERVER['argv'][1] == 'make')) {
    //$pkg->writePackageFile();
    $packagexml->writePackageFile();
} else {
    //$pkg->debugPackageFile();
    $packagexml->debugPackageFile();
}
?>