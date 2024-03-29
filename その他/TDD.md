## テスト駆動開発

1. 目標を考える
2. その目標を示すテストを書く
3. そのテストを実行して失敗させる(Red)
4. 目的のコードを書く
   - 仮実装
   - テストのテストをする
5. 2 で書いたテストを成功させる(Green)
6. テストが通るままでリファ l 歌リングを行う
7. 1 ~ 6 を繰り返す

- サイクル red => green => リファクタリング
- やることを箇条書き
- 全ての項目を倒すのではなく、テストがやりやすいものから倒す
- 実装する前にテストを書く(テストファースト)
- リファクタリング = テストの成功を変えずに修正
  - リファクタリングの終わりは時間で決める
  - 重複の除去

## 目的

- 動作する綺麗なコード

### 目的に向かう方法

- 動作する綺麗なコード
  - 動作するコード
  - 綺麗なコード

## テスト設計書の TODO リストの作り方

- テスト容易性が高いものを探す
- 重要度の高いものを探す
- 課題を分解する
- 表現を合わせる
  - 違いがわかりやすいように

## テスト容易性が高い

- 観測が容易である
- 制御が簡単
- 対象が小さい
- 入出力から遠い

## テストコードの書き方

- 日本語で書くことを推奨
- これが設計書になるため
- 構造
  - 準備
  - 実行
  - 検証
  - 上記を逆から書く(ゴールから書くことが大事)
- 手が止まったら TODO を見直す
- 明確なゴールを出す
- 動作するドキュメント
- アンチコード
  - アサーションルーレット
- 一つのテストに一つアサーション　ワンアーションテスト
- テストに依存関係を持たせない
- 前準備メソッドを用意する
- テスト仕様書のツリー構造を再現してテスト仕様書をコードに落とし込む
- 三角測量は後で消す

## 設計

- 作る前に使う(使う側からオブジェクト名、ファンクション名を考える)
  - 使いやすさを重視するため

## リファクタリング

- プロダクトコードから修正
- テストコードの修正は慎重にする

## TDD のスキル

- 問題を小さく分割する
- 歩幅を調整する
  - テスト => 仮実装 => 三角測量 => 実装
  - テスト => 仮実装 => 実装
  - テスト => 明白な実装
- 受け入れテストなど外のテストから進めて中のテストをする
- テストの構造化とリファクタリング
