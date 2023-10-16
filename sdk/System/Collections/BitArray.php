<?php
namespace System\Collections;
/**
 */
class BitArray extends \System\Object implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\ICloneable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Length;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Boolean
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Boolean
	 */
	public  function Get($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function Set($index, $value){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function SetAll($value){}
	/**
	 * @param \System\Collections\BitArray $value
	 * @return \System\Collections\BitArray
	 */
	public  function And($value){}
	/**
	 * @param \System\Collections\BitArray $value
	 * @return \System\Collections\BitArray
	 */
	public  function Or($value){}
	/**
	 * @param \System\Collections\BitArray $value
	 * @return \System\Collections\BitArray
	 */
	public  function Xor($value){}
	/**
	 * @return \System\Collections\BitArray
	 */
	public  function Not(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Collections\BitArray
	 */
	public  function RightShift($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Collections\BitArray
	 */
	public  function LeftShift($count){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Length($value){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @param \System\Int32|int $n
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt32ArrayLengthFromBitLength($n){}
	/**
	 * @param \System\Int32|int $n
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt32ArrayLengthFromByteLength($n){}
	/**
	 * @param \System\Int32|int $n
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetByteArrayLengthFromBitLength($n){}
	/**
	 * @param \System\Int32|int $number
	 * @param \System\Int32& $remainder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Div32Rem($number, $remainder){}
	/**
	 * @param \System\Int32|int $number
	 * @param \System\Int32& $remainder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Div4Rem($number, $remainder){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowArgumentOutOfRangeException($index){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
