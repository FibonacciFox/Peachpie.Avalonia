<?php
namespace Avalonia\Utilities;
/**
 */
class Key extends \System\ValueType
{
	/**
	 * @var \System\WeakReference_1[T]
	 * @field
	 */
	public $Weak;
	/**
	 * @var \T
	 * @field
	 */
	public $Strong;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $HashCode;
	/**
	 * @param \Avalonia\Utilities\T $r
	 * @return \Avalonia\Utilities\Key
	 */
	public static function MakeStrong($r){}
	/**
	 * @param \Avalonia\Utilities\T $r
	 * @return \Avalonia\Utilities\Key
	 */
	public static function MakeWeak($r){}
}
