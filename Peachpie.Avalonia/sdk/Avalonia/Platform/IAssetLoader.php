<?php
namespace Avalonia\Platform;
/**
 */
interface IAssetLoader
{
	/**
	 * @param \System\Reflection\Assembly $assembly
	 */
	public function SetDefaultAssembly($assembly);
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 */
	public function Exists($uri, $baseUri);
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 */
	public function Open($uri, $baseUri);
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 */
	public function OpenAndGetAssembly($uri, $baseUri);
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 */
	public function GetAssembly($uri, $baseUri);
	/**
	 * @param \System\Uri $uri
	 * @param \System\Uri $baseUri
	 */
	public function GetAssets($uri, $baseUri);
}
