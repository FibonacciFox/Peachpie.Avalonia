<?php
namespace Avalonia\Platform;
/**
 */
class StandardAssetLoader extends \System\Object implements 
	\Avalonia\Platform\IAssetLoader
{
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Void|void
	 */
	public  function SetDefaultAssembly($assembly){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Boolean
	 */
	public  function Exists($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\IO\Stream
	 */
	public  function Open($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\ValueTuple_2
	 */
	public  function OpenAndGetAssembly($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Reflection\Assembly
	 */
	public  function GetAssembly($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetAssets($uri, $baseUri){}
	/**
	 * @return \System\Void|void
	 */
	public static function RegisterResUriParsers(){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @param \Avalonia\Platform\Internal\IAssetDescriptor& $assetDescriptor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetAsset($uri, $baseUri, $assetDescriptor){}
	/**
	 * @param \System\Uri $uri
	 * @param \Avalonia\Platform\Internal\IAssemblyDescriptor& $assembly
	 * @param \System\String& $path
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetResAsmAndPath($uri, $assembly, $path){}
	/**
	 * @param \System\Uri $uri
	 * @param \Avalonia\Platform\Internal\IAssemblyDescriptor& $assembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetAssembly($uri, $assembly){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \Avalonia\Platform\Internal\IAssemblyDescriptor& $assembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryLoadAssembly($assemblyName, $assembly){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
