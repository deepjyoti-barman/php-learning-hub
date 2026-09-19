# PHP Naming Conventions: Modern Best Practices

Use this guide as a sensible default for a new PHP project. Existing projects should preserve their established conventions unless there is a deliberate, coordinated migration.

This guide distinguishes between:

- **Standards:** requirements defined by PHP-FIG specifications such as PSR-1 and PSR-4.
- **Common conventions:** widely used practices that are not required by a PSR.
- **Project choices:** decisions that should be documented and applied consistently.

## Quick Reference

| Element               | Recommended style         | Example                              | Status                    |
| --------------------- | ------------------------- | ------------------------------------ | ------------------------- |
| Variable              | `camelCase`               | `$firstName`                         | Common convention         |
| Property              | `camelCase`               | `$emailAddress`                      | Common convention         |
| Method                | `camelCase`               | `calculateTotal()`                   | PSR-1                     |
| Function              | `camelCase`               | `formatCurrency()`                   | Common convention         |
| Class                 | `PascalCase`              | `UserService`                        | PSR-1                     |
| Interface             | `PascalCase`              | `PaymentGateway`                     | PSR-1; suffix is optional |
| Trait                 | `PascalCase`              | `HasTimestamps`                      | Common convention         |
| Enum                  | `PascalCase`              | `PaymentStatus`                      | Common convention         |
| Enum case             | `PascalCase`              | `Pending`                            | Common convention         |
| Class constant        | `UPPER_SNAKE_CASE`        | `MAX_RETRY_COUNT`                    | PSR-1                     |
| Namespace segment     | `PascalCase`              | `App\Services\Payment`               | Common convention         |
| PSR-4 class file      | Exact type name + `.php`  | `UserService.php`                    | PSR-4                     |
| Database table/column | `snake_case`              | `payment_transactions`, `created_at` | Project/framework choice  |
| JSON/API field        | One documented convention | `createdAt` or `created_at`          | API contract choice       |

## PHP Identifiers

### Variables and Properties

Use descriptive `camelCase` names by default:

```php
$firstName = 'John';
$lastLoginAt = new DateTimeImmutable();
$totalAmount = 1_500;

final class User
{
    public function __construct(
        private string $firstName,
        private string $emailAddress,
        private ?DateTimeImmutable $createdAt = null,
    ) {}
}
```

PSR-1 intentionally does not prescribe `camelCase` or `snake_case` for properties. `camelCase` is the prevailing modern convention, but consistency within the project is the actual requirement.

Do not prefix private or protected members with `_`. Visibility modifiers already communicate access:

```php
private string $userName;
protected string $accountStatus;
```

### Methods and Functions

PSR-1 requires `camelCase` method names. Use the same style for standalone functions unless the project follows another established convention:

```php
public function calculateTotalAmount(): int
{
    return 1_500;
}

function formatCurrency(int $amount): string
{
    return number_format($amount, 2);
}
```

Name boolean-returning methods as questions when practical:

```php
interface Authorizable
{
    public function isActive(): bool;
    public function hasPermission(string $permission): bool;
    public function canDelete(User $actor): bool;
}
```

Prefer names that express intent. Avoid vague verbs such as `handle()`, `process()`, or `manage()` unless the surrounding type makes the action unambiguous.

### Classes

PSR-1 requires class names to use `PascalCase` (called `StudlyCaps` in PSR-1):

```php
final class UserService
{
}

final class PaymentProcessor
{
}
```

Class names should normally be nouns or noun phrases. Avoid meaningless suffixes such as `Manager`, `Helper`, or `Util` when a more precise role is available.

### Interfaces

Use `PascalCase`. An `Interface` suffix is a project choice, not a PSR requirement:

```php
interface PaymentGateway
{
}

// Also valid when this is the project's established convention.
interface PaymentGatewayInterface
{
}
```

Choose one approach and apply it consistently. A role-based name such as `Logger`, `Cache`, or `PaymentGateway` often reads naturally at the point of use.

### Traits

Use `PascalCase` and name traits after the capability or behavior they provide:

```php
trait HasTimestamps
{
}

trait LogsActivity
{
}
```

### Enums and Enum Cases

Use `PascalCase` for enum names. `PascalCase` cases are a clear modern default:

```php
enum PaymentStatus: string
{
    case Pending = 'pending';
    case Completed = 'completed';
    case Failed = 'failed';
}
```

Keep the PHP case name separate from its serialized value. Changing a backed value can break stored data or API contracts even when renaming a case is otherwise safe.

### Constants

PSR-1 requires class constants to use `UPPER_SNAKE_CASE`:

```php
final class RetryPolicy
{
    public const MAX_RETRY_COUNT = 3;
    public const DEFAULT_TIMEOUT_SECONDS = 30;
}
```

Use the same style for global constants when they are necessary:

```php
const API_VERSION = 'v1';
```

Prefer class or enum constants over unrelated global constants because they provide useful scope.

### Acronyms and Initialisms

Treat acronyms like ordinary words. This keeps names readable and avoids inconsistent casing:

```php
$userId;
$httpClient;
$apiResponse;
$url;

final class HttpClient {}
final class ApiResponse {}
final class JsonParser {}
```

Avoid mixed styles such as `$userID`, `$HTTPClient`, and `JSONParser`. Widely recognized abbreviations are fine; casing them as ordinary words is the important part.

## Namespaces and Files

Use `PascalCase` namespace segments as a conventional default:

```php
namespace Acme\Billing\Payment;
```

With PSR-4 autoloading, namespace segments map to directories and the terminal type name maps to the filename. Case must match exactly:

```text
Acme\Billing\Payment\PaymentProcessor
src/Billing/Payment/PaymentProcessor.php
```

Each autoloadable class, interface, trait, or enum should normally live in its own file:

```text
User.php
PaymentGateway.php
HasTimestamps.php
PaymentStatus.php
```

This exact casing matters on case-sensitive filesystems, even when mismatches appear to work on a local machine.

## Data Boundaries

PHP naming and external data naming do not need to be identical. Translate deliberately at boundaries instead of leaking storage or transport conventions throughout the domain model.

### Database Names

`snake_case` is a common database convention:

```text
users
payment_transactions
order_items

first_name
created_at
payment_status
```

Plural versus singular table names is a framework or project decision. Follow the ORM and schema convention already in use.

Map database fields to normal PHP properties rather than exposing raw column names everywhere:

```php
final class User
{
    public function __construct(
        public readonly DateTimeImmutable $createdAt,
    ) {}
}
```

### JSON and API Fields

Both `camelCase` and `snake_case` are reasonable. The API contract and backward compatibility matter more than the choice:

```json
{
  "firstName": "John",
  "emailAddress": "john@example.com",
  "createdAt": "2026-09-20T10:30:00+05:30"
}
```

Do not change public field names merely to match internal PHP naming. Use serializers, DTOs, or explicit mapping at the boundary.

## Recommended Baseline

For a new project:

```text
PHP code
  Variables and properties  -> camelCase
  Methods and functions     -> camelCase
  Types and namespaces      -> PascalCase
  Enum cases                -> PascalCase
  Constants                 -> UPPER_SNAKE_CASE
  PSR-4 files               -> exact type name + .php

External data
  Database names            -> snake_case, unless the framework says otherwise
  JSON/API fields           -> documented contract convention
```

Record project-specific choices in the repository's contributor guide, especially interface suffixes, database singular/plural naming, and API field casing.

## Automated Enforcement

Do not rely on code review alone. Configure a formatter or linter in CI:

- **PHP_CodeSniffer:** use a PSR-12-compatible ruleset and add project-specific naming rules where needed.
- **PHP-CS-Fixer:** automate formatting and selected naming-related transformations.
- **PHPStan or Psalm:** catch type and design issues that naming rules cannot detect.

Formatters cannot judge whether a name communicates the right intent, so human review still matters.

## Final Rule

Use the convention appropriate to each layer, preserve public contracts, and stay consistent within a reasonable scope. For shared PHP code, start with PSR-1, PSR-4, and the current PHP-FIG coding-style recommendation, then document the choices those standards intentionally leave open.

## References

- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)
- [PSR-4: Autoloader](https://www.php-fig.org/psr/psr-4/)
- [PSR-12: Extended Coding Style](https://www.php-fig.org/psr/psr-12/)
- [PHP-FIG Coding Style PER](https://www.php-fig.org/per/coding-style/)
