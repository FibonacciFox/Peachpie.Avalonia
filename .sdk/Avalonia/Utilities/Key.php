<?php
namespace Avalonia\Utilities;
final class Key extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\WeakReference_1[T]
	 */
	public $Weak;
	/**
	 * @field
	 * @var \T|object
	 */
	public $Strong;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $HashCode;
	/**
	 * @param \T|object $r
	 * @return \Avalonia\Utilities\WeakHashList_1+Key[T]
	 */
	public static function MakeStrong($r){}
	/**
	 * @param \T|object $r
	 * @return \Avalonia\Utilities\WeakHashList_1+Key[T]
	 */
	public static function MakeWeak($r){}
}