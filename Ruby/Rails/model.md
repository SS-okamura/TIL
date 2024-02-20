## O/R マッパー

- デフォルトで active Recode

## Active Recode

- DB のテーブル一つを一つのモデルクラスとして表現
- インスタンスは違憲のレコードを表すオブジェクト
- 予約列
  - id
  - created_at
  - updated_at

## DB

### 設定ファイル

- database.yml
- 環境ごとに設定が可能

### 追加/削除

```
> rails db:create RAILS_ENV=環境名
> rails db:create all
> rails db:drop RAILS_ENV=環境名
> rails db:drop all
```

### データベースクライアントの起動

```
> rails db -e 環境名
```

### モデルの作成

```
> rails g model name filed:type ...
```
