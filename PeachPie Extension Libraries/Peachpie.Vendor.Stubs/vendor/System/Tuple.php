<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TupleOverride {
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @return \System\Tuple_1
	 */
	#[MethodOverride]public static function Create_1 ($item1){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @return \System\Tuple_2
	 */
	#[MethodOverride]public static function Create_2 ($item1, $item2){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @return \System\Tuple_3
	 */
	#[MethodOverride]public static function Create_3 ($item1, $item2, $item3){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @return \System\Tuple_4
	 */
	#[MethodOverride]public static function Create_4 ($item1, $item2, $item3, $item4){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @return \System\Tuple_5
	 */
	#[MethodOverride]public static function Create_5 ($item1, $item2, $item3, $item4, $item5){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @param \T6 $item6
	 * @return \System\Tuple_6
	 */
	#[MethodOverride]public static function Create_6 ($item1, $item2, $item3, $item4, $item5, $item6){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @param \T6 $item6
	 * @param \T7 $item7
	 * @return \System\Tuple_7
	 */
	#[MethodOverride]public static function Create_7 ($item1, $item2, $item3, $item4, $item5, $item6, $item7){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @param \T6 $item6
	 * @param \T7 $item7
	 * @param \T8 $item8
	 * @return \System\Tuple_8
	 */
	#[MethodOverride]public static function Create_8 ($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $h1
	 * @param \System\Int32|int $h2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CombineHashCodes_1 ($h1, $h2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $h1
	 * @param \System\Int32|int $h2
	 * @param \System\Int32|int $h3
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CombineHashCodes_2 ($h1, $h2, $h3){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $h1
	 * @param \System\Int32|int $h2
	 * @param \System\Int32|int $h3
	 * @param \System\Int32|int $h4
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CombineHashCodes_3 ($h1, $h2, $h3, $h4){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $h1
	 * @param \System\Int32|int $h2
	 * @param \System\Int32|int $h3
	 * @param \System\Int32|int $h4
	 * @param \System\Int32|int $h5
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CombineHashCodes_4 ($h1, $h2, $h3, $h4, $h5){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $h1
	 * @param \System\Int32|int $h2
	 * @param \System\Int32|int $h3
	 * @param \System\Int32|int $h4
	 * @param \System\Int32|int $h5
	 * @param \System\Int32|int $h6
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CombineHashCodes_5 ($h1, $h2, $h3, $h4, $h5, $h6){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $h1
	 * @param \System\Int32|int $h2
	 * @param \System\Int32|int $h3
	 * @param \System\Int32|int $h4
	 * @param \System\Int32|int $h5
	 * @param \System\Int32|int $h6
	 * @param \System\Int32|int $h7
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CombineHashCodes_6 ($h1, $h2, $h3, $h4, $h5, $h6, $h7){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $h1
	 * @param \System\Int32|int $h2
	 * @param \System\Int32|int $h3
	 * @param \System\Int32|int $h4
	 * @param \System\Int32|int $h5
	 * @param \System\Int32|int $h6
	 * @param \System\Int32|int $h7
	 * @param \System\Int32|int $h8
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CombineHashCodes_7 ($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8){}
}
class Tuple extends \System\Object
{
	use TupleOverride;

	/**
	 * @uses TupleOverride::Create_1 <br>public , args: ($item1)<br>
	 * @uses TupleOverride::Create_2 <br>public , args: ($item1, $item2)<br>
	 * @uses TupleOverride::Create_3 <br>public , args: ($item1, $item2, $item3)<br>
	 * @uses TupleOverride::Create_4 <br>public , args: ($item1, $item2, $item3, $item4)<br>
	 * @uses TupleOverride::Create_5 <br>public , args: ($item1, $item2, $item3, $item4, $item5)<br>
	 * @uses TupleOverride::Create_6 <br>public , args: ($item1, $item2, $item3, $item4, $item5, $item6)<br>
	 * @uses TupleOverride::Create_7 <br>public , args: ($item1, $item2, $item3, $item4, $item5, $item6, $item7)<br>
	 * @uses TupleOverride::Create_8 <br>public , args: ($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Tuple_1|\System\Tuple_2|\System\Tuple_3|\System\Tuple_4|\System\Tuple_5|\System\Tuple_6|\System\Tuple_7|\System\Tuple_8|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
	/**
	 * @uses TupleOverride::CombineHashCodes_1 <br>protected , args: ($h1, $h2)<br>
	 * @uses TupleOverride::CombineHashCodes_2 <br>protected , args: ($h1, $h2, $h3)<br>
	 * @uses TupleOverride::CombineHashCodes_3 <br>protected , args: ($h1, $h2, $h3, $h4)<br>
	 * @uses TupleOverride::CombineHashCodes_4 <br>protected , args: ($h1, $h2, $h3, $h4, $h5)<br>
	 * @uses TupleOverride::CombineHashCodes_5 <br>protected , args: ($h1, $h2, $h3, $h4, $h5, $h6)<br>
	 * @uses TupleOverride::CombineHashCodes_6 <br>protected , args: ($h1, $h2, $h3, $h4, $h5, $h6, $h7)<br>
	 * @uses TupleOverride::CombineHashCodes_7 <br>protected , args: ($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function CombineHashCodes (\override ...$args){}
}