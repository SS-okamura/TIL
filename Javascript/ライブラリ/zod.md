## zod とは

- Zod は TypeScript ファーストのスキーマ宣言・検証ライブラリ
- Zod では、バリデータを一度宣言すれば、Zod が自動的に静的な TypeScript の型を推論

## インストール

```
npm install zod       # npm
yarn add zod          # yarn
bun add zod           # bun
pnpm add zod          # pnpm
```

### 使い方

- parse()
  - 検証を行う
  - 引数の値がそのスキーマの設定に合っているのか判定

```
import { z } from 'zod'

// 文字列のスキーマの作成
const stringScheme = z.string()

stringScheme.parse("hoge")
// => "hoge"
stringScheme.parse(12)
// => throws ZodError
```

- safeParse()
  - 検証に失敗した際に zod エラーをスローしない

```
import { z } from 'zod'

const stringScheme = z.string()

stringScheme.safeParse(12);
// => { success: false; error: ZodError }

stringSchema.safeParse("hoge");
// => { success: true; data: 'hoge' }
```

- object()
  - オブジェクトのスキーマを作成できる

```
import { z } from 'zod'

const userSchema = z.object({
  name: z.string(),
  age: z.number(),
  tel: z.string(),
})

userSchema.parse({ name: 'hoge', age: 66, tel: 'xxx-xxxx-xxxx' })
```

- infer<>
  - z.infer<typeof Schema>を使用して、任意のスキーマから TypeScript 型を抽出

```
const userSchema  = z.object({
  name: z.string(),
  age: z.number(),
  tel: z.string(),
})

type user = z.infer<typeof userSchema>
// type user = {
//   name: string;
//   age: number;
//   tel: string;
// }
```

- optional()、.nullable()、.nullish()
  - オプショナルな値のスキーマを作成

```
const optionalString = z.string().optional()
// string | undefined

const nullableString = z.string().nullable()
// string | null

const nullishString = z.string().nullish()
// string | null | undefined
```
