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
