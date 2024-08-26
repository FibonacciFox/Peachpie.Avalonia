<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $startingTextElement
	 * @return \System\String|string
	 */
	#[MethodOverride]public function SubstringByTextElements_1 ($startingTextElement){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startingTextElement
	 * @param \System\Int32|int $lengthInTextElements
	 * @return \System\String|string
	 */
	#[MethodOverride]public function SubstringByTextElements_2 ($startingTextElement, $lengthInTextElements){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetNextTextElement_1 ($str){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @param \System\Int32|int $index
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetNextTextElement_2 ($str, $index){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetNextTextElementLength_1 ($str){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetNextTextElementLength_2 ($str, $index){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $str [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetNextTextElementLength_3 ($str){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\Globalization\TextElementEnumerator
	 */
	#[MethodOverride]public static function GetTextElementEnumerator_1 ($str){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @param \System\Int32|int $index
	 * @return \System\Globalization\TextElementEnumerator
	 */
	#[MethodOverride]public static function GetTextElementEnumerator_2 ($str, $index){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
class StringInfo extends \System\Object
{
	use StringInfoOverride;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $String;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LengthInTextElements;
	/**
	 * @uses StringInfoOverride::SubstringByTextElements_1 <br>public , args: ($startingTextElement)<br>
	 * @uses StringInfoOverride::SubstringByTextElements_2 <br>public , args: ($startingTextElement, $lengthInTextElements)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function SubstringByTextElements (\override ...$args){}
	/**
	 * @uses StringInfoOverride::GetNextTextElement_1 <br>public , args: ($str)<br>
	 * @uses StringInfoOverride::GetNextTextElement_2 <br>public , args: ($str, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetNextTextElement (\override ...$args){}
	/**
	 * @uses StringInfoOverride::GetNextTextElementLength_1 <br>public , args: ($str)<br>
	 * @uses StringInfoOverride::GetNextTextElementLength_2 <br>public , args: ($str, $index)<br>
	 * @uses StringInfoOverride::GetNextTextElementLength_3 <br>public , args: ($str)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetNextTextElementLength (\override ...$args){}
	/**
	 * @uses StringInfoOverride::GetTextElementEnumerator_1 <br>public , args: ($str)<br>
	 * @uses StringInfoOverride::GetTextElementEnumerator_2 <br>public , args: ($str, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\TextElementEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetTextElementEnumerator (\override ...$args){}
	/**
	 * @param \System\String|string $str
	 * @return \System\Int32[]|array
	 */
	public static function ParseCombiningCharacters($str){}
	/**
	 * @uses StringInfoOverride::__construct_1 <br>public , args: ()<br>
	 * @uses StringInfoOverride::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}