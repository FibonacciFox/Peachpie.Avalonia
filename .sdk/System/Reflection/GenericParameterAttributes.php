<?php
namespace System\Reflection;
enum GenericParameterAttributes
{
	
	case None = '0';
	case VarianceMask = '3';
	case Covariant = '1';
	case Contravariant = '2';
	case SpecialConstraintMask = '28';
	case ReferenceTypeConstraint = '4';
	case NotNullableValueTypeConstraint = '8';
	case DefaultConstructorConstraint = '16';

}