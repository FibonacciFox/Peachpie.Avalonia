<?php
namespace Avalonia\Data\Converters;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait _Override {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\ComponentModel\INotifyPropertyChanged $source
	 * @param \System\ComponentModel\PropertyChangedEventHandler $listener
	 */
	#[MethodOverride]public function __construct_2 ($source, $listener){}
}
class WeakPropertyChangedProxy extends \System\Object
{
	use _Override;

	/**
	 * @param \System\ComponentModel\INotifyPropertyChanged $source
	 * @param \System\ComponentModel\PropertyChangedEventHandler $listener
	 * @return \System\Void|void
	 */
	public function SubscribeTo($source, $listener){}
	/**
	 * @return \System\Void|void
	 */
	public function Unsubscribe(){}
	private function OnPropertyChanged($sender, $e){}
	/**
	 * @uses WeakPropertyChangedProxyOverride::__construct_1 <br>public , args: ()<br>
	 * @uses WeakPropertyChangedProxyOverride::__construct_2 <br>public , args: ($source, $listener)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}