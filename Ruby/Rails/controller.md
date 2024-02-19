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
