<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TokenParserOverride {
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryConsume_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryConsume_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $extraValidChars [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 &$res [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryParseIdentifier_1 ($extraValidChars, &$res){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$res [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryParseIdentifier_2 (&$res){}
}
final class TokenParser extends \System\ValueType
{
	use TokenParserOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @return \System\Void|void
	 */
	public function SkipWhitespace(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function NextIsWhitespace(){}
	private static function IsAlphaNumeric($ch){}
	/**
	 * @uses TokenParserOverride::TryConsume_1 <br>public , args: ($c)<br>
	 * @uses TokenParserOverride::TryConsume_2 <br>public , args: ($s)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryConsume (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Char& &$token
	 * @return \System\Boolean|bool
	 */
	public function TryConsumeAny($chars, &$token){}
	/**
	 * @param \System\String|string $keyword
	 * @return \System\Boolean|bool
	 */
	public function TryParseKeyword($keyword){}
	/**
	 * @param \System\String|string $keywordInLowerCase
	 * @return \System\Boolean|bool
	 */
	public function TryParseKeywordLowerCase($keywordInLowerCase){}
	/**
	 * @param \System\Int32|int $c
	 * @return \System\Void|void
	 */
	public function Advance($c){}
	/**
	 * @uses TokenParserOverride::TryParseIdentifier_1 <br>public , args: ($extraValidChars, &$res)<br>
	 * @uses TokenParserOverride::TryParseIdentifier_2 <br>public , args: (&$res)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseIdentifier (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 &$res [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	public function TryParseCall(&$res){}
	/**
	 * @param \System\Single& &$res
	 * @return \System\Boolean|bool
	 */
	public function TryParseFloat(&$res){}
	/**
	 * @param \System\Double& &$res
	 * @return \System\Boolean|bool
	 */
	public function TryParseDouble(&$res){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsEofWithWhitespace(){}
	/**
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 */
	public function __construct($s){}
}