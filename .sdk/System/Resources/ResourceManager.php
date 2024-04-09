<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ResourceManagerOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_2 ($name, $culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetObject_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetObject_2 ($name, $culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Boolean|bool $wrapUnmanagedMemStream
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function GetObject_3 ($name, $culture, $wrapUnmanagedMemStream){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\IO\UnmanagedMemoryStream
	 */
	#[MethodOverride]public function GetStream_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\IO\UnmanagedMemoryStream
	 */
	#[MethodOverride]public function GetStream_2 ($name, $culture){}
	/**
	 * @param \System\String|string $baseName
	 * @param \System\Reflection\Assembly $assembly
	 */
	#[MethodOverride]public function __construct_1 ($baseName, $assembly){}
	/**
	 * @param \System\String|string $baseName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Type $usingResourceSet
	 */
	#[MethodOverride]public function __construct_2 ($baseName, $assembly, $usingResourceSet){}
	/**
	 * @param \System\Type $resourceSource
	 */
	#[MethodOverride]public function __construct_3 ($resourceSource){}
}
class ResourceManager extends \System\Object
{
	use ResourceManagerOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $BaseNameField;
	/**
	 * @field
	 * @var \System\Reflection\Assembly
	 */
	protected $MainAssembly;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $MagicNumber;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $HeaderVersionNumber;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $BaseName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IgnoreCase;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ResourceSetType;
	/**
	 * @property
	 * @var \System\Resources\UltimateResourceFallbackLocation
	 */
	protected $FallbackLocation;
	private function CommonAssemblyInit(){}
	/**
	 * @return \System\Void|void
	 */
	public function ReleaseAllResources(){}
	/**
	 * @param \System\String|string $baseName
	 * @param \System\String|string $resourceDir
	 * @param \System\Type $usingResourceSet
	 * @return \System\Resources\ResourceManager
	 */
	public static function CreateFileBasedResourceManager($baseName, $resourceDir, $usingResourceSet){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\String|string
	 */
	protected function GetResourceFileName($culture){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Resources\ResourceSet
	 */
	protected function GetFirstResourceSet($culture){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Boolean|bool $createIfNotExists
	 * @param \System\Boolean|bool $tryParents
	 * @return \System\Resources\ResourceSet
	 */
	public function GetResourceSet($culture, $createIfNotExists, $tryParents){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Boolean|bool $createIfNotExists
	 * @param \System\Boolean|bool $tryParents
	 * @return \System\Resources\ResourceSet
	 */
	protected function InternalGetResourceSet($culture, $createIfNotExists, $tryParents){}
	private static function AddResourceSet($localResourceSets, $cultureName, $rs){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @return \System\Version
	 */
	protected static function GetSatelliteContractVersion($a){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @return \System\Globalization\CultureInfo
	 */
	protected static function GetNeutralResourcesLanguage($a){}
	/**
	 * @param \System\String|string $asmTypeName
	 * @param \System\String|string $defaultTypeName
	 * @return \System\Boolean|bool
	 */
	protected static function IsDefaultType($asmTypeName, $defaultTypeName){}
	/**
	 * @uses ResourceManagerOverride::GetString_1 <br>public , args: ($name)<br>
	 * @uses ResourceManagerOverride::GetString_2 <br>public , args: ($name, $culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetString (\override ...$args){}
	/**
	 * @uses ResourceManagerOverride::GetObject_1 <br>public , args: ($name)<br>
	 * @uses ResourceManagerOverride::GetObject_2 <br>public , args: ($name, $culture)<br>
	 * @uses ResourceManagerOverride::GetObject_3 <br>private , args: ($name, $culture, $wrapUnmanagedMemStream)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetObject (\override ...$args){}
	/**
	 * @uses ResourceManagerOverride::GetStream_1 <br>public , args: ($name)<br>
	 * @uses ResourceManagerOverride::GetStream_2 <br>public , args: ($name, $culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\UnmanagedMemoryStream|mixed|\override
	 */
	#[MethodOverridePublic]function GetStream (\override ...$args){}
	/**
	 * @uses ResourceManagerOverride::__construct_1 <br>public , args: ($baseName, $assembly)<br>
	 * @uses ResourceManagerOverride::__construct_2 <br>public , args: ($baseName, $assembly, $usingResourceSet)<br>
	 * @uses ResourceManagerOverride::__construct_3 <br>public , args: ($resourceSource)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}