<?php
namespace Avalonia\Platform;
class StandardAssetLoader extends \System\Object implements
	\Avalonia\Platform\IAssetLoader
{


	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Void|void
	 */
	public function SetDefaultAssembly($assembly){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Boolean|bool
	 */
	public function Exists($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\IO\Stream
	 */
	public function Open($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\ValueTuple_2[System\IO\Stream,System\Reflection\Assembly]
	 */
	public function OpenAndGetAssembly($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Reflection\Assembly
	 */
	public function GetAssembly($uri, $baseUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 * @return \System\Collections\Generic\IEnumerable_1[System\Uri]
	 */
	public function GetAssets($uri, $baseUri){}
	/**
	 * @return \System\Void|void
	 */
	public static function RegisterResUriParsers(){}
	private function TryGetAsset($uri, $baseUri, &$assetDescriptor){}
	private function TryGetResAsmAndPath($uri, &$assembly, &$path){}
	private function TryGetAssembly($uri, &$assembly){}
	private function TryLoadAssembly($assemblyName, &$assembly){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 */
	public function __construct($assembly){}
}