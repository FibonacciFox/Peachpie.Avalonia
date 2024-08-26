<?php
namespace System\IO;
class PersistedFiles extends \System\Object
{

	/**
	 * @return \System\String|string
	 */
	protected static function GetHomeDirectory(){}
	private static function TryGetHomeDirectoryFromPasswd($buf, $bufLen, &$path){}
}