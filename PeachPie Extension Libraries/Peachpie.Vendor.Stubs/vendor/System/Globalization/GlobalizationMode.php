<?php
namespace System\Globalization;
class GlobalizationMode extends \System\Object
{

	private static function TryGetAppLocalIcuSwitchValue(&$value){}
	private static function TryGetStringValue($switchName, $envVariable, &$value){}
	private static function LoadAppLocalIcu($icuSuffixAndVersion){}
	private static function CreateLibraryName($baseName, $suffix, $extension, $version, $versionAtEnd){}
	private static function LoadLibrary($library, $failOnLoadFailure){}
	private static function LoadAppLocalIcuCore($version, $suffix){}
	private static function LoadICU(){}
}