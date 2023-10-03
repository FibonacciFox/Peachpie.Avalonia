<?php
namespace Avalonia\Markup\Xaml\XamlIl\Runtime;
/**
 */
class DeferredParentServiceProvider extends \System\Object implements 
	\Avalonia\Markup\Xaml\XamlIl\Runtime\IAvaloniaXamlIlParentStackProvider,
	\System\IServiceProvider,
	\Avalonia\Markup\Xaml\IRootObjectProvider,
	\Avalonia\Markup\Xaml\XamlIl\Runtime\IAvaloniaXamlIlControlTemplateProvider
{
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Parents(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetParents(){}
	/**
	 * @param \System\Type $serviceType
	 * @return \System\Object|object
	 */
	public  function GetService($serviceType){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_RootObject(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_IntermediateRootObject(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
