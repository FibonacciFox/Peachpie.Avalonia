<?php
namespace Avalonia\Platform;
class AssetLoader extends \System\Object
{


	private static function GetAssetLoader(){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Void|void
	 */
	public static function SetDefaultAssembly($assembly){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Boolean|bool
	 */
	public static function Exists($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\IO\Stream
	 */
	public static function Open($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\ValueTuple_2[System\IO\Stream,System\Reflection\Assembly]
	 */
	public static function OpenAndGetAssembly($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Reflection\Assembly
	 */
	public static function GetAssembly($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Collections\Generic\IEnumerable_1[System\Uri]
	 */
	public static function GetAssets($uri, $baseUri){}
	/**
	 * @return \System\Void|void
	 */
	protected static function RegisterResUriParsers(){}
}