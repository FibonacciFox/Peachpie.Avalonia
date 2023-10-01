<?php
namespace Avalonia\Collections\Pooled;
/**
 */
enum ExceptionArgument implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case obj = 0;
	case dictionary = 1;
	case array = 2;
	case info = 3;
	case key = 4;
	case text = 5;
	case values = 6;
	case value = 7;
	case startIndex = 8;
	case task = 9;
	case ch = 10;
	case s = 11;
	case input = 12;
	case list = 13;
	case index = 14;
	case capacity = 15;
	case collection = 16;
	case item = 17;
	case converter = 18;
	case match = 19;
	case count = 20;
	case action = 21;
	case comparison = 22;
	case exceptions = 23;
	case exception = 24;
	case enumerable = 25;
	case start = 26;
	case format = 27;
	case culture = 28;
	case comparer = 29;
	case comparable = 30;
	case source = 31;
	case state = 32;
	case length = 33;
	case comparisonType = 34;
	case manager = 35;
	case sourceBytesToCopy = 36;
	case callBack = 37;
	case creationOptions = 38;
	case function = 39;
	case delay = 40;
	case millisecondsDelay = 41;
	case millisecondsTimeout = 42;
	case timeout = 43;
	case type = 44;
	case sourceIndex = 45;
	case sourceArray = 46;
	case destinationIndex = 47;
	case destinationArray = 48;
	case other = 49;
	case newSize = 50;
	case lowerBounds = 51;
	case lengths = 52;
	case len = 53;
	case keys = 54;
	case indices = 55;
	case endIndex = 56;
	case elementType = 57;
	case arrayIndex = 58;
}
