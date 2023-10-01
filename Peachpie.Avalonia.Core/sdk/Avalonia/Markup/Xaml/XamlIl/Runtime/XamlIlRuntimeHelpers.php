<?php
namespace Avalonia\Markup\Xaml\XamlIl\Runtime;
/**
 */
class XamlIlRuntimeHelpers extends \System\Object
{
	/**
	 * @param \System\Func_2 $builder
	 * @param \System\IServiceProvider $provider
	 * @return \System\Func_2
	 */
	public static function DeferredTransformationFactoryV1($builder, $provider){}
	/**
	 * @param \System\Func_2 $builder
	 * @param \System\IServiceProvider $provider
	 * @return \System\Func_2
	 */
	public static function DeferredTransformationFactoryV2($builder, $provider){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $property
	 * @param \System\IServiceProvider $prov
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function ApplyNonMatchingMarkupExtensionV1($target, $property, $prov, $value){}
	/**
	 * @param \System\IServiceProvider $compiled
	 * @return \System\IServiceProvider
	 */
	public static function CreateInnerServiceProviderV1($compiled){}
	/**
	 * @return \System\IServiceProvider
	 */
	public static function CreateRootServiceProviderV2(){}
	/**
	 * @param \System\IServiceProvider $parentServiceProvider
	 * @return \System\IServiceProvider
	 */
	public static function CreateRootServiceProviderV3($parentServiceProvider){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
