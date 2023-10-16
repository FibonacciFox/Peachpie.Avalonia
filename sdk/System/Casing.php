<?php
namespace System;
/**
 */
enum Casing implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Upper = 0;
	case Lower = 8224;
}
