<?php
namespace Avalonia\Data\Core\Plugins;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ObservableStreamPluginOverride {
	/**
	 * @deprecated
	 * @param \System\Type $source
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]private static function GetBoxObservable_1 ($source){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]private static function GetBoxObservable_2 (){}
}
class ObservableStreamPlugin extends \System\Object implements
	\Avalonia\Data\Core\Plugins\IStreamPlugin
{
	use ObservableStreamPluginOverride;

	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @return \System\Boolean|bool
	 */
	public function Match($reference){}
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @return \System\IObservable_1[System\Object]
	 */
	public function Start($reference){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ObservableStreamPluginOverride::GetBoxObservable_1 <br>private , args: ($source)<br>
	 * @uses ObservableStreamPluginOverride::GetBoxObservable_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePrivate]function GetBoxObservable (\override ...$args){}
	private static function BoxObservable($source){}
	/**
	 */
	public function __construct(){}
}