# Fuse.js について

- 軽量で高速な JavaScript ライブラリであり、クライアントサイドでのあいまい検索（ファジー検索）を実現
- Json データを対象に検索が可能

# 使い方

1. インスタンスかする
2. インスタンス化の際の引数
3. 検索対象のデータ
4. 検索時の詳細設定

   - 例(key ーを指定する)

   ```
   new Fuse(searchTargetList, {
      key: ["title", "content"],
   })
   ```

# 参考サイト

- https://dev-harry-next.com/frontend/nextjs-fusejs-search
