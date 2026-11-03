# Tavaan Engine — Crypt

> **رمزنگاری** — موتور Crypt در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.crypt` |
| نام | `Crypt` |
| عنوان فارسی | رمزنگاری |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Crypt` |
| نوع | `engine` |
| Facade | `Crypt` (accessor: `encrypter`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Crypt\Contracts\EncrypterInterface`
- `Tavaan\Engine\Crypt\Contracts\HasherInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Crypt\Exceptions\DecryptException`
- `Tavaan\Engine\Crypt\Exceptions\EncryptionException`
- `Tavaan\Engine\Crypt\Exceptions\KeyMissingException`

## Facadeها

- `Tavaan\Engine\Crypt\Facades\Crypt`
- `Tavaan\Engine\Crypt\Facades\Hash`

## کلاس‌های اصلی

- `src/BlindIndex.php`
- `src/Console/KeyGenerateCommand.php`
- `src/Crypt.php`
- `src/CryptServiceProvider.php`
- `src/Encrypter.php`
- `src/KeyRing.php`
- `src/Signer.php`

## Service Providerها

- `Tavaan\Engine\Crypt\CryptServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/crypt.php`
- کلید: `crypt`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Crypt.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Crypt`** (این مخزن) | موتور Crypt |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
