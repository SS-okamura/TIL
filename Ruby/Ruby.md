# 特徴

- スクリプト言語
- 速度は低速
- 記述量は少ない
- オブジェクト指向
- テキスト処理に優れている

# フレームワーク

- Ruby on Rails
- Sinatra
- cuba micro framework
- HANAMI

# バージョン管理

## rbenv

### rbenv とは

- ディレクトリ（プロジェクト）ごとに Ruby の version を切り分けるためのツール

### コマンド

```
rbenv install x.y.z
```

- 自分の PC 環境に ruby をインストールする

```
rbenv global x.y.z
```

- 自分の PC 全体でデフォルトとなる ruby のバージョン設定

```
rbenv local x.y.z
```

- ruby プロジェクトのルートで実行すると、そのディレクトリ配下でのみ適用される ruby バージョンが設定可能。実行すると、実行ディレクトリ配下に.ruby-version が作成される。

```
rbenv install -l
```

- インストールできるバージョン確認

# gem

## gem とは

- 2 つの意味がある
  1. 1 つ目は Ruby のパッケージ（ライブラリともいいます）としての gem
  - パッケージとは、プログラムの部品で便利な機能をひとまとめにしたもの
  2. 各 gem（パッケージ）を管理するシステムである RubyGems を指して gem と呼ぶパターン
  - パッケージ管理システムは gem パッケージのインストールやアンインストールなどの操作
  - 最近では RubyGems を使って gem を管理する機会は少なく、「bundler」というパッケージ管理ツールを使うことが多い

# bundler

## bundler とは

- bundler とは gem を管理するためのツール
- bundler 自体も gem の一種
- 複数の gem の依存関係を保ちながら gem の管理
- 依存関係にある gem を一括インストール

# Rake

## Rake とは

- Rake とは ruby で書いたビルドツール
- make でいう Makefile の代わりに、Rakefile というファイルを作成して実行
- Rakefile は Ruby の DSL で書くことができるので ruby さえわかれば記述が可能
- コマンドから実行できるファイルのこと

## 用語

- task : Rake ファイルの基本単位
- ファイルタスク : ファイル生成に特化したタスク
- アクション : task のブロック内の実行されるコードのこと
- invoke : タスクを実行する。実行されたことのあるアクションは実行しない。依存しているタスクも呼び出だす
- execute : タスクを実行する。常にアクションを実行する。依存関係にあるタスクは実行しない

https://qiita.com/magaya0403/items/398cd4b3d4946ec8ce39
