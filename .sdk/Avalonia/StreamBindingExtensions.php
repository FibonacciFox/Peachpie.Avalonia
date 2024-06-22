<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StreamBindingExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $this [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]public static function StreamBinding_1 ($this){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $this
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function StreamBinding_2 ($this){}
	/**
	 * @deprecated
	 * @param \System\IObservable_1 $this [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]public static function StreamBinding_3 ($this){}
}
class StreamBindingExtensions extends \System\Object
{
	use StreamBindingExtensionsOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected static $StreamBindingName;
	/**
	 * @uses StreamBindingExtensionsOverride::StreamBinding_1 <br>public , args: ($this)<br>
	 * @uses StreamBindingExtensionsOverride::StreamBinding_2 <br>public , args: ($this)<br>
	 * @uses StreamBindingExtensionsOverride::StreamBinding_3 <br>public , args: ($this)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function StreamBinding (\override ...$args){}
}