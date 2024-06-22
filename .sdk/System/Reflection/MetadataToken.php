<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MetadataTokenOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\MetadataToken $token
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_Implicit_1 ($token){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $token
	 * @return \System\Reflection\MetadataToken
	 */
	#[MethodOverride]public static function op_Implicit_2 ($token){}
}
final class MetadataToken extends \System\ValueType
{
	use MetadataTokenOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGlobalTypeDefToken;
	/**
	 * @property
	 * @var \System\Reflection\MetadataTokenType
	 * @since readonly
	 */
	public $TokenType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTypeRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTypeDef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFieldDef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMethodDef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMemberRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEvent;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsParamDef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTypeSpec;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMethodSpec;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsString;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSignature;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericPar;
	/**
	 * @uses MetadataTokenOverride::op_Implicit_1 <br>public , args: ($token)<br>
	 * @uses MetadataTokenOverride::op_Implicit_2 <br>public , args: ($token)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Reflection\MetadataToken|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Boolean|bool
	 */
	public static function IsNullToken($token){}
	/**
	 * @param \System\Int32|int $token
	 */
	public function __construct($token){}
}