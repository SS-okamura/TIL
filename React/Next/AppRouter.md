# App Router

- Page Router から変わって導入された
- app 直下の page.tsx がルーティング対象
- layout.tsx は page.tsx を自動でラップできる
- 特殊なディレクトリ
  1. 論理グループ
  - ディレクトリ名を()で囲うと、ルーティングパスに影響されなくなる機能
    ![](画像/20240122172655.png)

### 特殊なページ

- layout

  - 複数のページに渡って共有される UI
  - 特徴としては画面遷移が行われた際に、その状態を保持し、再レンダリングは行われません
  - Layout はネスト（入れ子）にして使用することも可能

- template

  - 子レイアウトやページをラップ
  - Template は各ページ遷移ごとに新しいステートを生成
  - Template を適用した複数のページ間を移動する際に、新しい DOM 要素が生成され、ステートやエフェクトは再同期

- loading

  - 読み込み中の UI を作成
  - 作成したセグメントの中のコンポーネントを Suspence で囲う

- error
  - エラーが発生した際の UI
  - セグメントを Error Boundary で囲う

### layout と template

- Layout と Template の共存

  - Layout と Template は共存すること可能
  - 同じ階層に layout.tsx と template.tsx が存在する場合、Template は Layout の子要素として適用

- Layout と Template の使い分け方

  - ページの再レンダリングが不要な場合は Layout
  - ページの再レンダリングが必要な場合は Template
  - Template を使用する例
    - 各ページで独立したロギングを行う
    - ページ遷移時にアニメーションを行う
    - ページごとにフィードバックフォームを表示する

  ### ルーティング

  - 下記の３つの手段
    - <Link> コンポーネント
    - useRouter
    - History API

  ### 知らないこと

  - セグメント
  - スロット

  ### URL の情報を取得

  - useSearchParams
    - ページにアクセスするときに付与したクエリパラメータが取得
  - usePathname
    - アクセスしたときのパスが取得
  - useParams
    - dynamic params を取得
