<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DiyFpOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\Number+DiyFp& &$mMinus
	 * @param \System\Number+DiyFp& &$mPlus
	 * @return \System\Number
	 */
	#[MethodOverride]public static function CreateAndGetBoundaries_1 ($value, &$mMinus, &$mPlus){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @param \System\Number+DiyFp& &$mMinus
	 * @param \System\Number+DiyFp& &$mPlus
	 * @return \System\Number
	 */
	#[MethodOverride]public static function CreateAndGetBoundaries_2 ($value, &$mMinus, &$mPlus){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @param \System\Number+DiyFp& &$mMinus
	 * @param \System\Number+DiyFp& &$mPlus
	 * @return \System\Number
	 */
	#[MethodOverride]public static function CreateAndGetBoundaries_3 ($value, &$mMinus, &$mPlus){}
	/**
	 * @param \System\Double|double $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\Single $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
	/**
	 * @param \System\Half $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
	/**
	 * @param \System\UInt64 $f
	 * @param \System\Int32|int $e
	 */
	#[MethodOverride]public function __construct_4 ($f, $e){}
}
final class DiyFp extends \System\ValueType
{
	use DiyFpOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt64
	 */
	public $f;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public $e;
	/**
	 * @uses DiyFpOverride::CreateAndGetBoundaries_1 <br>public , args: ($value, &$mMinus, &$mPlus)<br>
	 * @uses DiyFpOverride::CreateAndGetBoundaries_2 <br>public , args: ($value, &$mMinus, &$mPlus)<br>
	 * @uses DiyFpOverride::CreateAndGetBoundaries_3 <br>public , args: ($value, &$mMinus, &$mPlus)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Number|mixed|\override
	 */
	#[MethodOverridePublic]function CreateAndGetBoundaries (\override ...$args){}
	/**
	 * @param \System\Number+DiyFp& &$other
	 * @return \System\Number+DiyFp
	 */
	public function Multiply(&$other){}
	/**
	 * @return \System\Number+DiyFp
	 */
	public function Normalize(){}
	/**
	 * @param \System\Number+DiyFp& &$other
	 * @return \System\Number+DiyFp
	 */
	public function Subtract(&$other){}
	private function GetBoundaries($implicitBitIndex, &$mMinus, &$mPlus){}
	/**
	 * @uses DiyFpOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses DiyFpOverride::__construct_2 <br>public , args: ($value)<br>
	 * @uses DiyFpOverride::__construct_3 <br>public , args: ($value)<br>
	 * @uses DiyFpOverride::__construct_4 <br>public , args: ($f, $e)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}