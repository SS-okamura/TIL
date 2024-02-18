## Ruby on Rails とは

- 言語: Ruby
- Web アプリケーションフレームワーク
- 現在は Rails7 がリリースされている
- MVC パターンを採用
  - 保守性が高い
  - プログラマとデザイナが同時着手できる
  - 機能単位のテストが可能
- フルスタックのフレームワーク
  - アプリケーション開発に必要なものが全て入っている
- モジュール思考が強化されている
  - 必要にあったコンポーネントへの差し替えが簡単
- Rails のライブラリ
  - Action Pack
    - Action Controller
    - Action View
    - Action Dispatch
  - Active Model
  - Active Recode
    など

## Rails の基本思想

- DRY(Don't Repeat Yourself) = 同じ記述を繰り返さない
  - 同じ記述をすることを嫌う
  - データベースにテーブルを作成するだけでアプリケーションがそのテーブルを認識するからわざわざテーブルスキーマ情報の記述をしない
- CoC(Convention over Configuration) = 設定よりも規約
  - Convention = 名前決めの原則
  - 例
    - actives テーブルを操作するクラス名は Active クラス
- 基本的に Laravel と同じ考え

## フォルダ構成

https://qiita.com/Yaruki00/items/03eb2b6dd96dc44f18b6
