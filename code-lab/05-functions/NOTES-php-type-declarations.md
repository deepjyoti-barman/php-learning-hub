# PHP type declarations: where and how to use them

PHP calls these **type declarations** (often called _type hints_). They did **not** begin in PHP 8: class and interface parameter types existed in PHP 5; PHP 7 added scalar parameter types and return types. PHP 8 added several useful forms, including union types and constructor property promotion. The examples below target PHP 8.0 unless a later version is marked.

## 1. Places you can declare a type

### Function and method parameters

Put the type before the parameter name. This works in ordinary functions, class methods, interface methods, trait methods, and constructors.

```php
<?php
function greet(string $name): string {
    return "Hello, $name";
}

interface Saver {
    public function save(array $data): bool;
}

class MemorySaver implements Saver {
    public function save(array $data): bool {
        return count($data) > 0;
    }
}
```

A parameter can also be optional, variadic, or passed by reference:

```php
<?php
function label(string $text = 'untitled'): string {
    return $text;
}

function total(int ...$numbers): int { // Every supplied number must match int.
    return array_sum($numbers);
}

function addOne(int &$number): void {
    $number++;
}
```

For a by-reference parameter, PHP checks its type on entry; the function can subsequently change the referenced variable's type.

### Return values

Put the type after `):`. This applies to functions and methods, including interface and trait methods.

```php
<?php
function square(int $n): int {
    return $n * $n;
}

class Counter {
    public function next(): int {
        return 1;
    }
}
```

`void` means the function does not return a value. `never` (PHP 8.1+) means it cannot finish normally: it throws or exits.

```php
<?php
function logMessage(string $message): void {
    error_log($message);
}

function fail(string $message): never { // PHP 8.1+
    throw new RuntimeException($message);
}
```

### Anonymous functions and arrow functions

Both can type their parameters and return value.

```php
<?php
$double = function (int $n): int { return $n * 2; };
$triple = fn (int $n): int => $n * 3;
```

### Object and static properties

Typed properties were added in PHP 7.4. An uninitialized typed property must be assigned before it is read. `callable` is **not** allowed as a property type; `Closure` is an option if a closure is what you require.

```php
<?php
class Product {
    public int $id;
    public ?string $description = null;
    public static int $count = 0;
}

$product = new Product();
$product->id = 42;
```

### Promoted constructor properties (PHP 8.0+)

A visibility modifier on a constructor parameter creates and initializes a property. Its type is both the parameter type and the property type.

```php
<?php
class Customer {
    public function __construct(
        public int $id,
        private string $name,
    ) {}
}
```

Promoted properties also cannot use `callable` as their type.

### Class, interface, trait, and enum constants (PHP 8.3+)

```php
<?php
class Limits {
    public const int MAX_ITEMS = 100;
}
```

PHP 8.0–8.2 can declare a constant value, but cannot put a type before its name. Global `const` and `define()` constants do not have this type declaration syntax.

## 2. Type forms you can use

The following forms work in the applicable positions above, subject to the exceptions noted.

| Form               | Small example                                                              | Meaning / version                                                                                              |
| ------------------ | -------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | ---------------------------------------------- | ------------------------------- |
| Scalar             | `function f(int $x, float $y, string $s, bool $ok): void {}`               | Basic value types; scalar declarations arrived in PHP 7.0.                                                     |
| Array              | `function f(array $rows): array { return $rows; }`                         | Any PHP array; does not specify element types.                                                                 |
| Class or interface | `function f(DateTimeInterface $date): DateTimeInterface { return $date; }` | An instance of that class or an implementation of that interface. Enum names can be used similarly (PHP 8.1+). |
| `object`           | `function f(object $value): object { return $value; }`                     | Any object; PHP 7.2+.                                                                                          |
| `callable`         | `function f(callable $callback): void { $callback(); }`                    | A callable parameter or return value; **not** a property type.                                                 |
| `iterable`         | `function f(iterable $items): void { foreach ($items as $item) {} }`       | An array or `Traversable`; PHP 7.1+.                                                                           |
| Nullable           | `function f(?string $name): ?string { return $name; }`                     | `string` or `null`; PHP 7.1+.                                                                                  |
| Union              | `function f(int                                                            | float $n): int                                                                                                 | float { return $n; }`                          | One of several types; PHP 8.0+. |
| Intersection       | `function f(Countable&Iterator $items): void {}`                           | Must satisfy both class/interface types; PHP 8.1+.                                                             |
| DNF combination    | `function f((Countable&Iterator)                                           | array $items): void {}`                                                                                        | An intersection **or** another type; PHP 8.2+. |
| `mixed`            | `function f(mixed $value): mixed { return $value; }`                       | Any value, including `null`; PHP 8.0+.                                                                         |
| `self` / `parent`  | `public function copy(): self { return clone $this; }`                     | Relative class types, inside an appropriate class.                                                             |
| `static` return    | `public function copy(): static { return clone $this; }`                   | The called class, including a subclass; return type only, PHP 8.0+.                                            |
| Literal types      | `function yes(): true { return true; }`                                    | `true` alone and standalone `false`/`null` are PHP 8.2+. `false` was usable in suitable unions in PHP 8.0+.    |
| `void` / `never`   | See the return examples above.                                             | Return types only; `never` is PHP 8.1+.                                                                        |

`?T` is shorthand for `T|null`. For example, `?string` and `string|null` describe the same allowed values. Use `bool` instead of `true|false`. `resource` has no user-defined type declaration, and PHP has no native `array<string>` or other generic array syntax.

## 3. Strict versus coercive scalar checks

Types are checked at runtime. By default, PHP may convert compatible scalar values, such as a numeric string passed to an `int` parameter. Put `declare(strict_types=1);` at the start of a file to reject such conversions in calls made from that file (apart from an `int` accepted for `float`). It also makes scalar return checks strict for functions defined in that file.

```php
<?php
declare(strict_types=1);

function double(int $n): int { return $n * 2; }

double(2);   // OK
// double('2'); // TypeError in this file
```

Strict types do not replace input validation: a value can be the right PHP type but still be invalid for your domain (for example, a negative price). Method declarations must also remain compatible with inherited and interface methods.

## 4. When a type declaration is unnecessary or unavailable

### Local variables

PHP has no native type declaration syntax for ordinary local variables. Their type comes from their value:

```php
<?php
$count = 0;       // int
$count = $count + 1;
// int $count = 0; // Invalid PHP syntax for a local variable.
```

### A small private helper with intentionally flexible input

The declaration can be omitted when accepting any value is useful and the helper is local to the implementation. For shared APIs, explicit types usually make expectations clearer.

```php
<?php
function debugValue($value): void {
    var_dump($value); // Accepts an int, array, object, null, etc.
}
```

### A genuinely varied value

`mixed` explicitly documents that any value is accepted. An untyped parameter has the same lack of type restriction, so choose the form that communicates your intent best.

```php
<?php
function typeName(mixed $value): string {
    return get_debug_type($value);
}

typeName(10);
typeName(['a', 'b']);
```

### Types PHP cannot express natively

PHP can type an array but cannot natively say that every element is an `int`. A docblock can help static analyzers, and a runtime check can enforce it:

```php
<?php
/** @param list<int> $ids */
function sumIds(array $ids): int {
    foreach ($ids as $id) {
        if (!is_int($id)) {
            throw new InvalidArgumentException('Every ID must be an int');
        }
    }
    return array_sum($ids);
}
```

Likewise, PHP cannot declare a resource type or a callable's exact parameter and return signature in native syntax.

### External input that needs validation

`string` says only that a value is a string; it does not guarantee that it is a valid email address. Check the untrusted input, then validate its contents:

```php
<?php
$rawEmail = $_POST['email'] ?? null;
if (!is_string($rawEmail) || filter_var($rawEmail, FILTER_VALIDATE_EMAIL) === false) {
    throw new InvalidArgumentException('Invalid email');
}
$email = $rawEmail; // Now known to be a validated email string.
```

## Sources

- [PHP manual: Type declarations](https://www.php.net/manual/en/language.types.declarations.php)
- [PHP manual: PHP 7.0 new features](https://www.php.net/manual/en/migration70.new-features.php)
- [PHP manual: Function parameters and arguments](https://www.php.net/manual/en/functions.arguments.php)
- [PHP manual: Properties](https://www.php.net/manual/en/language.oop5.properties.php)
- [PHP manual: Constructors and property promotion](https://www.php.net/manual/en/language.oop5.decon.php)
- [PHP manual: Class constants](https://www.php.net/manual/en/language.oop5.constants.php)
