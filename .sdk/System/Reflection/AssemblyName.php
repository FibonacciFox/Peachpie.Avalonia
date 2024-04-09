<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AssemblyOverride {
	/**
	 * @param \System\String|string $assemblyName
	 */
	#[MethodOverride]public function __construct_1 ($assemblyName){}
	/**
	 */
	#[MethodOverride]public function __construct_2 (){}
}
final class AssemblyName extends \System\Object implements
	\System\ICloneable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Runtime\Serialization\ISerializable
{
	use AssemblyOverride;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Version
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 */
	public $CultureInfo;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CultureName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CodeBase;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EscapedCodeBase;
	/**
	 * @property
	 * @var \System\Reflection\ProcessorArchitecture
	 */
	public $ProcessorArchitecture;
	/**
	 * @property
	 * @var \System\Reflection\AssemblyContentType
	 */
	public $ContentType;
	/**
	 * @property
	 * @var \System\Reflection\AssemblyNameFlags
	 */
	public $Flags;
	/**
	 * @property
	 * @var \System\Configuration\Assemblies\AssemblyHashAlgorithm
	 */
	public $HashAlgorithm;
	/**
	 * @property
	 * @var \System\Configuration\Assemblies\AssemblyVersionCompatibility
	 */
	public $VersionCompatibility;
	/**
	 * @property
	 * @var \System\Reflection\StrongNameKeyPair
	 */
	public $KeyPair;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
	/**
	 * @param \System\Reflection\PortableExecutableKinds $pek
	 * @param \System\Reflection\ImageFileMachine $ifm
	 * @return \System\Void|void
	 */
	protected function SetProcArchIndex($pek, $ifm){}
	private static function CalculateProcArchIndex($pek, $ifm, $flags){}
	private static function ParseAsAssemblySpec($pAssemblyName, $pAssemblySpec){}
	private static function InitializeAssemblySpec($pAssemblyNameParts, $pAssemblySpec){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	private static function InitGetAssemblyName(){}
	/**
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\AssemblyName
	 */
	public static function GetAssemblyName($assemblyFile){}
	/**
	 * @return \System\Byte[]
	 */
	public function GetPublicKey(){}
	/**
	 * @param \System\Byte $publicKey
	 * @return \System\Void|void
	 */
	public function SetPublicKey($publicKey){}
	/**
	 * @return \System\Byte[]
	 */
	public function GetPublicKeyToken(){}
	/**
	 * @param \System\Byte $publicKeyToken
	 * @return \System\Void|void
	 */
	public function SetPublicKeyToken($publicKeyToken){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public function OnDeserialization($sender){}
	/**
	 * @param \System\Reflection\AssemblyName $reference
	 * @param \System\Reflection\AssemblyName $definition
	 * @return \System\Boolean|bool
	 */
	public static function ReferenceMatchesDefinition($reference, $definition){}
	/**
	 * @param \System\String|string $codebase
	 * @return \System\String|string
	 */
	protected static function EscapeCodeBase($codebase){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Char $dest
	 * @param \System\Int32& $destPos
	 * @param \System\Boolean|bool $isUriString
	 * @param \System\Char $force1
	 * @param \System\Char $force2
	 * @param \System\Char $rsvd
	 * @return \System\Char[]
	 */
	protected static function EscapeString($input, $start, $end, $dest, $destPos, $isUriString, $force1, $force2, $rsvd){}
	private static function EnsureDestinationSize($pStr, $dest, $currentInputPos, $charsToAdd, $minReallocateChars, $destPos, $prevInputPos){}
	/**
	 * @param \System\Char $ch
	 * @param \System\Char $to
	 * @param \System\Int32& $pos
	 * @return \System\Void|void
	 */
	protected static function EscapeAsciiChar($ch, $to, $pos){}
	private static function IsReservedUnreservedOrHash($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	protected static function IsUnreserved($c){}
	/**
	 * @uses AssemblyNameOverride::__construct_1 <br>public , args: ($assemblyName)<br>
	 * @uses AssemblyNameOverride::__construct_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}