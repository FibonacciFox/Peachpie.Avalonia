<?php
namespace System\Reflection;
class SignatureType extends \System\Type implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSignatureType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTypeDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSZArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsVariableBoundArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsByRefLike;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericTypeDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsConstructedGenericType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericTypeParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericMethodParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ContainsGenericParameters;
	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\Type[]
	 * @since readonly
	 */
	public $GenericTypeArguments;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $GenericParameterPosition;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $UnderlyingSystemType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Namespace;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AssemblyQualifiedName;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $Module;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $BaseType;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $DeclaringType;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $DeclaringMethod;
	/**
	 * @property
	 * @var \System\Reflection\GenericParameterAttributes
	 * @since readonly
	 */
	public $GenericParameterAttributes;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $GUID;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEnum;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecuritySafeCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityTransparent;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSerializable;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @since readonly
	 */
	public $StructLayoutAttribute;
	/**
	 * @property
	 * @var \System\RuntimeTypeHandle
	 * @since readonly
	 */
	public $TypeHandle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInterface;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNested;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsByRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPointer;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasElementType;
	/**
	 * @property
	 * @var \System\Reflection\TypeAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAbstract;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsImport;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSealed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSpecialName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedAssembly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamANDAssem;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamily;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamORAssem;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedPrivate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNotPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAutoLayout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsExplicitLayout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLayoutSequential;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAnsiClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAutoClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUnicodeClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCOMObject;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsContextful;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMarshalByRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPrimitive;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueType;
	/**
	 * @property
	 * @var \System\Reflection\ConstructorInfo
	 * @since readonly
	 */
	public $TypeInitializer;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsVisible;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;

}