<?php
namespace Avalonia\Data\Core\Plugins;
class IndeiValidationPlugin extends \System\Object implements
	\Avalonia\Data\Core\Plugins\IDataValidationPlugin
{

	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $memberName
	 * @return \System\Boolean|bool
	 */
	public function Match($reference, $memberName){}
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $name
	 * @param \Avalonia\Data\Core\Plugins\IPropertyAccessor $accessor
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public function Start($reference, $name, $accessor){}
	/**
	 */
	public function __construct(){}
}