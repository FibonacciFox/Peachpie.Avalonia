<?php
namespace Avalonia\Utilities;
class UriExtensions extends \System\Object
{


	/**
	 * @param \System\Uri $uri
	 * @return \System\Boolean|bool
	 */
	public static function IsAbsoluteResm($uri){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\Boolean|bool
	 */
	public static function IsResm($uri){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\Boolean|bool
	 */
	public static function IsAvares($uri){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\Boolean|bool
	 */
	public static function IsFontCollection($uri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Uri
	 */
	public static function EnsureAbsolute($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\String|string
	 */
	public static function GetUnescapeAbsolutePath($uri){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\String|string
	 */
	public static function GetUnescapeAbsoluteUri($uri){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\String|string
	 */
	public static function GetAssemblyNameFromQuery($uri){}
}