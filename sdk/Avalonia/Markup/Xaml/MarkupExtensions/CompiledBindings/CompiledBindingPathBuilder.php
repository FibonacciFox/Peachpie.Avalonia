<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class CompiledBindingPathBuilder extends \System\Object
{
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function Not(){}
	/**
	 * @param \Avalonia\Data\Core\IPropertyInfo $info
	 * @param \System\Func_3 $accessorFactory
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function Property($info, $accessorFactory){}
	/**
	 * @param \System\RuntimeMethodHandle $handle
	 * @param \System\RuntimeTypeHandle $delegateType
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function Method($handle, $delegateType){}
	/**
	 * @param \System\String|string $methodName
	 * @param \System\Action_2 $executeHelper
	 * @param \System\Func_3 $canExecuteHelper
	 * @param \System\String[] $dependsOnProperties
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function Command($methodName, $executeHelper, $canExecuteHelper, $dependsOnProperties){}
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function StreamTask(){}
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function StreamObservable(){}
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function Self(){}
	/**
	 * @param \System\Type $ancestorType
	 * @param \System\Int32|int $level
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function Ancestor($ancestorType, $level){}
	/**
	 * @param \System\Type $ancestorType
	 * @param \System\Int32|int $level
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function VisualAncestor($ancestorType, $level){}
	/**
	 * @param \Avalonia\Controls\INameScope $nameScope
	 * @param \System\String|string $name
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function ElementName($nameScope, $name){}
	/**
	 * @param \System\Int32[] $indices
	 * @param \System\Type $elementType
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function ArrayElement($indices, $elementType){}
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function TypeCast(){}
	/**
	 * @param \System\Object|object $rawSource
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPathBuilder
	 */
	public  function SetRawSource($rawSource){}
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPath
	 */
	public  function Build(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
