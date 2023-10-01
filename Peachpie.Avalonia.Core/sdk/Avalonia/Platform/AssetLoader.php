<?php
namespace Avalonia\Platform;
/**
 */
class AssetLoader extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAssetLoader(){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Void|void
	 */
	public static function SetDefaultAssembly($assembly){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Boolean
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
	 * @return \System\ValueTuple_2
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
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetAssets($uri, $baseUri){}
	/**
	 * @return \System\Void|void
	 */
	protected static function RegisterResUriParsers(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
