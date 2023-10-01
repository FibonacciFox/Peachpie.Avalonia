<?php
namespace Avalonia\Markup\Xaml;
/**
 */
class Extensions extends \System\Object
{
	/**
	 * @param \System\IServiceProvider $sp
	 * @return \Avalonia\Markup\Xaml\T
	 */
	public static function GetService($sp){}
	/**
	 * @param \System\IServiceProvider $sp
	 * @return \Avalonia\Markup\Xaml\T
	 */
	public static function GetRequiredService($sp){}
	/**
	 * @param \System\IServiceProvider $ctx
	 * @return \System\Uri
	 */
	public static function GetContextBaseUri($ctx){}
	/**
	 * @param \System\IServiceProvider $ctx
	 * @return \Avalonia\Markup\Xaml\T
	 */
	public static function GetFirstParent($ctx){}
	/**
	 * @param \System\IServiceProvider $ctx
	 * @return \Avalonia\Markup\Xaml\T
	 */
	public static function GetLastParent($ctx){}
	/**
	 * @param \System\IServiceProvider $sp
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetParents($sp){}
	/**
	 * @param \System\IServiceProvider $sp
	 * @return \System\Boolean
	 */
	public static function IsInControlTemplate($sp){}
	/**
	 * @param \System\IServiceProvider $ctx
	 * @param \System\String|string $namespacePrefix
	 * @param \System\String|string $type
	 * @return \System\Type
	 */
	public static function ResolveType($ctx, $namespacePrefix, $type){}
	/**
	 * @param \System\IServiceProvider $provider
	 * @return \System\Object|object
	 */
	public static function GetDefaultAnchor($provider){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
