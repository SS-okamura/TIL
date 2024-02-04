## SWR とは

- クライアント JavaScript からのデータ取得とそれに関連する操作を提供する React Hooks 群

## SWR の引数

key: リクエストするユニークな文字列（通常 URL を指定する）
fetcher: （任意）第一引数に渡した URL を引数に取る fetch 関数
options: （任意）SWR のオプション

## SWR の戻り値

data: fetcher によって取得したデータ
error: fetcher によって throw されたエラー
isValidating: リクエストまたは再検証の読み込みがあるか否かの Bool 値
mutate: キャッシュされたデータを更新する関数
