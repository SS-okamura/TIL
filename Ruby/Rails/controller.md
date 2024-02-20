### controller の作成

```
rails g controller name aname opts
```

- name : コントローラー名
- anmae : アクション名(複数指定可能)
- opts : 動作オプション
  - -e : テンプレートエンジンの指定(デフォルト erb)
  - f : ファイルが存在する場合、上書き

### アクションメソッドの記述

```
def action
...
end
```

- action : action 名
- リクエストに対しての処理を定義
- コントローラクラスには必ず一つはアクションが必要

### コントローラ/アクション名を取得

```
# コントローラー名
controller_name
# コントローラーのパス
controller_path
# アクション名
action_name
```

### ポストデータ/クエリ情報/ルートパラメータの取得

```
params[key]
```

- key : パラメータ名

### テンプレートファイルの呼び出し

- デフォルトでコントローラー名/アクション名を元に対象のテンプレートを決める
- 上記以外のテンプレートを使用したい場合

```
render path
```

- path : テンプレートファイル名
  - アクション名のみ異なる : action: アクション名
  - コントローラが異なる : template : コントロラー名/アクション名
  - app 外のファイル: file : パス

### 文字を出力

```
render plain: str
```

- str: 出力する文字

### インラインテンプレート

```
render inline: template
```

- template: テンプレート文字
- 指定の文字列を ERB テンプレートに変換

### JSON 形式のレスポンスの作成

```
render json:jsonvar
```

- jsonver: モデル, 文字列

### リダイレクト

```
redirect_to url
```

```
# 同じコントローラのアクション
redirect_to action: アクション名

# 別コントローラの別アクション
redirect_to controller: controller名 action: action名

# 一つ前のページ
redirect_back
```

### 指定されたファイル指定されたファイル

```
send_file path
```

### キャッシュの設定

```
expires sec(キャッシュの有効期限秒数)
expires now(キャッシュクリア)
```

### クッキーを取得/設定

```
# 設定
cookies[name] = opts

# 取得
cookies[name]

# 削除
cookies.delete(name)
```

- name: クッキー名
- opts: 情報
  - :value: 値
  - :expires: 有効期限

### セッション

```
# セッション設定
session[name] = value

# セッション取得
session[name]

# セッションの破棄
session[name] = nil

# 全て破棄
reset_session
```

### flash

```
flash[key] = value

# 現在のアクションでのみ有効
flash.now[name] = value

# フラッシュを次のリクエストに持ち越し
flash.keep(key)

# フラッシュ破棄
flash.discard(key)
```

## フィルタ

- アクションの前後で付随的な処理を実行する仕組み
- 共通処理(アクセス制限等)を一元管理

```
# beforeフィルタ
before_action method, opts

# after_actionフィルタ
after_action method, opts
```

- method: フィルタで実行する関数
- opts

  - only: 指定されたアクションのみ
  - except: 指定されたアクションを除いて

- around_action フィルタ

```
around_action method, opts
```

- アクションの前後で実行

```
around_action :log_test, only: :test

def test

end

private

def log_test
  logger.debug
  # 本来のアクションを呼び出すタイミングでyieldを記述
  yield
  logger.debug
end
```

- フィルタ function
  - フィルタを下記のように簡易実装できます
  ```
  xxxx_action only: :test do |c|
    statements
  end
  ```
  - c: コントローラークラス
  - xxxx: (before, after, around)
  - statements: フィルタ本体

### フィルタオブジェクト(複数のコントローラーでフイルタを共通化)

```
before(controller)
after(controller)
around(controller)
```

### 親コントローラーから継承したフィルタの除外

- 親コントローラーで定義したフィルタはデフォルトでそのまま子コントローラに適用される
- 親のフィルタを使わない場合は下記の実装

```
# 特定のアクションのみで or 特定のアクション以外での場合に:only/:exceptをつける
skip_before_action method :only/:except
skip_after_action method :only/:except
skip_around_action method :only/:except
```

## 認証

### 基本認証(authenticate_or_request_with_http_basic)

```
authenticate_or_request_with_http_basic(realm) do |name, password|
  login_procedure
end
```

- realm: レルム名(レルム: 同一の認証情報やセキュリティ設定などが適用される範囲)
- name: ユーザ名
- password: パスワード
- login_procedure: ログイン処理
- 戻り値: boolean
- 厳密な認証には向かない(イントラネット環境ではアリかも)

### ダイジェスト認証(authenticate_or_request_with_http_digest)

```
authenticate_or_request_with_http_digest(realm) do |name|
  login_procedure
end
```

- realm: レルム名(レルム: 同一の認証情報やセキュリティ設定などが適用される範囲)
- name: ユーザ名
- login_procedure: ログイン処理
- 戻り値: boolean
- ユーザー名とパスワードをハッシュ化して扱う
