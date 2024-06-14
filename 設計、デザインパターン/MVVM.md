# MVVM とは

- 表示・操作の機能(ユーザーインターフェース)
  が存在するソフトウェアの構造を階層的に整理したモデル
- 全体を Model,View, ViewModel に分割
  - Model: 扱うデータ
  - Views: 視覚要素
  - View Models: Model が持っている情報を View に表示する値に変更する

## メリット

- View と Model の依存性を完全に分離
- 単体テストができる
- View と ViewModel をバインディングするため、コード量が減る
- View と ViewModel の関係は 1:1

## デメリット

- 簡単な UI を作るときに設計するのが難しい
- データバインディングが必要
- 複雑であればあるほど、Controller と同様に ViewModel が複雑化する
