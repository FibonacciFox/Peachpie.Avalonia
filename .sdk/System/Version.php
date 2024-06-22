<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VersionOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $version
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($version){}
	/**
	 * @deprecated
	 * @param \System\Version $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ToString_1 ($format, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryFormat_1 ($destination, &$charsWritten){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32|int $fieldCount
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryFormat_2 ($destination, $fieldCount, &$charsWritten){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryFormat_3 ($destination, &$charsWritten, $format, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @return \System\Version
	 */
	#[MethodOverride]public static function Parse_1 ($input){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @return \System\Version
	 */
	#[MethodOverride]public static function Parse_2 ($input){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\Version& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($input, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\Version& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($input, &$result){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 */
	#[MethodOverride]public function __construct_1 ($major, $minor, $build, $revision){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 */
	#[MethodOverride]public function __construct_2 ($major, $minor, $build){}
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 */
	#[MethodOverride]public function __construct_3 ($major, $minor){}
	/**
	 * @param \System\String|string $version
	 */
	#[MethodOverride]public function __construct_4 ($version){}
	/**
	 */
	#[MethodOverride]public function __construct_5 (){}
}
final class Version extends \System\Object implements
	\System\ICloneable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable
{
	use VersionOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Major;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Minor;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Build;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Revision;
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $MajorRevision;
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $MinorRevision;
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @uses VersionOverride::CompareTo_1 <br>public , args: ($version)<br>
	 * @uses VersionOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @uses VersionOverride::TryFormat_1 <br>public , args: ($destination, &$charsWritten)<br>
	 * @uses VersionOverride::TryFormat_2 <br>public , args: ($destination, $fieldCount, &$charsWritten)<br>
	 * @uses VersionOverride::TryFormat_3 <br>private , args: ($destination, &$charsWritten, $format, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryFormat (\override ...$args){}
	/**
	 * @uses VersionOverride::Parse_1 <br>public , args: ($input)<br>
	 * @uses VersionOverride::Parse_2 <br>public , args: ($input)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Version|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses VersionOverride::TryParse_1 <br>public , args: ($input, &$result)<br>
	 * @uses VersionOverride::TryParse_2 <br>public , args: ($input, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function ParseVersion($input, $throwOnFailure){}
	private static function TryParseComponent($component, $componentName, $throwOnFailure, &$parsedComponent){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($v1, $v2){}
	/**
	 * @uses VersionOverride::__construct_1 <br>public , args: ($major, $minor, $build, $revision)<br>
	 * @uses VersionOverride::__construct_2 <br>public , args: ($major, $minor, $build)<br>
	 * @uses VersionOverride::__construct_3 <br>public , args: ($major, $minor)<br>
	 * @uses VersionOverride::__construct_4 <br>public , args: ($version)<br>
	 * @uses VersionOverride::__construct_5 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}