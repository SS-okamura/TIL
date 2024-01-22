# Next について

- Next ではサーバーサイドのレンダリングも可能
- SSR を実現できる
- SPA にすることも可能
- React よりは大規模のアプリに向いている
- Next.js では JS の実行をサーバサイドで行っている
  - Next ではサーバサイドが用意されている

# 外部データの取得に関して

- 基本的にサーバサイドで取得をする
- クライアントサイドでやる場合は、SWR の使用が推奨されている
- SSR 中に認証を挟みたい場合
  - getServerSideProps 関数で以下のようなオブジェクトを返せば自動でリダイレクトされる

```
export const pageRedirectProps = (path: string): TNextRedirectProps => {
  return {
    redirect: {
      destination: path,
      permanent: false,
    },
  };
};
```

## use server use client に関して

- use server

  - サーバーでのみ動作する処理を書く
  - 取得したデータを埋め込んだ HTML を作成して返す

- use client

  - クライアントサイドで動作するコンポーネント
  - 状態管理ができる

- 目的、使用理由
  - レンダリングを効果的に制御する(SSR)
  - パフォーマンスの向上
  - コードの整理

# 参考サイト

- Next 入門
  - https://mukku.life/next-js-tutorial-4934.html
