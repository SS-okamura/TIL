# SSR とは

- Server Side Rendering の略
- ページ遷移のたびサーバーに HTTP リクエストが走り、サーバー側で API と連携され生成された HTML をブラウザに返すアーキテクチャ
- サーバー側で HTML を生成して返す

![](画像/20240121164122.png)

# メリット

- 初回のレンダリング速度の改善
- SEO に対応

# デメリット

- HTML 生成が CPU インテンシブタスクになる
- CPU の負荷が高まるとサーバ処理できない

# MPA との違い

- 一度目はサーバーサイドそれ以外は JavaScript のフレームワークがブラウザ内で行う

# 参考サイト

- https://qiita.com/manabito76/items/fe91eefe11a74dcf5126
- https://www.publickey1.jp/blog/17/server_side_renderingserver_side_rendering_ng-japan_2017.html
